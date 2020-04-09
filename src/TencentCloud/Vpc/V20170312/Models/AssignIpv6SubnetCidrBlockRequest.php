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
 * AssignIpv6SubnetCidrBlock request structure.
 *
 * @method string getVpcId() Obtain The `ID` of the VPC where the subnet is located, such as `vpc-f49l6u0z`.
 * @method void setVpcId(string $VpcId) Set The `ID` of the VPC where the subnet is located, such as `vpc-f49l6u0z`.
 * @method array getIpv6SubnetCidrBlocks() Obtain The assigned `IPv6` subnet IP range list.
 * @method void setIpv6SubnetCidrBlocks(array $Ipv6SubnetCidrBlocks) Set The assigned `IPv6` subnet IP range list.
 */
class AssignIpv6SubnetCidrBlockRequest extends AbstractModel
{
    /**
     * @var string The `ID` of the VPC where the subnet is located, such as `vpc-f49l6u0z`.
     */
    public $VpcId;

    /**
     * @var array The assigned `IPv6` subnet IP range list.
     */
    public $Ipv6SubnetCidrBlocks;

    /**
     * @param string $VpcId The `ID` of the VPC where the subnet is located, such as `vpc-f49l6u0z`.
     * @param array $Ipv6SubnetCidrBlocks The assigned `IPv6` subnet IP range list.
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

        if (array_key_exists("Ipv6SubnetCidrBlocks",$param) and $param["Ipv6SubnetCidrBlocks"] !== null) {
            $this->Ipv6SubnetCidrBlocks = [];
            foreach ($param["Ipv6SubnetCidrBlocks"] as $key => $value){
                $obj = new Ipv6SubnetCidrBlock();
                $obj->deserialize($value);
                array_push($this->Ipv6SubnetCidrBlocks, $obj);
            }
        }
    }
}
