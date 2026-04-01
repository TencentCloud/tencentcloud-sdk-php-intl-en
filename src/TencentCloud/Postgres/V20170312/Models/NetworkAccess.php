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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network information. (This parameter structure has been deprecated. Please use `DBInstanceNetInfo` to query network information.)
 *
 * @method string getResourceId() Obtain Network resource id, instance id, or RO group id.
 * @method void setResourceId(string $ResourceId) Set Network resource id, instance id, or RO group id.
 * @method integer getResourceType() Obtain Resource type. valid values: 1 (instance), 2 (RO group).
 * @method void setResourceType(integer $ResourceType) Set Resource type. valid values: 1 (instance), 2 (RO group).
 * @method string getVpcId() Obtain VPC ID. specifies the ID of the virtual private cloud.
 * @method void setVpcId(string $VpcId) Set VPC ID. specifies the ID of the virtual private cloud.
 * @method string getVip() Obtain IPv4 Address
 * @method void setVip(string $Vip) Set IPv4 Address
 * @method string getVip6() Obtain IPv6 Address
 * @method void setVip6(string $Vip6) Set IPv6 Address
 * @method integer getVport() Obtain Specifies the access port.
 * @method void setVport(integer $Vport) Set Specifies the access port.
 * @method string getSubnetId() Obtain Subnet ID.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID.
 * @method integer getVpcStatus() Obtain Network status. valid values: 1-applying, 2-active, 3-deleting, 4-deleted.
 * @method void setVpcStatus(integer $VpcStatus) Set Network status. valid values: 1-applying, 2-active, 3-deleting, 4-deleted.
 */
class NetworkAccess extends AbstractModel
{
    /**
     * @var string Network resource id, instance id, or RO group id.
     */
    public $ResourceId;

    /**
     * @var integer Resource type. valid values: 1 (instance), 2 (RO group).
     */
    public $ResourceType;

    /**
     * @var string VPC ID. specifies the ID of the virtual private cloud.
     */
    public $VpcId;

    /**
     * @var string IPv4 Address
     */
    public $Vip;

    /**
     * @var string IPv6 Address
     */
    public $Vip6;

    /**
     * @var integer Specifies the access port.
     */
    public $Vport;

    /**
     * @var string Subnet ID.
     */
    public $SubnetId;

    /**
     * @var integer Network status. valid values: 1-applying, 2-active, 3-deleting, 4-deleted.
     */
    public $VpcStatus;

    /**
     * @param string $ResourceId Network resource id, instance id, or RO group id.
     * @param integer $ResourceType Resource type. valid values: 1 (instance), 2 (RO group).
     * @param string $VpcId VPC ID. specifies the ID of the virtual private cloud.
     * @param string $Vip IPv4 Address
     * @param string $Vip6 IPv6 Address
     * @param integer $Vport Specifies the access port.
     * @param string $SubnetId Subnet ID.
     * @param integer $VpcStatus Network status. valid values: 1-applying, 2-active, 3-deleting, 4-deleted.
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
