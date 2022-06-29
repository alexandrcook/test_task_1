<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class Filter {
    protected array $requestArr;
    protected Builder $builder;

    public function __construct(string $model, array $requestArr)
    {
        $this->builder = $model::query();
        $this->requestArr = $requestArr;
    }

    public function apply() : Builder
    {
        foreach ($this->requestArr as $searchType => $params){
            if(method_exists($this, $searchType)){
                $this->$searchType($params);
            }
        }

//        dd($this->builder->toSql());
        return $this->builder;
    }

    public function search(array $params) : void
    {
        foreach ($params as $searchType => $searchValue){
            if($searchType == 'all'){
                $this->builder->where(function ($query) use ($searchValue) {
                    foreach ($this->builder->getModel()->getFilterableAttrs() as $param) {
                        ($param == 'total')
                            ? $query->orWhere($param, $searchValue)
                            : $query->orWhere("{$param}", 'LIKE', "%{$searchValue}%");
                    }
                });
            }else{
                if(!in_array($searchType, $this->builder->getModel()->getFilterableAttrs())){
                    throw new \Exception('Search type is not allowed');
                }

                ($searchType == 'total')
                    ? $this->builder->where($searchType, $searchValue)
                    : $this->builder->where($searchType, 'LIKE', "%{$searchValue}%");
            }
        }
    }

    public function sort(array $params) : void
    {
        foreach ($params as $sortColumn => $sortType){
            $this->builder->orderBy("{$sortColumn}", "{$sortType}");
        }
    }
}
