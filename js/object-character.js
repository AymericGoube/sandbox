let Character = function(name_) {
    this.elt = document.createElement("div");
    this.elt.classList.add("character");
    this.elt.style.top = this.elt.style.left = 0;

    document.getElementById("world").appendChild(this.elt);

    this.name = name_;
    this.current_level = null;
}

Character.prototype.display = function() {
}

Character.prototype.set_current_level = function(level_) {
    if(level_.locked)
    {
        alert(this.name + " can't go to " + level_.name);
    }
    else
    {
        this.current_level = level_;

        alert(this.name + " goes to " + this.current_level.name);

        this.current_level.finish();
    }
}

