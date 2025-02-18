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
 * ModifyIPv6AddressesBandwidth request structure.
 *
 * @method array getIPv6AddressIds() Obtain Unique ID of the EIPv6 address
 * @method void setIPv6AddressIds(array $IPv6AddressIds) Set Unique ID of the EIPv6 address
 * @method integer getInternetMaxBandwidthOut() Obtain Network bandwidth of the EIPv6 address
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Network bandwidth of the EIPv6 address
 */
class ModifyIPv6AddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var array Unique ID of the EIPv6 address
     */
    public $IPv6AddressIds;

    /**
     * @var integer Network bandwidth of the EIPv6 address
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param array $IPv6AddressIds Unique ID of the EIPv6 address
     * @param integer $InternetMaxBandwidthOut Network bandwidth of the EIPv6 address
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
        if (array_key_exists("IPv6AddressIds",$param) and $param["IPv6AddressIds"] !== null) {
            $this->IPv6AddressIds = $param["IPv6AddressIds"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}
