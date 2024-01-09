<?php
class Category
{
    protected $name;
    protected $icon;
    // NAME
    public function setName($_name)
    {
        if (strlen($_name) < 10) {
            $this->name = $_name;
        }
    }

    public function getName()
    {
        return urlencode($this->name);
    }

    // ICON NAME
    public function setIcon($_icon)
    {
        if (strlen($_icon) < 30) {
            $this->icon = $_icon;
        }
    }

    public function getIcon()
    {
        if (is_file($this->icon)) {
            return $this->icon;
        }
    }
}
