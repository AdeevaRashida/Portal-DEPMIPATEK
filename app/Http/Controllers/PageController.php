<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('home', ['faqs' => $this->faqs()]);
    }

    //ini nanti diganti pake auth, sementara ini pake dummy data dulu
    public function login(): View
    {
        return view('login');
    }

    public function depmipatek(): View
    {
        $misi = $this->misiPoints();

        return view('depmipatek', ['misi' => $misi]);
    }

    public function dashboard(): View
    {
        return view('dashboard', [
            'faqs' => $this->faqs(),
            'services' => $this->services(),
            'user' => [
                'name' => 'Nama User',
                'photo' => 'images/profile.jpg',
            ],
        ]);
    }

    private function faqs(): array
    {
        return [
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
            [
                'question' => 'Bagaimana jika saya lupa password?',
                'answer' => 'Hubungi bagian akademik Depmipatek untuk meminta pengaturan ulang kata sandi akun Anda.',
            ],
            [
                'question' => 'Informasi apa saja yang tersedia di AKSARA?',
                'answer' => 'AKSARA menyediakan informasi dan layanan akademik yang terintegrasi bagi Taruna, Dosen, dan Civitas Akademika.',
            ],
        ];
    }

    //nanti servicesnya manggil ke database (link ke website lain), tapi sementara ini pake dummy data dulu
    private function services(): array
    {
        $services = [];

        for ($i = 1; $i <= 8; $i++) {
            $services[] = [
                // 'title' => 'Layanan ' . $i,
                'title' => 'Coming Soon.',
                'url' => '#',
            ];
        }

        return $services;
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
