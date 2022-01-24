<div>
  <div class="card mb-3">
    <div class="card-body">
      <div class="row d-flex justify-content-between">
        <div class="row ml-2 d-flex flex-column">
          <h5 class="card-title">{{ $post->user->name }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans() }}</h6>
        </div>
        <div class="btn dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v"></i>
        </div>
        <div class="dropdown-menu">
          <a class="dropdown-item edit-position">Edit</a>
          <a class="dropdown-item delete-position">Delete</a>
        </div>
      </div>
      <p class="card-text">{{ $post->content }}</p>
      <a class="row pl-3 mb-2" data-toggle="modal" data-target="#likes{{ $post->id }}">
        {{ $post->likeCount() }}{{ $post->likeCount() > 1 ? ' Likes' : ' Like' }}
      </a>
      <a  href="{{ route('like.store', $post->id) }}" type="button" class="btn btn-primary">
        <i class="fas fa-thumbs-up"></i>
      </a>
    </div>
  </div>

  <x-likes-component :modal="$post->id" :postid="$post->id"/>
</div>