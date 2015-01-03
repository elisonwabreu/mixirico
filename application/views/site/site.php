    <?php if (!defined("BASEPATH")) exit("No direct script access allowed");
switch ($tela):
    case 'home':
        echo '<div class="small-12 medium-12 columns text-center">';
        echo get_setting('txt_home');
        echo '</div>';
        echo '<ul class="example-orbit shadow" data-orbit>';
        $query = $this->midia->get_banner()->result();
        foreach ($query as $linha):
            echo '<li>';
            echo thumb($linha->caminho.'/', $linha->arquivo, 1024, 400, FALSE,"$linha->nome");
            printf('<div class="orbit-caption">%s</div>', $linha->descricao);
            echo '</li>';
        endforeach;
        echo '</ul>';
        echo '<div class="small-12 medium-12 columns bg-descricao shadow">';
        echo '<p class="p-h-base text-center">Aproveite as nossas dicas para conhecer essa cidade incrível.</p>';
        echo '<a href="./" class="button expand radius contato" data-reveal-id="contato">Clique agora mesmo e faça seu orçamento</a>';
        echo '</div>';
        ?>
        <div id="contato" class="reveal-modal small-12 columns" data-reveal>
            <?php
                echo form_open('site/contato');
                echo form_fieldset('Formulario de Contato','class="custom"');
                echo '<div class="small-6 columns">';
                echo form_label('Nome');
                echo form_input(array('name' => 'nome', 'class' => 'five','placeholder'=>'Digite seu nome aqui!'), set_value('nome'));
                echo '</div>';
                echo '<div class="small-6 columns">';
                echo form_label('E-mail');
                echo form_input(array('name' => 'email','type' => 'email', 'class' => 'five','placeholder'=>'email@email.com'), set_value('nome'));
                echo '</div>';
                echo '<div class="small-6 columns">';
                echo form_label('Telefone');
                echo form_input(array('name' => 'telefone', 'class' => 'five','placeholder'=>'+55 00 0000.0000'), set_value('nome'));
                echo '</div>';
                echo '<div class="small-6 columns">';
                echo form_label('Assunto');
                echo form_input(array('name' => 'assunto', 'class' => 'five','placeholder'=>'Seu assunto'), set_value('nome'));
                echo '</div>';
                echo '<div class="small-12 columns">';
                echo form_label('Mensagem');
                echo form_textarea(array('name' => 'msg', 'class' => 'five','placeholder'=>'Digite aqui a explicação sobre o assunto.'), set_value('nome'));
                echo form_submit(array('name' => 'enviar_email', 'class' => 'button radius contato expand'), 'Enviar E-mail');
                echo '</div>';
                echo form_fieldset_close();
                echo form_close();
            ?>
            <a class="close-reveal-modal">&#215;</a>
          </div>
        <?php
        break;
    case 'depoimentos':
        echo '<div class="small-12 medium-12 columns bg-sobre shadow">';
        foreach ($this->listDepoimentos as $linha):
            echo '<div class="panel small-12 columns bordas-radius shadow">';
            echo "<h3>Enviado por: ".$linha->nome."</h3>";
            echo '<hr />';
            echo "<p class=\"p-home\">".to_html($linha->depoimento)."</p>";
            echo "<h4><b>Data:</b> ".date('d/m/Y H:i:s', strtotime($linha->data))."</h4>";
            echo '</div>';
        endforeach;
        echo "<div class='pagination-centered panel'>" . $this->paginar . "</div>";        
        echo '</div>';
        break;
    case 'contato_sucesso':
        echo '<div class="small-12 medium-12 columns text-center">';
        get_msg('msgok');
        get_msg('msgerro');
        echo '<div class="small-12 medium-12 columns bg-sobre shadow" style="padding:40px 0;">';
        echo '<h2>Email Enviado com sucesso.</h2>';
        echo '<p class="p-home">Em breve responderemos a sua solicitação.</p>';
        echo '</div>';
        echo '</div>';
        break;
    case 'contato_erro':
        echo '<div class="small-12 medium-12 columns text-center">';
        get_msg('msgok');
        get_msg('msgerro');
        echo '<div class="small-12 medium-12 columns bg-compras shadow" style="padding:40px 0;">';
        echo '<h2>Ocorreu um erro!</h2>';
        echo '<p class="p-home">Ocorreu um erro no sistema ao tentar enviar seu contato.</p>';
        echo '<p class="p-home">Por favor, tente novamente mais tarde.</p>';
        echo '</div>';
        echo '</div>';
        break;
    case 'pagina':
        echo '<div class="small-12 medium-12 columns text-center">';
        $idpagina = $this->uri->segment(3);
        if ($idpagina==NULL):
                set_msg('msgerro', 'Esta página não existe! Por favor navegue através do menu no topo do site.', 'erro');
                redirect('site/erro_page');
        endif; 
        $pagina = $this->pagina->get_byslug($idpagina)->row();
        echo '<h2>'.  strtoupper($pagina->titulo).'</h2>';
        echo to_html($pagina->conteudo);
        echo '</div>';
        echo '<div class="small-12 medium-12 columns bg-sobre shadow">';
        echo '<ul class="clearing-thumbs small-block-grid-2 medium-block-grid-3" style="margin:10px 0;" data-clearing>';  
        $query = $this->midia->get_gal_img($this->uri->segment('3'))->result();
        foreach ($query as $linha):
            echo '<li>';
            echo '<a href="'. thumb($linha->caminho.'/', $linha->arquivo, 800, 600, TRUE, $linha->nome, FALSE).'">';
            echo thumb_zurb($linha->caminho.'/', $linha->arquivo, 480, 240, TRUE, $linha->descricao,"$linha->nome");
            echo '</a>';
            echo '</li>';
        endforeach;
        echo '</ul>';
        echo '<a href = "#" class = "button expand alert radius contato shadow" data-reveal-id="contato">Entre em contato conosco.</a>';
        echo '</div>';
        ?>
        <div id="contato" class="reveal-modal small-12 columns" data-reveal>
            <?php
                echo form_open('site/contato');
                echo form_fieldset('Formulario de Contato','class="custom"');
                echo '<div class="small-6 columns">';
                echo form_label('Nome');
                echo form_input(array('name' => 'nome', 'class' => 'five','placeholder'=>'Digite seu nome aqui!'), set_value('nome'));
                echo '</div>';
                echo '<div class="small-6 columns">';
                echo form_label('E-mail');
                echo form_input(array('name' => 'email','type' => 'email', 'class' => 'five','placeholder'=>'email@email.com'), set_value('nome'));
                echo '</div>';
                echo '<div class="small-6 columns">';
                echo form_label('Telefone');
                echo form_input(array('name' => 'telefone', 'class' => 'five','placeholder'=>'+55 00 0000.0000'), set_value('nome'));
                echo '</div>';
                echo '<div class="small-6 columns">';
                echo form_label('Assunto');
                echo form_input(array('name' => 'assunto', 'class' => 'five','placeholder'=>'Seu assunto'), set_value('nome'));
                echo '</div>';
                echo '<div class="small-12 columns">';
                echo form_label('Mensagem');
                echo form_textarea(array('name' => 'msg', 'class' => 'five','placeholder'=>'Digite aqui a explicação sobre o assunto.'), set_value('nome'));
                echo form_submit(array('name' => 'enviar_email', 'class' => 'button radius contato expand'), 'Enviar E-mail');
                echo '</div>';
                echo form_fieldset_close();
                echo form_close();
            ?>
            <a class="close-reveal-modal">&#215;</a>
          </div>
        <?php
        break;
    default:
        echo '<div class="small-12 medium-12 columns text-center"><div class="alert-box alert"><p>A tela solicitada não existe</p></div></div>';
        break;
endswitch;