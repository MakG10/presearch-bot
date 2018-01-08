var nodes = document.querySelectorAll('.fe-expandable-item-text');
var result = [];

for (var i = 0; i < nodes.length; i++) {
	result.push(nodes[i].textContent);
}

var string = '';
for (var i = 0; i < result.length; i++) {
	string += result[i] + "\n";
}

console.log(string);