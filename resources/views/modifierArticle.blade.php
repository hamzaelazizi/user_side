@extends('layouts.sidebar')

@section('content')

               <section class="section">
                    <div class="card">
                        <div class="card-header">
                            modifier article
                        </div>
                        <div class="card-body">
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>titre</th>
                                        <th>journal</th>
                                        <th>indexe</th>
                                        <th>url</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($article as $key => $data)
                                    <tr>
                                        <td>{{$data->titre}}</td>
                                        <td>{{$data->journal}}</td>
                                        <td>{{$data->indexe}}</td>
                                        <td>{{$data->url}}</td>
                                        <td>
                                             <form action="/updateArticle" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                <button class="btn btn-info m-1">Modifier</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('articles.destroy', $data->id) }}" method="POST">
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