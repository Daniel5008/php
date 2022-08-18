<!DOCTYPE html>
<html>

<head>
     <title>Projeto Cotações</title>
</head>

<body>
     <form>
          <h1>Olá Mundo</h1>
     </form>
     <?php
     $arquivo = file_get_contents("https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL,ZAR-BRL,SAR-BRL,ARS-BRL,AUD-BRL,INR-BRL,BOB-BRL,CAD-BRL,CLP-BRL,CNY-BRL,COP-BRL,DKK-BRL,AED-BRL,HKD-BRL,JPY-BRL,CHF-BRL,NZD-BRL,PYG-BRL,PEN-BRL,PLN-BRL,GBP-BRL,RUB-BRL,SGD-BRL,SEK-BRL,TWD-BRL,UYU-BRL");

     $json = json_decode($arquivo, true);

     $cot_dolar_americano     = $json['USDBRL']['ask'];
     $cot_euro                = $json['EURBRL']['ask'];
     $cot_bitcoin             = $json['BTCBRL']['ask'];
     $cot_rand_sul_afr        = $json['ZARBRL']['ask'];
     $cot_riyal_saud          = $json['SARBRL']['ask'];
     $cot_peso_arg            = $json['ARSBRL']['ask'];
     $cot_dolar_australiano   = $json['AUDBRL']['ask'];
     $cot_rupia_indiana       = $json['INRBRL']['ask'];
     $cot_boliviano           = $json['BOBBRL']['ask'];
     $cot_dolar_canadense     = $json['CADBRL']['ask'];
     $cot_peso_chil           = $json['CLPBRL']['ask'];
     $cot_yuan_chines         = $json['CNYBRL']['ask'];
     $cot_peso_colombiano     = $json['COPBRL']['ask'];
     $cot_coroa_dinamarquesa  = $json['DKKBRL']['ask'];
     $cot_dirham              = $json['AEDBRL']['ask'];
     $cot_dolar_hong_kong     = $json['HKDBRL']['ask'];
     $cot_iene_japones        = $json['JPYBRL']['ask'];
     $franco_suico            = $json['CHFBRL']['ask'];
     $cot_dolar_neozelandes   = $json['NZDBRL']['ask'];
     $cot_guarani_paraguaio   = $json['PYGBRL']['ask'];
     $cot_sol_peru            = $json['PENBRL']['ask'];
     $cot_zloti_polones       = $json['PLNBRL']['ask'];
     $cot_libra_esterlina     = $json['GBPBRL']['ask'];
     $cot_rublo               = $json['RUBBRL']['ask'];
     $cot_cinga               = $json['SGDBRL']['ask'];
     $cot_coroa_sueca         = $json['SEKBRL']['ask'];
     $cot_dolar_taiunes       = $json['TWDBRL']['ask'];
     $cot_peso_uruguaio       = $json['UYUBRL']['ask'];
     ?>
</body>

</html>