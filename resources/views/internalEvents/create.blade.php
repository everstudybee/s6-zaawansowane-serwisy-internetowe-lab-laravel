{{-- rozwiązanie z tytułem z zajęć --}}
@extends('main', ['title'=>'Nowe wydarzenie'])

{{-- moje rozwiązanie --}}
{{--@section('title')--}}
{{--    Nowe Wydarzenie--}}
{{--@endsection--}}

{{-- dyrektywa importuje inny blade template i pozwala tworzyć hierarchię --}}
@include('internalEvents.menu')

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12 validator-submit" method="post" action="/wydarzenia-wewnetrzne/dodawanie">
                {{-- zabezpieczenie przed Cross-site request forgeries --}}
                @csrf
                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    {{-- clasa validatro-required jest potrzebna do wywoływania walidacji z pliku validator.js --}}
                    <input id="nazwa" type="text" name="Title" class="validate validator-required">
                    <label for="nazwa">Nazwa</label>
                    <span class="helper-text" id="nazwa-helper"></span>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">insert_link</i>
                    <input id="link" type="text" name="Link" class="validate validator-required">
                    <label for="link">Link</label>
                    <span class="helper-text" id="link-helper"></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea validate validator-required" name="ShortDescription"></textarea>
                    <label for="textarea1">Krótki opis</label>
                    <span class="helper-text" id="textarea1-helper"></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea2" class="materialize-textarea validate validator-required" name="ContentHTML"></textarea>
                    <label for="textarea2">Zawartość</label>
                    <span class="helper-text" id="textarea2-helper"></span>
                </div>

                <div class="col s12">
                    <div class="submit-field input-field">
                        <button class="btn waves-effect waves-light" type="submit">Dadaj
                            <i class="material-icons right">add</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/validator.js"></script>

    {{-- po uruchomieniu kompilacji validator.js przez webpack, przeniesione bezpośrednio do pliku --}}
    {{-- <script>initializeValidatorRequired();</script> --}}
@endsection
