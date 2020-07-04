<?php

namespace App\Http\Controllers;
use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

use Excel;
use Maatwebsite\Excel\Concerns\FromCollection; // gọi đến để sử dụng lấy dữ liệu từ DB vd:post
use Maatwebsite\Excel\Concerns\Exportable; //để xuất file excel
use Maatwebsite\Excel\Concerns\WithHeadings; // tuy chinh các title cho colums
use Maatwebsite\Excel\Concerns\ShouldAutoSize; // AUto size cho các column
use Maatwebsite\Excel\Concerns\FromView; // export excel dựa trên file .blade.php

class ExportController extends Controller implements FromView {
    use Exportable;
    // SHow form xuất excel
    public function show(){
        return view('exportexel',['post'=>Post::all()]);
    }
    //Thực hiện xuất file excel
    public function export(){
        return Excel::download(new ExportController(), 'posts.xls' ,\Maatwebsite\Excel\Excel::XLS);
    }
    // select data để tạo file excel
    // public function collection()
    // {
    //     $posts = Post::all();
    //     foreach ($posts as $row) {
    //         $order[] = array(
    //             '0' => $row->post_id,
    //             '1' => $row->title,
    //             '2' => $row->content,
    //             '3' => $row->cate_id,
    //             '4' => $row->user_id,
    //             '5' => $row->created_at,
    //             '6' => $row->updated_at,
    //         );
    //     }
    //     // dd($order);    
    //     return (collect($order));
    // }
    public function view(): View
    {
        return view('exportexel', ['post' => Post::all()
        ]);
    }
    // để bố cục lại tiêu đề cho từng cột
    // public function headings(): array
    // {
    //     return [
    //         'post_id',
    //         'Tiêu đề',
    //         'Nội Dung',
    //         'ID_danh_mục',
    //         'ID_User_name',
    //         'Tạo ngày',
    //         'cập nhật ngày'
    //     ];
    // }


}
