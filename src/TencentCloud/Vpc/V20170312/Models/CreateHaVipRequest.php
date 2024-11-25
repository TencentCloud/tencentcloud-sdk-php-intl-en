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
 * CreateHaVip request structure.
 *
 * @method string getVpcId() Obtain The `ID` of the VPC to which the `HAVIP` belongs.
 * @method void setVpcId(string $VpcId) Set The `ID` of the VPC to which the `HAVIP` belongs.
 * @method string getHaVipName() Obtain The name of the `HAVIP`.
 * @method void setHaVipName(string $HaVipName) Set The name of the `HAVIP`.
 * @method string getSubnetId() Obtain The `ID` of the subnet to which the `HAVIP` belongs.
 * @method void setSubnetId(string $SubnetId) Set The `ID` of the subnet to which the `HAVIP` belongs.
 * @method string getVip() Obtain The specified virtual IP address, which must be within the IP range of the `VPC` and not in use. It will be automatically assigned if not specified.
 * @method void setVip(string $Vip) Set The specified virtual IP address, which must be within the IP range of the `VPC` and not in use. It will be automatically assigned if not specified.
 * @method string getNetworkInterfaceId() Obtain The ID of the ENI associated with the HAVIP.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set The ID of the ENI associated with the HAVIP.
 */
class CreateHaVipRequest extends AbstractModel
{
    /**
     * @var string The `ID` of the VPC to which the `HAVIP` belongs.
     */
    public $VpcId;

    /**
     * @var string The name of the `HAVIP`.
     */
    public $HaVipName;

    /**
     * @var string The `ID` of the subnet to which the `HAVIP` belongs.
     */
    public $SubnetId;

    /**
     * @var string The specified virtual IP address, which must be within the IP range of the `VPC` and not in use. It will be automatically assigned if not specified.
     */
    public $Vip;

    /**
     * @var string The ID of the ENI associated with the HAVIP.
     */
    public $NetworkInterfaceId;

    /**
     * @param string $VpcId The `ID` of the VPC to which the `HAVIP` belongs.
     * @param string $HaVipName The name of the `HAVIP`.
     * @param string $SubnetId The `ID` of the subnet to which the `HAVIP` belongs.
     * @param string $Vip The specified virtual IP address, which must be within the IP range of the `VPC` and not in use. It will be automatically assigned if not specified.
     * @param string $NetworkInterfaceId The ID of the ENI associated with the HAVIP.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("HaVipName",$param) and $param["HaVipName"] !== null) {
            $this->HaVipName = $param["HaVipName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }
    }
}
