@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aut non ea, illo quidem voluptatem facilis aliquam voluptas! Dolorum neque amet temporibus minima ipsam numquam, voluptatum ipsa? Quae, adipisci soluta!
@endsection

@section('sidebar')
    @parent
    <p>This is append to the sidebar.</p>
@endsection