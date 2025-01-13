@extends('layouts.admin')

@push('styles')
@endpush


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>{{ $article->title }}</h2>
                <div class="mb-3">
                    <p>{!! nl2br(e($article->content)) !!}</p>
                </div>

                <p class="text-muted">Dibuat pada: {{ $article->created_at->format('d M Y, H:i') }}</p>
                <a href="{{ route('view.article') }}" class="btn btn-primary">Kembali ke Daftar Artikel</a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
