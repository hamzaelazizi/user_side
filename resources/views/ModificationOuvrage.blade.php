@extends('layouts.sidebar')

@section('content')

                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-10 mx-auto">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">Ajouter Ouvrage</h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('ouvrages.update', $ouvrage->id) }}" method="post"  class="form form-vertical" >
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-body">
                                    <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Titre</label>
                                        <input type="text" id="" class="form-control" name="titre" value='{{$ouvrage->titre}}'>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group" id="dynamic_field">
                                            <label>Auteur</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="auteur[]" class="form-control name_list" /> 
                                                <button type="button" name="add" id="add" class="btn btn-success">Ajouter</button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" class="form-control" name="date" value='{{$ouvrage->date}}'>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>ISSN</label>
                                        <input type="text" class="form-control" name="issn" value='{{$ouvrage->issn}}'>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>ISBN</label>
                                        <input type="text" class="form-control" name="isbn" value='{{$ouvrage->isbn}}'>
                                        </div>
                                    </div>
                                    

                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Publisher</label>
                                        <input type="text" class="form-control" name="publisher" value='{{$ouvrage->publisher}}'>
                                        </div>
                                    </div>

                                    <div class="col-12  mb-5">
                                        <div class="form-group">
                                        <label>Fichier</label>
                                        <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" value="ajouter" class="btn btn-primary me-1 mb-1">Ajouter</button>
                                        <button type="submit" value="ajouter_plus" class="btn btn-primary me-1 mb-1">Ajouter Plus</button>
                                    </div>
                                    
                                    </div>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>

@endsection