<!-- resources/views/books/import.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Impor Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Impor Buku dari Excel</h1>

        <form method="POST" action="{{ route('books.import') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>File Excel:</label>
                <input type="file" name="excel_file" class="form-control-file" required>
            </div>

            <button type="submit" class="btn btn-primary">Impor</button>
        </form>
    </div>
</body>
</html>
