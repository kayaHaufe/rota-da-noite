// LÓGICA
// 1 - Selecionar elementos que serão animados
// 2 - Definir a classe que é adicionada durante a animação
// 3 - Criar função de animação
// 3.1 - Verificar a distância entre a barra de scroll e o topo do site
// 3.2 - Verificar se a distância do 3.1 + Offset é maior do que a distância
// entre o elemento e o topo da página
// 3.3 - Se verdadeiro adicionar classe de animação, remover se for falso
// 4 - Ativar a função de animação toda vez que o usuário utilizar o scroll
// 5 - Otimizar ativação

// Otimiza o scroll
const debounce = function(func, wait, immediate) {
  let timeout;
  return function(...args) {
    const context = this;
    const later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

// CONST -> Cria a variável e não pode modificá-la depois

// Coloca o que quer selecionar
const target = document.querySelectorAll('[data-anime]');

// Nome da classe que criou no css
const animationClass = 'animate';

// Função de animação - Descobrir a distância
function animeScroll()
{
  const windowTop = window.pageYOffset + (window.innerHeight * 0.75);
  target.forEach(function(element) {
    if((windowTop) > element.offsetTop) {
      element.classList.add(animationClass);
    }
    else{
      element.classList.remove(animationClass);
    }
  })
}

// Garante que a função seja ativada
animeScroll();

// Verifica se existe algum evento acontecendo
if(target.length) {
  window.addEventListener('scroll', debounce(function()
  {
    animeScroll();
  }, 200));
}

// Typed

var typed = $(".typed");

$(function() {
  typed.typed({
    stings: ["Rota", "da", "Noite"],
    typeSpeed: 100,
    loop: true,
  });
});

// CHANGE TABS CAD-EVENTO
$(function () {
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
var target = $(e.target).attr("href")
alert(target);
});
})

function displayFormEv(elemev){
   if(elemev.value == "unico") {
     document.getElementById('unico').style.display = "block";
     document.getElementById('sexo').style.display = "none";
     document.getElementById('vip').style.display = "none";

    }

    else if(elemev.value == "sexo") {
     document.getElementById('sexo').style.display = "block";
     document.getElementById('unico').style.display = "none";
     document.getElementById('vip').style.display = "none";
    }

    else if(elemev.value == "vip") {
     document.getElementById('vip').style.display = "block";
     document.getElementById('sexo').style.display = "none";
     document.getElementById('unico').style.display = "none";
    }
    
    else{
      document.getElementById('vip').style.display = "none";
      document.getElementById('sexo').style.display = "none";
      document.getElementById('unico').style.display = "none";  
    }
}

// CHANGE TABS ENDEREÇO
$(function () {
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
var target = $(e.target).attr("href")
alert(target);
});
})

function displayFormEnd(elemev){
   if(elemev.value == "presencial") {
     document.getElementById('presencial').style.display = "block";
     document.getElementById('online').style.display = "none";
    }

    else if(elemev.value == "online") {
     document.getElementById('online').style.display = "block";
     document.getElementById('presencial').style.display = "none";
    }
}

// CHANGE TABS IMG
$(function () {
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
var target = $(e.target).attr("href")
alert(target);
});
})

function displayFormImg(elemev){
   if(elemev.value == "img") {
     document.getElementById('img').style.display = "block";
     document.getElementById('noimg').style.display = "none";
    }

    else if(elemev.value == "noimg") {
     document.getElementById('noimg').style.display = "block";
     document.getElementById('img').style.display = "none";
    }
}

// CHANGE TABS ALT IMG
$(function () {
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
var target = $(e.target).attr("href")
alert(target);
});
})

function displayFormAltImg(elemev){
   if(elemev.value == "img") {
     document.getElementById('img').style.display = "block";
     document.getElementById('noimg').style.display = "none";
    }

    else if(elemev.value == "noimg") {
     document.getElementById('noimg').style.display = "block";
     document.getElementById('img').style.display = "none";
    }
}

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});