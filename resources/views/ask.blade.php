@extends('main')

@section('title', 'Ask')

@section('scripts')
<!-- Scripts -->
<script>
    function submitAction() {
        alert('Your request is up! Sit tight and wait for Addvise!');
    }
</script>
@stop

@section('content')
<!-- Wrapper -->
<div id="wrapper">

<!-- Main -->
<div id="main">

    <!-- Ask Section -->
    <section id="ask" class="main special">
        <div class="spotlight">
            <div class="content">
                <header class="major">
                    <h2>Ask for Advice</h2>
                </header>
                @include('partials._requestForm')
            </div>
        </div>
    </section>

</div>
</div>
@stop

