@extends('dashboard.templates.master')
@section('title', 'Editar Cupons')
@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>@yield('title')</h3>
                    <p class="text-subtitle text-muted">@yield('title')</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    
                    <form class="form form-vertical" method="post" enctype="multipart/form-data"
                          action="{{ route('dashboard.cupons.update', ['id' => $cupom->id]) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" id="nome" value="{{ old('nome') ?? $cupom->nome }}" class="form-control" name="nome" placeholder="Nome do cupom" required  style="text-transform: uppercase;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="desconto">Desconto</label>
                                        <input type="text" id="desconto" value="{{ old('desconto') ?? $cupom->desconto }}" class="form-control" name="desconto" placeholder="Desconto" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control" required>
                                            <option value="1" @if($cupom->status == 1) selected @endif>Ativo</option>
                                            <option value="0" @if($cupom->status == 0) selected @endif>Inativo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="apartir_de">Válido a partir de</label>
                                        <input type="datetime-local" id="apartir_de" value="{{ old('apartir_de') ?? $cupom->apartir_de }}" class="form-control" name="apartir_de" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="validade">Data de Validade</label>
                                        <input type="datetime-local" id="validade" value="{{ old('validade') ?? $cupom->validade }}" class="form-control" name="validade">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn icon icon-left btn-success mt-1">
                            <i data-feather="check-circle"></i>
                            Editar
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
