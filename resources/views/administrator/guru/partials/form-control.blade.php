<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
        <input value="{{ old('name') ?? $teacher->name }}" type="text" class="form-control" name="name" id="name" placeholder="Input your name">
        @error('name')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror  
    </div>
</div>

<div class="form-group row">
  <label for="NIDN" class="col-sm-2 col-form-label">NIDN</label>
  <div class="col-sm-10">
    <input value="{{ old('NIDN') ?? $teacher->NIDN }}" type="number" name="NIDN" id="NIDN" class="form-control" placeholder="Input Your NIDN">
    @error('NIDN')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror 
  </div>
</div>

<div class="form-group row">
  <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
  <div class="col-sm-10">
    <input value="{{ old('NIP') ?? $teacher->NIP }}" type="number" name="NIP" id="NIP" class="form-control" placeholder="Input Your NIP">
    @error('NIP')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror 
  </div>
</div>

<div class="form-group row">
  <label for="courses" class="col-sm-2 col-form-label">Mata Pelajaran yang diampu</label>
  <div class="col-sm-10">
    <select name="courses[]" id="courses" class="form-control select2Choice" multiple>
      @foreach ($courses as $course)
          <option {{ $teacher->courses()->find($course) ? 'selected' : '' }} value="{{ $course->id }}">{{ $course->name }}</option>
      @endforeach
    </select>
    @error('courses')
      <div class="text-danger mt-2">{{ $message }}</div>
    @enderror 
  </div>
</div>  

<div class="form-group row">
  <label for="thumbnail" class="col-sm-2 col-form-label">Photo</label>
  <div class="col-sm-3">
    <input type="file" name="thumbnail" id="thumbnail" class="form-control" placeholder="Choose a Photo">
    @error('thumbnail')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror 
  </div>
</div>

<div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary btn-lg">{{ $submit }}</button>
</div>