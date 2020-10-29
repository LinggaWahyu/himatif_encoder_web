<?php

namespace App\DataTables;

use App\Models\GaleriKomunitas;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class GaleriKomunitasDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'galeri_komunitas.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\GaleriKomunitas $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(GaleriKomunitas $model)
    {
        return $model->newQuery()->with('komunitas');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom' => 'Bfrtip',
                'stateSave' => true,
                'order' => [[0, 'desc']],
                'buttons' => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'photo' => ['name' => 'photo', 'data' => 'photo', 'render' => '"<img src=\"/storage/"+data+"\" height=\"50\"/>"'],
            'komunitas_id' => new \Yajra\DataTables\Html\Column(['title' => 'Type', 'data' => 'komunitas.type', 'name'
            => 'komunitas.type']),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'galeri_komunitas_datatable_' . time();
    }
}
