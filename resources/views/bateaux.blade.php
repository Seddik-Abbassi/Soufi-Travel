@extends('layout.layout')

@section('content')

    <div class="fh5co-hero">
        <div class="fh5co-overlay" style="padding-bottom: 250px"></div>
        <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/slider4.jpg);">
            <div class="desc">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-5">
                            <div class="tabulation animate-box">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation">
                                        <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Ferry</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="hotels">
                                        <div class="row">
                                            <form action="{{ url(app()->getLocale(),'booking-boat') }}" method="POST">
                                                @csrf
                                                <div class="col-xxs-12 col-xs-12 mt">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radiotrip" id="inlineRadio1" value="Voyage aller-retour">
                                                        <label class="form-check-label" for="inlineRadio1">Voyage aller-retour</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radiotrip" id="inlineRadio2" value="Voyage aller simple">
                                                        <label class="form-check-label" for="inlineRadio2">Voyage aller simple</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="radiotrip" id="inlineRadio3" value="Voyage retour différent">
                                                        <label class="form-check-label" for="inlineRadio3">Voyage Retour différent</label>
                                                    </div>
                                                </div>
                                                <div class="col-xxs-12 col-xs-6 mt">
                                                    <div class="input-field">
                                                        <label for="name">Nom Complet</label>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom complet"/>
                                                    </div>
                                                </div>
                                                <div class="col-xxs-12 col-xs-6 mt">
                                                    <div class="input-field">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Votre email"/>
                                                    </div>
                                                </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from-place">De</label>
                                                    <input type="text" class="form-control" name="from" id="from-place" placeholder="Los Angeles, USA"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="to-place">Vers</label>
                                                    <input type="text" class="form-control" name="to" id="to-place" placeholder="Tokyo, Japan"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Arrivée</label>
                                                    <input type="text" class="form-control" name="datestart" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Départ</label>
                                                    <input type="text" class="form-control" name="dateend" id="date-end" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="adult">Adultes</label>
                                                    <select class="cs-select cs-skin-border" name="adult">
                                                        @for($i = 1; $i<11; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="child">Enfants&nbsp;<span class="badge bg-success">-12 ans</span></label>
                                                    <select class="cs-select cs-skin-border" name="child">
                                                        @for($i = 0; $i<11; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12" style="margin-bottom: 30px">
                                                <section>
                                                    <label for="moyen">Votre moyen de Transport</label>
                                                    <select class="cs-select cs-skin-border" id="moyenid" name="moyen">
                                                            <option value="0">Quel est votre moyen de Transport?</option>
                                                            <option value="Passager piéton">Passager piéton</option>
                                                            <option value="Vélo">Vélo</option>
                                                            <option value="Voiture" class="showmark">Voiture</option>
                                                            <option value="Camping-car" class="showmark">Camping-car</option>
                                                            <option value="Moto" class="showmark">Moto</option>
                                                            <option value="Minibus" class="showmark">Minibus</option>
                                                            <option value="Fourgonnette" class="showmark">Fourgonnette</option>
                                                    </select>
                                                </section>
                                            </div>


                                                <div class="hidden" id="retourdifferent">
                                                    <h4 style="margin-left: 20px;font-weight: bold">Retour Différent</h4>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <div class="input-field">
                                                            <label for="from-place">De</label>
                                                            <input type="text" class="form-control" name="from1" id="from-place" placeholder="Los Angeles, USA"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <div class="input-field">
                                                            <label for="to-place">Vers</label>
                                                            <input type="text" class="form-control" name="to1" id="to-place" placeholder="Tokyo, Japan"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt alternate">
                                                        <div class="input-field">
                                                            <label for="date-start">Arrivée</label>
                                                            <input type="text" class="form-control" name="datestart1" id="date-start" placeholder="mm/dd/yyyy"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt alternate">
                                                        <div class="input-field">
                                                            <label for="date-end">Départ</label>
                                                            <input type="text" class="form-control" name="dateend1" id="date-end" placeholder="mm/dd/yyyy"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <section>
                                                            <label for="adult1">Adultes</label>
                                                            <select class="cs-select cs-skin-border" name="adult1">
                                                                @for($i = 1; $i<11; $i++)
                                                                    <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </section>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <section>
                                                            <label for="child1">Enfants&nbsp;<span class="badge bg-success">-12 ans</span></label>
                                                            <select class="cs-select cs-skin-border" name="child1">
                                                                @for($i = 0; $i<11; $i++)
                                                                    <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </section>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <section>
                                                            <label for="moyen1">Votre moyen de Transport</label>
                                                            <select class="cs-select cs-skin-border" id="moyenid1" name="moyen1">
                                                                <option value="0">Quel est votre moyen de Transport?</option>
                                                                <option value="Passager piéton">Passager piéton</option>
                                                                <option value="Vélo">Vélo</option>
                                                                <option value="Voiture" class="showmark">Voiture</option>
                                                                <option value="Camping-car" class="showmark">Camping-car</option>
                                                                <option value="Moto" class="showmark">Moto</option>
                                                                <option value="Minibus" class="showmark">Minibus</option>
                                                                <option value="Fourgonnette" class="showmark">Fourgonnette</option>
                                                            </select>
                                                        </section>
                                                    </div>
                                                </div>



                                            <div class="col-xs-12 hidden" id="markpart" style="margin-top: 15px">
                                                <label for="marque">Marque</label>
                                                <input type="text" class="form-control" name="marque" placeholder="Marque"/>
                                                <label for="modele">Modèle</label>
                                                <input type="text" class="form-control" name="modele" placeholder="Modèle"/>
                                                <label for="longueur">Longueur</label>
                                                <input type="text" class="form-control" name="longueur" placeholder="exemple 4.5m"/>
                                                <label for="hauteur">Hauteur</label>
                                                <input type="text" class="form-control" name="hauteur" placeholder="exemple 1.5m"/>
                                                <label for="largeur">Largeur</label>
                                                <input type="text" class="form-control" name="largeur" placeholder="exemple 1.5m"/>
                                            </div>
                                            <div class="col-xs-12" style="margin-top: 20px">
                                                <input type="submit" class="btn btn-primary btn-block" value="Valider">
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="desc2 animate-box">
                            <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1" style="text-align: center">
                                <h2>Voyager, c’est découvrir</h2>
                                <h2>Voyager, à son meilleur</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <div id="fh5co-tours" class="fh5co-section-gray" style="margin-top: 250px">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Nos Voyages en bateau</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
        </div>
    </div>

@endsection
