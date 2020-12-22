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
 * DescribeIpGeolocationInfos request structure.
 *
 * @method array getAddressIps() Obtain IP addresses to be queried. Both IPv4 and IPv6 addresses are supported.
 * @method void setAddressIps(array $AddressIps) Set IP addresses to be queried. Both IPv4 and IPv6 addresses are supported.
 * @method IpField getFields() Obtain Fields of the IP addresses to be queried, including `Country`, `Province`, `City`, `Region`, `Isp`, `AsName` and `AsId`
 * @method void setFields(IpField $Fields) Set Fields of the IP addresses to be queried, including `Country`, `Province`, `City`, `Region`, `Isp`, `AsName` and `AsId`
 */
class DescribeIpGeolocationInfosRequest extends AbstractModel
{
    /**
     * @var array IP addresses to be queried. Both IPv4 and IPv6 addresses are supported.
     */
    public $AddressIps;

    /**
     * @var IpField Fields of the IP addresses to be queried, including `Country`, `Province`, `City`, `Region`, `Isp`, `AsName` and `AsId`
     */
    public $Fields;

    /**
     * @param array $AddressIps IP addresses to be queried. Both IPv4 and IPv6 addresses are supported.
     * @param IpField $Fields Fields of the IP addresses to be queried, including `Country`, `Province`, `City`, `Region`, `Isp`, `AsName` and `AsId`
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
        if (array_key_exists("AddressIps",$param) and $param["AddressIps"] !== null) {
            $this->AddressIps = $param["AddressIps"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = new IpField();
            $this->Fields->deserialize($param["Fields"]);
        }
    }
}
