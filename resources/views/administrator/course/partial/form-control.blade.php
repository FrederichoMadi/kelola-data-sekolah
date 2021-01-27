<div class="mb-3">
    <label for="name" class="form-label">Nam Mata Pelajaran</label>
    <input value="{{ old('name') ?? $course->name }}" type="text" name="name" id="name" class="form-control" placeholder="Input Your name">
    @error('name')
        <div class="text-danger mt-2">{{ $message }}</div>
    @enderror 
</div>

<div class="d-flex justify-content-end">
    <button class="btn btn-primary" type="submit">{{ $button }}</button>
</div>