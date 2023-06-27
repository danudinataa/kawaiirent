@extends('partials.dashboard.master')

@section('body')
    @include('partials.dashboard.user-table')
    @include('partials.dashboard.kategori-table')
    @include('partials.dashboard.kostum-table')
    @include('partials.dashboard.transaksi-table')
    @include('partials.dashboard.detailTransaksi-table')
@endsection
