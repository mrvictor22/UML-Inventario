<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ComprasTbl\BulkDestroyComprasTbl;
use App\Http\Requests\Admin\ComprasTbl\DestroyComprasTbl;
use App\Http\Requests\Admin\ComprasTbl\IndexComprasTbl;
use App\Http\Requests\Admin\ComprasTbl\StoreComprasTbl;
use App\Http\Requests\Admin\ComprasTbl\UpdateComprasTbl;
use App\Models\ProductoTbl;
use App\Models\ComprasTbl;
use App\Models\ProvedoresTbl;
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
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ComprasExport;
class ComprasTblController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexComprasTbl $request
     * @return array|Factory|View
     */
    public function index(IndexComprasTbl $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(ComprasTbl::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nombre_producto', 'nombre_proveedor', 'proovedor_id', 'fecha_pedido', 'fecha_entregado', 'enabled'],

            // set columns to searchIn
            ['id', 'nombre_producto', 'nombre_proveedor', 'descripcion'],
            function ($query) use ($request){
                // Aqui accedes a la relacion usando el nombre de la funcion que agregaste en el modelo
                //nombre de relacion en modelo "productos"
                $query->with(['productos','proov']);

                
     
                $query->join('producto_tbl', 'producto_tbl.id', '=', 'compras_tbl.producto_id');
                $query->join('provedores_tbl', 'provedores_tbl.id', '=', 'compras_tbl.proovedor_id');

                if($request->has('producto_tbl')){
                    $query->whereIn('producto_id', $request->get('producto_tbl'));
                }
                
            }
        );
        DB::connection('mysql')->statement('UPDATE compras_tbl , producto_tbl SET compras_tbl.nombre_producto = producto_tbl.nombre where compras_tbl.producto_id=producto_tbl.id');
        DB::connection('mysql')->statement('UPDATE compras_tbl , provedores_tbl SET compras_tbl.nombre_proveedor = provedores_tbl.nombre where compras_tbl.proovedor_id=provedores_tbl.id');
        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.compras-tbl.index', ['data' => $data, 'producto_tbl' => ProductoTbl::all(), 'provedores_tbl' => ProvedoresTbl::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.compras-tbl.create');

        return view('admin.compras-tbl.create' , ['producto_tbl' => ProductoTbl::all(), 'provedores_tbl' => ProvedoresTbl::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreComprasTbl $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreComprasTbl $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['producto_id'] = $request->getProductoTblId();
        $sanitized['proovedor_id'] = $request->getProvedoresTblId();

        
        // Store the ComprasTbl
        $comprasTbl = ComprasTbl::create($sanitized);
        DB::connection('mysql')->statement('UPDATE compras_tbl , producto_tbl SET compras_tbl.nombre_producto = producto_tbl.nombre where compras_tbl.producto_id=producto_tbl.id');
        DB::connection('mysql')->statement('UPDATE compras_tbl , provedores_tbl SET compras_tbl.nombre_proveedor = provedores_tbl.nombre where compras_tbl.proovedor_id=provedores_tbl.id');
        if ($request->ajax()) {
            return ['redirect' => url('admin/compras-tbls'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/compras-tbls');
    }

    /**
     * Display the specified resource.
     *
     * @param ComprasTbl $comprasTbl
     * @throws AuthorizationException
     * @return void
     */
    public function show(ComprasTbl $comprasTbl)
    {
        $this->authorize('admin.compras-tbl.show', $comprasTbl);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ComprasTbl $comprasTbl
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(ComprasTbl $comprasTbl)
    {
        $this->authorize('admin.compras-tbl.edit', $comprasTbl);
        $comprasTbl->load('productos');
        $comprasTbl->load('proov');

        return view('admin.compras-tbl.edit', [
            'comprasTbl' => $comprasTbl, 'producto_tbl' => ProductoTbl::all(), 'provedores_tbl' => ProvedoresTbl::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateComprasTbl $request
     * @param ComprasTbl $comprasTbl
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateComprasTbl $request, ComprasTbl $comprasTbl)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['producto_id'] = $request->getProductoTblId();
        $sanitized['proovedor_id'] = $request->getProvedoresTblId();
        // Update changed values ComprasTbl
        $comprasTbl->update($sanitized);
        DB::connection('mysql')->statement('UPDATE compras_tbl , producto_tbl SET compras_tbl.nombre_producto = producto_tbl.nombre where compras_tbl.producto_id=producto_tbl.id');
        DB::connection('mysql')->statement('UPDATE compras_tbl , provedores_tbl SET compras_tbl.nombre_proveedor = provedores_tbl.nombre where compras_tbl.proovedor_id=provedores_tbl.id');
        if ($request->ajax()) {
            return [
                'redirect' => url('admin/compras-tbls'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/compras-tbls');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyComprasTbl $request
     * @param ComprasTbl $comprasTbl
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyComprasTbl $request, ComprasTbl $comprasTbl)
    {
        $comprasTbl->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyComprasTbl $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyComprasTbl $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    ComprasTbl::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }

    public function exportar()
    {
        return Excel::download(new ComprasExport, 'exports.csv');
    }
}
