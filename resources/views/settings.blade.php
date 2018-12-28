@extends('layouts.admin')

@php
    $breadcrumbs = collect([
        [
            'label' => 'Settings',
            'href'  => '/admin/settings',
        ]
    ]);
@endphp

@section('content')
    <settings-panel></settings-panel>
@endsection
