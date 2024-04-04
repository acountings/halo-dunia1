@extends('layout.header')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 pt-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">Form Registration</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/register">
                        @csrf
                        <div class="form-floating col-mb-3">
                            <input type="text" class="form-control" name="nama" id="floatingInput">
                            <label for="floatingInput">Name</label>
                          </div>

                          <div class="form-floating">
                            <select class="form-select" name="jabatan" aria-label="Default select example">
                                <option selected>Pilih</option>
                                <option value="1">Kepala</option>
                                <option value="2">Kolega/Teman Sejawat</option>
                                <option value="3">Tamatan Pelatihan</option>
                                <option value="4">Siswa</option>
                              </select>
                              <label for="floatingInput">Jabatan</label>
                          </div>

                          <div class="form-floating">
                            <select class="form-select" name="kota" aria-label="Default select example">
                                <option selected>Pilih</option>
                                @foreach($regencies as $provinsi)
                                <option>{{ $provinsi->name }}</option>
                                @endforeach
                              </select>
                              <label for="floatingInput">Kota/Kabupaten</label>
                          </div>

                          <div class="form-floating col-mb-3">
                            <input type="text" class="form-control" name="institusi" id="floatingInput">
                            <label for="floatingInput">Sekolah/Institusi</label>
                          </div>

                          <div class="form-floating col-mb-3">
                            <input type="number" class="form-control" name="wa" id="floatingInput">
                            <label for="floatingInput">No handphone/wa</label>
                          </div>

                          <div class="form-floating col-mb-3">
                            <input type="email" class="form-control" name="email" id="floatingInput">
                            <label for="floatingInput">Email</label>
                          </div>

                          <div class="form-floating col-mb-3">
                            <input type="password" class="form-control" name="password" id="floatingInput">
                            <label for="floatingInput">password</label>
                          </div>

                          <div class="d-grid gap-2 pt-4">
                            <button class="btn btn-primary" type="button">Register</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection