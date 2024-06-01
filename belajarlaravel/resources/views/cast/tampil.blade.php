@extends('layouts.master')
@section('title')
    Halaman Tampil Cast
@endsection

@section('content')
    <div class="new">
        <a href="/cast/create" class="button1 btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Tambah</a>
    </div></br>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th style="text-align:center; width:20% ">
                name
            </th>
            <th style="text-align:center; width:10% ">
                Umur
            </th>
            <th style="text-align:center; width:40% ">
                Bio
            </th>
            <th style="text-align:center; width:20% ">
                Action
            </th>
          </tr>
        </thead>
        <tbody>
            @forelse ($cast as $key =>  $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td style="font-weight: bold; text-align:center; ">{{ $item->name }}</td>
                    <td style="font-weight: bold; text-align:center; ">{{ $item->umur }}</td>
                    <td style="font-weight: bold; text-align:center; ">{{ $item->bio }}</td>
                    <td style=" text-align:center; ">

                        <form action="/cast/{{ $item->id }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda Ingin Menghapusnya?')">
                            <a href="/cast/{{ $item -> id }}" class="btn btn-sm btn-success"></i>Detail</a>
                            <a href="/cast/{{ $item -> id }}/edit" class="btn btn-sm btn-primary"></i>Edit</a>
                            @method('Delete')
                            @csrf
                            <button class="btn btn-danger btn-sm"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Data Belum ada</td>
                </tr>
            @endforelse
        </tbody>
      </table>
@endsection