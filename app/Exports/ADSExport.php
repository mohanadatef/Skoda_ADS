<?php

namespace App\Exports;
use App\Request_Ads;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ADSExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return ['First Name','Last Name','Email','Mobile','City','Model','Request'
           ,'Create Time'];
    }

   public function collection()
    {
        return  Request_Ads::all(['first_name','last_name','email','mobile','city','model','kind_request'
            ,'created_at']);
    }

}
