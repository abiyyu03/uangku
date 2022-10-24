@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="d-flex justify-content-between">
        <h3>Pengeluaran</h3>
        <a href="/outcome/create" class="btn icon icon-left btn-primary"><i data-feather="plus"></i> Tambah</a>
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
                                <th>Tanggal Pengeluaran</th>
                                <th>Uang Keluar (Rp)</th>
                                <th>Penggunaan</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($outcomeData as $o)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{\Carbon\Carbon::parse($o->date)->isoFormat('dddd, D MMMM Y')}}</td>
                                <td>{{$o->outcome}}</td>
                                <td>{{$o->usage}}</td>
                                <td>{{$o->description}}</td>
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