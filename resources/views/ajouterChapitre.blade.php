@extends('layouts.sidebar')

@section('content')

                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-10 mx-auto">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">Ajouter Chapitre</h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('chapitres.store') }}" method="POST" class="form form-vertical">
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
                                        <label>Auteur</label>
                                        <input type="text"class="form-control" name="auteur">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Book</label>
                                        <input type="text" class="form-control" name="book">
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
                                        <label>Lien</label>
                                        <input type="text" class="form-control" name="lien">
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