@extends('layouts.sidebar')

@section('content')

               <section class="section">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">Modifier Ouvrage</h4>
                           
                        </div>
                        <div class="card-body">
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Date</th>
                                        <th>Publisher</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($ouvrage as $key => $data)
                                    <tr>
                                        <td>{{$data->titre}}</td>
                                        <td>{{$data->date}}</td>
                                        <td>{{$data->publisher}}</td>
                                        <td>
                                             <form action="/updateOuvrage" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                <button class="btn btn-info m-1">Modifier</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('ouvrages.destroy', $data->id) }}" method="POST">
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