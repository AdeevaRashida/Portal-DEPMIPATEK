<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $faqs = [
            [
                'question' => 'Bagaimana cara login ke AKSARA Depmipatek?',
                'answer' => 'Gunakan akun Taruna, Dosen, atau Civitas Akademika yang telah terdaftar melalui tombol Login pada bagian atas halaman.',
            ],
            [
                'question' => 'Siapa saja yang dapat menggunakan platform ini?',
                'answer' => 'Platform ini digunakan oleh Taruna, Dosen, dan Civitas Akademika di lingkungan Depmipatek.',
            ],
            [
                'question' => 'Apakah AKSARA dapat diakses melalui perangkat mobile?',
                'answer' => 'Ya, tampilan AKSARA menyesuaikan secara otomatis pada perangkat komputer, tablet, maupun ponsel.',
            ],
            [
                'question' => 'Ke mana saya menghubungi jika mengalami kendala?',
                'answer' => 'Silakan hubungi bagian akademik Depmipatek melalui informasi kontak pada bagian bawah halaman.',
            ],
        ];

        return view('home', ['faqs' => $faqs]);
    }

    public function depmipatek(): View
    {
        $misi = $this->misiPoints();

        return view('depmipatek', ['misi' => $misi]);
    }

    private function misiPoints(): Collection
    {
        $points = [
            'Melaksanakan Pendidikan Tinggi Program Studi Teknik Mesin Pertahanan, Teknik Elektronika Pertahanan dan Ilmu Dasar Matematika Ilmu Pengetahuan Alam yang berkualitas, berwawasan global dengan memanfaatkan sumber daya manusia yang professional.',
            'Meningkatkan pencapaian standardisasi komponen  pendidikan di bidang studi Teknik Mesin Pertahanan, Teknik Elektronika Pertahanan dan Ilmu Dasar Matematika Ilmu Pengetahuan Alam',
            'Meningkatkan kemampuan tenaga pendidik/Dosen Teknik Mesin Pertahanan, Teknik Elektronika Pertahanan dan Ilmu Dasar Matematika Ilmu Pengetahuan Alam agar mempunyai knowledge, skill dan psychomotorik serta memiliki nilai integritas moral dan etika untuk memajukan program pendidikan.',
            'Melaksanakan penelitian untuk menompang kemajuan pendidikan di bidang ilmu Teknik Mesin Pertahanan, Teknik Elektronika Pertahanan dan Ilmu Dasar Matematika Ilmu Pengetahuan Alam',
            'Meningkatkan pengabdian kepada masyarakat melalui pembinaan territorial agar dicintai dan mencintai rakyat.',
            'Menjalin kerjasama secara berkelanjutan dengan lembaga pendidikan, lembaga penelitian, pemerintah, dunia usaha dan masyarakat untuk menunjang proses belajar mengajar.',
            'Menyiapkan Kurikulum, Taruna Akmil, fasilitas, sarana dan prasarana pendidikan serta lingkungan pendidikan yang baik.'
        ];

        return collect($points)->map(function ($text, $index) {
            return [
                'number' => str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT),
                'text' => $text,
            ];
        });
    }
}
