@extends('admin.Layouts.main')
@section('title') Accueil @endsection
@section('bigTitle') Boîte de réception @endsection
@section('pageName') Boîte de réception @endsection
@section('main')
<div class="col-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">Inbox</h3>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <div class="table-responsive mailbox-messages">
          <table class="table table-hover table-striped">
              <thead>
                  <th>Nom complet</th>
                  <th>Email</th>
                  <th>Sujet</th>
                  <th>Date et heure</th>
                  <th></th>
              </thead>
            <tbody>
              @forelse ($contacts as $contact)
              <tr>
                <td class="mailbox-name">{{ $contact->fullname }}</td>
                <td>
                  <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                </td>
                <td class="mailbox-subject"><b>{{ $contact->subject }}</b>
                </td>
                <td class="mailbox-attachment">{{ date('d/m/Y à H:i', strtotime($contact->created_at)) }}</td>
                <td>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#message{{ $contact->id }}">Lire le message</button>
                </td>
                <div class="modal fade" id="message{{ $contact->id }}" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Message</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="fullname">Nom complet :</label>
                          <input type="text" id="fullname" value="{{ $contact->fullname }}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                          <label for="email">Adresse email :</label>
                          <input type="text" id="email" class="form-control" value="{{ $contact->email }}" disabled>
                        </div>
                        <div class="form-group">
                          <label for="subject">Sujet :</label>
                          <input type="text" id="subject" class="form-control" value="{{ $contact->subject }}" disabled>
                        </div>
                        <div class="form-group">
                          <label for="message">Message :</label>
                          <textarea id="message" cols="30" rows="4" class="form-control" disabled>{{ $contact->message }}</textarea>
                        </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
              </tr>
              @empty
              <tr>
                <td colspan="4" class="text-center">Aucun message disponible</td>
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