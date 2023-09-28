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
            <a class="nav-link active"  href="{{route('user.profil.mon_profil')}}">Mes informations</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="{{route('user.profil.setting')}}">Paramètres</a>
        </li>
    </ul>
</div><!--end card-body-->
<div class="row">
    <div class="col-12">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="Profile_Post" role="tabpanel" aria-labelledby="Profile_Post_tab">
                <div class="row">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Information personnelle</h4>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Prénom</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" type="text" value="Rosa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Nom</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" type="text" value="Dodson">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Nom société</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" type="text" value="MannatThemes">
                                            <span class="form-text text-muted font-12">Nous ne communiquerons jamais votre adresse électronique à qui que ce soit.</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Téléphone</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="las la-phone"></i></span>
                                                <input type="text" class="form-control" value="+123456789" placeholder="Phone" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Email</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="las la-at"></i></span>
                                                <input type="text" class="form-control" value="rosa.dodson@demo.com" placeholder="Email" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Website Link</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="la la-globe"></i></span>
                                                <input type="text" class="form-control" value=" https://mannatthemes.com/" placeholder="Email" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">USA</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <select class="form-select">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>USA</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                            <button type="submit" class="btn btn-sm btn-outline-primary">Valider</button>
                                            <button type="button" class="btn btn-sm btn-outline-danger">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
