@extends('layouts.app')



@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Edit Data Peta Persebaran</span>


                </div>


                <div class="card-body">


                    <form method="POST" action="{{ route('admin.update_data_persebaran', $peta->id) }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <textarea name="lokasi" id="lokasi" cols="30" rows="5"
                                class="form-control">{{ $peta->lokasi }}</textarea>

                        </div>


                        <div class="mb-3">
                            <label class="form-label">Longitude</label>
                            <input type="text" class="form-control" name="longitude" id="longitude" required
                                value="{{ $peta->longitude }}">

                        </div>


                        <div class="mb-3">
                            <label class="form-label">Latitude</label>
                            <input type="text" class="form-control" name="latitude" id="latitude" required
                                value="{{ $peta->latitude }}">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sektor</label>
                            <input type="text" class="form-control" name="sektor" id="sektor" required
                                value="{{ $peta->sektor }}">

                        </div>


                        <div class="mb-3">
                            <label class="form-label">Jenis Bibit</label>
                            <input type="text" class="form-control" name="jenis_bibit" id="jenis_bibit"
                                value="{{ $peta->jenis_bibit }}" required>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Bibit</label>
                            <input type="number" class="form-control" name="jumlah_bibit" id="jumlah_bibit"
                                value="{{ $peta->jumlah_bibit }}" required>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Luas Tanah</label>
                            <input type="number" step="1" class="form-control" name="luas_tanah" id="luas_tanah"
                                value="{{ $peta->luas_tanah }}" required>

                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection