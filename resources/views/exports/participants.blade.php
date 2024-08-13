<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<table>
    <thead>
        <tr>
            <th colspan="6" style="text-align: center; font-weight: bold; font-size: 20px;">{{$event[0]->name}}</th>
        </tr>
        <tr >
            <th style="width: 250px; text-align: center; font-weight: bold; font-size: 11px; padding: 50px; background-color: gray;">Name</th>
            <th style="width: 500px; text-align: center; font-weight: bold; font-size: 11px; padding: 50px; background-color: gray;">Affiliation</th>
            <th style="width: 250px; text-align: center; font-weight: bold; font-size: 11px; padding: 50px; background-color: gray;">Email</th>
            <th style="width: 200px; text-align: center; font-weight: bold; font-size: 11px; padding: 50px; background-color: gray;">Contact no.</th>
            <th style="width: 200px; text-align: center; font-weight: bold; font-size: 11px; padding: 50px; background-color: gray;">PRC no.</th>
            <th style="width: 200px; text-align: center; font-weight: bold; font-size: 11px; padding: 50px; background-color: gray;">Date</th>
            <th style="width: 400px; text-align: center; font-weight: bold; font-size: 11px; padding: 50px; background-color: gray;">Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach($event[0]->participants as $item)
        <tr>
            <td style="height: 22px;">{{$item->participant->lastname}}, {{$item->participant->firstname}} {{$item->participant->middlename[0]}}. </td>
            <td>{{$item->participant->affiliation}}</td>
            <td style="text-align: center;">{{$item->participant->email}}</td>
            <td style="text-align: center;">{{$item->participant->contact_no}}</td>
            <td style="text-align: center;">{{$item->participant->prc_no}}</td>
            <td style="text-align: center;">{{$item->participant->created_at}}</td>
            <td >{{$item->participant->barangay->name}}, {{$item->participant->municipality->name}}, {{$item->participant->province->name}}, {{$item->participant->region->region}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</html>
