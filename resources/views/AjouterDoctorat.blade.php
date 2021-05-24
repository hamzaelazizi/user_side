@extends('layouts.sidebar')

@section('content')

                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-10 mx-auto">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">Ajouter Doctorat</h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('doctorats.store') }}" method="POST"  class="form form-vertical">
                                @csrf
                                <div class="form-body">
                                    <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Titre</label>
                                        <input type="text" id="" class="form-control" name="titre">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" id="" class="form-control" name="date">
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Doctorant</label>
                                        <select name="doctorant" class="form-select " >
                                            <option value=""></option>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
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