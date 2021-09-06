@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<body>

<table>
    <td style="background-color:rgb(0, 128, 255); color:white; width:50%; height:100%; text-align:left; padding:100px;"><h1>{{$title}}</h1>
@if(count($services) > 0)
<ul>
 @foreach($services as $service)
    <li>{{$service}}</li>
 @endforeach
 </ul></td>
 <td style="padding-left:200px; width:50%;"><img src='https://www.dragoninsure.com/wp-content/uploads/2019/05/coastal-family-health-travel-clinic.jpg' alt='suitcases';  width=750px;/></td>

</table>

</body>
</html>
@endif
@endsection