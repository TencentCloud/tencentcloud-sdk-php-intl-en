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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * { 
        "Period": 12,
        "RenewFlag": "NOTIFY_AND_AUTO_RENEW"
}
 *
 * @method integer getPeriod() Obtain Purchase duration. unit: month.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeriod(integer $Period) Set Purchase duration. unit: month.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRenewFlag() Obtain NOTIFY_AND_MANUAL_RENEW: notifies that the account is about to expire but does not automatically renew the account.
NOTIFY_AND_AUTO_RENEW: specifies expiration notification and auto-renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: no notification is sent upon expiration, and the instance is not renewed automatically.
Defaults to notify expiration without auto-renew.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(string $RenewFlag) Set NOTIFY_AND_MANUAL_RENEW: notifies that the account is about to expire but does not automatically renew the account.
NOTIFY_AND_AUTO_RENEW: specifies expiration notification and auto-renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: no notification is sent upon expiration, and the instance is not renewed automatically.
Defaults to notify expiration without auto-renew.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer Purchase duration. unit: month.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Period;

    /**
     * @var string NOTIFY_AND_MANUAL_RENEW: notifies that the account is about to expire but does not automatically renew the account.
NOTIFY_AND_AUTO_RENEW: specifies expiration notification and auto-renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: no notification is sent upon expiration, and the instance is not renewed automatically.
Defaults to notify expiration without auto-renew.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @param integer $Period Purchase duration. unit: month.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RenewFlag NOTIFY_AND_MANUAL_RENEW: notifies that the account is about to expire but does not automatically renew the account.
NOTIFY_AND_AUTO_RENEW: specifies expiration notification and auto-renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: no notification is sent upon expiration, and the instance is not renewed automatically.
Defaults to notify expiration without auto-renew.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
