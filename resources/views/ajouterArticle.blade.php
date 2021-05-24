@extends('layouts.sidebar')

@section('content')

                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-10 mx-auto">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">Ajouter Article</h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('articles.store') }}" method="POST" class="form form-vertical">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                    <div class="col-12">
                                        <div class="form-group" >
                                        <label>Titre</label>
                                        <input type="text" id="" class="form-control" name="titre">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group" >
                                        <label>Journal</label>
                                        <input type="text" class="form-control" name="journal">
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
                                        <label>if</label>
                                        <input type="text" class="form-control" name="if">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>indexe</label>
                                        <select name="indexe" id="" class="form-control">
                                            <option value="oui">oui</option>
                                            <option value="non">non</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Url</label>
                                        <input type="text" class="form-control" name="url">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label>Volume</label>
                                        <input type="text" class="form-control" name="volume">
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