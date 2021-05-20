@extends('layouts.main')

    @section('title')
        Профіль
    @endsection

    @section('main')
        <div class="wrapper">
            <div class="container">
                <div class="signup-box">
                    <h1>Профіль</h1>
                    <form action="/lab_5/public/profile" method="post">
                        @csrf
                        <input  type="text" name="firstname" value="{{$user->getFirstname()}}">
                        <input  type="text" name="surname" value="{{$user->getSurname()}}">
                        <input  type="text" name="phone" value="{{$user->getPhoneNum()}}">
                        <input  type="text" name="address" value="{{$user->getAddress()}}">
                        <button type="submit">
                            <a>Зберегти</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
