<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid px-3">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5 border p-4">
                <h4 class="pb-2">Form Add Word</h4>
                <form action="{{ route('pushword') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name item:</label>
                        <input type="text" class="form-control" name="name" id="name" />
                    </div>
                    <div class="pl-4">
                        <div class="form-group">
                            <label for="indonesia">Indonesia:</label>
                            <input type="text" class="form-control" name="indonesia" id="indonesia" />
                        </div>
                        <div class="form-group">
                            <label for="english">English:</label>
                            <input type="text" class="form-control" name="english" id="english" />
                        </div>
                        <div class="form-group">
                            <label for="hankuk">Hankuk:</label>
                            <input type="text" class="form-control" name="hankuk" id="hankuk" />
                        </div>
                        <div class="form-group">
                            <label for="nihon">Nihon:</label>
                            <input type="text" class="form-control" name="nihon" id="nihon" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
            <div class="col-md-6 border ml-2  p-4">
                <h4>Data</h4>
                <table class="table">
                    <thead>
                        <td>Name</td>
                        <td>Ind</td>
                        <td>Eng</td>
                        <td>Han</td>
                        <td>Nih</td>
                    </thead>
                    <tbody>
                        @foreach ($data as $key=>$value)
                            <tr>
                                <td>{{ $key }}</td>
                                <td title="{{ $value['1'] }}">{{ substr_replace($value['1'], "...", 20) }}</td>
                                <td title="{{ $value['2'] }}">{{ substr_replace($value['2'], "...", 20) }}</td>
                                <td title="{{ $value['3'] }}">{{ substr_replace($value['3'], "...", 20) }}</td>
                                <td title="{{ $value['4'] }}">{{ substr_replace($value['4'], "...", 20) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>