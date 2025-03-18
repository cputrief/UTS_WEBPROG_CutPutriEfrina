@extends('contoh')

@section('nama_hal')
	Form Data Siswa
@endsection

@section('active5')
	active
@endsection

@section('table')
<div class="container">
    <br>
    <a href="siswa"><button type="button" class="btn-close ti-arrow-left"></button></a>
    <h2 class="text-center">Form Data Siswa</h2>
    <p class="text-center">silahkan isi data siswa dibawah ini!</p>
    <form>
        <div class="form-group center">
            <label for="name">NISN:</label>
            <input type="text" class="form-control" id="name" name="nisn" required>
        </div>
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="name" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="name">NIK:</label>
            <input type="name" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="name">Jenis Kelamin:</label>
            <input type="radio " class="form-control" id="email" name="jk" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="name" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="email">Status:</label>
            <input type="name" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Kirim</button>
    </form>
</div>

@endsection