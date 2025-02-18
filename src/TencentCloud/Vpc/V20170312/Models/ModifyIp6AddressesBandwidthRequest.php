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
 * ModifyIp6AddressesBandwidth request structure.
 *
 * @method integer getInternetMaxBandwidthOut() Obtain Modified target bandwidth, in Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Modified target bandwidth, in Mbps.
 * @method array getIp6Addresses() Obtain IPv6 addresses. Both Ip6Addresses and Ip6AddressId are required, but they cannot be specified at the same time.
 * @method void setIp6Addresses(array $Ip6Addresses) Set IPv6 addresses. Both Ip6Addresses and Ip6AddressId are required, but they cannot be specified at the same time.
 * @method array getIp6AddressIds() Obtain Unique IDs corresponding to the IPv6 addresses. Format: eip-xxxxxxxx. Both Ip6Addresses and Ip6AddressId are required, but they cannot be specified at the same time.
 * @method void setIp6AddressIds(array $Ip6AddressIds) Set Unique IDs corresponding to the IPv6 addresses. Format: eip-xxxxxxxx. Both Ip6Addresses and Ip6AddressId are required, but they cannot be specified at the same time.
 */
class ModifyIp6AddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var integer Modified target bandwidth, in Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var array IPv6 addresses. Both Ip6Addresses and Ip6AddressId are required, but they cannot be specified at the same time.
     */
    public $Ip6Addresses;

    /**
     * @var array Unique IDs corresponding to the IPv6 addresses. Format: eip-xxxxxxxx. Both Ip6Addresses and Ip6AddressId are required, but they cannot be specified at the same time.
     */
    public $Ip6AddressIds;

    /**
     * @param integer $InternetMaxBandwidthOut Modified target bandwidth, in Mbps.
     * @param array $Ip6Addresses IPv6 addresses. Both Ip6Addresses and Ip6AddressId are required, but they cannot be specified at the same time.
     * @param array $Ip6AddressIds Unique IDs corresponding to the IPv6 addresses. Format: eip-xxxxxxxx. Both Ip6Addresses and Ip6AddressId are required, but they cannot be specified at the same time.
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
        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("Ip6Addresses",$param) and $param["Ip6Addresses"] !== null) {
            $this->Ip6Addresses = $param["Ip6Addresses"];
        }

        if (array_key_exists("Ip6AddressIds",$param) and $param["Ip6AddressIds"] !== null) {
            $this->Ip6AddressIds = $param["Ip6AddressIds"];
        }
    }
}
