@extends('layouts.template_dashboard')

@section('judul','EMAMI - Dashboard Penjual')

@section('isi')


<div class="p-6 m-20 bg-white rounded shadow">
    {!! $chart->container() !!}
</div>

<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}
@endsection