<div class="form-group row">
    <label for="thumbnail" class="col-sm-2 col-form-label">Foto Berita sekolah</label>
    <div class="col-sm-3">
        <input value="{{ old('thumbnail') ?? $journal->thumbnail }}" type="file" class="form-control" name="thumbnail" id="thumbnail">
        <div class="mt-2">
            @if ($journal->thumbnail != null)
                <img src="{{ asset('storage/'.$journal->thumbnail) }}" height="200" width="250">
            @endif
        </div>
        @error('thumbnail')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror  
    </div>
</div>

<div class="form-group row">
    <label for="judul" class="col-sm-2 col-form-label">Judul Berita</label>
    <div class="col-sm-10">
        <input value="{{ old('judul') ?? $journal->judul }}" type="text" class="form-control" name="judul" id="judul">
        @error('judul')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror  
    </div>
</div>

<div class="form-group row">
    <label for="berita" class="col-sm-2 col-form-label"> Isi Berita</label>
    <div class="col-sm-10">
        <textarea id="berita" class="form-control" name="berita" rows="10" cols="50">{{ old('berita') ?? $journal->berita }}</textarea>
        @error('berita')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror  
    </div>
</div>

<div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary btn-lg">{{ $button }}</button>
</div>

{{-- CKeditor4 --}}
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script>
var berita = document.getElementById("berita");
    CKEDITOR.replace(berita,{
    language:'en-gb'
});
CKEDITOR.config.allowedContent = true;
</script>
<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>