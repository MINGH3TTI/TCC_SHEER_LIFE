<?php
    if (isset($_POST['submit'])) {

       /*     print_r('Nome:'.$_POST['nome']);
            print_r('<br>');
            print_r('Email:'.$_POST['email']);
            print_r('<br>');
            print_r('Senha:'.$_POST['senha']);
            print_r('<br>');
            print_r('Motivo:'.$_POST['telefone']);
            print_r('<br>');
            print_r('Senha:'.$_POST['data_nascimento']);
            print_r('<br>');
            print_r('Motivo:'.$_POST['genero']);
            print_r('<br>');
            print_r('Senha:'.$_POST['vicio']);
            print_r('<br>');
            print_r('Senha:'.$_POST['motivo']);
        
    */

         include_once('conexao.php');

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $telefone = $_POST['telefone'];
            $data_nascimento = $_POST['data_nascimento'];
            $genero = $_POST['genero'];
            $vicio = $_POST['vicio'];
            $motivo = $_POST['motivo'];



    $result1 = mysqli_query($conexao, "INSERT INTO usuario(nome_usuario,senha_usuario,email_usuario,telefone_usuario,data_usuario,genero_usuario)VALUES('$nome','$senha','$email','$telefone','$data_nascimento','$genero')");

    $result2 = mysqli_query($conexao, "INSERT INTO ficha(vicio_ficha,motivo_ficha )VALUES('$vicio','$motivo')");


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <link href="css/formulario.css" rel="stylesheet">

</head>

<body>
    <div class="box">
        <form action="Formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastrar-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>


                <p>Gênero:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br>


                <p>Vício:</p>
                <div class="custom-select" style="width:200px;">
                <select name="vicio" id="vicio">
                        <option value="selecione" id="selecione">Selecione</option>                  
                        <option value="alcool" id="alcool">Bebidas alcoólicas</option>
                        <option value="cigarro" id="cigarro">Cigarro</option>                       
                        <option value="internet ">Internet</option>
                        <option value="apostas">Apostas</option>                   
                </select>
                </div>
                <br>
                <p>Motivo</P>
                <textarea style=resize:none id="motivo" name="motivo" cols="50" placeholder="Descreva aqui o motivo para você querer parar"></textarea>
                <br><br>
                
             
                <script>
                    var x, i, j, l, ll, selElmnt, a, b, c;
                    /*look for any elements with the class "custom-select":*/
                    x = document.getElementsByClassName("custom-select");
                    l = x.length;
                    for (i = 0; i < l; i++) {
                    selElmnt = x[i].getElementsByTagName("select")[0];
                    ll = selElmnt.length;
                    /*for each element, create a new DIV that will act as the selected item:*/
                    a = document.createElement("DIV");
                    a.setAttribute("class", "select-selected");
                    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                    x[i].appendChild(a);
                    /*for each element, create a new DIV that will contain the option list:*/
                    b = document.createElement("DIV");
                    b.setAttribute("class", "select-items select-hide");
                    for (j = 1; j < ll; j++) {
                        /*for each option in the original select element,
                        create a new DIV that will act as an option item:*/
                        c = document.createElement("DIV");
                        c.innerHTML = selElmnt.options[j].innerHTML;
                        c.addEventListener("click", function(e) {
                            /*when an item is clicked, update the original select box,
                            and the selected item:*/
                            var y, i, k, s, h, sl, yl;
                            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                            sl = s.length;
                            h = this.parentNode.previousSibling;
                            for (i = 0; i < sl; i++) {
                            if (s.options[i].innerHTML == this.innerHTML) {
                                s.selectedIndex = i;
                                h.innerHTML = this.innerHTML;
                                y = this.parentNode.getElementsByClassName("same-as-selected");
                                yl = y.length;
                                for (k = 0; k < yl; k++) {
                                y[k].removeAttribute("class");
                                }
                                this.setAttribute("class", "same-as-selected");
                                break;
                            }
                            }
                            h.click();
                        });
                        b.appendChild(c);
                    }
                    x[i].appendChild(b);
                    a.addEventListener("click", function(e) {
                        /*when the select box is clicked, close any other select boxes,
                        and open/close the current select box:*/
                        e.stopPropagation();
                        closeAllSelect(this);
                        this.nextSibling.classList.toggle("select-hide");
                        this.classList.toggle("select-arrow-active");
                        });
                    }
                    function closeAllSelect(elmnt) {
                    /*a function that will close all select boxes in the document,
                    except the current select box:*/
                    var x, y, i, xl, yl, arrNo = [];
                    x = document.getElementsByClassName("select-items");
                    y = document.getElementsByClassName("select-selected");
                    xl = x.length;
                    yl = y.length;
                    for (i = 0; i < yl; i++) {
                        if (elmnt == y[i]) {
                        arrNo.push(i)
                        } else {
                        y[i].classList.remove("select-arrow-active");
                        }
                    }
                    for (i = 0; i < xl; i++) {
                        if (arrNo.indexOf(i)) {
                        x[i].classList.add("select-hide");
                        }
                    }
                    }
                    /*if the user clicks anywhere outside the select box,
                    then close all select boxes:*/
                    document.addEventListener("click", closeAllSelect);
                </script>

                

                <input type="submit" name="submit" id="submit">
                <br><br>
                <a class="ancora" href="Login.php">Já é registrado?</a>
            </fieldset>
        </form>
    </div>
</body>
</html>