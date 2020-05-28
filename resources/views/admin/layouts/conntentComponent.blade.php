@extends('admin.master')
@section('content')

<div class="content-header row"></div>

<div class="content-body">

    <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">
        {{$slot}}
    </section>
    <!-- Dashboard Ecommerce ends -->

</div>

@endsection