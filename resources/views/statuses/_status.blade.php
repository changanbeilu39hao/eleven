<li class="media mt-4 mb-4">
    <a href="{{ route('users.show', $user->id )}}">
      <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="mr-3 gravatar"/>
    </a>
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{ $user->name }} <small> / {{ $status->created_at->diffForHumans() }}</small></h5>
      <div class="mb-2 mt-2">{{ $status->content }}</div>
      <div class="media">
        <img src="{{ Storage::url($status->img_path) }}" class="mr-3" style="max-width:60px;">  
        <div class="media-body">
          <audio src="{{ Storage::url($status->audio_path) }}" controls>你的浏览器不支持播放音频</audio> 
        </div>
      </div>
    </div>
  </li>