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
 * DescribeVpcIpv6Addresses request structure.
 *
 * @method string getVpcId() Obtain The `ID` of the `VPC`, such as `vpc-f49l6u0z`.
 * @method void setVpcId(string $VpcId) Set The `ID` of the `VPC`, such as `vpc-f49l6u0z`.
 * @method array getIpv6Addresses() Obtain The `IP` address list. Each request supports a maximum of `10` batch querying.
 * @method void setIpv6Addresses(array $Ipv6Addresses) Set The `IP` address list. Each request supports a maximum of `10` batch querying.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain The returned quantity.
 * @method void setLimit(integer $Limit) Set The returned quantity.
 */
class DescribeVpcIpv6AddressesRequest extends AbstractModel
{
    /**
     * @var string The `ID` of the `VPC`, such as `vpc-f49l6u0z`.
     */
    public $VpcId;

    /**
     * @var array The `IP` address list. Each request supports a maximum of `10` batch querying.
     */
    public $Ipv6Addresses;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer The returned quantity.
     */
    public $Limit;

    /**
     * @param string $VpcId The `ID` of the `VPC`, such as `vpc-f49l6u0z`.
     * @param array $Ipv6Addresses The `IP` address list. Each request supports a maximum of `10` batch querying.
     * @param integer $Offset Offset.
     * @param integer $Limit The returned quantity.
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

        if (array_key_exists("Ipv6Addresses",$param) and $param["Ipv6Addresses"] !== null) {
            $this->Ipv6Addresses = $param["Ipv6Addresses"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
