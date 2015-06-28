/******************************************
	Script
******************************************/

jQuery(document).ready(function() {
	
	/*
		------------------------
			Isotope
		------------------------
	*/
	
	// Initialize the isotope (grid and filters)
	var $container = $('#scroll-container');
	$container.isotope({
		// options
		itemSelector: '.vox-item',
		masonry: {
			columnWidth: 270,
			isFitWidth: true
		}
	});
	// filter items when filter link is clicked
	$('#filters a').click(function(){
	  var selector = $(this).attr('data-filter');
	  $container.isotope({ filter: selector });
	  return false;
	});
	
	/*
		------------------------
			Infinite Scroll
		------------------------
	*/
	
	// Variables
	var pages = new Array(); //key value array that maps the pages. Ex. 1=>page2.html, 2=>page3.html
	var current = 0; //the index of the starting page. 0 for index.html in this case
	var loaded = new Array(); //key value array to prevent loading a page more than once

	//get all the pages link inside the #pages div and fill an array
	$('#pages a').each(function(index) {
		pages[index] = $(this).attr('href');
		loaded[$(this).attr('href')] = 0; //initialize all the pages to be loaded to 0. It means that they are not yet been loaded.
	});

	//on scroll gets when bottom of the page is reached and calls the function do load more content
	$(window).scroll(function(e){
		//Not always the pos == h statement is verified, expecially on mobile devices, that's why a 300px of margin are assumed.
		if($(window).scrollTop() + $(window).height() >= $(document).height() - 300) {
			console.log("bottom of the page reached!");

			//in some broswer (es. chrome) if the scroll is fast, the bottom 
			//reach events fires several times, this may cause the page loaging 
			//more than once. To prevent such situation every time the bottom is 
			//reached the number of time is added to that page in suach a way to call 
			//the loadMoreContent page only when the page value in "loaded" array is 
			//minor or equal to one
			loaded[pages[current+1]] = loaded[pages[current+1]] + 1; 

			if(loaded[pages[current+1]] <= 1)
				loadMoreContent(current+1);
		}
	});

	//loads the next page and append it to the content with a fadeIn effect. 
	//Before loading the content it shows and hides the loaden Overlay DIV
	function loadMoreContent(position) {
		//try to load more content only if the counter is minor than the number of total pages
		if(position < pages.length) {
			$('#loader').fadeIn('slow', function() {
				$.get(pages[position], function(data) {
					$('#loader').fadeOut('slow', function() {
						$('#scroll-container').isotope( 'insert', $(data) );
						current=position;
					});
				});
			});
		}
	}
	
	/*
		------------------------
			Modal
		------------------------
	*/
	
	$( ".vox-item" ).on( "click", function() {
		// pull the data from each post
		var url = $(this).data('url');
		// define the modal div
		var modal = $('#myModal');
		
		// Set the URL of the article to the link of the modal
		modal.find('#voz-article-single-page-anchor').attr("href", url);
		
		// This function creates the iframe for the article
		// removes the old iframe of the article
		$("#voz-article-iframe").remove();
		// create the new iframe
		$(".modal-body").append("<iframe id='voz-article-iframe' src='' frameborder='0' scrolling='no' width='100%'></iframe>");
		// add the url of the iframe
		$("#voz-article-iframe").attr("src", url + "?post_mode=1");
		// resize the iframe (height)
		$("#voz-article-iframe").load(function(){
			$(this).height($(this).contents().outerHeight());
		});
		
	});

	
	/*
		------------------------
			Tooltips
		------------------------
	*/
	
	// Initialize all the tooltips
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})		
});