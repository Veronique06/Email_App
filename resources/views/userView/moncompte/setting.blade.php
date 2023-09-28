@extends('layouts.template')

@section('title', "Profil de ".Auth::user()->firstname." ".Auth::user()->lastname)

@section('title2')
@endsection

@section('contenu')

<div class="row">
    <div class="col-12">
        @include('userView.moncompte.general_profil')
    </div>
</div>

<div class="pb-4">
    <ul class="nav-border nav nav-pills mb-0" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link"  href="{{route('user.profil.mon_profil')}}">Mes informations</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active"  href="{{route('user.profil.setting')}}">Paramètres</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="col-12">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="Profile_Post" role="tabpanel" aria-labelledby="Profile_Post_tab">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Changer mot de passe</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Mot de passe actuel</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <input class="form-control" type="password" placeholder="Password">
                                        <a href="#" class="text-primary font-12">Mot de passe oublié ?</a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Nouveau mot de passe</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <input class="form-control" type="password" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Confirmer mot de passe</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <input class="form-control" type="password" placeholder="">
                                        <span class="form-text text-muted font-12">Ne communiquez jamais votre mot de passe.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9 col-xl-8 offset-lg-3">
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Changer mot de passe</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">Annuler</button>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Autres paramètres</h4>
                            </div><!--end card-header-->
                            <div class="card-body">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Email_Notifications" checked>
                                    <label class="form-check-label" for="Email_Notifications">
                                        Email Notifications
                                    </label>
                                    <span class="form-text text-muted font-12 mt-0">Do you need them?</span>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="API_Access">
                                    <label class="form-check-label" for="API_Access">
                                        API Access
                                    </label>
                                    <span class="form-text text-muted font-12 mt-0">Enable/Disable access</span>
                                </div>
                            </div><!--end card-body-->
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div><!--end tab-content-->
    </div><!--end col-->
</div>

@endsection

@section('code_js')
    <script src="{{asset('plugins/lightpick/lightpick.js')}}"></script>
    <script src="{{asset('assets/pages/jquery.profile.init.js')}}"></script>
@endsection
