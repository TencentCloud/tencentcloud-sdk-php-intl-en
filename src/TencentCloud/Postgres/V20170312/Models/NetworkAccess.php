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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network information. (This parameter structure has been deprecated. Please use `DBInstanceNetInfo` to query network information.)
 *
 * @method string getResourceId() Obtain Network resource ID, instance ID, or RO group ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceId(string $ResourceId) Set Network resource ID, instance ID, or RO group ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getResourceType() Obtain Resource type. Valid values: `1` (instance), `2` (RO group)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setResourceType(integer $ResourceType) Set Resource type. Valid values: `1` (instance), `2` (RO group)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getVip() Obtain IPv4 address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set IPv4 address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getVip6() Obtain IPv6 address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVip6(string $Vip6) Set IPv6 address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getVport() Obtain Access port
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVport(integer $Vport) Set Access port
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getVpcStatus() Obtain Network status. Valid values: `1` (applying), `2` (in use), `3` (deleting), `4` (deleted)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVpcStatus(integer $VpcStatus) Set Network status. Valid values: `1` (applying), `2` (in use), `3` (deleting), `4` (deleted)
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class NetworkAccess extends AbstractModel
{
    /**
     * @var string Network resource ID, instance ID, or RO group ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceId;

    /**
     * @var integer Resource type. Valid values: `1` (instance), `2` (RO group)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ResourceType;

    /**
     * @var string VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string IPv4 address
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var string IPv6 address
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Vip6;

    /**
     * @var integer Access port
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Vport;

    /**
     * @var string Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var integer Network status. Valid values: `1` (applying), `2` (in use), `3` (deleting), `4` (deleted)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $VpcStatus;

    /**
     * @param string $ResourceId Network resource ID, instance ID, or RO group ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ResourceType Resource type. Valid values: `1` (instance), `2` (RO group)
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $VpcId VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Vip IPv4 address
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Vip6 IPv6 address
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Vport Access port
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $VpcStatus Network status. Valid values: `1` (applying), `2` (in use), `3` (deleting), `4` (deleted)
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcStatus",$param) and $param["VpcStatus"] !== null) {
            $this->VpcStatus = $param["VpcStatus"];
        }
    }
}
