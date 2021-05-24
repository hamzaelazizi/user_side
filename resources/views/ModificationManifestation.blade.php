@extends('layouts.sidebar')

@section('content')

                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-10 mx-auto">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">Ajouter Manifestation</h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('manifestations.store') }}" method="POST" class="form form-vertical">
                                @csrf
                                <div class="form-body">
                                    <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Titre</label>
                                        <input type="text" id="" class="form-control" name="titre" value="{{}}">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group" id="dynamic_field">
                                            <label>Organisateurs</label>
                                            <div class="input-group mb-2">
                                                <input type="text" name="organisateur[]" class="form-control name_list" /> 
                                                <button type="button" name="add" id="add" class="btn btn-success">Ajouter</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" class="form-control" name="date">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Type</label>
                                        <select name="type" class="form-select " >
                                            <option value="internationale">Internationale</option>
                                            <option value="nationale">Nationale</option>
                                            <option value="regionale">Regionale</option>
                                            <option value="locale">Locale</option>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Lien</label>
                                        <input type="text" class="form-control" name="lien">
                                        </div>
                                    </div>

                                    <div class="col-12  mb-5">
                                        <div class="form-group">
                                        <label>Fichier</label>
                                        <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Ajouter</button>
                                        <button type="reset" class="btn btn-primary me-1 mb-1">Ajouter Plus</button>
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