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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances request structure.
 *
 * @method string getZone() Obtain <p>AZ to which the cluster instance belongs. All AZs are selected by default if this parameter is not specified.</p>
 * @method void setZone(string $Zone) Set <p>AZ to which the cluster instance belongs. All AZs are selected by default if this parameter is not specified.</p>
 * @method array getInstanceIds() Obtain <p>Cluster instance ID list</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>Cluster instance ID list</p>
 * @method array getInstanceNames() Obtain <p>Cluster instance name list.</p>
 * @method void setInstanceNames(array $InstanceNames) Set <p>Cluster instance name list.</p>
 * @method integer getOffset() Obtain <p>Pagination starting value. Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination starting value. Default value: 0</p>
 * @method integer getLimit() Obtain <p>Page size. Default value: 20</p>
 * @method void setLimit(integer $Limit) Set <p>Page size. Default value: 20</p>
 * @method integer getOrderByKey() Obtain <p>Sorting field<li>1: Instance ID</li><li>2: Instance name</li><li>3: Availability zone</li><li>4: Creation time</li>If orderByKey is not transmitted, sort by creation time in descending order</p>
 * @method void setOrderByKey(integer $OrderByKey) Set <p>Sorting field<li>1: Instance ID</li><li>2: Instance name</li><li>3: Availability zone</li><li>4: Creation time</li>If orderByKey is not transmitted, sort by creation time in descending order</p>
 * @method integer getOrderByType() Obtain <p>Sorting method<li>0: ascending</li><li>1: descending</li>If orderByKey is passed but orderByType is not, ascending by default</p>
 * @method void setOrderByType(integer $OrderByType) Set <p>Sorting method<li>0: ascending</li><li>1: descending</li>If orderByKey is passed but orderByType is not, ascending by default</p>
 * @method array getTagList() Obtain <p>Node tag information list</p>
 * @method void setTagList(array $TagList) Set <p>Node tag information list</p>
 * @method array getIpList() Obtain <p>Private network vip list</p>
 * @method void setIpList(array $IpList) Set <p>Private network vip list</p>
 * @method array getNodeIps() Obtain <p>IP list of cluster nodes</p>
 * @method void setNodeIps(array $NodeIps) Set <p>IP list of cluster nodes</p>
 * @method array getZoneList() Obtain <p>Availability zone list</p>
 * @method void setZoneList(array $ZoneList) Set <p>Availability zone list</p>
 * @method array getHealthStatus() Obtain <p>Health status filter list: 0 represents green, 1 represents yellow, 2 represents red, -1 represents unknown</p>
 * @method void setHealthStatus(array $HealthStatus) Set <p>Health status filter list: 0 represents green, 1 represents yellow, 2 represents red, -1 represents unknown</p>
 * @method array getVpcIds() Obtain <p>Vpc list filter item</p>
 * @method void setVpcIds(array $VpcIds) Set <p>Vpc list filter item</p>
 * @method string getCdcId() Obtain <p>cdc cluster id</p>
 * @method void setCdcId(string $CdcId) Set <p>cdc cluster id</p>
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>AZ to which the cluster instance belongs. All AZs are selected by default if this parameter is not specified.</p>
     */
    public $Zone;

    /**
     * @var array <p>Cluster instance ID list</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>Cluster instance name list.</p>
     */
    public $InstanceNames;

    /**
     * @var integer <p>Pagination starting value. Default value: 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Page size. Default value: 20</p>
     */
    public $Limit;

    /**
     * @var integer <p>Sorting field<li>1: Instance ID</li><li>2: Instance name</li><li>3: Availability zone</li><li>4: Creation time</li>If orderByKey is not transmitted, sort by creation time in descending order</p>
     */
    public $OrderByKey;

    /**
     * @var integer <p>Sorting method<li>0: ascending</li><li>1: descending</li>If orderByKey is passed but orderByType is not, ascending by default</p>
     */
    public $OrderByType;

    /**
     * @var array <p>Node tag information list</p>
     */
    public $TagList;

    /**
     * @var array <p>Private network vip list</p>
     */
    public $IpList;

    /**
     * @var array <p>IP list of cluster nodes</p>
     */
    public $NodeIps;

    /**
     * @var array <p>Availability zone list</p>
     */
    public $ZoneList;

    /**
     * @var array <p>Health status filter list: 0 represents green, 1 represents yellow, 2 represents red, -1 represents unknown</p>
     */
    public $HealthStatus;

    /**
     * @var array <p>Vpc list filter item</p>
     */
    public $VpcIds;

    /**
     * @var string <p>cdc cluster id</p>
     */
    public $CdcId;

    /**
     * @param string $Zone <p>AZ to which the cluster instance belongs. All AZs are selected by default if this parameter is not specified.</p>
     * @param array $InstanceIds <p>Cluster instance ID list</p>
     * @param array $InstanceNames <p>Cluster instance name list.</p>
     * @param integer $Offset <p>Pagination starting value. Default value: 0</p>
     * @param integer $Limit <p>Page size. Default value: 20</p>
     * @param integer $OrderByKey <p>Sorting field<li>1: Instance ID</li><li>2: Instance name</li><li>3: Availability zone</li><li>4: Creation time</li>If orderByKey is not transmitted, sort by creation time in descending order</p>
     * @param integer $OrderByType <p>Sorting method<li>0: ascending</li><li>1: descending</li>If orderByKey is passed but orderByType is not, ascending by default</p>
     * @param array $TagList <p>Node tag information list</p>
     * @param array $IpList <p>Private network vip list</p>
     * @param array $NodeIps <p>IP list of cluster nodes</p>
     * @param array $ZoneList <p>Availability zone list</p>
     * @param array $HealthStatus <p>Health status filter list: 0 represents green, 1 represents yellow, 2 represents red, -1 represents unknown</p>
     * @param array $VpcIds <p>Vpc list filter item</p>
     * @param string $CdcId <p>cdc cluster id</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderByKey",$param) and $param["OrderByKey"] !== null) {
            $this->OrderByKey = $param["OrderByKey"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("NodeIps",$param) and $param["NodeIps"] !== null) {
            $this->NodeIps = $param["NodeIps"];
        }

        if (array_key_exists("ZoneList",$param) and $param["ZoneList"] !== null) {
            $this->ZoneList = $param["ZoneList"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
