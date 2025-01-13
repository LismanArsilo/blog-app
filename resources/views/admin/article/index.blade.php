@extends('layouts.admin')

@push('styles')
@endpush


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="mx-auto">
                @foreach ($articles as $article)
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3>{{ $article->title }}</h3>
                        </div>
                        <div class="card-body">
                            <p>{{ Str::limit($article->content, 150) }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            <small>Published on: {{ $article->created_at->format('d M Y') }}</small>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                @endforeach

                <div class="d-flex justify-content-center">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
