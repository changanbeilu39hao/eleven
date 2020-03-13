<div class="list-group-item">
    <img class="mr-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width=32>
    <a href="{{ route('users.show', $user) }}">
      {{ $user->name }}
    </a>

    @can('freezy', $user)
    <form action="{{ route('users.destroy', $user->id) }}" method="post" class="float-right">
        @csrf
        @method('DELETE')
        @if ( $user->freezy == 0 )
        <button type="submit" class="btn btn-sm btn-danger delete-btn">
            停用
        </button>
        @else
        <a class="btn btn-sm btn-light">
            已停用
        </a>
        @endif
    </form>

    @endcan

  </div>