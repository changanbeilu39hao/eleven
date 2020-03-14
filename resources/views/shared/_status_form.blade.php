<form action="{{ route('statuses.store') }}" method="POST"  enctype="multipart/form-data">
    @include('shared._errors')
    @csrf
    <div class="form-group">
        <label for="exampleImg">上传封面</label>
        <input type="file" class="form-control-file" id="exampleImg" name="img">
    </div>
    <div class="form-group">
        <label for="exampleAudio">上传音频</label>
        <input type="file" class="form-control-file" id="exampleImg" name="audio">
    </div>
    <div class="form-group">
        <label for="exampleContent">介绍</label>
        <textarea class="form-control" name="content" id="exampleContent"  rows="3"></textarea>
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">发布</button>
    </div>
</form>