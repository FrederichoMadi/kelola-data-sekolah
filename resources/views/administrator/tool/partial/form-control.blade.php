<div class="form-group row">
    <label for="thumbnail" class="col-sm-2 col-form-label">Foto Berita sekolah</label>
    <div class="col-sm-3">
        <input value="{{ old('thumbnail') ?? $tool->thumbnail }}" type="file" class="form-control" name="thumbnail" id="thumbnail">
        <div class="mt-2">
            @if ($tool->thumbnail != null)
                <img src="{{ asset('storage/'.$tool->thumbnail) }}" height="200" width="250">
            @endif
        </div>
        @error('thumbnail')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror  
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nama Alat</label>
    <div class="col-sm-10">
        <input value="{{ old('name') ?? $tool->name }}" type="text" class="form-control" name="name" id="name">
        @error('name')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror  
    </div>
</div>

<div class="form-group row">
    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Alat</label>
    <div class="col-sm-10">
        <input value="{{ old('jumlah') ?? $tool->jumlah }}" type="number" class="form-control" name="jumlah" id="jumlah">
        @error('jumlah')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror  
    </div>
</div>

<div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary btn-lg">{{ $button }}</button>
</div>