@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class="text-center">Tambah Buku</h1>

    <form method="POST" action="/admin/books/create" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Judul:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Category</label>
            <select class="form-select form-select-lg" name="" id="">
                <option selected>Select one</option>
                <option value="">New Delhi</option>
                <option value="">Istanbul</option>
                <option value="">Jakarta</option>
            </select>
        </div>

        <div class="form-group">
            <label>Penulis:</label>
            <input type="text" name="author" class="form-control" required>
        </div>

        <div class="form-group">
            <label>synopsis:</label>
            <textarea name="synopsis" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Thumbnail:</label>
            <input type="file" name="thumbnail" class="form-control-file" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection