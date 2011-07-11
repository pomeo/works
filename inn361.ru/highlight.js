function buttonHighlight(element, value)
{
	element.src = "assets/images/" + (value ? "h_" : "") + element.id + ".jpg";
}