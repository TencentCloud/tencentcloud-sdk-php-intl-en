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
 * DescribeClusters request structure.
 *
 * @method string getDbType() Obtain Engine type. Currently, `MYSQL` is supported.
 * @method void setDbType(string $DbType) Set Engine type. Currently, `MYSQL` is supported.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100
 * @method integer getOffset() Obtain Record offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Record offset. Default value: 0
 * @method string getOrderBy() Obtain Sort by field. Valid values:
<li> CREATETIME: creation time</li>
<li> PERIODENDTIME: expiration time</li>
 * @method void setOrderBy(string $OrderBy) Set Sort by field. Valid values:
<li> CREATETIME: creation time</li>
<li> PERIODENDTIME: expiration time</li>
 * @method string getOrderByType() Obtain Sorting order. Valid values:
<li> ASC: ascending</li>
<li> DESC: descending</li>
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Valid values:
<li> ASC: ascending</li>
<li> DESC: descending</li>
 * @method array getFilters() Obtain Filter. If more than one filter exists, the logical relationship between these filters is `AND`.
 * @method void setFilters(array $Filters) Set Filter. If more than one filter exists, the logical relationship between these filters is `AND`.
 */
class DescribeClustersRequest extends AbstractModel
{
    /**
     * @var string Engine type. Currently, `MYSQL` is supported.
     */
    public $DbType;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100
     */
    public $Limit;

    /**
     * @var integer Record offset. Default value: 0
     */
    public $Offset;

    /**
     * @var string Sort by field. Valid values:
<li> CREATETIME: creation time</li>
<li> PERIODENDTIME: expiration time</li>
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values:
<li> ASC: ascending</li>
<li> DESC: descending</li>
     */
    public $OrderByType;

    /**
     * @var array Filter. If more than one filter exists, the logical relationship between these filters is `AND`.
     */
    public $Filters;

    /**
     * @param string $DbType Engine type. Currently, `MYSQL` is supported.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100
     * @param integer $Offset Record offset. Default value: 0
     * @param string $OrderBy Sort by field. Valid values:
<li> CREATETIME: creation time</li>
<li> PERIODENDTIME: expiration time</li>
     * @param string $OrderByType Sorting order. Valid values:
<li> ASC: ascending</li>
<li> DESC: descending</li>
     * @param array $Filters Filter. If more than one filter exists, the logical relationship between these filters is `AND`.
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
        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
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
