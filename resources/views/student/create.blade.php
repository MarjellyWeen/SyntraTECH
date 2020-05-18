@extends('style')
@section('about')
<section id="content" class="content">
    <div class="container">
        <div class="row">
         @if(Session::has('checkmail'))
            <div class="alert alert-danger" role="alert"> 
              {{ Session::get('checkmail') }}
            </div>
            @else
                <h2>Registreer en schrijf je in voor een course</h2>
                @endif
                @php Session::forget('checkmail') @endphp
                <div class="recap">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>

                <div>

                    <form method="post" action="/students/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Volledige naam</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                            <span class="small text-danger">{{ $errors->first('name') }}</span>
                          </div>

                          <div class="form-group">
                            <label>Email adres</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            <span class="small text-danger">{{$errors->first('email')}}</span>
                          </div>

                        <div class="form-group">
                          <label>Telefoon</label>
                          <input type="text" class="form-control" name="phone" value="{{ old('phone')}}">
                          <span class="small text-danger">{{ $errors->first('phone')}}</span>
                        </div>

                        <div class="form-group">
                            <label>Leeftijd</label>
                            <input type="number" class="form-control" name="age" value="{{old('age')}}">
                            <span class="small text-danger">{{ $errors->first('age')}}</span>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Profielfoto</label>
                          <input type="file" class="form-control" name="profilepicture"
                          value="{{old('profilepicture')}}">
                          <span class="small text-danger">{{ $errors->first('profilepicture') }}</span>
                       </div>

                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Beschikbare courses</label>
                          <select multiple class="form-control" id="exampleFormControlSelect1" name="course[]">
                            @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name}} - {{$course->price}} EUR</option>
                            @endforeach
                          </select>
                        </div>

                        <button type="submit" class="btn btn-primary mb-2">Ja, ik wil deelnemen</button>
                    </form>


                </div>
        </div>
    </div>
</section>
@endsection