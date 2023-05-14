<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kriteria;
use App\Models\SubKriteria;
use App\Models\SubKriteria1;
use App\Models\SubKriteria2;
use App\Models\SubKriteria3;
use App\Models\SubKriteria4;
use App\Models\SubKriteria5;
use App\Models\SubKriteria6;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        $title = 'SPK WP | Register';

        return view('login.register', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'password' => 'required|min:6|max:255|confirmed',
            'password_confirmation' => 'required|min:6|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $latestId = User::latest()->first()->id;

        $dataKriteria = [
            [
                'user_id' => $latestId,
                'kodeKriteria' => 'C1',
                'slug' => Str::random(8),
                'namaKriteria' => 'Harga',
                'bobot' => '4',
                'jenis' => 'cost'
            ],
            [
                'user_id' => $latestId,
                'kodeKriteria' => 'C2',
                'slug' => Str::random(8),
                'namaKriteria' => 'Ukuran Layar',
                'bobot' => '3',
                'jenis' => 'benefit'
            ],
            [
                'user_id' => $latestId,
                'kodeKriteria' => 'C3',
                'slug' => Str::random(8),
                'namaKriteria' => 'Resolusi Layar',
                'bobot' => '5',
                'jenis' => 'benefit'
            ],
            [
                'user_id' => $latestId,
                'kodeKriteria' => 'C4',
                'slug' => Str::random(8),
                'namaKriteria' => 'Teknologi Panel',
                'bobot' => '5',
                'jenis' => 'benefit'
            ],
            [
                'user_id' => $latestId,
                'kodeKriteria' => 'C5',
                'slug' => Str::random(8),
                'namaKriteria' => 'Refresh Rate',
                'bobot' => '3',
                'jenis' => 'benefit'
            ],
            [
                'user_id' => $latestId,
                'kodeKriteria' => 'C6',
                'slug' => Str::random(8),
                'namaKriteria' => 'Response Time',
                'bobot' => '3',
                'jenis' => 'benefit'
            ],
            [
                'user_id' => $latestId,
                'kodeKriteria' => 'C7',
                'slug' => Str::random(8),
                'namaKriteria' => 'Color Gamut',
                'bobot' => '4',
                'jenis' => 'benefit'
            ]
        ];

        Kriteria::insert($dataKriteria);

        $dataSubKriteria = [
            [
                'user_id' => $latestId,
                'harga' => 'Rp 1.5 juta - Rp 3 juta',
                'slug' => Str::random(8),
                'nHarga' => '1'
            ],
            [
                'user_id' => $latestId,
                'harga' => 'Rp 3 juta - Rp 6 juta',
                'slug' => Str::random(8),
                'nHarga' => '2'
            ],
            [
                'user_id' => $latestId,
                'harga' => 'Rp 6 juta - Rp 9 juta',
                'slug' => Str::random(8),
                'nHarga' => '3'
            ],
            [
                'user_id' => $latestId,
                'harga' => 'Rp 9 juta - Rp 12 juta',
                'slug' => Str::random(8),
                'nHarga' => '4'
            ],
            [
                'user_id' => $latestId,
                'harga' => 'Rp 12 juta - Rp 15 juta',
                'slug' => Str::random(8),
                'nHarga' => '5'
            ]
        ];

        SubKriteria::insert($dataSubKriteria);

        $dataSubKriteria1 = [
            [
                'user_id' => $latestId,
                'ukuranLayar' => '18.5 inch - 24.6 inch',
                'slug' => Str::random(8),
                'nUkuranLayar' => '1'
            ],
            [
                'user_id' => $latestId,
                'ukuranLayar' => '25 inch - 30.7 inch',
                'slug' => Str::random(8),
                'nUkuranLayar' => '2'
            ],
            [
                'user_id' => $latestId,
                'ukuranLayar' => '31 inch - 36.8 inch',
                'slug' => Str::random(8),
                'nUkuranLayar' => '3'
            ],
            [
                'user_id' => $latestId,
                'ukuranLayar' => '37 inch - 42.9 inch',
                'slug' => Str::random(8),
                'nUkuranLayar' => '4'
            ],
            [
                'user_id' => $latestId,
                'ukuranLayar' => '43 inch - 49 inch',
                'slug' => Str::random(8),
                'nUkuranLayar' => '5'
            ]
        ];

        SubKriteria1::insert($dataSubKriteria1);

        $dataSubKriteria2 = [
            [
                'user_id' => $latestId,
                'resolusiLayar' => '720p/768p (HD)',
                'slug' => Str::random(8),
                'nResolusiLayar' => '1'
            ],
            [
                'user_id' => $latestId,
                'resolusiLayar' => '900p (HD+)',
                'slug' => Str::random(8),
                'nResolusiLayar' => '2'
            ],
            [
                'user_id' => $latestId,
                'resolusiLayar' => '1080p (FHD)',
                'slug' => Str::random(8),
                'nResolusiLayar' => '3'
            ],
            [
                'user_id' => $latestId,
                'resolusiLayar' => '1440p (QHD/WQHD/2K)',
                'slug' => Str::random(8),
                'nResolusiLayar' => '4'
            ],
            [
                'user_id' => $latestId,
                'resolusiLayar' => '2160p (Ultra HD/4K)',
                'slug' => Str::random(8),
                'nResolusiLayar' => '5'
            ]
        ];

        SubKriteria2::insert($dataSubKriteria2);

        $dataSubKriteria3 = [
            [
                'user_id' => $latestId,
                'teknologiPanel' => 'TN (Twisted Nematic)',
                'slug' => Str::random(8),
                'nTeknologiPanel' => '1'
            ],
            [
                'user_id' => $latestId,
                'teknologiPanel' => 'PLS (Plane to Line Switching)',
                'slug' => Str::random(8),
                'nTeknologiPanel' => '2'
            ],
            [
                'user_id' => $latestId,
                'teknologiPanel' => 'VA (Vertical Alignment)',
                'slug' => Str::random(8),
                'nTeknologiPanel' => '3'
            ],
            [
                'user_id' => $latestId,
                'teknologiPanel' => 'SVA (Super Vertical Alignment)',
                'slug' => Str::random(8),
                'nTeknologiPanel' => '4'
            ],
            [
                'user_id' => $latestId,
                'teknologiPanel' => 'IPS (In Plane Switching)',
                'slug' => Str::random(8),
                'nTeknologiPanel' => '5'
            ]
        ];

        SubKriteria3::insert($dataSubKriteria3);

        $dataSubKriteria4 = [
            [
                'user_id' => $latestId,
                'refreshRate' => '60 Hz - 75 Hz',
                'slug' => Str::random(8),
                'nRefreshRate' => '1'
            ],
            [
                'user_id' => $latestId,
                'refreshRate' => '144 Hz - 165 Hz',
                'slug' => Str::random(8),
                'nRefreshRate' => '2'
            ],
            [
                'user_id' => $latestId,
                'refreshRate' => '166 Hz - 240 Hz',
                'slug' => Str::random(8),
                'nRefreshRate' => '3'
            ],
            [
                'user_id' => $latestId,
                'refreshRate' => '241 Hz - 300 Hz',
                'slug' => Str::random(8),
                'nRefreshRate' => '4'
            ],
            [
                'user_id' => $latestId,
                'refreshRate' => '301 Hz - 360 Hz',
                'slug' => Str::random(8),
                'nRefreshRate' => '5'
            ]
        ];

        SubKriteria4::insert($dataSubKriteria4);

        $dataSubKriteria5 = [
            [
                'user_id' => $latestId,
                'responseTime' => '6 ms - 5 ms',
                'slug' => Str::random(8),
                'nResponseTime' => '1'
            ],
            [
                'user_id' => $latestId,
                'responseTime' => '4 ms - 3 ms',
                'slug' => Str::random(8),
                'nResponseTime' => '2'
            ],
            [
                'user_id' => $latestId,
                'responseTime' => '2 ms',
                'slug' => Str::random(8),
                'nResponseTime' => '3'
            ],
            [
                'user_id' => $latestId,
                'responseTime' => '1 ms',
                'slug' => Str::random(8),
                'nResponseTime' => '4'
            ],
            [
                'user_id' => $latestId,
                'responseTime' => '0.5 ms',
                'slug' => Str::random(8),
                'nResponseTime' => '5'
            ]
        ];

        SubKriteria5::insert($dataSubKriteria5);

        $dataSubKriteria6 = [
            [
                'user_id' => $latestId,
                'colorGamut' => 'NTSC 72%',
                'slug' => Str::random(8),
                'nColorGamut' => '1'
            ],
            [
                'user_id' => $latestId,
                'colorGamut' => 'sRGB 90% - 100%',
                'slug' => Str::random(8),
                'nColorGamut' => '2'
            ],
            [
                'user_id' => $latestId,
                'colorGamut' => 'AdobeRGB 90% - 100%',
                'slug' => Str::random(8),
                'nColorGamut' => '3'
            ],
            [
                'user_id' => $latestId,
                'colorGamut' => 'DCI-P3 90% - 100%',
                'slug' => Str::random(8),
                'nColorGamut' => '4'
            ],
            [
                'user_id' => $latestId,
                'colorGamut' => 'Rec. 2020',
                'slug' => Str::random(8),
                'nColorGamut' => '5'
            ]
        ];

        SubKriteria6::insert($dataSubKriteria6);

        alert()->success('Registrasi Sukses!', 'Akun anda telah dibuat.');

        return redirect('/login');
    }
}
