@extends('style')

@section('about')
<section id="content" class="content">
    <div class="container">
        <div class="row">
                <h2>Interal use only edit contact request</h2>
                <div class="recap">Interal use only edit contact request - Interal use only edit contact request - Interal use only edit contact request</div>

                <div>
                    <form method="post" action="/contact/{{$contact->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Naam</label>
                          <input type="name" class="form-control" name="name" 
                        value="{{$contact->name}}">
                        <span class="small text-danger">{{ $errors->first('name') }}</span>
                       </div>

                       <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="name" class="form-control" name="email"
                        value="{{$contact->email}}">
                        <span class="small text-danger">{{ $errors->first('email') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="name" class="form-control" name="phone"
                        value="{{$contact->phone}}">
                        <span class="small text-danger">{{ $errors->first('phone') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="exampleInputEmail1">Question</label>
                        <textarea class="form-control" rows="3" name="question">
                            {{$contact->question}}
                        </textarea>
                        <span class="small text-danger">{{ $errors->first('question') }}</span>
                     </div>

                     <button type="submit" class="btn btn-primary mb-2">Verzend uw vraag</button>
                    </form>

                </div>
        </div>
    </div>
</section>
@endsection