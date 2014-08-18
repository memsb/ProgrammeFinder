<?php

class IndexController extends Zend_Controller_Action
{

    public function indexAction()
    {

    }

    public function searchAction()
    {
        $filter = new \ProgrammeFinder\Filter();
        $filter->setPerPage($this->getLimit());
        $filter->setQuery($this->getQuery());

        $finder = new \ProgrammeFinder\Finder($filter);
        $this->view->episodes = $finder->getEpisodes();
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        $query = (string)$this->getParam('query');
        return $query;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        $limit = (int)$this->getParam('limit');
        if ($limit < 1) {
            $limit = 1;
        }
        return $limit;
    }

}
