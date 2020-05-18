@extends('style')

@section('about')
<section id="content" class="content">
    <div class="container">
        <div class="row">
                <h2>Contacteer ons</h2>
                <div class="recap">Wij helpen u graag verder! Laat ons uw vraag geworden middels het contactformulier...</div>

                <div>
                    <form method="post" action="/contact/store" enctype="multipart/form-data">
                        @csrf
                
                        <div class="form-group">
                          <label for="exampleInputEmail1">Naam</label>
                          <input type="name" class="form-control" name="name" 
                        value="{{old('name')}}">
                        <span class="small text-danger">{{ $errors->first('name') }}</span>
                       </div>

                       <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="name" class="form-control" name="email"
                        value="{{old('email')}}">
                        <span class="small text-danger">{{ $errors->first('email') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="name" class="form-control" name="phone"
                        value="{{old('phone')}}">
                        <span class="small text-danger">{{ $errors->first('phone') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="exampleInputEmail1">Bijlage</label>
                        <input type="file" class="form-control" name="attachment"
                        value="{{old('attachment')}}">
                        <span class="small text-danger">{{ $errors->first('attachment') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="exampleInputEmail1">Question</label>
                        <textarea class="form-control" rows="3" name="question">
                            {{old('question')}}
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