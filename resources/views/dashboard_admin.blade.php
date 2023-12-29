@extends('layouts.template_dashboard_admin')

@section('judul','EMAMI - Dashboard Admin')

@section('isi')

<div class="p-6 m-20 bg-white rounded shadow">
    {!! $chart->container() !!}
</div>

<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}

@endsection