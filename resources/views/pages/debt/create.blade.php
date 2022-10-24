@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="d-flex justify-content-between">
        <h3>Hutang</h3>
        <a href="/debt" class="btn icon icon-left btn-primary"><i data-feather="plus"></i> Kembali</a>
    </div>
</div>
<div class="page-content">
    <section class="section">
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">Pemasukan</h4>
            </div> --}}
            <div class="card-body">
                <form action="{{route('debt.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="date">Tanggal Hutang</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="debt">Hutang</label>
                        <input type="number" name="debt" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="debtor">Pemberi Hutang</label>
                        <input type="text" name="debtor" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="due_date">Jatuh Tempo Hutang</label>
                        <input type="date" name="due_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea name="description" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary form-control">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection