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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateL3Cidr request structure.
 *
 * @method string getL3ConnId() Obtain Interconnection rule ID
 * @method void setL3ConnId(string $L3ConnId) Set Interconnection rule ID
 * @method string getCidr1() Obtain Interconnection rule CIDR
 * @method void setCidr1(string $Cidr1) Set Interconnection rule CIDR
 * @method string getDeviceId1() Obtain interworking device ID
 * @method void setDeviceId1(string $DeviceId1) Set interworking device ID
 * @method string getDeviceId2() Obtain interworking device ID
 * @method void setDeviceId2(string $DeviceId2) Set interworking device ID
 * @method string getCidr2() Obtain Interconnection rule CIDR
 * @method void setCidr2(string $Cidr2) Set Interconnection rule CIDR
 */
class UpdateL3CidrRequest extends AbstractModel
{
    /**
     * @var string Interconnection rule ID
     */
    public $L3ConnId;

    /**
     * @var string Interconnection rule CIDR
     */
    public $Cidr1;

    /**
     * @var string interworking device ID
     */
    public $DeviceId1;

    /**
     * @var string interworking device ID
     */
    public $DeviceId2;

    /**
     * @var string Interconnection rule CIDR
     */
    public $Cidr2;

    /**
     * @param string $L3ConnId Interconnection rule ID
     * @param string $Cidr1 Interconnection rule CIDR
     * @param string $DeviceId1 interworking device ID
     * @param string $DeviceId2 interworking device ID
     * @param string $Cidr2 Interconnection rule CIDR
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
        if (array_key_exists("L3ConnId",$param) and $param["L3ConnId"] !== null) {
            $this->L3ConnId = $param["L3ConnId"];
        }

        if (array_key_exists("Cidr1",$param) and $param["Cidr1"] !== null) {
            $this->Cidr1 = $param["Cidr1"];
        }

        if (array_key_exists("DeviceId1",$param) and $param["DeviceId1"] !== null) {
            $this->DeviceId1 = $param["DeviceId1"];
        }

        if (array_key_exists("DeviceId2",$param) and $param["DeviceId2"] !== null) {
            $this->DeviceId2 = $param["DeviceId2"];
        }

        if (array_key_exists("Cidr2",$param) and $param["Cidr2"] !== null) {
            $this->Cidr2 = $param["Cidr2"];
        }
    }
}
