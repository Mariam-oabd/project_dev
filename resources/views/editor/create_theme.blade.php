@extends('layouts.app')

@section('title', 'Create Theme')

@section('content')
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-input, .form-textarea, .form-select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .btn-submit {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color:rgb(0, 60, 255);
            color: white;
            cursor: pointer;
        }

        .btn-submit:hover {
        background-color:rgb(39, 0, 179);
        width: 150px;
        height: 100px;
        background: #0a2342;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        border-radius: 50px;
        overflow: hidden;
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);


        }
    </style>

    <div class="container">
        <h1>Create Theme</h1>

        <form action="{{ route('editor.themes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-textarea" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="user_id" class="form-label">Theme Manager</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    @foreach($themeManagers as $manager)
                        <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-input">
            </div>

            <button type="submit" class="btn-submit">Create Theme</button>
        </form>
    </div>
@endsection
