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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLibraDBClusters request structure.
 *
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method string getOrderBy() Obtain Sorting field.
 * @method void setOrderBy(string $OrderBy) Set Sorting field.
 * @method string getOrderByType() Obtain Sort method
 * @method void setOrderByType(string $OrderByType) Set Sort method
 * @method array getFilters() Obtain Filter criteria.
 * @method void setFilters(array $Filters) Set Filter criteria.
 */
class DescribeLibraDBClustersRequest extends AbstractModel
{
    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var string Sorting field.
     */
    public $OrderBy;

    /**
     * @var string Sort method
     */
    public $OrderByType;

    /**
     * @var array Filter criteria.
     */
    public $Filters;

    /**
     * @param integer $Limit Limit
     * @param integer $Offset Offset
     * @param string $OrderBy Sorting field.
     * @param string $OrderByType Sort method
     * @param array $Filters Filter criteria.
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
