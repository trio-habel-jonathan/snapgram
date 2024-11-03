@extends('layouts.app')
@section('content')
<h2>Upload Foto Baru</h2>
<form action="{{ route('photos.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <table style="border: none;">
        <tr>
            <td><label for="judulFoto">Judul Foto</label></td>
            <td><input type="text" name="judulFoto" required></td>
        </tr>
        <tr>
            <td><label for="photo">Pilih Foto</label></td>
            <td><input type="file" name="photo" required></td>
        </tr>
        <tr>
            <td><label for="description">Deskripsi</label></td>
            <td><textarea name="description" row="3"></textarea></td>
        </tr>
        <tr>
            <td><label for="albumID">Album</label></td>
        <td>
            <select name="albumID" required>
                <option value="">Pilih Album</option>
                @foreach ($albums as $album)
                <option value="{{ $album->albumID}}">
                    {{ $album->namaAlbum}}
                </option>
                @endforeach
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit">Unggah Foto</button></td>
    </tr>
    </table>
</form>
@endsection