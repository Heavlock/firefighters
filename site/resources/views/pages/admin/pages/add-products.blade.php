@extends('master')

@section('content')
    <div class="container mt-100 mb-5">
        <section class="fr-contactForm section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <button wire:click="count">кнопка {{$count}}</button>
                        <form wire:submit.prevent="store" class="contact-form">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="productName">Название товара</label>
                                    <input type="text" class="form-control" id="productName" name="productName"
                                           placeholder="Название товара">
                                    @error('productName') <span
                                        class="lead text-danger small">{{$message}}</span>@enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="productPrice">Цена товара</label>
                                    <input wire:model="productPrice" type="number" class="form-control"
                                           id="productPrice" name="productPrice"
                                           placeholder="Название товара">
                                    @error('productPrice') <span
                                        class="lead text-danger small">{{$message}}</span>@enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="productPhoto">Изображение товара</label>
                                    <input wire:model="productPhoto" type="file" class="form-control" id="productPhoto"
                                           name="productPhoto"
                                           placeholder="Название товара">
                                    @error('productPhoto') <span
                                        class="lead text-danger small">{{$message}}</span>@enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="productDescription">Описание товара</label>
                                    <textarea class="form-control" id="productDescription" name="productDescription"
                                              rows="4"
                                              placeholder="Описание товара"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="theme-btn btn-outline">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
