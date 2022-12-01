 @extends('dashboard.layouts.main')

 @section('container')
 <title>Pasien</title>
 <div class=" row justify-content-center" >
  <div class="col-lg-8">
    <form action ="/pasien" method="post">

      @csrf
      <div class="card border-dark mb-3" >
        <div class="card-header text-center "><b><h3>
          Form Insert Data Pasien
        </h3></b></div>
        <d iv class="card-body">
          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class=" col-sm-2 form-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{old('nik')}}">
              @error('nik')
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
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{old('tgl_lahir')}}">
              @error('tgl_lahir')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Pekerjaan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{old('pekerjaan')}}">
              @error('pekerjaan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 form-label">Jenis Kelamin</label>
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
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Poli</label>
            <div class="col-sm-10">
              <select class="form-select" name="kategori_id" aria-label="Default select example">
                <option class="selected">--Pilih Poli--</option>
                @foreach ($kategoris as $kategori)
                @if(old('kategori_id')== $kategori->id)
                <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
                @else
                <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endif
                @endforeach
              </select>
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
              <a href="../pasien" class="btn btn-outline-dark col-md-2 ">Kembali</a> 
              <button type="submit" name="submit" class="btn btn-success col-md-2 offset-md-8">Create</button>

            </div>
          </div>
        </div>
      </div>

    </form>
  </div>

</div>

@endsection