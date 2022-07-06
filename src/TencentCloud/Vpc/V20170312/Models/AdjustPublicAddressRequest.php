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
 * AdjustPublicAddress request structure.
 *
 * @method string getInstanceId() Obtain The unique ID of the CVM instance, such as `ins-11112222`.
 * @method void setInstanceId(string $InstanceId) Set The unique ID of the CVM instance, such as `ins-11112222`.
 * @method string getAddressId() Obtain The unique ID of the EIP, such as `eip-11112222`.
 * @method void setAddressId(string $AddressId) Set The unique ID of the EIP, such as `eip-11112222`.
 */
class AdjustPublicAddressRequest extends AbstractModel
{
    /**
     * @var string The unique ID of the CVM instance, such as `ins-11112222`.
     */
    public $InstanceId;

    /**
     * @var string The unique ID of the EIP, such as `eip-11112222`.
     */
    public $AddressId;

    /**
     * @param string $InstanceId The unique ID of the CVM instance, such as `ins-11112222`.
     * @param string $AddressId The unique ID of the EIP, such as `eip-11112222`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }
    }
}
