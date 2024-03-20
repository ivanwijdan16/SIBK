<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScholarshipApplication;

class ScholarshipApplicationController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string',
            'email' => 'required|email',
            'nomor_hp' => 'required|numeric',
            'semester' => 'required|numeric|between:1,8',
            'beasiswa' => 'required',
            'berkas' => 'required|file',
        ]);

        // Cek apakah pengguna sudah mendaftar untuk kedua jenis beasiswa
        $existingApplications = ScholarshipApplication::where('nim', $request->nim)
            ->pluck('beasiswa')
            ->toArray();

        if (in_array('akademik', $existingApplications) && $request->beasiswa === 'akademik') {
            return redirect()->back()->with('error', 'Anda sudah mendaftar beasiswa akademik.');
        } elseif (in_array('non_akademik', $existingApplications) && $request->beasiswa === 'non_akademik') {
            return redirect()->back()->with('error', 'Anda sudah mendaftar beasiswa non akademik.');
        }

        // Hitung IPK secara otomatis
        $ipk = 3.01; // Asumsi IPK

        // Jika IPK di bawah 3, kembalikan response
        if ($ipk < 3) {
            return redirect()->back()->with('error', 'Maaf, IPK Anda tidak mencukupi untuk mendaftar beasiswa.');
        }

        // Simpan data aplikasi beasiswa
        $application = new ScholarshipApplication;
        $application->nama = $request->nama;
        $application->nim = $request->nim;
        $application->email = $request->email;
        $application->nomor_hp = $request->nomor_hp;
        $application->semester = $request->semester;
        $application->ipk = $ipk;
        $application->beasiswa = $request->beasiswa;

        // Upload berkas
        $file = $request->file('berkas');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        $application->berkas = $fileName;

        $application->status_ajuan = 'belum di verifikasi';
        $application->save();

        $request->session()->flash('success', 'Berhasil Mengajukan Beasiswa!');

        return redirect()->route('hasil.index');
    }
}