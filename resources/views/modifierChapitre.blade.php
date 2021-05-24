@extends('layouts.sidebar')

@section('content')

               <section class="section">
                    <div class="card">
                        <div class="card-header">
                            modifier chapitre
                        </div>
                        <div class="card-body">
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>book</th>
                                        <th>lien</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($chapitre as $key => $data)
                                    <tr>
                                        <td>{{$data->titre}}</td>
                                        <td>{{$data->book}}</td>
                                        <td>{{$data->url}}</td>
                                        <td>
                                             <form action="/updateChapitre" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                <button class="btn btn-info m-1">Modifier</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('chapitres.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger m-1">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>


@endsection