function validate(event) {
    if (event.target.c.value === "") {
        document.getElementById("msgerro").innerHTML="<p>Preencha o campo corretamente</p>";
        event.preventDefault();
    }
};

document.querySelector('#formulario').addEventListener('submit', validate);

$("#formulario2").submit(function() {
    if($("#d").val()== null || $("#d").val() ==""){
        //alert('Preencha o campo corretamente');
        document.getElementById("msgerro2").innerHTML="<p>Preencha o campo corretamente</p>";      
        return false;
    }
});
$("#d").on("input", function(){
    var regexp = /[^a-zA-Z ]/g;
    if(this.value.match(regexp)){
      $(this).val(this.value.replace(regexp,''));
    }
});

//const input = document.getElementById('c');
//console.log(input); // 👉️ input#first_name

// ✅ Works
//const value = input.value;
//console.log(value); // 👉️ "Initial value"
// JavaScript code campo de busca de atividades relacionadas
function search_atv() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('form-lista');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="block";                 
        }
    }
}
// JavaScript code para a lista de tabela
function toggleDivpc(){
    if(document.getElementById("ocultar").style.display == 'flex') {
        document.getElementById("ocultar-botao-baixo").style.display = 'none';
        document.getElementById("ocultar-botao").style.display = 'block';
        document.getElementById("ocultar").style.display = 'none';
        document.getElementById("adv").style.display = 'none';
        document.getElementById("adm").style.display = 'none';
        document.getElementById("consult").style.display = 'none';
        document.getElementById("corr").style.display = 'none';
        document.getElementById("edu").style.display = 'none';
        document.getElementById("mostrar").style.display = 'flex';
        document.getElementById("pub").style.display = 'flex';
        document.getElementById("soft").style.display = 'flex';
        document.getElementById("med").style.display = 'flex';
        document.getElementById("tec").style.display = 'flex';
        document.getElementById("tur").style.display = 'flex';

    } else {
        document.getElementById("ocultar").style.display = 'flex';
        document.getElementById("ocultar-botao").style.display = 'none';
        document.getElementById("ocultar-botao-baixo").style.display = 'block';
        document.getElementById("adv").style.display = 'flex';
        document.getElementById("adm").style.display = 'flex';
        document.getElementById("consult").style.display = 'flex';
        document.getElementById("corr").style.display = 'flex';
        document.getElementById("edu").style.display = 'flex';
        document.getElementById("mostrar").style.display = 'none';
        document.getElementById("pub").style.display = 'none';
        document.getElementById("soft").style.display = 'none';
        document.getElementById("med").style.display = 'none';
        document.getElementById("tec").style.display = 'none';
        document.getElementById("tur").style.display = 'none';
    }
      
}
// JavaScript code para a lista de cada tabela categoria
function toggleDivlistaarq(){
    if(document.getElementById("principal" || "arquitetura" || "corretagem-imoveis" || "publicidade" || "servicos-medicos" || "tecnologia" || "turismo" || "consultoria" || "software" || "educacao-cursos" || "administrativo" || "advogado" || "engenharia").style.display === 'block') {
        document.getElementById("principal").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'block';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }else if(document.getElementById("arquitetura").style.display === 'block'){
        document.getElementById("principal").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';
    }
    else{
        document.getElementById("principal").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'block';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }   
}
function toggleDivlistacorr(){
    if(document.getElementById("principal" || "arquitetura" || "corretagem-imoveis" || "publicidade" || "servicos-medicos" || "tecnologia" || "turismo" || "consultoria" || "software" || "educacao-cursos" || "administrativo" || "advogado" || "engenharia").style.display === 'block') {
        document.getElementById("principal").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'block';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }else if(document.getElementById("corretagem-imoveis").style.display === 'block'){
        document.getElementById("principal").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';
    }
    else{
        document.getElementById("principal").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'block';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';
    }   
}
function toggleDivlistapubl(){
    if(document.getElementById("principal" || "arquitetura" || "corretagem-imoveis" || "publicidade" || "servicos-medicos" || "tecnologia" || "turismo" || "consultoria" || "software" || "educacao-cursos" || "administrativo" || "advogado" || "engenharia").style.display === 'block') {
        document.getElementById("principal").style.display = 'none';
        document.getElementById("publicidade").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }
    else if(document.getElementById("publicidade").style.display === 'block'){
        document.getElementById("principal").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }else{
        document.getElementById("principal").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("publicidade").style.display = 'block';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }   
}
function toggleDivlistamed(){
    if(document.getElementById("principal" || "arquitetura" || "corretagem-imoveis" || "publicidade" || "servicos-medicos" || "tecnologia" || "turismo" || "consultoria" || "software" || "educacao-cursos" || "administrativo" || "advogado" || "engenharia").style.display === 'block') {
        document.getElementById("principal").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'block';
        document.getElementById("publicidade").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }else if(document.getElementById("servicos-medicos").style.display === 'block'){
        document.getElementById("principal").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';
    }
    else{
        document.getElementById("principal").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'block';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }   
}
function toggleDivlistati(){
    if(document.getElementById("principal" || "arquitetura" || "corretagem-imoveis" || "publicidade" || "servicos-medicos" || "tecnologia" || "turismo" || "consultoria" || "software" || "educacao-cursos" || "administrativo" || "advogado" || "engenharia").style.display === 'block') {
        document.getElementById("principal").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'block';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }else if(document.getElementById("tecnologia").style.display === 'block'){
        document.getElementById("principal").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';
    }
    else{
        document.getElementById("principal").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'block';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }   
}
function toggleDivlistatur(){
    if(document.getElementById("principal" || "arquitetura" || "corretagem-imoveis" || "publicidade" || "servicos-medicos" || "tecnologia" || "turismo" || "consultoria" || "software" || "educacao-cursos" || "administrativo" || "advogado" || "engenharia").style.display === 'block') {
        document.getElementById("principal").style.display = 'none';
        document.getElementById("turismo").style.display = 'block';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }else if(document.getElementById("turismo").style.display === 'block'){
        document.getElementById("principal").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }
    else{
        document.getElementById("principal").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'block';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }   
}
function toggleDivlistaconsult(){
    if(document.getElementById("principal" || "arquitetura" || "corretagem-imoveis" || "publicidade" || "servicos-medicos" || "tecnologia" || "turismo" || "consultoria" || "software" || "educacao-cursos" || "administrativo" || "advogado" || "engenharia").style.display === 'block') {
        document.getElementById("principal").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';

        document.getElementById("consultoria").style.display = 'block';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }else if(document.getElementById("consultoria").style.display === 'block'){
        document.getElementById("principal").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }
    else{
        document.getElementById("principal").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'block';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }   
}
function toggleDivlistasoft(){
    if(document.getElementById("principal" || "arquitetura" || "corretagem-imoveis" || "publicidade" || "servicos-medicos" || "tecnologia" || "turismo" || "consultoria" || "software" || "educacao-cursos" || "administrativo" || "advogado" || "engenharia").style.display === 'block') {
        document.getElementById("principal").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'block';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }else if(document.getElementById("software").style.display === 'block'){
        document.getElementById("principal").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }
    else{
        document.getElementById("principal").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'block';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }   
}
function toggleDivlistaedu(){
    if(document.getElementById("principal" || "arquitetura" || "corretagem-imoveis" || "publicidade" || "servicos-medicos" || "tecnologia" || "turismo" || "consultoria" || "software" || "educacao-cursos" || "administrativo" || "advogado" || "engenharia").style.display === 'block') {
        document.getElementById("principal").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'block';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }else if(document.getElementById("educacao-cursos").style.display === 'block'){
        document.getElementById("principal").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }
    else{
        document.getElementById("principal").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'block';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }   
}
function toggleDivlistaadm(){
    if(document.getElementById("principal" || "arquitetura" || "corretagem-imoveis" || "publicidade" || "servicos-medicos" || "tecnologia" || "turismo" || "consultoria" || "software" || "educacao-cursos" || "administrativo" || "advogado" || "engenharia").style.display === 'block') {
        document.getElementById("principal").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'block';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }else if(document.getElementById("administrativo").style.display === 'block'){
        document.getElementById("principal").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }
    else{
        document.getElementById("principal").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'block';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }   
}
function toggleDivlistaadv(){
    if(document.getElementById("principal" || "arquitetura" || "corretagem-imoveis" || "publicidade" || "servicos-medicos" || "tecnologia" || "turismo" || "consultoria" || "software" || "educacao-cursos" || "administrativo" || "advogado" || "engenharia").style.display === 'block') {
        document.getElementById("principal").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'block';
        document.getElementById("engenharia").style.display = 'none';

    }else if(document.getElementById("advogado").style.display === 'block'){
        document.getElementById("principal").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }
    else{
        document.getElementById("principal").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'block';
        document.getElementById("engenharia").style.display = 'none';

    }   
}
function toggleDivlistaeng(){
    if(document.getElementById("principal" || "arquitetura" || "corretagem-imoveis" || "publicidade" || "servicos-medicos" || "tecnologia" || "turismo" || "consultoria" || "software" || "educacao-cursos" || "administrativo" || "advogado" || "engenharia").style.display === 'block') {
        document.getElementById("principal").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'block';

    }else if(document.getElementById("engenharia").style.display === 'block'){
        document.getElementById("principal").style.display = 'block';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'none';

    }
    else{
        document.getElementById("principal").style.display = 'none';
        document.getElementById("corretagem-imoveis").style.display = 'none';
        document.getElementById("arquitetura").style.display = 'none';
        document.getElementById("servicos-medicos").style.display = 'none';
        document.getElementById("tecnologia").style.display = 'none';
        document.getElementById("turismo").style.display = 'none';
        document.getElementById("publicidade").style.display = 'none';

        document.getElementById("consultoria").style.display = 'none';
        document.getElementById("software").style.display = 'none';
        document.getElementById("educacao-cursos").style.display = 'none';
        document.getElementById("administrativo").style.display = 'none';
        document.getElementById("advogado").style.display = 'none';
        document.getElementById("engenharia").style.display = 'block';

    }   
}

const scrollAnima = document.querySelectorAll('[data-anima="scroll"]');

function animarScroll(event){

}

window.addEventListener('scroll', animarScroll)