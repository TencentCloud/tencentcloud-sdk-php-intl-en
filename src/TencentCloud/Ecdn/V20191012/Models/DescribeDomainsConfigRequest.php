<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainsConfig request structure.
 *
 * @method integer getOffset() Obtain Pagination offset address. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset address. Default value: 0.
 * @method integer getLimit() Obtain Number of domain names per page. Default value: 100.
 * @method void setLimit(integer $Limit) Set Number of domain names per page. Default value: 100.
 * @method array getFilters() Obtain Query filter.
 * @method void setFilters(array $Filters) Set Query filter.
 * @method Sort getSort() Obtain Query result sorting rule.
 * @method void setSort(Sort $Sort) Set Query result sorting rule.
 */
class DescribeDomainsConfigRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset address. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of domain names per page. Default value: 100.
     */
    public $Limit;

    /**
     * @var array Query filter.
     */
    public $Filters;

    /**
     * @var Sort Query result sorting rule.
     */
    public $Sort;

    /**
     * @param integer $Offset Pagination offset address. Default value: 0.
     * @param integer $Limit Number of domain names per page. Default value: 100.
     * @param array $Filters Query filter.
     * @param Sort $Sort Query result sorting rule.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new DomainFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new Sort();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
