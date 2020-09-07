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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The CCN routing policy object
 *
 * @method string getRouteId() Obtain The ID of the routing policy
 * @method void setRouteId(string $RouteId) Set The ID of the routing policy
 * @method string getDestinationCidrBlock() Obtain Destination
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) Set Destination
 * @method string getInstanceType() Obtain The type of the next hop (associated instance type). Available types: VPC, DIRECTCONNECT
 * @method void setInstanceType(string $InstanceType) Set The type of the next hop (associated instance type). Available types: VPC, DIRECTCONNECT
 * @method string getInstanceId() Obtain The next hop (associated instance)
 * @method void setInstanceId(string $InstanceId) Set The next hop (associated instance)
 * @method string getInstanceName() Obtain The name of the next hop (associated instance name)
 * @method void setInstanceName(string $InstanceName) Set The name of the next hop (associated instance name)
 * @method string getInstanceRegion() Obtain The region of the next hop (the region of the associated instance)
 * @method void setInstanceRegion(string $InstanceRegion) Set The region of the next hop (the region of the associated instance)
 * @method string getUpdateTime() Obtain Update Time
 * @method void setUpdateTime(string $UpdateTime) Set Update Time
 * @method boolean getEnabled() Obtain Whether the route is enabled
 * @method void setEnabled(boolean $Enabled) Set Whether the route is enabled
 * @method string getInstanceUin() Obtain The UIN (root account) to which the associated instance belongs
 * @method void setInstanceUin(string $InstanceUin) Set The UIN (root account) to which the associated instance belongs
 * @method string getExtraState() Obtain Additional status of the route
 * @method void setExtraState(string $ExtraState) Set Additional status of the route
 * @method boolean getIsBgp() Obtain Whether it is a dynamic route
 * @method void setIsBgp(boolean $IsBgp) Set Whether it is a dynamic route
 * @method integer getRoutePriority() Obtain Route priority
 * @method void setRoutePriority(integer $RoutePriority) Set Route priority
 * @method string getInstanceExtraName() Obtain Next hop port name (associated instance’s port name)
 * @method void setInstanceExtraName(string $InstanceExtraName) Set Next hop port name (associated instance’s port name)
 */
class CcnRoute extends AbstractModel
{
    /**
     * @var string The ID of the routing policy
     */
    public $RouteId;

    /**
     * @var string Destination
     */
    public $DestinationCidrBlock;

    /**
     * @var string The type of the next hop (associated instance type). Available types: VPC, DIRECTCONNECT
     */
    public $InstanceType;

    /**
     * @var string The next hop (associated instance)
     */
    public $InstanceId;

    /**
     * @var string The name of the next hop (associated instance name)
     */
    public $InstanceName;

    /**
     * @var string The region of the next hop (the region of the associated instance)
     */
    public $InstanceRegion;

    /**
     * @var string Update Time
     */
    public $UpdateTime;

    /**
     * @var boolean Whether the route is enabled
     */
    public $Enabled;

    /**
     * @var string The UIN (root account) to which the associated instance belongs
     */
    public $InstanceUin;

    /**
     * @var string Additional status of the route
     */
    public $ExtraState;

    /**
     * @var boolean Whether it is a dynamic route
     */
    public $IsBgp;

    /**
     * @var integer Route priority
     */
    public $RoutePriority;

    /**
     * @var string Next hop port name (associated instance’s port name)
     */
    public $InstanceExtraName;

    /**
     * @param string $RouteId The ID of the routing policy
     * @param string $DestinationCidrBlock Destination
     * @param string $InstanceType The type of the next hop (associated instance type). Available types: VPC, DIRECTCONNECT
     * @param string $InstanceId The next hop (associated instance)
     * @param string $InstanceName The name of the next hop (associated instance name)
     * @param string $InstanceRegion The region of the next hop (the region of the associated instance)
     * @param string $UpdateTime Update Time
     * @param boolean $Enabled Whether the route is enabled
     * @param string $InstanceUin The UIN (root account) to which the associated instance belongs
     * @param string $ExtraState Additional status of the route
     * @param boolean $IsBgp Whether it is a dynamic route
     * @param integer $RoutePriority Route priority
     * @param string $InstanceExtraName Next hop port name (associated instance’s port name)
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
        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("InstanceUin",$param) and $param["InstanceUin"] !== null) {
            $this->InstanceUin = $param["InstanceUin"];
        }

        if (array_key_exists("ExtraState",$param) and $param["ExtraState"] !== null) {
            $this->ExtraState = $param["ExtraState"];
        }

        if (array_key_exists("IsBgp",$param) and $param["IsBgp"] !== null) {
            $this->IsBgp = $param["IsBgp"];
        }

        if (array_key_exists("RoutePriority",$param) and $param["RoutePriority"] !== null) {
            $this->RoutePriority = $param["RoutePriority"];
        }

        if (array_key_exists("InstanceExtraName",$param) and $param["InstanceExtraName"] !== null) {
            $this->InstanceExtraName = $param["InstanceExtraName"];
        }
    }
}
