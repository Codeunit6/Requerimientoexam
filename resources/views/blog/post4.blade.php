@extends('blog.template.layaout')
@section('titulo')
<div class="post-heading">
        <h1>{{$post->titulo}}</h1>
        <h2 class="subheading">{{$post->subtitulo}}</h2>
        <span class="meta">
        Posteado por
        <b>{{$post->autor}}</b>
        en {{$post->fecha}}
    </span>
</div>
@endsection
@section('portada')
<header class="masthead" style="background-image: url('assets/img/linkin.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        @yield('titulo')
                    </div>
                </div>
            </div>
        </header>
@endsection

@section('parrafo1')
{{$info->parrafo1}}
@endsection
@section('parrafo2')
{{$info->parrafo2}}
@endsection
@section('parrafo3')
{{$info->parrafo3}}
@endsection
@section('titulo2')
{{$info->titulo2}}
@endsection
@section('parrafo4')
{{$info->parrafo4}}
@endsection
@section('parrafo5')
{{$info->parrafo5}}
@endsection
@section('titulo3')
{{$info->titulo3}}
@endsection
@section('parrafo6')
{{$info->parrafo6}}
@endsection
@section('imagen')
<img class="img-fluid" src="assets/img/ches.jpg" alt="..." />
@endsection
@section('pie')
<footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="{{$twitter}}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{$facebook}}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{$git}}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Music corporation</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
@endsection