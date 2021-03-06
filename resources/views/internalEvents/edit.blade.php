{{-- rozwiązanie z tytułem z zajęć--}}
@extends('main', ['title'=>'Edycja wydarzenia'])

{{-- moje rozwiązanie --}}
{{--@section('title')--}}
{{--    Edycja Wydarzenia--}}
{{--@endsection--}}

{{-- dyrektywa importuje inny blade template i pozwala tworzyć hierarchię --}}
@include('internalEvents.menu')

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/wydarzenia-wewnetrzne/aktualizacja/{{$internalEvent->Id}}">
                {{-- zabezpieczenie przed Cross-site request forgeries --}}
                @csrf
                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    <input id="nazwa" type="text" name="Title" value="{{$internalEvent->Title}}" class="validate">
                    <label for="nazwa">Nazwa</label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">insert_link</i>
                    <input id="link" type="text" name="Link" value="{{$internalEvent->Link}}" class="validate">
                    <label for="link">Link</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" name="ShortDescription">{{$internalEvent->ShortDescription}}</textarea>
                    <label for="textarea1">Krótki opis</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea2" class="materialize-textarea" name="ContentHTML">{{$internalEvent->ContentHTML}}</textarea>
                    <label for="textarea2">Zawartość</label>
                </div>

                <div class="col s12">
                    <div class="submit-field input-field">
                        <button class="btn waves-effect waves-light" type="submit">Zapisz
                            <i class="material-icons right">edit</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
