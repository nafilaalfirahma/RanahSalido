@extends('layouts.app')



@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Tambah Data Peta Persebaran</span>


                </div>


                <div class="card-body">


                    <form method="POST" action="{{ route('admin.store_data_persebaran') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <textarea name="lokasi" id="lokasi" cols="30" rows="5" class="form-control"></textarea>

                        </div>


                        <div class="mb-3">
                            <label class="form-label">Longitude</label>
                            <input type="text" class="form-control" name="longitude" id="longitude" required>

                        </div>


                        <div class="mb-3">
                            <label class="form-label">Latitude</label>
                            <input type="text" class="form-control" name="latitude" id="latitude" required>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sektor</label>
                            <input type="text" class="form-control" name="sektor" id="sektor" required>

                        </div>


                        <div class="mb-3">
                            <label class="form-label">Jenis Bibit</label>
                            <input type="text" class="form-control" name="jenis_bibit" id="jenis_bibit" required>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Bibit</label>
                            <input type="number" class="form-control" name="jumlah_bibit" id="jumlah_bibit" required>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Luas Tanah</label>
                            <input type="number" step="1" class="form-control" name="luas_tanah" id="luas_tanah"
                                required>

                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection