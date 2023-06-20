<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('daftarLomba.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        
                        <div class="form-group">
                            <label class="font-weight-bold">Nama Lomba</label>
                            <input type="text" class="form-control @error('nama_lomba') is-invalid @enderror"
                                name="nama_lomba" value="{{ old('nama_lomba') }}" placeholder="Masukkan Nama Lomba">

                            <!-- error message untuk nama_lomba -->
                            @error('nama_lomba')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Sampul Lomba</label>
                            <input type="file" class="form-control @error('sampul_lomba') is-invalid @enderror"
                                name="sampul_lomba">

                            <!-- error message untuk title -->
                            @error('sampul_lomba')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Deskripsi Lomba</label>
                            <input type="text" class="form-control @error('deskripsi_lomba') is-invalid @enderror"
                                name="deskripsi_lomba" value="{{ old('deskripsi_lomba') }}" placeholder="Masukkan Deskripsi Lomba">
                        
                            <!-- error message untuk deskripsi_lomba -->
                            @error('deskripsi_lomba')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Biaya Pendaftaran</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control @error('biaya_pendaftaran') is-invalid @enderror"
                                    name="biaya_pendaftaran" value="{{ old('biaya_pendaftaran') }}" placeholder="Masukkan Biaya Pendaftaran">
                        
                                <!-- error message untuk biaya_pendaftaran -->
                                @error('biaya_pendaftaran')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Batas Pendaftaran</label>
                            <input type="datetime-local" class="form-control @error('batas_pendaftaran') is-invalid @enderror"
                                name="batas_pendaftaran" value="{{ old('batas_pendaftaran') }}" placeholder="Masukkan Batas Pendaftaran">
                        
                            <!-- error message untuk batas_pendaftaran -->
                            @error('batas_pendaftaran')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
</body>

</html>
