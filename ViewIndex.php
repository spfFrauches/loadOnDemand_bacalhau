<!doctype html>
<html lang="pt-br">
    
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Load OnDemand - Saulo Frauches</title>
        
    </head>
    
    <body>
        
        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom">Load OnDemand</h2>
        </div>
         
        <div class="container">           
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr >
                                <th scope="col">Cód.</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">fldesabilita</th>
                            </tr>
                        </thead>
                        <tbody id="tablePlanos">
                            <?php //foreach ($planos as $key => $value): ?> 
                            <tr >
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                            </tr>                                                    
                            <?php //endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="d-flex justify-content-center loadDiv" id="loadDiv">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
             </div>
            
            <div class="row mb-5">
                <div class="col-lg-12 d-flex flex-row-reverse">
                    <button class="btn btn-primary" onClick="incrementClick()">Mais resultados...</button>       
                </div>
            </div>
            
        </div>
             
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
        
        <script src="loadOnDemand.js" ></script>
        
        
        
    </body>
</html>