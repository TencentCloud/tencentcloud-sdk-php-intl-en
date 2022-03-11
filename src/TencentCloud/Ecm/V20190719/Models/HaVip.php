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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HAVIP object.
 *
 * @method string getHaVipId() Obtain Unique HAVIP ID.
 * @method void setHaVipId(string $HaVipId) Set Unique HAVIP ID.
 * @method string getHaVipName() Obtain HAVIP name.
 * @method void setHaVipName(string $HaVipName) Set HAVIP name.
 * @method string getVip() Obtain Virtual IP address.
 * @method void setVip(string $Vip) Set Virtual IP address.
 * @method string getVpcId() Obtain VPC ID of the HAVIP.
 * @method void setVpcId(string $VpcId) Set VPC ID of the HAVIP.
 * @method string getSubnetId() Obtain Subnet ID of the HAVIP.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID of the HAVIP.
 * @method string getNetworkInterfaceId() Obtain ID of the ENI associated with the HAVIP.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set ID of the ENI associated with the HAVIP.
 * @method string getInstanceId() Obtain ID of the bound instance.
 * @method void setInstanceId(string $InstanceId) Set ID of the bound instance.
 * @method string getAddressIp() Obtain Bound EIP.
 * @method void setAddressIp(string $AddressIp) Set Bound EIP.
 * @method string getState() Obtain Status:
AVAILABLE: running.
UNBIND: unbound.
 * @method void setState(string $State) Set Status:
AVAILABLE: running.
UNBIND: unbound.
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 * @method string getBusiness() Obtain ID of businesses that use HAVIP.
 * @method void setBusiness(string $Business) Set ID of businesses that use HAVIP.
 */
class HaVip extends AbstractModel
{
    /**
     * @var string Unique HAVIP ID.
     */
    public $HaVipId;

    /**
     * @var string HAVIP name.
     */
    public $HaVipName;

    /**
     * @var string Virtual IP address.
     */
    public $Vip;

    /**
     * @var string VPC ID of the HAVIP.
     */
    public $VpcId;

    /**
     * @var string Subnet ID of the HAVIP.
     */
    public $SubnetId;

    /**
     * @var string ID of the ENI associated with the HAVIP.
     */
    public $NetworkInterfaceId;

    /**
     * @var string ID of the bound instance.
     */
    public $InstanceId;

    /**
     * @var string Bound EIP.
     */
    public $AddressIp;

    /**
     * @var string Status:
AVAILABLE: running.
UNBIND: unbound.
     */
    public $State;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @var string ID of businesses that use HAVIP.
     */
    public $Business;

    /**
     * @param string $HaVipId Unique HAVIP ID.
     * @param string $HaVipName HAVIP name.
     * @param string $Vip Virtual IP address.
     * @param string $VpcId VPC ID of the HAVIP.
     * @param string $SubnetId Subnet ID of the HAVIP.
     * @param string $NetworkInterfaceId ID of the ENI associated with the HAVIP.
     * @param string $InstanceId ID of the bound instance.
     * @param string $AddressIp Bound EIP.
     * @param string $State Status:
AVAILABLE: running.
UNBIND: unbound.
     * @param string $CreatedTime Creation time.
     * @param string $Business ID of businesses that use HAVIP.
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
        if (array_key_exists("HaVipId",$param) and $param["HaVipId"] !== null) {
            $this->HaVipId = $param["HaVipId"];
        }

        if (array_key_exists("HaVipName",$param) and $param["HaVipName"] !== null) {
            $this->HaVipName = $param["HaVipName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }
    }
}
