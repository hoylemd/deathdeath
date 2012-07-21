// This file contains general scripting, including holding top-level variables

window.onload = function()
{

	dd.levelLoad();

	dd.drawTilemaps();

	// Update the player's position in the grid
	en.player.move(0, 0);
	
	dd.processTick();
}


//dd will be our primary namespace
dd = {};
dd.spriteGrid = [];
dd.enemies = [];
dd.levelMap = new Object();

dd.levelLoad = function()
{
	var enemy = en.enemy;
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

// tick function
dd.processTick = function()
{
	
	// Draw sprites on map
	en.player.draw();
	
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
		// document.getElementById(id).style.backgroundImage =
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
