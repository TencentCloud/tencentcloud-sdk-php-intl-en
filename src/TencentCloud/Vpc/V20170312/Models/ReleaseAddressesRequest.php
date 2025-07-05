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
 * ReleaseAddresses request structure.
 *
 * @method array getAddressIds() Obtain The unique ID list of the EIP. The unique ID of an EIP is as follows: `eip-11112222`.
 * @method void setAddressIds(array $AddressIds) Set The unique ID list of the EIP. The unique ID of an EIP is as follows: `eip-11112222`.
 */
class ReleaseAddressesRequest extends AbstractModel
{
    /**
     * @var array The unique ID list of the EIP. The unique ID of an EIP is as follows: `eip-11112222`.
     */
    public $AddressIds;

    /**
     * @param array $AddressIds The unique ID list of the EIP. The unique ID of an EIP is as follows: `eip-11112222`.
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
        if (array_key_exists("AddressIds",$param) and $param["AddressIds"] !== null) {
            $this->AddressIds = $param["AddressIds"];
        }
    }
}
