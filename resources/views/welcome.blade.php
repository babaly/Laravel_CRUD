@extends('layout.core')
@section('title', 'Laravel CRUD App')
@section('content')
        <div class="flex-center position-ref full-height mt-4" >
            

            <div class="content" style="margin-top: 5%">
                <div class="title m-b-md">
                    <h3><cite title="Source Title">Mamadou Baba LY</cite></h3>
                    <div class="text-lef">
                        
                    <footer class="blockquote-footer"><i class="fas fa-envelope"></i> lymamadou41@gmail.com</footer>
                    <footer class="blockquote-footer"><i class="fas fa-mobile-alt"></i> +221 77 734 45 69   </footer>
                    </div>
                </div>

                <div class="links mt-4">
                <a href="{{ route('component.index') }}" class="btn btn-outline-primary"><i class="fas fa-eye mr-1"></i>Voir projet</a>
                </div>

                <footer class="blockquote-footer" style="margin-top: 5%">
                    <h3><cite title="Source Title"><i class="fas fa-quote-left mr-2"></i>La meilleur compétence du futur, c'est d'apprendre à apprendre !<i class="fas fa-quote-right ml-2"></i></cite></h6>
                    
                </footer>
            </div>
        </div>
        @endsection