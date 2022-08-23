<?php

class HierarchyBuilder {

    public array $root = [];

    public function addRootNode(string $text): void {
        $this->root[] = ['text' => $text, 'parent_id' => 0, 'id' => 1];
    }

    public function addNode(string $text, $parentLevel, int $parentNodeId): void {

        if ($this->array_depth($this->root) < $parentLevel) {
            echo 'Parent node does not exist';
        }

        $this->root[] = ['text' => $text, 'parent_id' => $parentLevel+1, 'id' => count($this->root)+1];
    }

    private function array_depth(array $array) {
        $max_depth = 1;

        foreach ($array as $value) {
            if (is_array($value)) {
                $depth = $this->array_depth($value) + 1;

                if ($depth > $max_depth) {
                    $max_depth = $depth;
                }
            }
        }

        return $max_depth;
    }

    public function printHierarchy()
    {
        print_r($this->makeTree($this->root));
    }

    public function makeTree(array $elements, $parentId = 0) {
        $branch = array();
        foreach ($elements as $key => $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->makeTree($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }
        return $branch;
    }
}

$hierarchyBuilder = new HierarchyBuilder();
$hierarchyBuilder->addRootNode('this is root (zero)');
$hierarchyBuilder->addNode('this is first level', 0, 0);
$hierarchyBuilder->addNode('this is first level again', 0, 0);
$hierarchyBuilder->addNode('this is second level', 1, 1);
$hierarchyBuilder->printHierarchy();