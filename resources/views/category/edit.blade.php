@extends('layout.app')

@section('title', 'Edit Data Category')

@section('content')
        <section class="section">
            <div class="section-header">
                <h3>Category</h3>
            </div>


            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Category</h4>
                    </div>

                    <div class="card-body">
                        <form action="/category/{{$category->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kode">Kode</label>
                                <input type="text" name="kode" class="form-control" value="{{$category->kode}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{$category->nama}}">
                            </div>

                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i>Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endsection