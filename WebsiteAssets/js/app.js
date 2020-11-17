$(function(){
  let navMenuToggler  = $("nav button.navbar-toggler");
  let dropdownToggler = $("a.nav-link.dropdown-toggle");
  let menuToggler     = $(".menu-nav ul li");
  let menuContentArea = $("main .menu-content-area");

  navMenuToggler.on("click", function(e){
    e.preventDefault();
    let navigation = $(this).attr("data-target");
    $(navigation).toggleClass("open");
  });

  dropdownToggler.on("click", function(e){
    e.preventDefault();
    $(this).siblings().toggleClass("open");
  });

  menuToggler.on("click", function(e){
    e.preventDefault();
    $(this).toggleClass("category-selected");
    $(this).siblings().removeClass("category-selected");

    // get a reference to the food category list
    var ulList = document.getElementById("menu-nav");

    // save which category was clicked on
    var liClicked = e.target.closest("li");

    // get the list of all the categories from the main food category list
    var listOfElements = Array.from(ulList.children);

    // get the index of the category which was clicked
    var index = listOfElements.indexOf(liClicked);

    // remove the category-selected class from the previously selected category
    // and add it to the category which was clicked on
    $(menuContentArea).children().removeClass("category-selected");
    $(menuContentArea).children()[index].classList.add("category-selected");
  });
});


$(function(){
$(".popup-handler").on("click", function(e){
  e.preventDefault;
  let popupSelector = $(this).attr("data-target");
  //alert(popupSelector);
  popupHandler(popupSelector);

});

$(".popup-close").on("click", function(){
$(this).closest(".popup").toggleClass("hidden");
})

function popupHandler(popup){
  $(popup).toggleClass("hidden");
}
});