// This file contains general scripting, including holding top-level variables

// Load function
// Sets up the water background
window.onload = function()
{
	// loop over tiles
	for (var i = 0; i < 32; i++)
	{
		for (var j = 0; j < 32; j++)
		{
			// construct the tile id
			var id = 'tile' + j + 'x' + i;

			// set up the tile style	
			document.getElementById(id).style.backgroundImage =
			   	'url("art/tilemap.png")';
			document.getElementById(id).style.backgroundPosition = '-16px 0px';
			document.getElementById(id).style.backgroundRepeat = 'no-repeat';	
		}
	}

	// set up the timeout
	// JOHN: can you explain how this line works? I'm not really sure what
	// setTimeout does or where it's defined - Mike
	//setTimeout(function() { animateWater(1) }, 750);
}

// Water Animation
// Function to shift the tile frame every tick
animateWater = function(frame)
{
	// shift to the appropriate frame
	if (frame == 1)
	{
		bgx = -64;
	}
	else
	{
		bgx = -80;
	}
	
	// construct the style string
	var bgp = bgx + 'px 0px';


	// loop over tiles and set the frame
	for (var i = 0; i < 32; i++)
	{
		for (var j = 0; j < 32; j++)
		{
			var id = 'tile' + j + 'x' + i; 
			document.getElementById(id).style.backgroundPosition = bgp;
		}
	}

	// set the other frame
	frame *= -1;
	setTimeout(function() { animateWater(frame) }, 750);
}

//dd will be our primary namespace
dd = {};
dd.spriteGrid = []
for (var i=0; i< 32; i++)
{
	dd.spriteGrid[i] = new Array(32);
	for (var j = 0; j < 32; j++)
		dd.spriteGrid[i][j] = null;	
}
// use a closure to make the player object with a move function
dd.player = function()
{
	// hidden variables
	var x = 16;
	var y = 16;
	var spriteGrid = dd.spriteGrid;

	// return the object
	return {
		// move method
		move : function(dx, dy)
		{
			// clear the old
			// cell if it's valid
			if (x > -1 && x < 32 && y > -1 && y < 32)
				spriteGrid[x][y] = null;

			// update the position
			x += dx;
			y += dy;

			// write to the new cell
			if (x > -1 && x < 32 && y > -1 && y < 32)
				spriteGrid[x][y] = "<img src='art/minerman.png' />";
		}
	};

}();

// Update the player's position in the grid
dd.player.move(0, 0);

// Sprite update function
dd.drawSprites = function()
{
	// loop over the tiles
	for(var x = 0; x < 32; x++)
	{
		for(var y = 0; y < 32; y++)
		{
			// insert the sprite grid's contents
			var id = "tile" + x + "x" + y;
			document.getElementById(id).innerHTML = dd.spriteGrid[x][y];
		}
	}	
}

// draw initial sprites
dd.drawSprites();
