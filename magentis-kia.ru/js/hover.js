function buttonHighlight(element, value)
{
	element.src = "images/menu/" + element.id + (value ? "_h" : "") + ".jpg";
}