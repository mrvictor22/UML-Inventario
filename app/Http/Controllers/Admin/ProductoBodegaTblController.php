<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductoBodegaTbl\BulkDestroyProductoBodegaTbl;
use App\Http\Requests\Admin\ProductoBodegaTbl\DestroyProductoBodegaTbl;
use App\Http\Requests\Admin\ProductoBodegaTbl\IndexProductoBodegaTbl;
use App\Http\Requests\Admin\ProductoBodegaTbl\StoreProductoBodegaTbl;
use App\Http\Requests\Admin\ProductoBodegaTbl\UpdateProductoBodegaTbl;
use App\Models\ProductoBodegaTbl;
use App\Models\ProductoTbl;
use App\Models\BodegaTbl;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductoBodegaTblController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexProductoBodegaTbl $request
     * @return array|Factory|View
     */
    public function index(IndexProductoBodegaTbl $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(ProductoBodegaTbl::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'producto_id', 'bodega_id', 'ubicacion_codigo', 'cantidad'],

            // set columns to searchIn
            ['id', 'producto_tbl.nombre', 'ubicacion_codigo', 'nota'],

            function ($query) use ($request){
                // Aqui accedes a la relacion usando el nombre de la funcion que agregaste en el modelo
                $query->with(['productos']);

                // $query->join('bodega_tbl', 'bodega_tbl.id', '=', 'producto_bodega_tbl.bodega_id');

     
                $query->join('producto_tbl', 'producto_tbl.id', '=', 'producto_bodega_tbl.producto_id');

                if($request->has('producto_tbl')){
                    $query->whereIn('producto_id', $request->get('producto_tbl'));
                }
                
            }
            // function ($query) use ($request){
            //     $query->with(['productos']);

            //     $query->join('producto_tbl', 'producto_tbl.id', '=', 'producto_bodega_tbl.producto_id');
            // }
        );

        

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }
        
        
        return view('admin.producto-bodega-tbl.index', ['data' => $data, 'producto_tbl' => ProductoTbl::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.producto-bodega-tbl.create');

        return view('admin.producto-bodega-tbl.create', ['bodega_tbl' => BodegaTbl::all(),'producto_tbl' => ProductoTbl::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductoBodegaTbl $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreProductoBodegaTbl $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        // $sanitized['bodega_id'] = $request->getBodegaTblId();
        $sanitized['producto_id'] = $request->getProductoTblId();
        info($sanitized['producto_id']);
        info($request);
        // Store the ProductoBodegaTbl
        $productoBodegaTbl = ProductoBodegaTbl::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/producto-bodega-tbls'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/producto-bodega-tbls');
    }

    /**
     * Display the specified resource.
     *
     * @param ProductoBodegaTbl $productoBodegaTbl
     * @throws AuthorizationException
     * @return void
     */
    public function show(ProductoBodegaTbl $productoBodegaTbl)
    {
        $this->authorize('admin.producto-bodega-tbl.show', $productoBodegaTbl);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductoBodegaTbl $productoBodegaTbl
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(ProductoBodegaTbl $productoBodegaTbl)
    {
        $this->authorize('admin.producto-bodega-tbl.edit', $productoBodegaTbl);

        $productoBodegaTbl->load('productos');
        $productoBodegaTbl->load('bodega');

        return view('admin.producto-bodega-tbl.edit', [
            'productoBodegaTbl' => $productoBodegaTbl, 'bodega_tbl' => BodegaTbl::all(),'producto_tbl' => ProductoTbl::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductoBodegaTbl $request
     * @param ProductoBodegaTbl $productoBodegaTbl
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateProductoBodegaTbl $request, ProductoBodegaTbl $productoBodegaTbl)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['bodega_id'] = $request->getBodegaTblId();
        $sanitized['producto_id'] = $request->getProductoTblId();
        
        // Update changed values ProductoBodegaTbl
        $productoBodegaTbl->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/producto-bodega-tbls'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/producto-bodega-tbls');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyProductoBodegaTbl $request
     * @param ProductoBodegaTbl $productoBodegaTbl
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyProductoBodegaTbl $request, ProductoBodegaTbl $productoBodegaTbl)
    {
        $productoBodegaTbl->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyProductoBodegaTbl $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyProductoBodegaTbl $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    ProductoBodegaTbl::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
