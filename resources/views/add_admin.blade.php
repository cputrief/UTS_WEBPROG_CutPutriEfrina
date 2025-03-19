@extends('contoh')

@section('title')
    ADD Admin
@endsection

@section('nama_hal')
    ADD Admin
@endsection

@section('active6')
	active
@endsection

@section('table')
<div class="container mt-5">
    <h2>Tambah Admin</h2>
    
    

    <form>
        
        <div class="form-group">
            <label for="namaAdmin">Nama Admin</label>
            <input type="text" class="form-control" id="namaAdmin" placeholder="Masukkan Nama Admin">
        </div>
        
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP">
        </div>
        
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" placeholder="Masukkan Status">
        </div>
        <div class="form-group">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
            <input type="file" class="form-control" id="inputGroupFile02">
          </div>

        <button type="submit" class="btn btn-primary">Tambah Data</button>
        <button type="button" class="btn btn-secondary" onclick="clearForm()">Hapus Data</button>
    </form>
</div>
@endsection