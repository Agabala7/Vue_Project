@extends('layouts.master')
@section('title','Tərçümə əlavə et')
@section('content')

<div class="content">
    <div class="block block-rounded">
        <div class="block-content">
            <h2 class="content-heading">Tərçümə əlavə et</h2>
            @include('layouts.error')
            <form action="{{ route('editTranslationsPost', $translate->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ $translate->id }}" />
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Başlıq</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ $translate->title }}" />
                </div>
                <div class="form-group">
                  <label for="contents">Tərçümə Məzmunu</label> <br />
                  <textarea class="form-control" name="contents" id="contents" cols="30" rows="10">{!! $translate->contents !!}</textarea>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Təsdiq Et</button>
              </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('addcss')
@endsection
@section('addjs')
<script>
  tinymce.init({
    selector: '#contents',
    plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
  });
</script>
@endsection