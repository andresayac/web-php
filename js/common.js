$(document).ready(function() {

    // slide mega drop-downs up/down.
    $("#headmenu li:has(div.children)").click(function(event) {
        // don't follow link.
        event.preventDefault();

        var clickedMenu = $(this);
        var activeMenu  = $('#headmenu li.current');
        var container   = $('#mega-drop-down #menu-container');

        // function to activate the clicked menu.
        var activate = function(){
            clickedMenu.addClass('current');
            clickedMenu.find("div.children").appendTo(container);
            container.find("div.children").slideUp(0).slideDown("fast");
        };

        // if there is an active menu, deactivate it first.
        if (activeMenu.length) {
            activeMenu.removeClass('current');
            var children = container.find("div.children");
            if (children) {
                children.slideUp('fast', function(){
                    children.appendTo(activeMenu);
                    if (activeMenu[0] != clickedMenu[0])
                        activate();
                });
            }
        } else {
            activate();
        }
    });

    // load the search index and enable auto-complete.
    jQuery.getScript("/js/search-index-" + getLanguage() + ".js", function(){
        $('#headsearch-keywords').autocomplete({
            delay:      50,
            minScore:   75,
            maxResults: 50,
            source: function(request, response){
                // sort the search index by similarity to the user's query
                var term  = request.term;
                var score = function(item){
                    var match = item.name.search(new RegExp(term, "i"));
                    if (match < 0) return 0;
                    return 100 - (match * 2) - (item.name.length - term.length);
                };
                searchIndex.sort(function(a, b){
                    return score(b) - score(a);
                });
                
                // display the best matches
                var results = [];
                for (var i = 0; i < this.options.maxResults; i++){
                    var item = searchIndex[i];
                    if (item && score(item) > this.options.minScore){
                        results.push({
                            label: item.name,
                            value: item.page
                        });
                    }
                }
                response(results);
            },
            focus: function(event, ui) {
                $('#headsearch-keywords').val(ui.item.label);
                return false;
            },
            select: function(event, ui){
                $('#headsearch-keywords').val(ui.item.label);
                if (ui.item.value)
                    window.location = '/manual/' + getLanguage() + '/' + ui.item.value;
            }
        });
    });

    var foundToc = false;
    if ($("#quicktoc").length) {
        var pageid = $("section.docs > div").attr("id");
        var editurl = "https://edit.php.net/?perm=/" + getLanguage() + "/" + pageid + ".php&project=PHP";
        var bugurl  = "http://bugs.php.net/report.php?bug_type=Documentation+problem&amp;manpage=" + pageid;

        // Add edit & bugreporting urls to the footer
        $($(".footmenu")[1]).append("<li><a href='" + editurl + "'>Edit this page</a></li>");
        $($(".footmenu")[1]).append("<li><a href='" + bugurl + "'>Report bug on this page</a></li>");

        // Make a list, start making <li>'s dynamically.
        // we use .data() to store which element the TOC item should scrollTo()
        var l = $('<ul id="toc_list">');
        $(".refsect1 h3, .sect1 h2, .sect2 h3, .sect3 h4, .docs .sect4 h5").each(function() {
            if(foundToc === false) {
                foundToc = true;
            }
            var currItem = $(this);
            $('<a class="toc_item" href="#' + currItem.parent().attr('id') + '">' + currItem.text() + '</a>')
                .appendTo( $('<li>') ).parent().appendTo(l);
     
        });

        if (foundToc) {
            jQuery.getScript("/js/jquery.scrollto.min.js", function(){
                l.delegate("a.toc_item","click keypress", function(e) {
			var scrollToElem = $(this).attr('href');
                        // You have to escape the '.' to '\\.' so that it doesn't start doing CSS-like selectors when we refer to "lang.type.string" as an ID
			scrollToElem = scrollToElem.substr(scrollToElem.indexOf('#')).replace(/\./g, '\\.');
			if($(scrollToElem).length) {
	                        $.scrollTo(scrollToElem, 800);
                        }
			e.preventDefault();
			return false;
                });
            });
            $("#quicktoc").append("<h5>Quick TOC</h5>").append(l);
        } else {
            $("#quicktoc").remove();
        }

    }
    $(".docs div[id] > h1, .docs div[id] > h2, .docs div[id] > h3, .docs div[id] > h4").each(function(){
        $(this).append("<a class='genanchor' href='#" + $(this).parent().attr("id") + "'> ¶</a>");
    });

    if($('.docs table.doctable').length) {
        $('tbody tr:even').addClass("alt-row")
    }

});

/**
 * Determine what language to present to the user.
 */
function getLanguage()
{
    return document.documentElement.lang;
}
