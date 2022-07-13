@extends('layouts.plain')
@section('content')
    <ol class="breadcrumb">

        {{-- <li><a href="#"></a></li> --}}
        <li class="active"><a href="#">Barang</a></li>

    </ol>
    <div class="container-fluid">
        <div data-widget-group="group1">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>List Barang</h2>
                            <div class="panel-ctrls"></div>
                        </div>
                        <div class="panel-body">
                            <div class="text-right">
                                <button class="btn btn-success btn-sm" id="addBtn">
                                    <i class="fa fa-plus"></i> Create
                                </button>
                                <br><br>
                            </div>

                            {{-- id="example" --}}
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Created By</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($data) > 0)
                                        @foreach ($data as $d)
                                            <tr class="odd gradeX">
                                                <td>{{ $d['username'] }}</td>
                                                <td>{{ $d['nama'] }}</td>
                                                <td>{{ $d['harga'] }}</td>
                                                <td>{{ $d['stok'] }}</td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash-o"></i> Delete
                                                    </button>
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil"></i> Update
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" align="center">Data Tidak Ada</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container-fluid -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="form">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama"> Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama"> Harga</label>
                                    <input type="number" class="form-control" id="harga" placeholder="Harga"
                                        required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama"> Stok</label>
                                    <input type="number" class="form-control" id="stok" placeholder="Stok" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama"> Description</label>
                                    <textarea class="form-control" id="description" placeholder="Description" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@push('scripts')
    <script>
        $(() => {
            $('#addBtn').click(() => {
                $('#myModalLabel').html('Create {{ $title }}')
                $('#myModal').modal('show')
            })
        })
    </script>
@endpush
