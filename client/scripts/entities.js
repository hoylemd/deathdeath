
// use a closure to make the player object with a move function
dd.Entity = function()
{
	// hidden variables
	var x = 16;
	var y = 16;
	var spriteGrid = dd.spriteGrid;
	// return the object
	return {
		id: '',
		// move method
		move : function(dx, dy)
		{
			// clear the old
			// cell if it's valid
			if (x > -1 && x < 32 && y > -1 && y < 32)
			{
				spriteGrid[x][y] = null;
			}


			// update the position
			x += dx;
			y += dy;

		},
		draw : function()
		{
			// Move the Entity span into the correct tile span by use of DOM
			document.getElementById("tile" + x + "x" + y)
				.appendChild(document.getElementById(this.id));
		},
		setCoords : function(newX, newY)
		{
			x = newX;
			y = newY;
		}
	};

};

// player object
dd.player = function()
{
	var p = {
		__proto__:dd.Entity(),
		id:'player',
	};
	p.setCoords(16,16);
	return p;
}();

// enemy object
dd.enemy = function()
{
	var en = {
		__proto__:dd.Entity(),
		type:'',
		id:"enemy1"
	};
	en.setCoords(16,17);
	return en;
}();

