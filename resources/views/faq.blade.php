@extends('layouts.app')
@section('section')

<section class="DomandeFrequenti">
  <h1>Domande frequenti</h1>
  <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>

  <div class="faqs">
    <div class="before">
      @foreach ($faq_before as $before)
        <h2>{{$before["question"]}}</h2>
        <p>{{$before["answer"]}}</p>
      @endforeach
    </div>

    <div class="after">
      @foreach ($faq_after as $after)
        <h2>{{$after["question"]}}</h2>
        <p>{{$after["answer"]}}</p>
      @endforeach
    </div>
  </div>
</section>

@endsection
