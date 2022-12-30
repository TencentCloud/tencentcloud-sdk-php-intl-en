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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances request structure.
 *
 * @method string getZone() Obtain AZ of the cluster instance. If this is not passed in, all AZs are used by default
 * @method void setZone(string $Zone) Set AZ of the cluster instance. If this is not passed in, all AZs are used by default
 * @method array getInstanceIds() Obtain List of cluster instance IDs
 * @method void setInstanceIds(array $InstanceIds) Set List of cluster instance IDs
 * @method array getInstanceNames() Obtain List of cluster instance names
 * @method void setInstanceNames(array $InstanceNames) Set List of cluster instance names
 * @method integer getOffset() Obtain Pagination start value. Default value: 0
 * @method void setOffset(integer $Offset) Set Pagination start value. Default value: 0
 * @method integer getLimit() Obtain Number of entries per page. Default value: 20
 * @method void setLimit(integer $Limit) Set Number of entries per page. Default value: 20
 * @method integer getOrderByKey() Obtain The sorting field. <li>1: Instance ID </li><li>2: Instance name </li><li>3: AZ </li><li>4: Creation time </li>If `OrderByKey` is not passed in, sorting is performed by creation time in descending order.
 * @method void setOrderByKey(integer $OrderByKey) Set The sorting field. <li>1: Instance ID </li><li>2: Instance name </li><li>3: AZ </li><li>4: Creation time </li>If `OrderByKey` is not passed in, sorting is performed by creation time in descending order.
 * @method integer getOrderByType() Obtain Sorting order <li>0: ascending </li><li>1: descending </li>If orderByKey is passed in but orderByType is not, ascending order is used by default
 * @method void setOrderByType(integer $OrderByType) Set Sorting order <li>0: ascending </li><li>1: descending </li>If orderByKey is passed in but orderByType is not, ascending order is used by default
 * @method array getTagList() Obtain Node tag information list
 * @method void setTagList(array $TagList) Set Node tag information list
 * @method array getIpList() Obtain VPC VIP list
 * @method void setIpList(array $IpList) Set VPC VIP list
 * @method array getZoneList() Obtain List of availability zones
 * @method void setZoneList(array $ZoneList) Set List of availability zones
 * @method array getHealthStatus() Obtain The health status filter. Valid values: `0` (green), `1` (yellow), `2` (red), `-1` (unknown).
 * @method void setHealthStatus(array $HealthStatus) Set The health status filter. Valid values: `0` (green), `1` (yellow), `2` (red), `-1` (unknown).
 * @method array getVpcIds() Obtain VPC IDs
 * @method void setVpcIds(array $VpcIds) Set VPC IDs
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var string AZ of the cluster instance. If this is not passed in, all AZs are used by default
     */
    public $Zone;

    /**
     * @var array List of cluster instance IDs
     */
    public $InstanceIds;

    /**
     * @var array List of cluster instance names
     */
    public $InstanceNames;

    /**
     * @var integer Pagination start value. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Default value: 20
     */
    public $Limit;

    /**
     * @var integer The sorting field. <li>1: Instance ID </li><li>2: Instance name </li><li>3: AZ </li><li>4: Creation time </li>If `OrderByKey` is not passed in, sorting is performed by creation time in descending order.
     */
    public $OrderByKey;

    /**
     * @var integer Sorting order <li>0: ascending </li><li>1: descending </li>If orderByKey is passed in but orderByType is not, ascending order is used by default
     */
    public $OrderByType;

    /**
     * @var array Node tag information list
     */
    public $TagList;

    /**
     * @var array VPC VIP list
     */
    public $IpList;

    /**
     * @var array List of availability zones
     */
    public $ZoneList;

    /**
     * @var array The health status filter. Valid values: `0` (green), `1` (yellow), `2` (red), `-1` (unknown).
     */
    public $HealthStatus;

    /**
     * @var array VPC IDs
     */
    public $VpcIds;

    /**
     * @param string $Zone AZ of the cluster instance. If this is not passed in, all AZs are used by default
     * @param array $InstanceIds List of cluster instance IDs
     * @param array $InstanceNames List of cluster instance names
     * @param integer $Offset Pagination start value. Default value: 0
     * @param integer $Limit Number of entries per page. Default value: 20
     * @param integer $OrderByKey The sorting field. <li>1: Instance ID </li><li>2: Instance name </li><li>3: AZ </li><li>4: Creation time </li>If `OrderByKey` is not passed in, sorting is performed by creation time in descending order.
     * @param integer $OrderByType Sorting order <li>0: ascending </li><li>1: descending </li>If orderByKey is passed in but orderByType is not, ascending order is used by default
     * @param array $TagList Node tag information list
     * @param array $IpList VPC VIP list
     * @param array $ZoneList List of availability zones
     * @param array $HealthStatus The health status filter. Valid values: `0` (green), `1` (yellow), `2` (red), `-1` (unknown).
     * @param array $VpcIds VPC IDs
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

        if (array_key_exists("ZoneList",$param) and $param["ZoneList"] !== null) {
            $this->ZoneList = $param["ZoneList"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }
    }
}
