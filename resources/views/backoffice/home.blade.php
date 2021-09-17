@extends('template.welcome')
@section('content')
<h1 class="text-center">BACKOFFICE</h1>
<div class="globale">
    <div class="l1">
        <div class="case">
            Navbar
        <a href="{{route('navbar.index')}}">
                <button type="button" class="btn btn-primary but">aller vers</button>
            </a>


        </div>
        <div class="case">
            Presentation
            <button type="button" class="btn btn-primary but">aller vers</button>

        </div>

    </div>
    <div class="l1">
        <div class="case">
            portfoolio
            <button type="button" class="btn btn-primary but">aller vers</button>

        </div>
        <div class="case">
            contact
            <button type="button" class="btn btn-primary but">aller vers</button>

        </div>
    </div>
    <div class="l1">
        <div class="case">
            footer
            <button type="button" class="btn btn-primary but">aller vers</button>

        </div>
        <div class="case">
            description
            <button type="button" class="btn btn-primary but">aller vers</button>

        </div>
    </div>
</div>
@endsection
