<div class="container">
    <div class="row my-3">
        <div class="col-12">
            <label for="title">Post title</label>
            <input type="text" id="title" class="form-control @error('title') mb-1 border-danger @enderror" name="title" value="{{ old('title', $post->title) }}">
            @include('includes.validation_error', ['input' => 'title'])
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12">
            <label for="post_content">Post content</label>
            <textarea name="post_content" id="post_content" cols="30" rows="10" class="form-control @error('post_content') mb-1 border-danger @enderror">{{ old('post_content', $post->post_content) }}</textarea>
            @include('includes.validation_error', ['input' => 'post_content'])
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12">
            <label for="post_image">Post image url</label>
            <input type="text" id="post_image" class="form-control @error('post_image') mb-1 border-danger @enderror" name="post_image" value="{{ old('post_image', $post->post_image) }}">
            @include('includes.validation_error', ['input' => 'post_image'])
        </div>
    </div>
    <input type="submit" value="Save & Publish" class="btn btn-primary">
</div>

