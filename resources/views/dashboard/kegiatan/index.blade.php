@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Uraian Kegiatan WBP</h1>
    </div>

    <div class="col-lg-8">

        <form method="POST" action="/dashboard/kegiatan" class="row g-3">
            @csrf
            <div class="mb-3">
                <label for="uraian" class="form-label">Uraian Kegiatan</label>
                @error('uraian')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
                <input id="uraian" type="hidden" name="uraian" value="{{ old('uraian') }}">
                <trix-editor input="uraian"></trix-editor>
            </div>

            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
@endsection

