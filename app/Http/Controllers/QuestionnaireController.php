<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function storeStatus(Request $request)
    {
        // Ambil status yang dipilih
        $status = $request->input('status');

        // Jika status Bekerja, arahkan ke halaman yang sesuai
        if ($status == 'Bekerja') {
            return redirect()->route('questionnaire.form-bekerja');  // Halaman jika memilih Bekerja
        }

        // Tambahkan logika untuk status lainnya
        if ($status == 'Belum memungkinkan bekerja') {
            return redirect()->route('questionnaire.form-belum-bekerja');  // Halaman untuk status ini
        }

        if ($status == 'Wiraswasta') {
            return redirect()->route('questionnaire.form-wiraswasta');  // Halaman untuk wiraswasta
        }

        if ($status == 'Melanjutkan Pendidikan') {
            return redirect()->route('questionnaire.form-melanjutkan-pendidikan');  // Halaman untuk pendidikan
        }

        if ($status == 'Tidak kerja tetapi sedang mencari kerja') {
            return redirect()->route('questionnaire.form-mencari-kerja');  // Halaman untuk status ini
        }
    }
}
