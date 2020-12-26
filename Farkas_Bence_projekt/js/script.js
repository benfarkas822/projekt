var pageUrl = window.location.pathname;
var getNav = document.querySelectorAll("nav div ul li a");
for(var i = 0; i < getNav.length; i++) {
	var pageUrlName = pageUrl.split("/");
	var pageUrlLength = pageUrlName.length - 1;
	var pageNav = getNav[i].pathname;
	var pageNavName = pageNav.split("/");
	var pageNavLength = pageNavName.length - 1;
	var pageFinalName = pageNavName[pageNavLength];
	var pageNavExists = pageUrl.includes(pageFinalName);
	if(pageNavExists === true) {
		getNav[i].style.cssText = "color: #ec008c;";
	} else if(pageUrlName[pageUrlLength] === "") {
		getNav[0].style.cssText = "color: #ec008c;";
	}
}; 

$('#sortableListA, #sortableListB').sortable({
	connectWith: ".connectedSortable",
	update: function(event, ui) {
		$(this).children().each(function(index) {
			if($(this).attr('data-position') != (index + 1)) {
				$(this).attr('data-position', (index + 1)).addClass('updated');
			}
		});
	}
});

function saveNewPositions() {
	document.getElementById('saved').style.display = 'block';
	saved();
	var positions = [];
	$('.updated').each(function() {
		positions.push([$(this).attr('data-index'), $(this).attr('data-position'), $(this).closest('ul').attr('data-col')]);
		$(this).removeClass('updated');
	});
	$.ajax({
		url: 'mpaf.php',
		method: 'POST',
		dataType: 'text',
		data: {
			update: 1,
			positions: positions
		}
	});
};

function saved() {
	setTimeout(function() {
		document.getElementById('saved').style.display = 'none';
		//window.location.href = "mpaf.php";
	}, 3000);
}

$(document).ready(function() {

   var docHeight = $(window).height();
   var footerHeight = $('#footer').height();
   var footerTop = $('#footer').position().top + footerHeight;

   if (footerTop < docHeight) {
    $('#footer').css('margin-top', 10+(docHeight - footerTop) + 'px');
   }
  });