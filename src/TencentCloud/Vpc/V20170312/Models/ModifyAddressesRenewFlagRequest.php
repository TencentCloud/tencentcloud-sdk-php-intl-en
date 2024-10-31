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
 * ModifyAddressesRenewFlag request structure.
 *
 * @method array getAddressIds() Obtain List of unique EIP IDs, for example, eip-xxxx.
 * @method void setAddressIds(array $AddressIds) Set List of unique EIP IDs, for example, eip-xxxx.
 * @method string getRenewFlag() Obtain Auto-renewal flag.
<ul style="margin:0">
<li>NOTIFY_AND_AUTO_RENEW: Notify upon expiration and automatically renew.</li>
<li>NOTIFY_AND_MANUAL_RENEW: Notify upon expiration but do not automatically renew.</li>
<li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Do not notify upon expiration and do not automatically renew.</li>
</ul>
If this parameter is set to NOTIFY_AND_AUTO_RENEW and the account balance is sufficient, the instance will be automatically renewed on a monthly basis after expiration.
 * @method void setRenewFlag(string $RenewFlag) Set Auto-renewal flag.
<ul style="margin:0">
<li>NOTIFY_AND_AUTO_RENEW: Notify upon expiration and automatically renew.</li>
<li>NOTIFY_AND_MANUAL_RENEW: Notify upon expiration but do not automatically renew.</li>
<li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Do not notify upon expiration and do not automatically renew.</li>
</ul>
If this parameter is set to NOTIFY_AND_AUTO_RENEW and the account balance is sufficient, the instance will be automatically renewed on a monthly basis after expiration.
 */
class ModifyAddressesRenewFlagRequest extends AbstractModel
{
    /**
     * @var array List of unique EIP IDs, for example, eip-xxxx.
     */
    public $AddressIds;

    /**
     * @var string Auto-renewal flag.
<ul style="margin:0">
<li>NOTIFY_AND_AUTO_RENEW: Notify upon expiration and automatically renew.</li>
<li>NOTIFY_AND_MANUAL_RENEW: Notify upon expiration but do not automatically renew.</li>
<li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Do not notify upon expiration and do not automatically renew.</li>
</ul>
If this parameter is set to NOTIFY_AND_AUTO_RENEW and the account balance is sufficient, the instance will be automatically renewed on a monthly basis after expiration.
     */
    public $RenewFlag;

    /**
     * @param array $AddressIds List of unique EIP IDs, for example, eip-xxxx.
     * @param string $RenewFlag Auto-renewal flag.
<ul style="margin:0">
<li>NOTIFY_AND_AUTO_RENEW: Notify upon expiration and automatically renew.</li>
<li>NOTIFY_AND_MANUAL_RENEW: Notify upon expiration but do not automatically renew.</li>
<li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Do not notify upon expiration and do not automatically renew.</li>
</ul>
If this parameter is set to NOTIFY_AND_AUTO_RENEW and the account balance is sufficient, the instance will be automatically renewed on a monthly basis after expiration.
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

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
