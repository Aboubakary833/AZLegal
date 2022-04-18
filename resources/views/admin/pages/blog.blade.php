@extends('admin.Layouts.main')
@section('title')
    Blog
@endsection
@section('bigTitle')
    Liste des articles
@endsection
@section('pageName')
    Liste des articles
@endsection
@section('main')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span>{{ $message }}</span>
      </div>
    @endif
    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span>{{ $message }}</span>
      </div>
    @endif

    <div class="col-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Liste des articles</h3>
                <div class="card-tools">
                    <a href="{{ route('blog.create') }}" class="btn btn-primary">Ajouter un article</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>Titre</th>
                            <th>Date de plublication</th>
                            <th>Afficher</th>
                            <th>Modification</th>
                            <th>Suppression</th>
                        </thead>
                        <tbody>
                            @forelse ($articles as $article)
                                <tr>
                                    <td class="mailbox-name">{{ $article->title }}</td>
                                    <td>Publié le {{ date('d/m/Y à H:i', strtotime($article->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('blog.show', $article->uuid) }}" class="btn btn-primary">Voir</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('blog.edit', $article->uuid) }}" class="btn btn-info">Modifier</a>
                                    </td>
                                    <td>
                                        <form action="#" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Aucun article disponible</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- /.table -->
                </div>
                <!-- /.mail-box-messages -->
            </div>
        </div>
        <!-- /.card -->
    </div>
@endsection
