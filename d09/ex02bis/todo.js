var id = 0;
$(window).on("load", function(){
	readCookie();
});

function showPrompt()
{
	var task = prompt("Add task:");
	putDeleteTodo(task);
}

function putDeleteTodo(task)
{
	if (task != "" && task)
	{
		var elem = $("#ft_list");
		var newElem = $("<div></div>");
		newElem.attr("class", "item");
		elem.prepend(newElem.text(task))
		var current_id = id;
		setCookie(current_id - 0, task);
		newElem.click(function() {
			if (confirm("Are you really sure you want to delete this task?"))
			{
				removeCookie(current_id, "");
				newElem.remove();
			}
		});
		id++;
	}
}

function setCookie(cname, cvalue, exdays) 
{
	document.cookie = cname + "=" + cvalue + ";" + "max-age=86400; path=/;";
}

function removeCookie(cname, cvalue, exdays) 
{
	document.cookie = cname + "=" + cvalue + ";" + "max-age=-86400; path=/;";
}

function readCookie()
{
	let cookies = document.cookie.split(";");
	let cookie = 0;
	let len = cookies.length;
	while (cookie < len)
	{
		const [name, value] = cookies[cookie].split("=");
		id = name - 0;
		putDeleteTodo(value);
		cookie++;
	}
}
