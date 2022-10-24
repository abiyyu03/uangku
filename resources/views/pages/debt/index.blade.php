@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="d-flex justify-content-between">
        <h3>Hutang</h3>
        <a href="/debt/create" class="btn icon icon-left btn-primary"><i data-feather="plus"></i> Tambah</a>
    </div>
</div>
<div class="page-content">
    <section class="section">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{$message}}
            </div>
        @endif
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">Pemasukan</h4>
            </div> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped dt-responsive nowrap" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal Hutang</th>
                                <th>Hutang (Rp)</th>
                                <th>Pemberi Hutang</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($debtData as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{\Carbon\Carbon::parse($d->date)->isoFormat('dddd, D MMMM Y')}}</td>
                                <td>{{$d->debt}}</td>
                                <td>{{$d->debtor}}</td>
                                <td>{{$d->description}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection