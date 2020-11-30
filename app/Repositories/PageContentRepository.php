<?php

namespace App\Repositories;

use App\PageContent;
use Illuminate\Support\Facades\DB;

class PageContentRepository
{
    public function __construct(PageContent $PageContent){
        $this->PageContent = $PageContent;
    }

    public function getAll($id_user)
    {
        return $this->PageContent->where('id_user', $id_user)->paginate(5);
    }

    public function create(array $data)
    {
        $page = $this->PageContent->create($data);
        return $page;
    }

    public function update($id, array $data)
    {
        $page = $this->PageContent->where('id', $id)->update($data);
        return $page;
    }

    public function find($id)
    {
        $page = $this->PageContent->find($id);
        return $page;
    }

    public function destroy($id)
    {
        $page = $this->PageContent->find($id);
        $page->delete();
    }

}
