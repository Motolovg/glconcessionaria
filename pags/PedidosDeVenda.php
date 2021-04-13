<?php





?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Pedidos de Venda">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>PedidosDeVenda</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="PedidosDeVenda.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.11.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/glconcessionaria.png"
}</script>
    <meta property="og:title" content="PedidosDeVenda">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-590b"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="Página-Inicial.html" class="u-image u-logo u-image-1" data-image-width="980" data-image-height="980">
          <img src="images/glconcessionaria.png" class="u-logo-image u-logo-image-1" data-image-width="64">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">Logout</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 20px;">Logout</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-ab7e">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-1">Pedidos de Venda&nbsp;</h1>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-ddca">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 21px;">
                <th class="u-border-1 u-border-black u-table-cell">Codigo de Venda</th>
                <th class="u-border-1 u-border-black u-table-cell">Nome</th>
                <th class="u-border-1 u-border-black u-table-cell">CPF</th>
                <th class="u-border-1 u-border-black u-table-cell">Endereço</th>
                <th class="u-border-1 u-border-black u-table-cell">Bairro</th>
                <th class="u-border-1 u-border-black u-table-cell">Numero</th>
                <th class="u-border-1 u-border-black u-table-cell">Data da Compra</th>
                <th class="u-border-1 u-border-black u-table-cell">Valor</th>
              </tr>
            </thead>
            <tbody class="u-grey-70 u-table-body u-table-body-1">
              <?php foreach($vendas as $venda) { ?>
                <tr style="height: 75px;">
                  <td class="u-border-1 u-border-grey-50 u-table-cell"><?php echo $venda['']; ?></td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell"><?php echo $venda['']; ?></td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell"><?php echo $venda['']; ?></td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell"><?php echo $venda['']; ?></td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell"><?php echo $venda['']; ?></td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell"><?php echo $venda['']; ?></td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell"><?php echo $venda['']; ?></td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell"><?php echo $venda['']; ?></td>
                </tr>
                <tr style="height: 76px;">
                  <td class="u-border-1 u-border-grey-50 u-table-cell">Row 2</td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell">Description</td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell">Description</td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell">Description</td>
                </tr>
                <tr style="height: 76px;">
                  <td class="u-border-1 u-border-grey-50 u-table-cell">Row 3</td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell">Description</td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell">Description</td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell">Description</td>
                </tr>
                <tr style="height: 76px;">
                  <td class="u-border-1 u-border-grey-50 u-table-cell"></td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell"></td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell"></td>
                  <td class="u-border-1 u-border-grey-50 u-table-cell"></td>
                </tr>
              <?php } ?>  
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-91d7"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Página-Inicial.html" class="u-image u-logo u-image-1" data-image-width="980" data-image-height="980">
          <img src="images/glconcessionariabranco.png" class="u-logo-image u-logo-image-1" data-image-width="80">
        </a>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
    </section>
  </body>
</html>