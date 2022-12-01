 @extends('dashboard.layouts.main')

 @section('container')
 <title>Dokter</title>
 <div class=" row justify-content-center" >
  <div class="col-lg-9">
    <form action ="/polianak/{{ $poli_anaks->id}}" method="post">
      @method('PUT')
      @csrf
      <div class="card border-dark mb-3" >
        <div class="card-header text-center "><b><h3>
          Form Edit Poli Anak
        </h3></b></div>
        <d iv class="card-body">
          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">ID Pasien</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('pasien_id') is-invalid @enderror" id="pasien_id" name="pasien_id" value="{{old('pasien_id',$poli_anaks->pasien_id)}}" readonly="true">
              @error('pasien_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Nama Ibu</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" value="{{old('nama_ibu',$poli_anaks->nama_ibu)}}">
              @error('nama_ibu')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Nama Ayah</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah" value="{{old('nama_ayah',$poli_anaks->nama_ayah)}}">
              @error('nama_ayah')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>


          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Keluhan</label>
            <div class="col-sm-10">
              <textarea class="form-control @error('keluhan') is-invalid @enderror" id="keluhan" name="keluhan" rows="3">{{ old('keluhan',$poli_anaks->keluhan)}}</textarea>
              @error('keluhan')
              <div class="invalid-feedback">
                {{$message}}
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
                @if(old('dokter_id',$poli_anaks->dokter_id)== $dokter->id)
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
              <a href="/polianak" class="btn btn-outline-dark col-md-2 ">Kembali</a> 
              <button type="submit" name="submit" class="btn btn-success col-md-2 offset-md-8">Update</button>

            </div>
          </div>
        </div>
      </div>

    </form>
  </div>

</div>

@endsection