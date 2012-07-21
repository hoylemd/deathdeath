// This file contains general scripting, including holding top-level variables

window.onload = function()
{

	dd.levelLoad();

	dd.drawTilemaps();

	// Update the player's position in the grid
	dd.player.move(0, 0);
	
	dd.processTick();
}


//dd will be our primary namespace
dd = {};
dd.spriteGrid = [];
dd.enemies = [];
dd.levelMap = new Object();

dd.levelLoad = function()
{
	var enemy = dd.enemy;
	enemy.type = 'slime';
	dd.enemies[0] = enemy;
	
	// prep level json
	dd.levelMap = dd.levelLoadMap('level1');
		
	dd.spriteGridClear();
}

dd.levelLoadMap = function(levelName)
{
	switch(levelName)
	{
		case 'level1':
			return dd.level01;		
			break;
	}
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

			// check for collisions
			if (x > -1 && x < 32 && y > -1 && y < 32)
			{

				// xxx the map data comes in with x and y swapped
				var tileType = dd.levelMap[x+dx][y+dy];
				
				var tile = dd.tiles[find_in_array(dd.tiles, 'id', tileType)];
				
				if (!tile['solid'])
				{
					spriteGrid[x][y] = null;
					
					// update the position
					x += dx;
					y += dy;
				}
			}

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

// tick function
dd.processTick = function()
{
	
	// Draw sprites on map
	dd.player.draw();
	
	for (var key in dd.enemies)
	{
		dd.enemies[key].draw();
	}
}

// animate tiles function
dd.drawTilemaps = function()
{
	for (var i = 0; i < 32; i++)
	{
		for (var j = 0; j < 32; j++)
		{
			var id = 'tile' + j + 'x' + i;
			var tileType = dd.levelMap[j][i];
			var tile = dd.tiles[find_in_array(dd.tiles, 'id', tileType)];

			document.getElementById(id).style.backgroundImage = 'url("art/tilemap.png")';
			document.getElementById(id).style.backgroundPosition = tile['posx'] + 'px ' + tile['posy'] + 'px';
			document.getElementById(id).style.backgroundRepeat = 'no-repeat';

			// set up the tile style
			//document.getElementById(id).style.backgroundImage =
			//'url("art/tilemap.png")';
			//document.getElementById(id).style.backgroundPosition = '-16px 0px';
			//document.getElementById(id).style.backgroundRepeat = 'no-repeat';
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

function find_in_array(arr, name, value) {
	var arrayLength = arr.length;
	for (var i = 0; i < arrayLength; i++)
	{
		if (name in arr[i] && arr[i][name] == value) return i;
	};
	return false;
}
