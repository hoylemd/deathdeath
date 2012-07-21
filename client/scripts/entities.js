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
	p.setCoords(16,16);
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
	e.setCoords(16,17);
	e.setHP(2);
	return e;
}();

