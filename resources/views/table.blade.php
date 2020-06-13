<h5>INDONESIA by PROVINCE</h5>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col"> @include('icon.map') Provinces</th>
      <th scope="col"> @include('icon.positive-lite') Positive</th>
      <th scope="col"> @include('icon.recovery-lite') Recovery</th>
      <th scope="col"> @include('icon.death-lite') Death</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ind_p as $i)
    <tr>
      <th scope="row">{{$i['attributes']['Provinsi']}}</th>
      <td>{{$i['attributes']['Kasus_Posi']}}</td>
      <td>{{$i['attributes']['Kasus_Semb']}}</td>
      <td>{{$i['attributes']['Kasus_Meni']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>