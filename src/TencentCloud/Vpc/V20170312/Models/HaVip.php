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
 * HAVIP description information
 *
 * @method string getHaVipId() Obtain The `ID` of the `HAVIP`. This is the unique identifier of the `HAVIP`.
 * @method void setHaVipId(string $HaVipId) Set The `ID` of the `HAVIP`. This is the unique identifier of the `HAVIP`.
 * @method string getHaVipName() Obtain The name of the `HAVIP`.
 * @method void setHaVipName(string $HaVipName) Set The name of the `HAVIP`.
 * @method string getVip() Obtain The virtual IP address.
 * @method void setVip(string $Vip) Set The virtual IP address.
 * @method string getVpcId() Obtain The `ID` of the VPC to which the `HAVIP` belongs.
 * @method void setVpcId(string $VpcId) Set The `ID` of the VPC to which the `HAVIP` belongs.
 * @method string getSubnetId() Obtain The `ID` of the subnet to which the `HAVIP` belongs.
 * @method void setSubnetId(string $SubnetId) Set The `ID` of the subnet to which the `HAVIP` belongs.
 * @method string getNetworkInterfaceId() Obtain The `ID` of the ENI associated with the `HAVIP`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set The `ID` of the ENI associated with the `HAVIP`.
 * @method string getInstanceId() Obtain The `ID` of the bound instance.
 * @method void setInstanceId(string $InstanceId) Set The `ID` of the bound instance.
 * @method string getAddressIp() Obtain Bound `EIP`.
 * @method void setAddressIp(string $AddressIp) Set Bound `EIP`.
 * @method string getState() Obtain Status:
<li>`AVAILABLE`: Operating</li>
<li>`UNBIND`: Not bound</li>
 * @method void setState(string $State) Set Status:
<li>`AVAILABLE`: Operating</li>
<li>`UNBIND`: Not bound</li>
 * @method string getCreatedTime() Obtain Creation Time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation Time.
 * @method string getBusiness() Obtain Identifier for businesses that use HAVIP.
 * @method void setBusiness(string $Business) Set Identifier for businesses that use HAVIP.
 */
class HaVip extends AbstractModel
{
    /**
     * @var string The `ID` of the `HAVIP`. This is the unique identifier of the `HAVIP`.
     */
    public $HaVipId;

    /**
     * @var string The name of the `HAVIP`.
     */
    public $HaVipName;

    /**
     * @var string The virtual IP address.
     */
    public $Vip;

    /**
     * @var string The `ID` of the VPC to which the `HAVIP` belongs.
     */
    public $VpcId;

    /**
     * @var string The `ID` of the subnet to which the `HAVIP` belongs.
     */
    public $SubnetId;

    /**
     * @var string The `ID` of the ENI associated with the `HAVIP`.
     */
    public $NetworkInterfaceId;

    /**
     * @var string The `ID` of the bound instance.
     */
    public $InstanceId;

    /**
     * @var string Bound `EIP`.
     */
    public $AddressIp;

    /**
     * @var string Status:
<li>`AVAILABLE`: Operating</li>
<li>`UNBIND`: Not bound</li>
     */
    public $State;

    /**
     * @var string Creation Time.
     */
    public $CreatedTime;

    /**
     * @var string Identifier for businesses that use HAVIP.
     */
    public $Business;

    /**
     * @param string $HaVipId The `ID` of the `HAVIP`. This is the unique identifier of the `HAVIP`.
     * @param string $HaVipName The name of the `HAVIP`.
     * @param string $Vip The virtual IP address.
     * @param string $VpcId The `ID` of the VPC to which the `HAVIP` belongs.
     * @param string $SubnetId The `ID` of the subnet to which the `HAVIP` belongs.
     * @param string $NetworkInterfaceId The `ID` of the ENI associated with the `HAVIP`.
     * @param string $InstanceId The `ID` of the bound instance.
     * @param string $AddressIp Bound `EIP`.
     * @param string $State Status:
<li>`AVAILABLE`: Operating</li>
<li>`UNBIND`: Not bound</li>
     * @param string $CreatedTime Creation Time.
     * @param string $Business Identifier for businesses that use HAVIP.
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
