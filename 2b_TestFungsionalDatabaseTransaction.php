<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    // Function untuk testing insert data dosen ke dalam tabel dosen
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '005',
            'nidn' => '0020077901',
            'nama' => 'Bambang Robi\'in, S.T.,M.T.',
            'jabfung' => 'L',
            'email_dosen' => '005@tif.uad.ac.id',
            'avatar' => 'bambang.jpeg'
        ]);

        $this->assertEquals('005', $dosen->nipy);
        $this->assertEquals('0020077901', $dosen->nidn);
        $this->assertEquals('Bambang Robi\'in, S.T.,M.T.', $dosen->nama);
        $this->assertEquals('L', $dosen->jabfung);
        $this->assertEquals('005@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('bambang.jpeg', $dosen->avatar);
    }
}
