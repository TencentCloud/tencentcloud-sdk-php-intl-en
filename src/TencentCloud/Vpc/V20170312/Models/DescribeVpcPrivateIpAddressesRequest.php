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
 * DescribeVpcPrivateIpAddresses request structure.
 *
 * @method string getVpcId() Obtain The `ID` of the `VPC`, such as `vpc-f49l6u0z`.
 * @method void setVpcId(string $VpcId) Set The `ID` of the `VPC`, such as `vpc-f49l6u0z`.
 * @method array getPrivateIpAddresses() Obtain The private `IP` address list. Each request supports a maximum of `10` batch querying.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set The private `IP` address list. Each request supports a maximum of `10` batch querying.
 */
class DescribeVpcPrivateIpAddressesRequest extends AbstractModel
{
    /**
     * @var string The `ID` of the `VPC`, such as `vpc-f49l6u0z`.
     */
    public $VpcId;

    /**
     * @var array The private `IP` address list. Each request supports a maximum of `10` batch querying.
     */
    public $PrivateIpAddresses;

    /**
     * @param string $VpcId The `ID` of the `VPC`, such as `vpc-f49l6u0z`.
     * @param array $PrivateIpAddresses The private `IP` address list. Each request supports a maximum of `10` batch querying.
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

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }
    }
}
