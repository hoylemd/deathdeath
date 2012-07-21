var en = {};

// use a closure to make the player object with a move function
en.Entity = function()
{
	// hidden variables
	var x = 16;
	var y = 16;
	var hp = 5;
	var maxHP;
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
			// get the tile
			var tile = document.getElementById("tile" + x + "x" + y);

			// calculate the offset
			var children = tile.childNodes.length - 1;
			children = children < 0 ? 0 : children;
			var offset = children * -16;

			// get this entity's span
			var span = document.getElementById(this.id);
			span.style.top = offset + "px";

			// Move the Entity span into the correct tile span by use of DOM
			tile.appendChild(span);
		},
		setCoords : function(newX, newY)
		{
			x = newX;
			y = newY;
		},
		setHP : function(value)
		{
			maxHP = value;
			hp = maxHP;
		},
		damage : function(value)
		{
			hp -= value;
		},
		heal : function(value)
		{
			hp += value;
			if (hp > maxHP)
			{
				hp = maxHP;
			}
		},
		getHP : function()
		{
			return hp;
		},
		getMaxHP : function()
		{
			return maxHP;
		}
	};

};

// player object
en.player = function()
{
	var p = {
		__proto__:en.Entity(),
		id:'player',
	};
	p.setCoords(1,1);
	p.setHP(10);
	return p;
}();

// enemy object
en.enemy = function()
{
	var e = {
		__proto__:en.Entity(),
		type:'',
		id:"enemy1"
	};
	e.setCoords(1,2);
	e.setHP(2);
	return e;
}();

