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
 * Destination routes of a VPN gateway
 *
 * @method string getDestinationCidrBlock() Obtain Destination IDC IP range
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) Set Destination IDC IP range
 * @method string getInstanceType() Obtain Next hop type (type of the associated instance). Valid values: `VPNCONN` (VPN tunnel) and `CCN` (CCN instance)
 * @method void setInstanceType(string $InstanceType) Set Next hop type (type of the associated instance). Valid values: `VPNCONN` (VPN tunnel) and `CCN` (CCN instance)
 * @method string getInstanceId() Obtain Instance ID of the next hop
 * @method void setInstanceId(string $InstanceId) Set Instance ID of the next hop
 * @method integer getPriority() Obtain Priority. Valid values: `0` and `100`
 * @method void setPriority(integer $Priority) Set Priority. Valid values: `0` and `100`
 * @method string getStatus() Obtain Status. Valid values: `ENABLE` and `DISABLE`
 * @method void setStatus(string $Status) Set Status. Valid values: `ENABLE` and `DISABLE`
 * @method string getRouteId() Obtain Route ID
 * @method void setRouteId(string $RouteId) Set Route ID
 * @method string getType() Obtain Route type. Valid values: `VPC`, `CCN` (CCN-propagated route), `Static`, and `BGP`.
 * @method void setType(string $Type) Set Route type. Valid values: `VPC`, `CCN` (CCN-propagated route), `Static`, and `BGP`.
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method string getUpdateTime() Obtain The update time.
 * @method void setUpdateTime(string $UpdateTime) Set The update time.
 */
class VpnGatewayRoute extends AbstractModel
{
    /**
     * @var string Destination IDC IP range
     */
    public $DestinationCidrBlock;

    /**
     * @var string Next hop type (type of the associated instance). Valid values: `VPNCONN` (VPN tunnel) and `CCN` (CCN instance)
     */
    public $InstanceType;

    /**
     * @var string Instance ID of the next hop
     */
    public $InstanceId;

    /**
     * @var integer Priority. Valid values: `0` and `100`
     */
    public $Priority;

    /**
     * @var string Status. Valid values: `ENABLE` and `DISABLE`
     */
    public $Status;

    /**
     * @var string Route ID
     */
    public $RouteId;

    /**
     * @var string Route type. Valid values: `VPC`, `CCN` (CCN-propagated route), `Static`, and `BGP`.
     */
    public $Type;

    /**
     * @var string The creation time.
     */
    public $CreateTime;

    /**
     * @var string The update time.
     */
    public $UpdateTime;

    /**
     * @param string $DestinationCidrBlock Destination IDC IP range
     * @param string $InstanceType Next hop type (type of the associated instance). Valid values: `VPNCONN` (VPN tunnel) and `CCN` (CCN instance)
     * @param string $InstanceId Instance ID of the next hop
     * @param integer $Priority Priority. Valid values: `0` and `100`
     * @param string $Status Status. Valid values: `ENABLE` and `DISABLE`
     * @param string $RouteId Route ID
     * @param string $Type Route type. Valid values: `VPC`, `CCN` (CCN-propagated route), `Static`, and `BGP`.
     * @param string $CreateTime The creation time.
     * @param string $UpdateTime The update time.
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
        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
