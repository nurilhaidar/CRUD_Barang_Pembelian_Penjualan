@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Edit</h1>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong>
                    @endforeach
            </div>
        @endif

        @foreach($data as $datas)
        <form action="{{ route('pembelian.update', $datas->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="nama">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $datas->id }}">
            </div>
            <div class="form-group">
                <label for="email">Kode Barang:</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ $datas->kode_barang }}">
            </div>
            <div class="form-group">
                <label for="nohp">Jumlah</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $datas->jumlah }}">
            </div>
            <div class="form-group">
                <label for="nohp">Total</label>
                <input type="text" class="form-control" id="total_harga" name="total_harga" value="{{ $datas->total_harga }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </div>
        </form>
        @endforeach
    </div>
</section>
@endsection