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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The structure of information of the bandwidth package.
 *
 * @method string getResourceType() Obtain The bandwidth package resource type, including `Address`, and `LoadBalance`
 * @method void setResourceType(string $ResourceType) Set The bandwidth package resource type, including `Address`, and `LoadBalance`
 * @method string getResourceId() Obtain The bandwidth package ID, such as `eip-xxxx` and `lb-xxxx`.
 * @method void setResourceId(string $ResourceId) Set The bandwidth package ID, such as `eip-xxxx` and `lb-xxxx`.
 * @method string getAddressIp() Obtain The bandwidth package resource IP.
 * @method void setAddressIp(string $AddressIp) Set The bandwidth package resource IP.
 */
class Resource extends AbstractModel
{
    /**
     * @var string The bandwidth package resource type, including `Address`, and `LoadBalance`
     */
    public $ResourceType;

    /**
     * @var string The bandwidth package ID, such as `eip-xxxx` and `lb-xxxx`.
     */
    public $ResourceId;

    /**
     * @var string The bandwidth package resource IP.
     */
    public $AddressIp;

    /**
     * @param string $ResourceType The bandwidth package resource type, including `Address`, and `LoadBalance`
     * @param string $ResourceId The bandwidth package ID, such as `eip-xxxx` and `lb-xxxx`.
     * @param string $AddressIp The bandwidth package resource IP.
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }
    }
}
