@extends('layouts.app')
@section('content')

<h2 style="text-align: center;">Snapgram</h2>
<table>
    <tr>
        <th>Pengguna</th>
        <th>Judul</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    @foreach($photos as $photo)
    <tr>
        <td>{{ $photo->user->username }}</td>
        <td>{{ $photo->judulFoto }}</td>
        <td>
            <img src="{{ asset('storage/' . $photo->lokasiFile) }}" alt="{{ $photo->judulFoto }}" style="width: 200px; aspect-ratio: 1/1; object-fit: center;">
        </td>
        <td>
            {{-- <form action="{{ route('photos.like', $photo->fotoID) }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" style="border: none; background-color: transparent; cursor: pointer;">
                    @if($photo->isLikedByAuthUser())
                        <i class="fas fa-heart" style="color: red;"></i> <!-- Heart icon for liked state -->
                    @else
                        <i class="far fa-heart"></i> <!-- Outline heart icon for not liked state -->
                    @endif
                </button>
                <span>{{ $photo->likes()->count() }} Likes</span>
            </form> --}}

            <form action="{{route('photos.like', $photo->fotoID)}}" method="POST" style="display: inline;">
                @csrf
                <button type="submit">
                    @if($photo->isLikedByAuthUser())
                        Unlike
                    @else
                        Like
                    @endif
                </button>
                <span>{{ $photo->likes()->count() }} Likes</span>
            </form>
            
            <a href="{{route('photos.comments', $photo->fotoID)}}" style="margin-left: 10px;">Komentar</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection