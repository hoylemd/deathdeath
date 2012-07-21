//Initialize spell library object
var sp = {};

// Fireball spell
// Damage: 1
// Range: 8
// Level: 1
sp.fireball = function(target)
{
	target.damage(1);
}