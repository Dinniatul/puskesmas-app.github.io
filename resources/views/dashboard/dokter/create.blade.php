 @extends('dashboard.layouts.main')

 @section('container')
 <title>Dokter</title>
 <div class=" row justify-content-center" >
  <div class="col-lg-8">
    <form action ="/dokter" method="post">

      @csrf
      <div class="card border-dark mb-3" >
        <div class="card-header text-center "><b><h3>
          Form Insert Data Dokter
        </h3></b></div>
        <d iv class="card-body">

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class=" col-sm-2 form-label">NIDN</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('nidn') is-invalid @enderror" id="nidn" name="nidn" value="{{old('nidn')}}">
              @error('nidn')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class=" col-sm-2 form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class=" col-sm-2 form-label">Umur</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{old('umur')}}">
              @error('umur')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label class=" col-sm-2 form-label">Jenis Kelamin</label>
            <div class="d-flex col-sm-10">
              <div class="form-check me-3">
                <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" {{ old('jenis_kelamin')=='L' ? 'checked' : ''}} checked>Laki-laki
              </div>
              <div class="form-check me-3">
                <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" @checked(old('jenis_kelamin')=='P')>Perempuan
              </div>
            </div>
            @error('jenis_kelamin')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class=" col-sm-2 form-label">Spesialis</label>
            <div class="col-sm-10">
              <select class="form-select" name="spesialis_id" aria-label="Default select example">
                <option selected>--Pilih Spesialis--</option>
                @foreach ($spesialis as $spesialis)
                @if(old('spesialis_id')== $spesialis->id)
                <option value="{{ $spesialis->id }}" selected>{{ $spesialis->nama }}</option>
                @else
                <option value="{{ $spesialis->id }}">{{ $spesialis->nama }}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class=" col-sm-2 form-label">No Hp</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{old('no_hp')}}">
              @error('no_hp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 form-label">Alamat</label>
            <div class="col-sm-10">
              <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3">{{ old('alamat')}}</textarea>
              @error('alamat')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="container">
            <div class="row">
              <a href="../dokter" class="btn btn-outline-dark col-md-2 ">Kembali</a> 
              <button type="submit" name="submit" class="btn btn-success col-md-2 offset-md-8">Create</button>

            </div>
          </div>
        </div>
      </div>

    </form>
  </div>
</div>
@endsection 