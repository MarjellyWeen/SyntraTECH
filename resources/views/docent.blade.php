@extends('style')

@section('about')
<section id="content" class="content">
    <div class="container">
        <div class="row">
                <h2>Docentenzone</h2>
                <div class="recap">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
                <div>
                     <h3>Welkom docent {{ Auth::user()->name }}, dit zijn uw courses</h3>
                     @foreach ($resultone->course as $courseone)
                     <span class="pers">{{ $courseone->name }} ({{ $courseone->student->count()}})</span>
                     @endforeach
                    

                     <h3>Alle courses en inschrijvingen</h3>
                     @foreach ($results as $result) 
                     
                       <b>{{$result->name}}</b> | {{$result->email}}
                       <table class="table">
                           <thead>
                               <tr>
                                   <th scopr="col">#</th>      
                                   <th scopr="col">Cursussen</th>      
                                   <th scopr="col">Inschrijvingen</th>      
                               </tr>
                           </thead>
                           <tbody>
                            @foreach ($result->course as $course)
                                <tr>
                                 <th scope="row">{{$course->id}}</th>   
                                <td><a href="/details/{{ $course->id}}">{{$course->name}}</a>
                                </td>
                                <td>
                                    @if ($course->student->count() > 3)
                                <span class="goed">{{$course->student->count()}}</span>
                                    @else
                                <span class="slecht">{{$course->student->count()}}</span>
                                    @endif
                                </td>
                                </tr>
                            @endforeach   
                           </tbody>
                        </table>
                     @endforeach

                </div>
        </div>
    </div>
</section>
@endsection