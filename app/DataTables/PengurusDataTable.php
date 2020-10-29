<?php

namespace App\DataTables;

use App\Models\Pengurus;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class PengurusDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'penguruses.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Pengurus $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pengurus $model)
    {
        return $model->newQuery()->with(['jabatanPengurus', 'divisi']);
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
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
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
            'nama',
            'jabatan_id' => new \Yajra\DataTables\Html\Column(['title' => 'Jabatan', 'data' => 'jabatan_pengurus.nama',
                'name' => 'jabatan_pengurus.nama']),
            'divisi_id' => new \Yajra\DataTables\Html\Column(['title' => 'Divisi', 'data' => 'divisi.name', 'name'
            => 'divisi.name']),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'penguruses_datatable_' . time();
    }
}
