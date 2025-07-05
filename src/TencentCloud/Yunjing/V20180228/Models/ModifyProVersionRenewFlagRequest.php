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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProVersionRenewFlag request structure.
 *
 * @method string getRenewFlag() Obtain Auto-renewal flag. Valid values:
<li>NOTIFY_AND_AUTO_RENEW: notifies of expiration and auto-renews</li>
<li>NOTIFY_AND_MANUAL_RENEW: notifies of expiration but does not auto-renew</li>
<li>DISABLE_NOTIFY_AND_MANUAL_RENEW: does not notify of expiration or auto-renew</li>
 * @method void setRenewFlag(string $RenewFlag) Set Auto-renewal flag. Valid values:
<li>NOTIFY_AND_AUTO_RENEW: notifies of expiration and auto-renews</li>
<li>NOTIFY_AND_MANUAL_RENEW: notifies of expiration but does not auto-renew</li>
<li>DISABLE_NOTIFY_AND_MANUAL_RENEW: does not notify of expiration or auto-renew</li>
 * @method string getQuuid() Obtain Unique server ID, corresponding to `uuid` for CVM or `instanceId` for BM.
 * @method void setQuuid(string $Quuid) Set Unique server ID, corresponding to `uuid` for CVM or `instanceId` for BM.
 */
class ModifyProVersionRenewFlagRequest extends AbstractModel
{
    /**
     * @var string Auto-renewal flag. Valid values:
<li>NOTIFY_AND_AUTO_RENEW: notifies of expiration and auto-renews</li>
<li>NOTIFY_AND_MANUAL_RENEW: notifies of expiration but does not auto-renew</li>
<li>DISABLE_NOTIFY_AND_MANUAL_RENEW: does not notify of expiration or auto-renew</li>
     */
    public $RenewFlag;

    /**
     * @var string Unique server ID, corresponding to `uuid` for CVM or `instanceId` for BM.
     */
    public $Quuid;

    /**
     * @param string $RenewFlag Auto-renewal flag. Valid values:
<li>NOTIFY_AND_AUTO_RENEW: notifies of expiration and auto-renews</li>
<li>NOTIFY_AND_MANUAL_RENEW: notifies of expiration but does not auto-renew</li>
<li>DISABLE_NOTIFY_AND_MANUAL_RENEW: does not notify of expiration or auto-renew</li>
     * @param string $Quuid Unique server ID, corresponding to `uuid` for CVM or `instanceId` for BM.
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
        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
