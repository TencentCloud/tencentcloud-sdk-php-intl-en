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
 * DescribeInstances request structure.
 *
 * @method integer getLimit() Obtain Number of returns. Default value: 20. Value range: (0, 100].
 * @method void setLimit(integer $Limit) Set Number of returns. Default value: 20. Value range: (0, 100].
 * @method integer getOffset() Obtain Record offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Record offset. Default value: 0.
 * @method string getOrderBy() Obtain Sorting field. Valid values:
<li> CREATETIME: creation time</li>
<li> PERIODENDTIME: Expiration time</li>
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Valid values:
<li> CREATETIME: creation time</li>
<li> PERIODENDTIME: Expiration time</li>
 * @method string getOrderByType() Obtain Sorting type. Valid values:
<li> ASC: ascending order </li>
<li> DESC: sort in descending order </li>
 * @method void setOrderByType(string $OrderByType) Set Sorting type. Valid values:
<li> ASC: ascending order </li>
<li> DESC: sort in descending order </li>
 * @method array getFilters() Obtain Search criteria. When multiple filters exist, the relationship between filters is logical AND.
 * @method void setFilters(array $Filters) Set Search criteria. When multiple filters exist, the relationship between filters is logical AND.
 * @method string getDbType() Obtain Engine type. Currently, `MYSQL` is supported.
 * @method void setDbType(string $DbType) Set Engine type. Currently, `MYSQL` is supported.
 * @method string getStatus() Obtain Instance status. Available values:
creating
running
isolating
isolated
Recovering
offlining
offlined
 * @method void setStatus(string $Status) Set Instance status. Available values:
creating
running
isolating
isolated
Recovering
offlining
offlined
 * @method array getInstanceIds() Obtain Instance ID list
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list
 * @method string getClusterType() Obtain Cluster type. Value range: <li> CYNOSDB: transactional cluster </li><li> LIBRADB: analysis cluster </li><li> ALL: all </li>. Defaults to ALL.
 * @method void setClusterType(string $ClusterType) Set Cluster type. Value range: <li> CYNOSDB: transactional cluster </li><li> LIBRADB: analysis cluster </li><li> ALL: all </li>. Defaults to ALL.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer Number of returns. Default value: 20. Value range: (0, 100].
     */
    public $Limit;

    /**
     * @var integer Record offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Sorting field. Valid values:
<li> CREATETIME: creation time</li>
<li> PERIODENDTIME: Expiration time</li>
     */
    public $OrderBy;

    /**
     * @var string Sorting type. Valid values:
<li> ASC: ascending order </li>
<li> DESC: sort in descending order </li>
     */
    public $OrderByType;

    /**
     * @var array Search criteria. When multiple filters exist, the relationship between filters is logical AND.
     */
    public $Filters;

    /**
     * @var string Engine type. Currently, `MYSQL` is supported.
     */
    public $DbType;

    /**
     * @var string Instance status. Available values:
creating
running
isolating
isolated
Recovering
offlining
offlined
     */
    public $Status;

    /**
     * @var array Instance ID list
     */
    public $InstanceIds;

    /**
     * @var string Cluster type. Value range: <li> CYNOSDB: transactional cluster </li><li> LIBRADB: analysis cluster </li><li> ALL: all </li>. Defaults to ALL.
     */
    public $ClusterType;

    /**
     * @param integer $Limit Number of returns. Default value: 20. Value range: (0, 100].
     * @param integer $Offset Record offset. Default value: 0.
     * @param string $OrderBy Sorting field. Valid values:
<li> CREATETIME: creation time</li>
<li> PERIODENDTIME: Expiration time</li>
     * @param string $OrderByType Sorting type. Valid values:
<li> ASC: ascending order </li>
<li> DESC: sort in descending order </li>
     * @param array $Filters Search criteria. When multiple filters exist, the relationship between filters is logical AND.
     * @param string $DbType Engine type. Currently, `MYSQL` is supported.
     * @param string $Status Instance status. Available values:
creating
running
isolating
isolated
Recovering
offlining
offlined
     * @param array $InstanceIds Instance ID list
     * @param string $ClusterType Cluster type. Value range: <li> CYNOSDB: transactional cluster </li><li> LIBRADB: analysis cluster </li><li> ALL: all </li>. Defaults to ALL.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
