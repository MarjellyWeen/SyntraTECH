@extends('style')

@section('about')
<section id="content" class="content">
    <div class="container">
        <div class="row">
                <h2>Docentenzone</h2>
                <div class="recap">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>

                <div>
                    @auth
                    {{ Auth::user()->name }}
                    @endauth
                    @guest
                    Deze zone is enkel toegankelijk voor docenten van SyntraTECH! Ga weg nu...    
                    @endguest

                </div>
        </div>
    </div>
</section>
@endsection