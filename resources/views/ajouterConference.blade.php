@extends('layouts.sidebar')

@section('content')

                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-10 mx-auto">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">Ajouter Conference</h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('conferences.store') }}" method="POST" class="form form-vertical">
                               @csrf
                                <div class="form-body">
                                    <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">Titre</label>
                                        <input type="text" id="" class="form-control" name="titre">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Conference</label>
                                        <input type="text"class="form-control" name="conference">
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
                                        <label>Lieu</label>
                                        <input type="text" class="form-control" name="lieu">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Ville</label>
                                        <input type="text" class="form-control" name="ville">
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