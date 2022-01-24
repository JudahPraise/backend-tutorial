@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <x-profile/>
            <div class="card d-flex flex-column align-items-center mt-3">
                <div class="card-header w-100 d-flex justify-content-between">
                    <h3>News Feed</h3>
                   <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Post
                    </button>
  
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Write Post</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('post.store') }}" method="POST" id="formPost">
                                    @csrf
                                    <div class="form-group">
                                        <label for="content">What's on your mind?</label>
                                        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary" onclick="document.getElementById('formPost').submit()">Post</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="card-body w-100 d-flex flex-column justify-content-center">
                    @foreach ($posts as $post)
                        <x-post-component :id="$post->user_id" :postid="$post->id"></x-post-component>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
