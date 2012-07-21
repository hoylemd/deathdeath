// This file holds the functions to be executed when a key is pressed
//  Michael D. Hoyle

// Control Key
keyActions[17] = function()
{	
	//alert("ctrl");
}
// Left Arrow Key
keyActions[37] = function()
{
	// Move player and redraw sprites
	dd.player.move(-1, 0);
	dd.processTick();
}
// Up Arrow Key
keyActions[38] = function()
{
	// Move player and redraw sprites
	dd.player.move(0, -1);
	dd.processTick();
}
// Right Arrow Key
keyActions[39] = function()
{
	// Move player and redraw sprites
	dd.player.move(1, 0);
	dd.processTick();
}
// Down Arrow Key
keyActions[40] = function()
{
	// Move player and redraw sprites
	dd.player.move(0, 1);
	dd.processTick();
}
// 1 key
keyActions[49] = function()
{
	alert("1");
	sp.fireball(dd.enemy);
	dd.processTick();
}
