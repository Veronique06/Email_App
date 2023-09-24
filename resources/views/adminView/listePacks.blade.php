@extends('layouts.templateAdmin')

@section('title', "") <!-- Titre de la page -->

@section('title2') 
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Liste des packs</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dastone</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">List</li>
                                        </ol>
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                            <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i data-feather="download" class="align-self-center icon-xs"></i>
                                        </a>
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
@endsection                          
@section('contenu')
 <div class="container-fluid">
               
                    <div class="row">
                        <div class="col-12">
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
                                        <td><span class="badge badge-soft-warning">{{ $pack->price }}</span></td>
                                        <td>{{ $pack->price_promo }}</td>
                                        <td>{{ $pack->nombre_jours }}</td>
                                        <td>{{ $pack->nombre_multi_user }}</td>
                                        <td>                                                       
                                            <a href="{{ route('admin.edit', $pack->id)}}"><i class="las la-pen text-secondary font-16"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                        </td>
                                    </tr>
                                  @endforeach
                                    </tbody>
                                </table>        
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div>
@endsection