<!DOCTYPE html>
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
<html>

<head>
     <Style>
          body {
               background: -webkit-gradient(linear, left top, left bottom, from(#CCCCCC), to(#000000)) fixed;
               background: -moz-linear-gradient(top, #CCCCCC, #000000);
               filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#CCCCCC', EndColorStr='#000000');           
          }



          .title_contato {
               font-family: 'open_sansregular';
               font-weight: 600;
               font-size: 4em;
               color: #7FFFD4;
               text-align: left;
               margin-bottom: 20px;
          }

          input:focus~label,
          textarea:focus~label,
          input:valid~label,
          textarea:valid~label {

               font-size: 0.8em;
               color: #fff;
               top: -11px;
               -webkit-transition: all 0.225s ease;
               transition: all 0.225s ease;
               background: #00cfd5;
               padding: 3px 8px;
               left: 25px;
               border-radius: 50px;
               font-weight: bold;
          }

          .style-form-input {
               float: left;
               width: 295px;
               margin: 1em 0;
               position: relative;
               border-radius: 4px;
          }

          .right {
               float: right;
          }

          @media only screen and (max-width: 768px) {

               .style-form-input {
                    width: 100%;
               }
          }

          .style-form-input label {
               color: #999;
               padding: 1.3rem 30px 1rem 30px;
               position: absolute;
               top: 10px;
               left: 0;
               -webkit-transition: all 0.25s ease;
               transition: all 0.25s ease;
               pointer-events: none;
          }

          .style-form-input.full {
               width: 650px;
               max-width: 100%;
          }

          input,
          textarea {
               width: 100%;
               padding: 30px;
               border: 0;
               font-size: 1em;
               background-color: #2d2d2d;
               color: #fff;
               border-radius: 50px;
          }

          input:focus,
          textarea:focus {
               outline: 0;
          }

          input:focus~span,
          textarea:focus~span {
               width: 100%;
               -webkit-transition: all 0.075s ease;
               transition: all 0.075s ease;
          }

          textarea {
               width: 100%;
               min-height: 10em;
          }

          .input-container {
               width: 650px;
               max-width: 100%;
               margin: 20px auto 25px auto;
          }

          .btn-submit {
               width: 160px;
               color: #fff;
               font-size: 1.2em;
               float: left;
               s text-align: center;
               padding: 15px 35px;
               border-radius: 60px;
               display: inline-block;
               background-color: #06bec6;
               cursor: pointer;
               box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.06), 0 2px 10px 0 rgba(0, 0, 0, 0.07);
               -webkit-transition: all 300ms ease;
               transition: all 300ms ease;
               border: none;
          }

          .btn-submit:hover {

               transform: translateY(1px);
               box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.10),
                    0 1px 1px 0 rgba(0, 0, 0, 0.09);
          }

          @media (max-width: 768px) {

               .btn-submit {

                    width: 100%;
                    float: none;
                    text-align: center;

               }
          }

          input[type=checkbox]+label {
               color: #ccc;
               font-style: italic;
          }

          input[type=checkbox]:checked+label {
               color: #f00;
               font-style: normal;
          }
     </Style>
     <title>Projeto Cotações</title>
</head>

<body>

     <div class="row input-container">
          <h1 class="title_contato">Cotações</h1>

          <form method="post" action="">
               <div class="style-form-input full">
                    <input type="text" name="nome" required />
                    <label><i class="icon icon-user-1"></i> Digite a quantia em Reais(R$)</label>
               </div>

               <div class="style-form-input full">
                    <input type="text" name="email" required />
                    <label><i class="icon icon-mail-1"></i> Digite a moeda para qual deseja converter</label>
               </div>
               <!-- 
               <div class="style-form-input right">
                    <input type="text" name="assunto" required />
                    <label><i class="icon icon-info-circled"></i> Assunto</label>
               </div>

               <div class="style-form-input full">
                    <textarea name="mensagem" required></textarea>
                    <label><i class="icon icon-comments"></i> Mensagem</label>
               </div>
               <div class="style-form-input full">
                    <input type="hidden" name="acao" value="enviar">
                    <button class="btn-submit">Enviar</button>

               </div> -->
          </form>
     </div>
</body>

</html>