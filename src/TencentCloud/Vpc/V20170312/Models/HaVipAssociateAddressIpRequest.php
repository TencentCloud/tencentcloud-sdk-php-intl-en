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
 * HaVipAssociateAddressIp request structure.
 *
 * @method string getHaVipId() Obtain The unique `ID` of the `HAVIP`, such as `havip-9o233uri`. This must be a `HAVIP` that has not been bound to an `EIP`
 * @method void setHaVipId(string $HaVipId) Set The unique `ID` of the `HAVIP`, such as `havip-9o233uri`. This must be a `HAVIP` that has not been bound to an `EIP`
 * @method string getAddressIp() Obtain The Elastic `IP`. This must be an `EIP` that has not been bound to a `HAVIP`
 * @method void setAddressIp(string $AddressIp) Set The Elastic `IP`. This must be an `EIP` that has not been bound to a `HAVIP`
 */
class HaVipAssociateAddressIpRequest extends AbstractModel
{
    /**
     * @var string The unique `ID` of the `HAVIP`, such as `havip-9o233uri`. This must be a `HAVIP` that has not been bound to an `EIP`
     */
    public $HaVipId;

    /**
     * @var string The Elastic `IP`. This must be an `EIP` that has not been bound to a `HAVIP`
     */
    public $AddressIp;

    /**
     * @param string $HaVipId The unique `ID` of the `HAVIP`, such as `havip-9o233uri`. This must be a `HAVIP` that has not been bound to an `EIP`
     * @param string $AddressIp The Elastic `IP`. This must be an `EIP` that has not been bound to a `HAVIP`
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
        if (array_key_exists("HaVipId",$param) and $param["HaVipId"] !== null) {
            $this->HaVipId = $param["HaVipId"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }
    }
}
