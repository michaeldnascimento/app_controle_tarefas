<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TarefasExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Tarefa::all();
        return auth()->user()->tarefas()->get();
    }

    //implementando os nomes das colunas
    public function headings(): array
    {
        // TODO: Implement headings() method.
        return [
            'ID Tarefa',
            'Tarefa',
            'Data Limite conclusão',
            ];
    }


    //método linha por linha, para formatar as linhas
    public function map($row): array
    {
        // TODO: Implement map() method.

        return [
          $row->id,
          $row->tarefa,
          date('d/m/Y', strtotime($row->data_limite_conclusao))
        ];
    }
}
