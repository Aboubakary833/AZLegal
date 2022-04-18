@extends('admin.Layouts.main')
@section('title') Créer un article @endsection
@section('bigTitle') Nouveau article @endsection
@section('pageName') Nouveau article @endsection
@section('main')

    <div class="container">
        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span>{{ $message }}</span>
          </div>
        @endif
        <form action="{{ route('blog.store') }}" method="POST">
            @csrf
            <div class="col-md-12">
                <div class="card card-outline card-info">
                  <div class="card-header">
                    <h3 class="card-title">
                      Editeur de texte
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group">
                        <label for="title">Titre :</label>
                        <input type="text" name="title" class="form-control" placeholder="Entrez le titre de votre article" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea id="summernote" rows="10" name="content">
                        </textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Publier</button>
                    </div>
                  </div>
                </div>
              </div>
        </form>
    </div>

@endsection

@section('additional_script')
    <script>
        $(function () {
            $('#summernote').summernote()
        })
    </script>
@endsection