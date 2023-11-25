<head>
    <style>
.logos
{
    width: 100%;
    text-align: center;
}
.logos img
{
    height: 50px;
}
.logos a
{
    font-size: 25px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: brown;
    text-decoration: none;
}
    </style>
</head>

<div class="logos">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="./assets/img/logo_new.png" alt="AanganStore">
      <span class="d-none d-lg-block">AanganStore</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
    
  </div><!-- End Logo -->
<h1 style="text-align:center;">Report</h1>
<p class="date" style="text-align: center;opacty:0.6;">{{$date}} to {{$enddate}}</p>
<table class="general-table"
    style="letter-spacing:1px;  font-family: 'Montserrat', sans-serif;
width:100%;
margin:20px auto;

height:auto;">
    <thead class="table-heading"
        style=" background-color:#e4755cbe;
letter-spacing:1px;
height: 40px;
text-align:center;
width:fixed;
color:white;">

        <tr>
            <th></th>
            <th scope="col">Sr No</th>
            <th scope="col">Category</th>
            <th scope="col">Item</th>
            <th scope="col">Quantity</th>
            <th scope="col">Entered at</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($consumptions as $i => $consumption)
            <tr style=" height:auto;  
border:2px solid #01987a0c;
text-align:center;">
                <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
                <th scope="row">{{ $i + 1 }}</th>
                <td style="  width:auto;
padding:10px 4px;
height:auto;">{{ $consumption->cname }}</td>
                <td>{{ $consumption->itemName }}</td>
                <td>{{ $consumption->qnt }}</td>
                <td>{{ $consumption->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
