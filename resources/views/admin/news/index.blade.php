@extends('layouts.admin')

@push('styles')
@endpush


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="mx-auto">
                <span>{{ $info }}</span>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
