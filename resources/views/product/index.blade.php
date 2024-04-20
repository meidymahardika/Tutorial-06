@extends('layouts.app')

@section('content')
<div class="row justify-content-center" style="margin-top:13%">
    <div class="col-4">
        @if (\Session::has('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{!! \Session::get('msg') !!}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <a href="/product/create" class="btn btn-secondary float-right">Tambah</a><br /><br />
        <table class="table table-bordered table-striped">
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Variant</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list as $d)
                <tr>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->price }}</td>
                    <td>
                        <ul>
                            @foreach($d->variants()->get() as $var)
                            <li>{{ $var->name }}</li>
                            Desc: {{ $var->description }} <br />
                            Proc: {{ $var->processor }} <br />
                            RAM: {{ $var->memory }} <br />
                            Strg: {{ $var->storage }}
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <a href="/product/{{ $d->id }}/edit" class="btn btn-primary">Edit</a>
                        <form method="post" action="/product/{{ $d->id }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
