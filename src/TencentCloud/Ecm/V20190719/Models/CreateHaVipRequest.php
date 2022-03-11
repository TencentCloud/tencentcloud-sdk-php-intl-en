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
 * CreateHaVip request structure.
 *
 * @method string getVpcId() Obtain VPC ID of the HAVIP.
 * @method void setVpcId(string $VpcId) Set VPC ID of the HAVIP.
 * @method string getSubnetId() Obtain Subnet ID of the HAVIP.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID of the HAVIP.
 * @method string getHaVipName() Obtain HAVIP name.
 * @method void setHaVipName(string $HaVipName) Set HAVIP name.
 * @method string getVip() Obtain The specified virtual IP address, which must be within the IP range of the VPC and not in use. It will be automatically assigned if not specified.
 * @method void setVip(string $Vip) Set The specified virtual IP address, which must be within the IP range of the VPC and not in use. It will be automatically assigned if not specified.
 */
class CreateHaVipRequest extends AbstractModel
{
    /**
     * @var string VPC ID of the HAVIP.
     */
    public $VpcId;

    /**
     * @var string Subnet ID of the HAVIP.
     */
    public $SubnetId;

    /**
     * @var string HAVIP name.
     */
    public $HaVipName;

    /**
     * @var string The specified virtual IP address, which must be within the IP range of the VPC and not in use. It will be automatically assigned if not specified.
     */
    public $Vip;

    /**
     * @param string $VpcId VPC ID of the HAVIP.
     * @param string $SubnetId Subnet ID of the HAVIP.
     * @param string $HaVipName HAVIP name.
     * @param string $Vip The specified virtual IP address, which must be within the IP range of the VPC and not in use. It will be automatically assigned if not specified.
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("HaVipName",$param) and $param["HaVipName"] !== null) {
            $this->HaVipName = $param["HaVipName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
