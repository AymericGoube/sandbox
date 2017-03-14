let World = function() {
    this.elt = document.createElement("div");
    this.elt.id = "world";
    this.elt.classList.add("world");

    document.body.appendChild(this.elt);

    this.levels = [];
    this.character = new Character("Michelle");
    this.hovered_level = null;

    this.create_levels();
}

World.prototype.create_levels = function() {
    this.levels.push(
        new Level("Pandora")
    );
    this.levels.push(
        new Level("Tatooine", [
            this.levels[0]
        ])
    );
    this.levels.push(
        new Level("Poudlard")
    );
    this.levels.push(
        new Level("Azgaroth", [
            this.levels[1],
            this.levels[2]
        ])
    );

    this.levels.reverse();
    this.levels[0].unlock();
}

World.prototype.display = function() {
    for(let i in this.levels)
    {
        this.levels[i].display();
    }

    this.character.display();
}

