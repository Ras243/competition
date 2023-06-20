<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Post </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pendaftarLomba.update', $pendaftar->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Pendaftar</label>
                                <input type="text" class="form-control @error('nama_pendaftar') is-invalid @enderror"
                                    name="nama_pendaftar" value="{{ $pendaftar->nama_pendaftar }}"
                                    placeholder="Masukkan Nama Lomba">
                                <!-- error message untuk nama_pendaftar -->
                                @error('nama_pendaftar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Jenis Kelamin</label>
                                <select class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                    name="jenis_kelamin">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L" {{ $pendaftar->jenis_kelamin == 'L' ? 'selected' : '' }}>
                                        Laki-laki</option>
                                    <option value="P" {{ $pendaftar->jenis_kelamin == 'P' ? 'selected' : '' }}>
                                        Perempuan</option>
                                </select>

                                <!-- error message untuk jenis_kelamin -->
                                @error('jenis_kelamin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Instansi</label>
                                <input type="text" class="form-control @error('instansi') is-invalid @enderror"
                                    name="instansi" value="{{ $pendaftar->instansi }}"
                                    placeholder="Masukkan Nama Lomba">
                                <!-- error message untuk instansi -->
                                @error('instansi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Bukti Pembayaran</label>
                                <input type="file" class="form-control @error('bukti_pembayaran') is-invalid @enderror"
                                    name="bukti_pembayaran" value="{{ $pendaftar->bukti_pembayaran }}">   
                                <!-- error message untuk title -->
                                @error('bukti_pembayaran')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Status Pendaftar</label>
                                <select class="form-control @error('status_pendaftar') is-invalid @enderror"
                                    name="status_pendaftar">
                                    <option value="">Pilih Status Pendaftar</option>
                                    <option value="Lunas" {{ $pendaftar->status_pendaftar == 'Lunas' ? 'selected' : '' }}>
                                        Lunas</option>
                                    <option value="Belum Lunas"
                                        {{ $pendaftar->status_pendaftar == 'Belum Lunas' ? 'selected' : '' }}>
                                        Belum Lunas</option>
                                </select>

                                <!-- error message untuk status_pendaftar -->
                                @error('status_pendaftar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
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
