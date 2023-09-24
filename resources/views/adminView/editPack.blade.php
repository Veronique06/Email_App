@extends('layouts.templateAdmin')

@section('title', "Modifier Pack ".$packs->title)
<!-- Titre de la page -->


@section('contenu')
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modifier Pack {{ $packs->title }}</h4>
                                </div><!--end card-header-->
                            <form action="{{ route('admin.save_edit')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <input type="hidden" name="pack_id" value="{{ $packs->id }}" id="">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end align-self-center mb-lg-0 form-label">Nom du pack</label>
                                        <div class="col-lg-6 col-xl-5">
                                            <input class="form-control form-control-sm" name="title" type="text" value="{{ $packs->title }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end align-self-center mb-lg-0 form-label">Nombre contact</label>
                                        <div class="col-lg-6 col-xl-5">
                                            <input class="form-control form-control-sm" name="nombre_contact" type="text" value="{{ $packs->nombre_contact }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end align-self-center mb-lg-0 form-label">Nombre email</label>
                                        <div class="col-lg-6 col-xl-5">
                                            <input class="form-control form-control-sm" name="nombre_email" type="text" value="{{ $packs->nombre_email }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end align-self-center mb-lg-0 form-label">Prix</label>
                                        <div class="col-lg-6 col-xl-5">
                                           <input class="form-control form-control-sm" name="price" type="text" value="{{ $packs->price }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end align-self-center mb-lg-0 form-label">Prix promo</label>
                                        <div class="col-lg-6 col-xl-5">
                                            <input class="form-control form-control-sm" name="price_promo" type="text" value="{{ $packs->price_promo }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end align-self-center mb-lg-0 form-label">Nombre jours</label>
                                        <div class="col-lg-6 col-xl-5">
                                            <input class="form-control form-control-sm" name="nombre_jours" type="text" value="{{ $packs->nombre_jours }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 text-end align-self-center mb-lg-0 form-label">Nombre multi-user</label>
                                        <div class="col-lg-6 col-xl-5">
                                            <input class="form-control form-control-sm" name="nombre_multi_user" type="text" value="{{ $packs->nombre_multi_user }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-9 col-xl-8 offset-lg-3 offset-xl-3">
                                            <div class="custom-control custom-checkbox">
                                               <button class="btn btn-primary" type="submit">Modifier</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </form>
                            </div><!--end card-->
                        </div>
                        </div><!--end col-->
@endsection
