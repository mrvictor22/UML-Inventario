<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductoTbl\BulkDestroyProductoTbl;
use App\Http\Requests\Admin\ProductoTbl\DestroyProductoTbl;
use App\Http\Requests\Admin\ProductoTbl\IndexProductoTbl;
use App\Http\Requests\Admin\ProductoTbl\StoreProductoTbl;
use App\Http\Requests\Admin\ProductoTbl\UpdateProductoTbl;
use App\Models\ProductoTbl;
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

class ProductoTblController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexProductoTbl $request
     * @return array|Factory|View
     */
    public function index(IndexProductoTbl $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(ProductoTbl::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nombre', 'prod_cod', 'marca', 'costo', 'precio', 'enabled'],

            // set columns to searchIn
            ['id', 'nombre', 'prod_cod', 'marca']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.producto-tbl.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.producto-tbl.create');

        return view('admin.producto-tbl.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductoTbl $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreProductoTbl $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the ProductoTbl
        $productoTbl = ProductoTbl::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/producto-tbls'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/producto-tbls');
    }

    /**
     * Display the specified resource.
     *
     * @param ProductoTbl $productoTbl
     * @throws AuthorizationException
     * @return void
     */
    public function show(ProductoTbl $productoTbl)
    {
        $this->authorize('admin.producto-tbl.show', $productoTbl);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductoTbl $productoTbl
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(ProductoTbl $productoTbl)
    {
        $this->authorize('admin.producto-tbl.edit', $productoTbl);


        return view('admin.producto-tbl.edit', [
            'productoTbl' => $productoTbl,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductoTbl $request
     * @param ProductoTbl $productoTbl
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateProductoTbl $request, ProductoTbl $productoTbl)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values ProductoTbl
        $productoTbl->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/producto-tbls'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/producto-tbls');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyProductoTbl $request
     * @param ProductoTbl $productoTbl
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyProductoTbl $request, ProductoTbl $productoTbl)
    {
        $productoTbl->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyProductoTbl $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyProductoTbl $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    ProductoTbl::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
