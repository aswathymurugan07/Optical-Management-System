<?php
include("CreateDb.php");
// get the form data
session_start();


$customer_name = $_POST['customer_name'];
$appoint_date = $_POST['appoint_date'];
$appoint_time = $_POST['appoint_time'];
$c_mail = $_POST['c_mail'];
$c_phoneno = $_POST['c_phoneno'];



// insert data into table
$sql = "INSERT INTO appointment1 (customer_name,appoint_date,appoint_time,c_mail,c_phoneno) VALUES ('$customer_name', '$appoint_date','$appoint_time','$c_mail','$c_phoneno')";

if (mysqli_query($con,$sql)) {
    ?>
<html>
    <head>
        <style>
           .img2{
            margin-left:550px;
            margin-top:100px;
           }
           h1{
                font-family:cursive;
                font-size: 24px;
                
                color:maroon;
            }
            .img1{
                float:left;
                margin-left:500px;
            }
           
        </style>
    </head>
<body>
    <img class="img2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRufqe2tXfmRpL8yBw-IYbKDabOGy9n5-pU7meO-pJXdQFqP8xKbVmbCMgpo6k1tybzlI0&usqp=CAU" height="400px" width="300px">
    <div>
    <img class="img1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOIAAADfCAMAAADcKv+WAAAAkFBMVEX///9isB5SqQBNpwBRqAD+//1KpgBXqwBgrxr5/PZLpQD8/vn2+/H5/PVbrRJksCDu9ujc7NHA3a6RxW2GwGDo8+Cz15vt9ei+3KnJ4res05W116Cp0Y6WyHSJwmODv1mkz4dstDvU6MWZyX3k8dhhrizO5L12uEfV6Mh7u1BvtT2t1JBztkmZyXmKwWhbqyBsie5RAAAIJklEQVR4nO2da3uqMAyAaaEUFRE3r3PzMu+eqf//3x1QN6dDSLi18eH9dL6cLVnapkmTYBgVFRUVFRUVT4cQ3/9QKkahNFy33++7rmo5isId9jqMm6YpZ+9D1cIUQLP9uuTScViII/l6o1qinGmMtjY/q3fBs9+faUM2e0vLY/dYc9Vy5cdgZzp/FAwwP1VLlhObnRWpYLBWJ7VnWKvunv9dot/wvmrxstMYePKhgsFKpX+q+ofoTfijInXvKF7sx2v0rGJbtYzZaBx4vILBXvRVC5mJYewuPOGNG4RPVDGK34UnrIFqMTPg78xWoobeWrWYGdgsE86Z804kfNj07ORFGhynL6rlTI04WAAFGX9VLWhqFrtEXxEiOw3VkqZlBdqGzJuRdReDOmQbBodpU7WkKWnOQYuUeUuqNnQ7oIOGyR3VDJwP24bBPqR60rSPMA3lmqoNh4BL6cmGa6o2/PcoQXMHp3qWinkdpCCzJlRt+Ao7SgMNidrQ38LcYYt/EPWH7ldifH/GPBBdpVBnwaypalFTsgA6fGbuSa5SYayA7pCZb6qFTcnGg2o4VS1qSoY2TEFmj1SLmpIXnpxnO9vwXbWoKRk9vQ3fYQ4/8BZET5rG9Olt+AG1Iadqwz0go3+2YU+1rCnpPL0NocETs4l6CwEMngIbEi0faoyhGhK9eRuNLTA8ZHJOMz4UHaiGnOjLTG0NXaXyQDRPMwGv0hlNDeE29KjmvCdgDTlNDWtgf+gsiRbwgc9Sx+6qljUVtQn01uZ4RCsUwTdvZtMsN2mMoTZkFtHwCXwvpZpOFHsTqiHVkiFwFoNJmg+IApyJYt6Mpsufgm3oLBeqhU1FD5qJCg5Tms0lPbC3YBbNiv0X8FnKbJrZNoSGRPMYn+CThnk7kjHwBm5DZ0mw6UIYC+gbcIBN0l0soO/4jOph2oXWYgSYJDtKuxKuoZyoljYN/hquoTejmKpxEavUMSmmapoHaCoqwCTZ3jWBlpuEGlJMZIgp/OrNvC29e5sw5vDwieatxhghNKTZDwwuigrhFItqhoh9SDPftoKHT6HPr6mWF8/mCL96ByoS3IjdJUZDm6DP92fwa1tw+SZYcyLA9SanVdqilxYW4FqFs4oE4/xXzGFKspB2Ds9FMZpRcA9lQ3akFyO+ANvzLtj0Xi/aGG8RXNw+yI1V7ILGYvzgfZHzFz7qUhMs0xI24u9VIjIvGdfDLdOSajLEYjgYDFaLHLIKzTHK5TOvU8I+XLwtbbt+wpa7t9UifBRK/XsPFiLKD41YfCrDHR+lE0jVaoWiOY7kx6/9KqWGwnjDxMABvPj4Imo2lyNt3hl2jRS2ROUxAmTxgf7q4RRHvhwP0VE4Ko9x+mMW7i9i3/y8upzirh2IZ+AzvPhXtqSQTlpfPfiL9ALpEMtZpolSeKacA03poqJ8Fp5tRS9TIeYgFya99QogCzIGZqUs0z7Ug3nmcpTovnAxcPinGxeuoeEjSijkcd+NdSKYx5nzj2QlPJW2UZE5l/uYROcAa8Ny5kSuUCqG5+u2/eAWu8HFwOEP65SgIabW50zL453I47XbQrqLQMVSchl99OI6nTybP57SlWgNrXIK9xsdpCM7K2lN7izZnKB/TmkzBjE1W79w6q3P39dXeNPFVcXSUm7g6Sv3EvLOdw+MMAboo4bxaVkaBnaETgn6o2R9d1FyYONi4PA/L8vTMPCNiKqfOzn5a/gOgXOuZ8xVmSoa/gx7tbwqaR+66OiChe9spWoY+LQviV5pF1ryiChu+8EuPW/ahM4liyLFcWUpqMtwMRVcmXG2Ssq+wW29OaCoKLo2Ls2OUtkbTYobSjrUVbmJQzl2rCssPRGl2NGbqdMQM9Iji4pq34NrqEKZVJSQOFWto/pJEv6uWB11GI+FK1vD4mgxqL2NKq9EYuvRCpUy1wGhlCdvCMMUIS4MS5t5IJ/Ih14ofK9LAZEw3jBtBwgV9alzC3UsQEOpVYMC/qUwGeeoV/+z+5W7e9TuQ1A+z9l1OPp9FqKds3ssOXMKAjFIAYC3U61PFPChLQA0/ehcjhGyp+mnLzA9zgnU9fH6t2zyUlF5rP8YZJ3+Q8p7L8WTz5HDdR4U3cwlCVD+QxSGrpP9BqC1EY1cbgDa97Hvs25H/cctNHfZtqNj6t8Dvci2VPlIl3RGDKjxCn+MqP1ODBEfGZaqqVU64yEurpHtxohS/514AlAl/wASO/EEfGjrnRFnFHbimRQlUiH6+8QrqHEgVyMW3y6UI+9pvKMksxNDmimWKg2feAXZ5B1C7kOX6FYTJmkZMbjkYMNjqXmcGMEn0owEh0oYc5SOGqfdHuPOMKeqRi+mCDB3VY/gnKWQV/gbgD61Czh88ErV8ykKArip3SRqxABgskpRiXsu9GEqltS6VwygZw5H0jxOL0BCDhXNJjkCakAm6fav7BOdI8EL+C1uYhkg0Y+0/SASx9h5BEfz3dHcxp84nK7b/6Edu1Qdoh9mvSV2YL3KlqH86C5jjMhVS5cPMR/E4m+UkqcxPL7jHAmOq43k4SAtdR2YufNoLKGtZ81iGh5MWXHIRvsRvEfqyCkHivdEphydHbUkfyzDiDsOL3u0RLGIiEE+NsXvJ8Ww+ZOOe4IY4wbxt8qBa9iqkI3unYp6dJnmy+hWR+ufaoHyp3Hblms+lce4cNOyqms3RjZqvx1HCbNAVfBruJYze4aERgTXtiNyNShQ/O+V6hyfz2NcGFonJeWR3jcxwGw6tm2bh+cJhSNo9Nvt/jP6i4qKioqKigoa/AcNVHrlGjPuvwAAAABJRU5ErkJggg==" height="50px" width="50px">
    <h1>Your appointment has been booked</h1>
        </div>
</body>
</html>
<?php
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}



?>