@extends('layout.main')

@section('header')
    <div class="page-title">
        <h1>Barang <small>Barang Listing</small></h1>
    </div>
@endsection

@section('page-breadcrumb')
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="/dasboard">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Inventory</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Barang</a>
        </li>
    </ul>
@endsection

@section('page-content')
    <div class="row">
        <div class="col-md-12">
            {{-- <div class="note note-danger note-shadow">
                <p>
                        NOTE: The below datatable is not connected to a real database so the filter and sorting is just simulated for demo purposes only.
                </p>
            </div> --}}
            <!-- Begin: life time stats -->
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-grid font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">Barang Listing</span>
                        <span class="caption-helper">manage barang...</span>
                    </div>
                    <div class="actions">
                        <a href="#" class="btn btn-circle btn-default" data-toggle="modal" data-target="#createModal">
                        <i class="fa fa-plus"></i>
                        <span class="hidden-480">
                            New Daftar Barang </span>
                        </a>
                        @include('layout.page.barang.create') <!-- Include the modal file here -->
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-container">
                        <table class="table table-striped table-bordered table-hover" id="datatable_orders">
                            <thead>
                                <tr role="row" class="heading text-center">
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 30%;">Nama Barang</th>
                                    <th style="width: 20%;">Kode Barang</th>
                                    <th style="width: 15%;">Stok</th>
                                    <th style="width: 15%;">Satuan</th>
                                    <th style="width: 15%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $item)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $item->namabarang }}
                                        </td>
                                        <td>
                                            {{ $item->kodebarang }}
                                        </td>
                                        <td>
                                            {{ $item->stok }}
                                        </td>
                                        <td>
                                            {{ $item->satuan }}
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#editModal{{ $item->id }}">Edit</button>

                                            <!-- Edit Modal -->
                                            {{-- @include('layout.page.barang.edit') <!-- Include the modal file here --> --}}

                                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteModal{{ $item->id }}">Delete</button>

                                            <!-- Delete Modal -->
                                            <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Confirm Delete</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete <strong>{{ $item->namabarang }}</strong>?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <form action="{{ route('barang.delete', $item->id) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End: life time stats -->
        </div>
    </div>
@endsection