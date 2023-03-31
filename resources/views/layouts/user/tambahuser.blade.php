@extends('layouts/master')

@section('content')        

    <div class="card shadow mb-1">
        <div class="card-header py-2">
            <form class="form-horizontal" method="POST" action="{{ route('pengguna.store') }}">
                @csrf
                <!-- <input name="_method" type="hidden" value="PATCH" /> -->
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-2 control-label" for="id">Nama Ibu</label>
                        <div class="input-group-prepend ">
                            <div class="input-group-prepend col-md-20">
                                <span class="input-group-text"><i class="fa fa-venus-mars"></i></span>
                                <select class="form-control" name="id" style="width: 100%;" required>
                                    <option selected="selected" value="">-- Nama Ibu --</option>
                                    @foreach($data as $datas)
                                        <option value="{{ $datas->id }}">{{ $datas->nama_ibu }} - {{ $datas->nama_suami }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-2 control-label" for="email">Email</label>
                        <div class="input-group col-md-8">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                <input type="text" class="form-control" placeholder="Email" name="email" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-2 control-label" for="email">Password</label>
                        <div class="input-group col-md-8">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                                <input type="text" class="form-control" placeholder="Password" name="password" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-2 control-label" for="level">Level</label>
                        <div class="input-group col-md-8">
                            <div class="input-group ">
                                <span class="input-group-text"><i class="fa fa-venus-mars"></i></span>
                                <select class="form-control input-group" name="level" >
                                    <option selected="selected" value="">-- Level --</option>
                                    <option value="0">User Ibu</option>
                                    <option value="1">Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-4 control-label" for="name"></label>
                        <div class="input-group col-md-8">
                            <button type="submit" class="btn btn-primary" style="margin-right: 6px;">Simpan</button>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

@endsection