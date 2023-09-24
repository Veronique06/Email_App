@extends('layouts.templateAdmin')

@section('title', "Liste des packs")
<!-- Titre de la page -->


@section('contenu')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Les packs d''abonnment disponible </h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nom du pack</th>
                                    <th>Nombre contact</th>
                                    <th>Nombre email</th>
                                    <th>Prix</th>
                                    <th>Prix promo</th>
                                    <th>Nombre jours</th>
                                    <th>Nombre multi-user</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $packs as $pack )
                                <tr>
                                    <td>{{ $pack->title }}</td>
                                    <td>{{ $pack->nombre_contact }}</td>
                                    <td>{{ $pack->nombre_email }}</td>
                                    <td><span class="badge badge-soft-warning">{{ $pack->price }} FCFA</span></td>
                                    <td>
                                        @if(empty($pack->price_promo))
                                        <span class="badge badge-soft-info">Pas en promo</span>
                                        @else
                                        <span class="badge badge-soft-danger">{{ $pack->price_promo }} FCFA</span>
                                        @endif
                                    </td>
                                    <td>{{ $pack->nombre_jours }}</td>
                                    <td>{{ $pack->nombre_multi_user }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.edit', $pack->id)}}"><i
                                                class="las la-pen text-secondary font-20"></i></a>
                                                <a   class="btn btn-outline-secondary" href="{{ route('admin.edit', $pack->id)}}">Liste des abonnés</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>
@endsection
