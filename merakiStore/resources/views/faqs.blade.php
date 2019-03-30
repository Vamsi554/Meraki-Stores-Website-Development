@extends('layouts.template')
@section('title', 'FAQs')

@section('content')

<section id="FAQs">
    <div class="container">
        <p class="md-3"><a href="{{ url('/') }}" style="text-decoration: none;" class="text-secondary">Home</a> <i class="fa fa-angle-right"></i> <a href="{{ url('/faqs') }}" style="text-decoration: none;" class="text-secondary">Frequently Asked Questions</a></p>
        <h2 class="merakiText">Frequently Asked Questions</h2>
        <hr style="border: 1px solid #000000;">
        <div class="row mt-5">
            <div class="col-lg-12">
                @include('layouts.faqsQuestions')
            </div>
        </div>
    </div>
</section>


@endsection
