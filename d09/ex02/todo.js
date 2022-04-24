let id = 0;
window.onload = function()
{
	readCookie();
}

function showPrompt()
{
	var task = prompt("Add task:");
	putDeleteTodo(task);
}

function putDeleteTodo(task)
{
	if (task != "" && task)
	{
		var elem = document.getElementById("ft_list");
		var newElem = document.createElement("div");
		newElem.setAttribute("class", "item");
		newElem.innerHTML = task;
		elem.insertBefore(newElem, elem.firstChild);
		var current_id = id;
		setCookie(current_id - 0, task);
		newElem.addEventListener('click', function() {
			if (confirm("Are you really sure you want to delete this task?"))
			{
				removeCookie(current_id, "");
				elem.removeChild(newElem);
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
