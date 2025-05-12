<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeIsolatedInstances request structure.
 *
 * @method integer getLimit() Obtain Number of returned results. the default value is 20. the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. the default value is 20. the maximum value is 100.
 * @method integer getOffset() Obtain Record offset. default value: 0.
 * @method void setOffset(integer $Offset) Set Record offset. default value: 0.
 * @method string getOrderBy() Obtain Sorting field. valid values:.
<Li>CREATETIME: creation time</li>.
<li> PERIODENDTIME: expiration time</li>.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. valid values:.
<Li>CREATETIME: creation time</li>.
<li> PERIODENDTIME: expiration time</li>.
 * @method string getOrderByType() Obtain Sorting type. value range:.
<Li>ASC: specifies ascending sort.</li>.
<li> DESC: sorts in descending order. </li>.
 * @method void setOrderByType(string $OrderByType) Set Sorting type. value range:.
<Li>ASC: specifies ascending sort.</li>.
<li> DESC: sorts in descending order. </li>.
 * @method array getFilters() Obtain Search criteria. when multiple filters exist, the relationship between filters is logical AND.
 * @method void setFilters(array $Filters) Set Search criteria. when multiple filters exist, the relationship between filters is logical AND.
 * @method string getDbType() Obtain Engine type: currently supports "MYSQL", "POSTGRESQL".
 * @method void setDbType(string $DbType) Set Engine type: currently supports "MYSQL", "POSTGRESQL".
 */
class DescribeIsolatedInstancesRequest extends AbstractModel
{
    /**
     * @var integer Number of returned results. the default value is 20. the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Record offset. default value: 0.
     */
    public $Offset;

    /**
     * @var string Sorting field. valid values:.
<Li>CREATETIME: creation time</li>.
<li> PERIODENDTIME: expiration time</li>.
     */
    public $OrderBy;

    /**
     * @var string Sorting type. value range:.
<Li>ASC: specifies ascending sort.</li>.
<li> DESC: sorts in descending order. </li>.
     */
    public $OrderByType;

    /**
     * @var array Search criteria. when multiple filters exist, the relationship between filters is logical AND.
     */
    public $Filters;

    /**
     * @var string Engine type: currently supports "MYSQL", "POSTGRESQL".
     */
    public $DbType;

    /**
     * @param integer $Limit Number of returned results. the default value is 20. the maximum value is 100.
     * @param integer $Offset Record offset. default value: 0.
     * @param string $OrderBy Sorting field. valid values:.
<Li>CREATETIME: creation time</li>.
<li> PERIODENDTIME: expiration time</li>.
     * @param string $OrderByType Sorting type. value range:.
<Li>ASC: specifies ascending sort.</li>.
<li> DESC: sorts in descending order. </li>.
     * @param array $Filters Search criteria. when multiple filters exist, the relationship between filters is logical AND.
     * @param string $DbType Engine type: currently supports "MYSQL", "POSTGRESQL".
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

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }
    }
}
