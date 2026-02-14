@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('/js/review-modal.js') }}"></script>
@endpush

@section('content')
    <div class="col container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-xl-10 col-lg-11">
                <h1 class="mb-4 text-center">レビュー一覧</h1>    

                @if (session('flash_message'))
                    <div class="alert alert-info" role="alert">
                        <p class="mb-0">{{ session('flash_message') }}</p>
                    </div>
                @endif

                @foreach ($reviews as $review )
                    <article class="card my-1">
                        <h3 class="right_btn card-header">{{ $review->restaurant->name }}
                            <span class="nagoyameshi-star-rating ms-2" data-rate="{{ $review->score }}"></span>
                            <form class="ms-auto" action="{{ route('admin.reviews.destroy', $review->id) }}" method="post">
                            @csrf
                            @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm mb-2">削除</button>
                            </form>
                        </h3>
                        <div class="card-body">
                            <p class="card-text">{{ $review->content }}</p>
                            <small class="card-text">{{ $review->user->name }} さん</small>
                            <small class="card-text">投稿日：{{ $review->created_at }}</small>
                        </div>
                    </article>
                @endforeach
                <div class="d-flex justify-content-center mt-2">
                    {{ $reviews->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
