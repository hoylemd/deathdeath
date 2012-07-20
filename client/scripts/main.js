// This file contains general scripting, including holding top-level variables

window.onload = function()
{

	dd.levelLoad();

	dd.drawTilemaps();

	// Update the player's position in the grid
	dd.player.move(0, 0);
	
	// draw initial sprites
	dd.drawSprites();

}


//dd will be our primary namespace
dd = {};
dd.spriteGrid = [];

dd.levelLoad = function()
{
	dd.spriteGridClear();
}


dd.spriteGridClear = function() {
	
	// Clears the spriteGrid
	for (var i=0; i< 32; i++)
	{
		dd.spriteGrid[i] = new Array(32);
		for (var j = 0; j < 32; j++)
		{
			dd.spriteGrid[i][j] = null;
		}
	}
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
			{
				spriteGrid[x][y] = null;
			}


			// update the position
			x += dx;
			y += dy;

		},
		draw : function()
		{
			// Move the player span into the correct tile span by use of DOM
			document.getElementById("tile" + x + "x" + y).appendChild(document.getElementById('player'));
		}
	};

}();

dd.processTick = function()
{
	
	// Draw sprites on map
	dd.player.draw();
}

dd.drawTilemaps = function()
{
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

}

// Water Animation
// Function to shift the tile frame every tick
dd.animateWater = function(frame)
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
	setTimeout(function() {
		animateWater(frame)
	}, 750);
}
