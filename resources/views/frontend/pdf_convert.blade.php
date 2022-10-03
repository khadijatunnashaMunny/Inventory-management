<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index PDF</title>
    <style>
        table, th, td{
            padding: 20px;
            margin: 20px;
            text-align: center;
            border: 1px solid black;
            border-radius: 5px;
        }
        th{
            text-align: center;
            background-color: green;
            color: white;
            font-weight: 600;
        }
        td{
            text-align: center;
            background-color: white;
            color: black;
            font-weight: 400;
        }
    </style>
</head>
<body>
<div>
    <h2 class="h2 text-center">Report</h2>
</div>

    <table style="box-shadow: 5px 10px black;" class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>

          </tr>
        </thead>
        <tbody>

            @foreach ($projects as $project)

                <tr>

                    <td>{{$project->product_name}}</td>
                    <td>{{$project->product_description}}</td>
                    <td>{{$project->product_quantity}}</td>
                    <td>{{$project->product_price}}</td>


                </tr>

          @endforeach

        </tbody>
      </table>


</body>
</html>