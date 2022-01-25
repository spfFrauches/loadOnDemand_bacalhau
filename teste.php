<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

        <title>Hello, world!</title>
    </head>
    <body>
        
        <div class="container mt-2">
            <h1>Hello, world!</h1>
        </div>
        
        <div class="container">
            
            <div id="one">
                One
            </div>
            
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody id="bodytable" >
                    <tr >
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>                
                </tbody>
            </table>
            
            
        </div>
        
        
        
        
        

     
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
        
        <script>
            var d1 = document.getElementById('one');
            d1.insertAdjacentHTML('afterend', '<div id="two">two</div>');
            
            var lista = "<tr><td>Mark</td><td>Mark2</td><td>Mark3</td><td>Mark3</td></tr>";
            
            var d2 = document.getElementById('bodytable');
            d2.insertAdjacentHTML('beforeend', lista);
            
        </script>
        

    </body>
</html>



