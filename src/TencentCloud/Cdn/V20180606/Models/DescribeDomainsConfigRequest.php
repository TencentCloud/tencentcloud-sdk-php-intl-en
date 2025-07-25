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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainsConfig request structure.
 *
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: 0
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 100. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 100. Maximum value: 1000.
 * @method array getFilters() Obtain Query condition filter, complex type.
 * @method void setFilters(array $Filters) Set Query condition filter, complex type.
 * @method Sort getSort() Obtain Sorting rules
 * @method void setSort(Sort $Sort) Set Sorting rules
 */
class DescribeDomainsConfigRequest extends AbstractModel
{
    /**
     * @var integer Offset for paginated queries. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Default value: 100. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var array Query condition filter, complex type.
     */
    public $Filters;

    /**
     * @var Sort Sorting rules
     */
    public $Sort;

    /**
     * @param integer $Offset Offset for paginated queries. Default value: 0
     * @param integer $Limit Limit on paginated queries. Default value: 100. Maximum value: 1000.
     * @param array $Filters Query condition filter, complex type.
     * @param Sort $Sort Sorting rules
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
