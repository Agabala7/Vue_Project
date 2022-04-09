@extends('layouts.master')
@section('title','Tərçümə siyahısı')
@section('content')

    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Tərçümə siyahısı</h3>
            </div>
            @include('layouts.error')
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th>Başlıq</th>
                            <th class="d-none d-sm-table-cell" style="width: 60%;">Tərçümə Məzmunu</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Əməliyyatlar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($translations as $translate)
                        
                        <tr>
                            <td class="font-w600">{{ $translate->title }}</td>
                            <td class="d-none d-sm-table-cell">{!! Str::limit($translate->contents, 75, '...') !!}</td>
                            <td class="text-center">
                                <button class="btn btn-outline-danger" onclick="translateDelete({{ $translate->id }})">Sil</button>
                                <button class="btn btn-outline-info" onclick="translateView({{ $translate->id }})">Bax</button>
                                <a href="{{ route('editTranslations',$translate->id) }}"><button class="btn btn-outline-primary mt-1">Redaktə et</button></a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tərçümə siyahısı</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <table class="table table-responsive-sm">
                  <tbody>
                    <tr>
                      <th>Məzmun</th>
                      <td id="view_contents"></td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

                    
@endsection
@section('addcss')
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
@endsection
@section('addjs')
    <script src="{{ asset('assets/js/ajax/translations-list.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script>
@endsection