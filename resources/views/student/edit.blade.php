@extends('style')
@section('about')
<section id="content" class="content">
    <div class="container">
        <div class="row">
                <h2>Student aanpassen</h2>
                <div class="recap">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </div>

                <div>

                    <form method="post" action="/students/{{$student->id}}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                          </div>

                          <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                          </div>

                        <div class="form-group">
                          <label>Phone</label>
                          <input type="text" class="form-control" name="phone" value="{{ $student->phone }}"
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control" name="age" value="{{ $student->age }}"
                          </div>

                        <button type="submit" class="btn btn-primary mb-2">Verzenden</button>
                    </form>


                </div>
        </div>
    </div>
</section>
@endsection