@extends('style')

@section('about')
<section id="content" class="content">
    <div class="container">
        <div class="row">
                <h2>Docentenzone</h2>
                <div class="recap">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
                <div>
                     {{ Auth::user()->name }}
                    
                     @foreach ($results as $result)
                     @php dd($result->course) @endphp
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
                               
                           </tbody>
                        </table>
                     @endforeach

                </div>
        </div>
    </div>
</section>
@endsection