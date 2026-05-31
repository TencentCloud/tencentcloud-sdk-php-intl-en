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
 * DescribeProxies request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster ID (this parameter is required, such as cynosdbmysql-2u2mh111).</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID (this parameter is required, such as cynosdbmysql-2u2mh111).</p>
 * @method integer getLimit() Obtain <p>Number of returned results, defaults to 20 with a maximum value of 100</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned results, defaults to 20 with a maximum value of 100</p>
 * @method integer getOffset() Obtain <p>Record offset. Default value is 0</p>
 * @method void setOffset(integer $Offset) Set <p>Record offset. Default value is 0</p>
 * @method string getOrderBy() Obtain <p>Sorting field. Value ranges from...to...:</p><li>CREATETIME: Creation time</li><li>PERIODENDTIME: Expiration time</li>
 * @method void setOrderBy(string $OrderBy) Set <p>Sorting field. Value ranges from...to...:</p><li>CREATETIME: Creation time</li><li>PERIODENDTIME: Expiration time</li>
 * @method string getOrderByType() Obtain <p>Sorting type. Value ranges from:</p><li> ASC: ascending order </li><li> DESC: sort in descending order </li>
 * @method void setOrderByType(string $OrderByType) Set <p>Sorting type. Value ranges from:</p><li> ASC: ascending order </li><li> DESC: sort in descending order </li>
 * @method array getFilters() Obtain <p>Search criteria. If there are multiple Filters, the relationship between Filters is logical AND. <br>Description: This parameter currently only supports two filter conditions: Status and ProxyGroupId.</p>
 * @method void setFilters(array $Filters) Set <p>Search criteria. If there are multiple Filters, the relationship between Filters is logical AND. <br>Description: This parameter currently only supports two filter conditions: Status and ProxyGroupId.</p>
 */
class DescribeProxiesRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID (this parameter is required, such as cynosdbmysql-2u2mh111).</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>Number of returned results, defaults to 20 with a maximum value of 100</p>
     */
    public $Limit;

    /**
     * @var integer <p>Record offset. Default value is 0</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting field. Value ranges from...to...:</p><li>CREATETIME: Creation time</li><li>PERIODENDTIME: Expiration time</li>
     */
    public $OrderBy;

    /**
     * @var string <p>Sorting type. Value ranges from:</p><li> ASC: ascending order </li><li> DESC: sort in descending order </li>
     */
    public $OrderByType;

    /**
     * @var array <p>Search criteria. If there are multiple Filters, the relationship between Filters is logical AND. <br>Description: This parameter currently only supports two filter conditions: Status and ProxyGroupId.</p>
     */
    public $Filters;

    /**
     * @param string $ClusterId <p>Cluster ID (this parameter is required, such as cynosdbmysql-2u2mh111).</p>
     * @param integer $Limit <p>Number of returned results, defaults to 20 with a maximum value of 100</p>
     * @param integer $Offset <p>Record offset. Default value is 0</p>
     * @param string $OrderBy <p>Sorting field. Value ranges from...to...:</p><li>CREATETIME: Creation time</li><li>PERIODENDTIME: Expiration time</li>
     * @param string $OrderByType <p>Sorting type. Value ranges from:</p><li> ASC: ascending order </li><li> DESC: sort in descending order </li>
     * @param array $Filters <p>Search criteria. If there are multiple Filters, the relationship between Filters is logical AND. <br>Description: This parameter currently only supports two filter conditions: Status and ProxyGroupId.</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
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
                $obj = new QueryParamFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
