 @extends('dashboard.layouts.main')

 @section('container')
 <title>Dokter</title>
 <div class=" row justify-content-center" >
  <div class="col-lg-9">
    <form action ="/poliumum" method="post">
      @csrf
      <div class="card border-dark mb-3" >
        <div class="card-header text-center "><b><h3>
          Form Insert Poli Umum
        </h3></b></div>
        <d iv class="card-body">
          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Nama Pasien</label>
            <div class="col-sm-10">
              <select class="form-select" name="pasien_id" aria-label="Default select example">
                <option class="selected">--Pilih Nama Pasien--</option>
                @foreach ($pasiens as $pasien)
                @if(old('pasien_id')== $pasien->id)
                <option value="{{ $pasien->id }}" selected>{{ $pasien->nama }}</option>
                @else
                <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label ">Keluhan</label>
            <div class="col-sm-10">
              <textarea class="form-control @error('keluhan') is-invalid @enderror" id="keluhan" name="keluhan" rows="3">{{ old('keluhan')}}</textarea>
              @error('keluhan')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Diagnosa</label>
            <div class="col-sm-10">
              <textarea class="form-control @error('diagnosa') is-invalid @enderror" id="diagnosa" name="diagnosa" rows="3">{{ old('diagnosa')}}</textarea>
              @error('diagnosa')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Tanggal Periksa</label>
            <div class="col-sm-10">
              <input type="date" class="form-control @error('tgl_periksa') is-invalid @enderror" id="tgl_periksa" name="tgl_periksa" value="{{old('tgl_periksa')}}">
              @error('tgl_periksa')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>


          <div class="mb-3 row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 form-label">Dokter</label>
            <div class="col-sm-10">
              <select class="form-select" name="dokter_id" aria-label="Default select example">
                <option class="selected">--Pilih Dokter--</option>
                @foreach ($dokters as $dokter)
                @if(old('dokter_id')== $dokter->id)
                <option value="{{ $dokter->id }}" selected>{{ $dokter->nama }}</option>
                @else
                <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <a href="../poliumum" class="btn btn-outline-dark col-md-2 ">Kembali</a> 
              <button type="submit" name="submit" class="btn btn-success col-md-2 offset-md-8">Create</button>

            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection