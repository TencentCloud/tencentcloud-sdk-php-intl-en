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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP information data structure in the application CLB availability zone subnet mapping
 *
 * @method string getAddress() Obtain IP
 * @method void setAddress(string $Address) Set IP
 * @method string getAddressId() Obtain EIP AddressId
 * @method void setAddressId(string $AddressId) Set EIP AddressId
 */
class IPAddressInfo extends AbstractModel
{
    /**
     * @var string IP
     */
    public $Address;

    /**
     * @var string EIP AddressId
     */
    public $AddressId;

    /**
     * @param string $Address IP
     * @param string $AddressId EIP AddressId
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }
    }
}
