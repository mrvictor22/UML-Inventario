<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ComprasTbl\BulkDestroyComprasTbl;
use App\Http\Requests\Admin\ComprasTbl\DestroyComprasTbl;
use App\Http\Requests\Admin\ComprasTbl\IndexComprasTbl;
use App\Http\Requests\Admin\ComprasTbl\StoreComprasTbl;
use App\Http\Requests\Admin\ComprasTbl\UpdateComprasTbl;
use App\Models\ComprasTbl;
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
            ['id', 'nombre_producto', 'producto_id', 'nombre_proveedor', 'proovedor_id', 'fecha_pedido', 'fecha_entregado', 'enabled'],

            // set columns to searchIn
            ['id', 'nombre_producto', 'nombre_proveedor', 'descripcion']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.compras-tbl.index', ['data' => $data]);
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

        return view('admin.compras-tbl.create');
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

        // Store the ComprasTbl
        $comprasTbl = ComprasTbl::create($sanitized);

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


        return view('admin.compras-tbl.edit', [
            'comprasTbl' => $comprasTbl,
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

        // Update changed values ComprasTbl
        $comprasTbl->update($sanitized);

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
}
