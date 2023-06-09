<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #container {
            margin: 0 auto;
            margin-top: 50px;
        }

        .p-2 {
            padding: 5px;
        }

        .py {
            padding: 5px 0;
        }

        h2 {
            color: crimson;
        }

        .card {
            border: 1px solid seagreen;
            text-align: center;
            padding: 40px;
        }

        table {
            margin: 0 auto;
            width: 100%;
        }

        .img_box {
            position: absolute;
            top: 26%;
            right: 13%;
        }

    </style>
</head>

<body>
    <div id="container">
        <div class="img_box">
            <img src="{{ public_path('img/logo-f.5c608b98.png') }}" alt="">
        </div>
        <div class="card">
            <h2>Covid-19 Vaccine Certificate</h2>
            <table border="1">
                <tr>
                    <th class="p-2">Name</th>
                    <td class="p-2">{{ $user->name }}</td>
                </tr>
                <tr>
                    <th class="p-2">Email</th>
                    <td class="p-2">{{ $user->email }}</td>
                </tr>
                <tr>
                    <th class="p-2">Phone</th>
                    <td class="p-2">{{ $user->phone }}</td>
                </tr>
                <tr>
                    <th class="p-2">NID</th>
                    <td class="p-2">{{ $user->nid }}</td>
                </tr>
                <tr>
                    <th class="p-2">Date Of Birth</th>
                    <td class="p-2">{{ $user->date_of_birth }}</td>
                </tr>
                <tr>
                    <th class="p-2">Division</th>
                    <td class="p-2">{{ $user->hospital->district->division->name }}</td>
                </tr>
                <tr>
                    <th class="p-2">District</th>
                    <td class="p-2">{{ $user->hospital->district->name }}</td>
                </tr>
                <tr>
                    <th class="p-2">Hospital</th>
                    <td class="p-2">{{ $user->hospital->name }}</td>
                </tr>
                <tr>
                    <th class="p-2">Vaccine</th>
                    <td class="p-2">{{ $user->vaccine->name }}</td>
                </tr>
                <tr>
                    <th class="p-2">Registraion Date</th>
                    <td class="p-2">{{ $user->created_at->format('Y-M-d') }}</td>
                </tr>

                <tr>
                    <td colspan="6" class="text-center">
                        <h4>Vaccine Informations</h4>
                    </td>
                </tr>
                <tr>
                    <th class="p-2">Vaccine Status</th>
                    <td class="p-2">{{ $user->status }}</td>
                </tr>
                <tr>
                    <th class="p-2">First Dose</th>
                    <td>
                        {{ $user->first_dose->vaccine->name ?? 'Not Yet' }}
                    </td>
                    <th class="p-2">Date</th>
                    <td>{{ $user->first_dose->date ?? 'Not Yet' }}</td>
                    <th class="p-2">Doctor</th>
                    <td>{{ $user->first_dose->doctor->name ?? 'Not Yet' }}</td>
                </tr>

                <tr>
                    <th class="p-2">Second Dose</th>
                    <td>
                        {{ $user->second_dose->vaccine->name ?? 'Not Yet' }}
                    </td>
                    <th class="p-2">Date</th>
                    <td>{{ $user->second_dose->date ?? 'Not Yet' }}</td>
                    <th class="p-2">Doctor</th>
                    <td>{{ $user->second_dose->doctor->name ?? 'Not Yet' }}</td>
                </tr>
                {{-- <tr>
                    <th class="p-2">Booster Dose</th>

                    <td>
                        Pizer
                    </td>
                    <th class="p-2">Date</th>
                    <td>5555</td>
                    <th class="p-2">Doctor</th>
                    <td>Shahin</td>
                </tr> --}}
            </table>
        </div>
    </div>
</body>

</html>
