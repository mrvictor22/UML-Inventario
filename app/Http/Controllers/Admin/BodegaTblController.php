<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BodegaTbl\BulkDestroyBodegaTbl;
use App\Http\Requests\Admin\BodegaTbl\DestroyBodegaTbl;
use App\Http\Requests\Admin\BodegaTbl\IndexBodegaTbl;
use App\Http\Requests\Admin\BodegaTbl\StoreBodegaTbl;
use App\Http\Requests\Admin\BodegaTbl\UpdateBodegaTbl;
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

class BodegaTblController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBodegaTbl $request
     * @return array|Factory|View
     */
    public function index(IndexBodegaTbl $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(BodegaTbl::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nombre', 'direccion', 'tel'],

            // set columns to searchIn
            ['id', 'nombre', 'direccion', 'tel']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.bodega-tbl.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.bodega-tbl.create');

        return view('admin.bodega-tbl.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBodegaTbl $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreBodegaTbl $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the BodegaTbl
        $bodegaTbl = BodegaTbl::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/bodega-tbls'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/bodega-tbls');
    }

    /**
     * Display the specified resource.
     *
     * @param BodegaTbl $bodegaTbl
     * @throws AuthorizationException
     * @return void
     */
    public function show(BodegaTbl $bodegaTbl)
    {
        $this->authorize('admin.bodega-tbl.show', $bodegaTbl);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BodegaTbl $bodegaTbl
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(BodegaTbl $bodegaTbl)
    {
        $this->authorize('admin.bodega-tbl.edit', $bodegaTbl);


        return view('admin.bodega-tbl.edit', [
            'bodegaTbl' => $bodegaTbl,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBodegaTbl $request
     * @param BodegaTbl $bodegaTbl
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateBodegaTbl $request, BodegaTbl $bodegaTbl)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values BodegaTbl
        $bodegaTbl->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/bodega-tbls'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/bodega-tbls');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBodegaTbl $request
     * @param BodegaTbl $bodegaTbl
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyBodegaTbl $request, BodegaTbl $bodegaTbl)
    {
        $bodegaTbl->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyBodegaTbl $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyBodegaTbl $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    BodegaTbl::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
