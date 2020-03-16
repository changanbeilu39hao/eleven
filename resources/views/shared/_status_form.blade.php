<form action="{{ route('statuses.store') }}" method="POST"  enctype="multipart/form-data">
    @include('shared._errors')
    @csrf

    <div class="custom-file mb-3">
        <input type="file" class="custom-file-input" id="exampleImg" name="img">
        <label class="custom-file-label" for="exampleImg" data-browse="选择封面">上传封面</label>
    </div>

    <div class="custom-file mb-3">
        <input type="file" class="custom-file-input" id="exampleAudio" name="audio">
        <label class="custom-file-label" for="exampleAudio" data-browse="选择音频">上传音频</label>
    </div>

    <div class="form-group">
        <textarea class="form-control" name="content" id="exampleContent" placeholder="介绍" rows="3"></textarea>
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">发布</button>
    </div>
</form>