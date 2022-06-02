<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProvedoresTbl\BulkDestroyProvedoresTbl;
use App\Http\Requests\Admin\ProvedoresTbl\DestroyProvedoresTbl;
use App\Http\Requests\Admin\ProvedoresTbl\IndexProvedoresTbl;
use App\Http\Requests\Admin\ProvedoresTbl\StoreProvedoresTbl;
use App\Http\Requests\Admin\ProvedoresTbl\UpdateProvedoresTbl;
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
use App\Exports\ProovedoresExport;
class ProvedoresTblController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexProvedoresTbl $request
     * @return array|Factory|View
     */
    public function index(IndexProvedoresTbl $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(ProvedoresTbl::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nombre', 'nombre_empresa', 'email', 'numer_telefono', 'direccion', 'ciudad', 'pais', 'provedor_desde', 'enabled'],

            // set columns to searchIn
            ['id', 'nombre', 'nombre_empresa', 'email', 'numer_telefono', 'direccion', 'ciudad', 'pais']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.provedores-tbl.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.provedores-tbl.create');

        return view('admin.provedores-tbl.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProvedoresTbl $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreProvedoresTbl $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the ProvedoresTbl
        $provedoresTbl = ProvedoresTbl::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/provedores-tbls'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/provedores-tbls');
    }

    /**
     * Display the specified resource.
     *
     * @param ProvedoresTbl $provedoresTbl
     * @throws AuthorizationException
     * @return void
     */
    public function show(ProvedoresTbl $provedoresTbl)
    {
        $this->authorize('admin.provedores-tbl.show', $provedoresTbl);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProvedoresTbl $provedoresTbl
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(ProvedoresTbl $provedoresTbl)
    {
        $this->authorize('admin.provedores-tbl.edit', $provedoresTbl);


        return view('admin.provedores-tbl.edit', [
            'provedoresTbl' => $provedoresTbl,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProvedoresTbl $request
     * @param ProvedoresTbl $provedoresTbl
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateProvedoresTbl $request, ProvedoresTbl $provedoresTbl)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values ProvedoresTbl
        $provedoresTbl->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/provedores-tbls'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/provedores-tbls');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyProvedoresTbl $request
     * @param ProvedoresTbl $provedoresTbl
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyProvedoresTbl $request, ProvedoresTbl $provedoresTbl)
    {
        $provedoresTbl->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyProvedoresTbl $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyProvedoresTbl $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    ProvedoresTbl::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }

    public function exportar()
    {
        return Excel::download(new ProovedoresExport, 'proovedores_export.csv');
    }
}
