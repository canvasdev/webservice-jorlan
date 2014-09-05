<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Operação Jorlan Goiania</title>
        <meta name="description" content="Nossa missão e vender 300 carros em 10 dias, aproveite nossas ofertas especiais.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="css/alertify.core.css" rel="stylesheet" type="text/css" />
        <link href="css/alertify.default.css" rel="stylesheet" type="text/css" />
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/url.js"></script>
        <script src="js/alertify.js" type="text/javascript"></script>
        <script language="javascript" src="js/jquery.maskedinput-1.3.js"></script>
        <script src="js/placeholders.min.js"></script>
        <script type="text/javascript" src="js/jquery.responsive_countdown.js"></script> 
    </head>

    <body>

<!-- Aviso iPad retrato -->
<div class="aviso-ipad">
  <div class="tablet-icone-aviso"><image src="images/tablet-aviso-icone.png" width="223"></div>
  <div class="rotate-icon"><image src="images/rotate-icon.png" width="44.5"></div>
  <div class="texto-aviso"><strong>PARA UMA MELHOR EXPERIÊNCIA UTILIZE O DISPOSITIVO NA HORIZONTAL.</strong></div>
</div>

 <!-- Inicio versões dekstop e tablets -->
<div class="desktops">
     <div class="preload">
       <div class="splash-load"></div>
     </div>

<div class="chat-btn"><a href="https://www6.directtalk.com.br/chat/?idd=FE8A001488BBF0030802&origemChat=chat&codEmpresa=9" target="_blank" onclick="if(navigator.userAgent.toLowerCase().indexOf('opera') != -1 &amp;&amp; window.event.preventDefault) window.event.preventDefault();this.newWindow = window.open('https://www6.directtalk.com.br/chat/?idd=FE8A001488BBF0030802&origemChat=chat&codEmpresa=9;url='+escape(document.location.href)+'&amp;referrer='+escape(document.referrer), '', 'toolbar=0,scrollbars=0,location=0,status=1,menubar=0,width=640,height=480,resizable=1');this.newWindow.focus();this.newWindow.opener=window;return false;"><img src="http://www.grupoocp.com.br/chat/jorlan/locales/pt-br/button/mblue_on.gif" border="0" alt=""/></a></div>
        
     <div class="logo-acao">
        <div class="container-contador">
        <div id="first_countdown" style="position: relative; width: 100%; height: 100px; margin-left:-5px;"></div>
  </div>
     </div>
     <div class="container-tarja-top">
       <div class="tarja-topo"></div>
       <div class="chamada-acao"></div>
     </div>

        <div id="car-roullet">
           <?
           $ofertas = simplexml_load_file('lista.xml'); 
           foreach ($ofertas->cidade as $oferta) {
             echo '
                <div class="selo-veiculo veiculo-'.$oferta->id.' transition-1s">

                    <div class="oferta-condicao transition-5ms">'.$oferta->condicao.'</div>
                    <div class="valor-oferta-condicao transition-5ms">'.$oferta->valor.'</div>
                    <div class="selo-veiculo-img transition-5ms"><img src="images/'.$oferta->selo.'" width="160px"></div>
                    <!--<div class="ver-outras-ofertas" onClick="outrasOfertas()">VER OUTRAS OFERTAS</div>-->
                    
                </div>
            ';
              }
           ?>

            <div class="bg-form">
                <div class="arrow-form"></div>
                <div class="tarja-chamada">
                <?
                    $veiculosform = simplexml_load_file('lista.xml');
                    foreach($veiculosform as $nomeform ){

                     echo '<div class="chamada-form opcional'.$nomeform->id.' transition-5ms">PREENCHA O FORMULÁRIO PARA SABER MAIS SOBRE O '.$nomeform->nome.'</div>';

                    };
                ?>
                
                </div>

  <form onSubmit="return validar1();"  id="form1" name="form1" method="post" action="index.php">
            <input type="hidden" name="origem" id="origem"  value="Hotsite" />
            <div class="veiculo-form"></div>
            <input type="hidden" name="campanha" id="campanha"  value="Vitrine de Ofertas Renault" />
            <input type="hidden" name="opcao" id="opcao"  value="A" />
            <input type="hidden" name="linkResposta" id="linkResposta" value="http://vitrinedeofertasrenault.com/contatoenviado.html" />
            <div id="selectcon" class="styled-select">
            <select name="codempresa" id="codempresa" name="codempresa" style="width:250px; color:#848484;">
             <option value="9">Escolha uma concessionária:</option>
             <option value="9">Jorlan Lago das Rosas</option>
             <option value="15">Jorlan Pio XII</option>
            </select></div>
            <div class="inputname"><input  type="text" name="nome" id="nome" placeholder="Qual é o seu nome?" style="width:200px; height:15px;"  /></div>
            <div class="inputemail"><input   type="text" name="email" id="email" placeholder="Qual é o seu email?"  style="width:200px; height:15px;"  /></div>
            <div class="inputtel"><input   type="text" name="telefone" class="mask-fone" placeholder="Qual é o seu telefone?"  id="telefone" style="width:200px; height:15px;"/></div>
            <div class="inputtxtarea"><textarea rows="4" style="width:200px;" placeholder="Deseja deixar uma mensagem?"  name="mensagem" id="mensagem"></textarea> </div>
            <div class="inputall"><input name="charset" type="hidden" value="iso-8859-1" />
            <input type="submit" name="enviar" value="Quero mais informações!" class="btn" /></div> 
 </form>
            </div>

            <div id="container-blocos" class="transition-1s">
             <? 
                $banners = simplexml_load_file('lista.xml');
                foreach ($banners as $banner) {
                echo '<div class="bloco-veiculo"><img src="images/'.$banner->banner.'"></div>';
                  
                };
             ?>
            </div>
        </div>

        <div class="subtitle">ESCOLHA UM VEÍCULO ABAIXO E COMPROVE AS MELHORES OPORTUNIDADES</div>

        <div class="container-ofertas-secundarias transition-5ms">
            <div class="limite-ofertas">
                <div class="outros-veiculos" onClick="outrosVeiculos()">VER OUTROS VEÍCULOS</div>

                <div class="box-outras-ofertas">
                  <div class="title-box-outras-ofertas">SOBRE O VEÍCULO</div>
                  <div class="sobre-veiculo">
                    <?
                        $sobre = simplexml_load_file('lista.xml');
                        foreach ($sobre as $info) {

                        echo '<div class="opcional'.$info->id.'">'.$info->sobre.'</div>';
                         
                        };

                    ?> 
                  </div>
                  
              </div>

                <div class="box-outras-ofertas">
                    <div class="title-box-outras-ofertas">OPCIONAIS</div>

                    <? 
                    $opcionais = simplexml_load_file('lista.xml'); 
                    foreach ($opcionais->veiculo as $opcional) {
                       
                       echo '
                       <div class="op opcional'.$opcional->id.'"><div class="marcador"></div>'.$opcional->opcional->op[0].'</div>
                       <div class="op opcional'.$opcional->id.'"><div class="marcador"></div>'.$opcional->opcional->op[1].'</div>
                       <div class="op opcional'.$opcional->id.'"><div class="marcador"></div>'.$opcional->opcional->op[2].'</div>
                       <div class="op opcional'.$opcional->id.'"><div class="marcador"></div>'.$opcional->opcional->op[3].'</div>
                       <div class="op opcional'.$opcional->id.'"><div class="marcador"></div>'.$opcional->opcional->op[4].'</div>
                       <div class="op opcional'.$opcional->id.'"><div class="marcador"></div>'.$opcional->opcional->op[5].'</div>

                       ';

                    }
                    ?>
                    
                </div>

            </div>
        </div>
             <div class="controle-left-slider" id="back" onClick="moveSlider(this)"></div>
             <div class="controle-rigth-slider" id="next" onClick="moveSlider(this)"></div>
             <div class="container-geral-veiculos">
                <div class="container-veiculos transition-1s">
                  <div class="home">
                    <? include('veiculos.php'); ?>  
                  </div>   
                </div>
              </div>

<!-- Inicio ofertas especiais -->
<div class="container-ofertas-especiais">

  <div class="box-oferta-especial">
   <div class="close-ad" onClick="closead()"></div>
    <div class="logo-especial"></div>
      <div class="topbar-especial">
        <div class="topbar-especial-left"></div>
        <div class="chamada-ofertaespecial">VOCÊ TEM POUCO TEMPO PARA APROVEITAR ESSA OPORTUNIDADE!</div>
      </div>
      <div class="container-formulario-especial">
          <form onSubmit="return validar2();"  id="form2" name="form2" method="post" action="index.php">
            <input type="hidden" name="origem" id="origem"  value="Hotsite" />
            <div class="veiculo-form"></div>
            <input type="hidden" name="campanha" id="campanha"  value="Vitrine de Ofertas Renault" />
            <input type="hidden" name="opcao" id="opcao"  value="A" />
            <input type="hidden" name="linkResposta" id="linkResposta" value="http://vitrinedeofertasrenault.com/contatoenviado.html" />
            <div id="selectcon-especial" class="styled-select">
            <select name="codempresa" id="codempresa" name="codempresa" style="width:250px; color:#848484;">
             <option value="9">Escolha uma concessionária:</option>
             <option value="9">Jorlan Lago das Rosas</option>
             <option value="15">Jorlan Pio XII</option>
            </select></div>
            <div class="inputname-especial"><input  type="text" name="nome" id="nome" placeholder="Qual é o seu nome?" style="width:200px; height:15px;"  /></div>
            <div class="inputemail-especial"><input   type="text" name="email" id="email" placeholder="Qual é o seu email?"  style="width:200px; height:15px;"  /></div>
            <div class="inputtel-especial"><input   type="text" name="telefone" class="mask-fone" placeholder="Qual é o seu telefone?"  id="telefone" style="width:200px; height:15px;"/></div>
            <div class="inputtxtarea-especial"><textarea rows="4" style="width:200px;" placeholder="Deseja deixar uma mensagem?"  name="mensagem" id="mensagem"></textarea> </div>
            <div class="inputall-especial"><input name="charset" type="hidden" value="iso-8859-1" />
            <input type="submit" name="enviar" value="Quero mais informações!" class="btn" /></div> 
          </form>
      </div>

      <div class="ofertaespecial-ad">
        <? $especial = simplexml_load_file('lista.xml');
        foreach ($especial as $ad) {
          echo '
            <img class="opcional'.$ad->id.'" src="images/'.$ad->ofertaesp.'" height="350" width="450">
          ';
        }
        ?>

      </div>

  </div>

</div>

        <div class="boxes">

            <div class="box-interno">
                <div class="title-box">VANTAGENS DO JORLAN 300</div>
                <div class="conteudo-box">
                 
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis nulla at quam maximus volutpat. Nunc risus orci, lobortis sit amet condimentum in, ullamcorper id massa. Sed a risus vitae justo tincidunt tincidunt posuere elementum felis. Aliquam erat volutpat. In a augue ac urna scelerisque varius et sit amet nisi.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis nulla at quam maximus volutpat. Nunc risus orci, lobortis sit amet condimentum in, ullamcorper id massa. Sed a risus vitae justo tincidunt tincidunt posuere elementum felis. Aliquam erat volutpat. In a augue ac urna scelerisque varius et sit amet nisi.

                </div>
            </div>

            <div class="box-interno" id="box-regulamento">
                <div class="title-box-regulamento">REGULAMENTO</div>
                <div class="conteudo-box-regulamento">
              <? 
              foreach ($xml->veiculo as $id) {
              echo'<div class="opcional'.$id->id.'">'.$id->juridico.'</div>';
              }
              ?>
                </div>
            </div>
        </div>

        <div class="rodape">
           <div class="logo-rodape"></div>
        </div>

</div>        


<!-- Inicio versão para smartphones -->
<div class="smartphones">
  <div class="container-smartphone">
   <div class="container-interno-mobile">

    <div class="topo-mobile">
      <div class="chamada-mobile"></div>
    </div>
    <div class="banner-mobile"></div>
    <div class="tarja-chamada-mobile">
      <div class="txt-chamada-mobile"><strong>TOQUE EM UM VEÍCULO ABAIXO E APROVEITE!</strong></div>
    </div>

<? $veiculomob = simplexml_load_file('lista.xml');
  foreach ($veiculomob->veiculo as $carro){
   echo'

    <div class="box-veiculo-mobile" id="'.$carro->id.'" onClick="mostraVeiculo(this)">
      <img src="images/'.$carro->fotomobile.'" width="100%">
      <div class="nome-veiculo-mobile">'.$carro->nome.'</div>
    </div>

   ';
  }
  ?>
    </div>
  </div>

  <div class="container-mobile-b transition-5ms">
   <? $bannermobile = simplexml_load_file('lista.xml');
      foreach ($bannermobile->veiculo as $bannerm) {
        echo'
        <div class="banner-interno-mobile opcional'.$bannerm->id.'">
          <img src="images/'.$bannerm->bannermobile.'" width="100%">
        </div>
        ';
       
      }
    ?>
    <?
      $ofertas = simplexml_load_file('lista.xml'); 
      foreach ($ofertas->veiculo as $oferta) {
           echo' 

    <div class="price-mobile-info opcional'.$oferta->id.'">
      <div class="padrao-price">
        <div class="txt-padrao"><strong>'.$oferta->condicao.':</strong></div>
      </div>
      <div class="txt-valor">'.$oferta->valor.'</div>
    </div>

    ';
     }
   ?>
    <div class="tabs-mobile">
      <div class="txt-tabs-mobile">OPCIONAIS</div>
    </div>
    <div class="tabs-mobile">
      <div class="txt-tabs-mobile">SOBRE</div>
    </div>

    <div class="container-opcionais-mobile">

      <? 
          $opcionais = simplexml_load_file('lista.xml'); 
          foreach ($opcionais->veiculo as $opcional) {
             
             echo '
             <div class="op opcional'.$opcional->id.'"><div class="marcador"></div>'.$opcional->opcional->op[0].'</div>
             <div class="op opcional'.$opcional->id.'"><div class="marcador"></div>'.$opcional->opcional->op[1].'</div>
             <div class="op opcional'.$opcional->id.'"><div class="marcador"></div>'.$opcional->opcional->op[2].'</div>
             <div class="op opcional'.$opcional->id.'"><div class="marcador"></div>'.$opcional->opcional->op[3].'</div>
             <div class="op opcional'.$opcional->id.'"><div class="marcador"></div>'.$opcional->opcional->op[4].'</div>
             <div class="op opcional'.$opcional->id.'"><div class="marcador"></div>'.$opcional->opcional->op[5].'</div>

             ';

          }
      ?>
      
    </div>

    <div class="container-sobre-mobile">

      <div class="container-txt-sobre-mobile">
        <?
            $sobre = simplexml_load_file('lista.xml');
            foreach ($sobre as $info) {

            echo '<div class="opcional'.$info->id.'">'.$info->sobre.'</div>';
             
            };

        ?> 
      </div>

    </div>


    <div class="tarja-regulamento-mobile">
      <div class="txt-tarja-regulamento-mobile">
        REGULAMENTO
      </div>
    </div>


    <div class="container-regulamento-mobile">
      <div class="container-txt-regulamento-mobile">
         <? 
              foreach ($xml->veiculo as $id) {
              echo'<div class="opcional'.$id->id.'">'.$id->juridico.'</div>';
              }
        ?>
      </div>
    </div> 

<div class="container-ctas-mobile">
  <div class="container-outros-veiculos-mobile">
    <div class="container-txt-outros-veiculos-mobile" onClick="retornaSobreMobile(this)"><strong>OUTROS VEÍCULOS</strong></div>
  </div>
   <div class="container-saber-veiculos-mobile">
    <div class="container-txt-outros-veiculos-mobile" onClick="mostraFormularioMobile(this)"><strong>QUERO SABER MAIS</strong></div>
  </div>
</div>
      
  </div>


  <div class="container-mobile-c transition-5ms">

    <div class="container-chamada-form-mobile">

      <?
        $veiculosform = simplexml_load_file('lista.xml');
          foreach($veiculosform as $nomeform ){
           echo '<div class="chamada-form-mobile opcional'.$nomeform->id.' transition-5ms"><strong>PREENCHA O FORMULÁRIO PARA SABER MAIS SOBRE O '.$nomeform->nome.'</strong></div>';
          };
      ?>
      
    </div>

    <div class="container-form-mobile">
        <form onSubmit="return validar3();"  id="form3" name="form3" method="post" action="index.php">
            <input type="hidden" name="origem" id="origem"  value="Hotsite" />
            <div class="veiculo-form"></div>
            <input type="hidden" name="campanha" id="campanha"  value="Vitrine de Ofertas Renault" />
            <input type="hidden" name="opcao" id="opcao"  value="A" />
            <input type="hidden" name="linkResposta" id="linkResposta" value="http://vitrinedeofertasrenault.com/contatoenviado.html" />
            <div id="selectcon-mobile" class="styled-select select ">
            <select name="codempresa" id="codempresa" name="codempresa" style="width:300px; height:25px; color:#848484;">
             <option value="9">Escolha uma concessionária:</option>
             <option value="9">Jorlan Lago das Rosas</option>
             <option value="15">Jorlan Pio XII</option>
            </select></div>
            <div class="inputname-mobile"><input  type="text" name="nome" id="nome" placeholder="Qual é o seu nome?" style="width:220px; height:25px;"  /></div>
            <div class="inputemail-mobile"><input   type="text" name="email" id="email" placeholder="Qual é o seu email?"  style="width:220px; height:25px;"  /></div>
            <div class="inputtel-mobile"><input   type="text" name="telefone" class="mask-fone" placeholder="Qual é o seu telefone?"  id="telefone" style="width:220px; height:25px;"/></div>
            <div class="inputtxtarea-mobile"><textarea rows="4" style="width:220px;" placeholder="Deseja deixar uma mensagem?"  name="mensagem" id="mensagem"></textarea> </div>
            <div class="inputall-mobile"><input name="charset" type="hidden" value="iso-8859-1" />
            <input type="submit" name="enviar" value="Quero mais informações!" class="btn" /></div> 
 </form>
      
    </div>

    <div class="container-ctas-mobile">
  <div class="container-voltar-outros-veiculos-mobile">
    <div class="container-txt-outros-voltar-veiculos-mobile" onClick="escondeFormularioMobile(this)"><strong>VOLTAR</strong></div>
  </div>
</div>

  </div>




</div>

 <script>    
    $(function() {
        $("#first_countdown").ResponsiveCountdown({
           target_date:"2014/10/29 11:59:00",
           time_zone:0,target_future:true,
           set_id:0,pan_id:0,day_digits:2,
           fillStyleSymbol1:"rgba(0, 0, 0, 1)",
           fillStyleSymbol2:"rgba(255, 255, 255, 1)",
           fillStylesPanel_g1_1:"rgba(105, 105, 105, 1)",
           fillStylesPanel_g1_2:"rgba(255, 255, 255, 1)",
           fillStylesPanel_g2_1:"rgba(0, 0, 0, 1)",
           fillStylesPanel_g2_2:"rgba(41, 51, 64, 1)",
           text_color:"#666",
           show_ss:true,show_mm:true,
           show_hh:true,show_dd:true,
           f_family:"Verdana",show_labels:true,
           type3d:"single",max_height:300,
           days_long:"Dias",days_short:"dd",
           hours_long:"Horas",hours_short:"hh",
           mins_long:"Minutos",mins_short:"mm",
           secs_long:"Segundos",secs_short:"ss",
           min_f_size:9,max_f_size:30,
           spacer:"none",groups_spacing:0,text_blur:0,
        });     
    }); 
</script> 

<!--Evita saida do modo stand alone em dispositivos moveis -->
 <script type="text/javascript">
 if(("standalone" in window.navigator) && window.navigator.standalone){
 var noddy, remotes = false;document.addEventListener('click', function(event) {
 noddy = event.target;while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
 noddy = noddy.parentNode;}
 if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes)){event.preventDefault();document.location.href = noddy.href;}},false);}
 </script>



    </body>
</html>
