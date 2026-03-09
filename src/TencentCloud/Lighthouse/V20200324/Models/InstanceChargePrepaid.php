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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance billing mode
 *
 * @method integer getPeriod() Obtain Duration of instance purchase. measurement unit: month.
-Valid values when creating an instance: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60.
-When renewing an instance, valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
 * @method void setPeriod(integer $Period) Set Duration of instance purchase. measurement unit: month.
-Valid values when creating an instance: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60.
-When renewing an instance, valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
 * @method string getRenewFlag() Obtain AUTO-Renewal flag. valid values:<br><li>NOTIFY_AND_AUTO_RENEW: NOTIFY AND AUTO-RENEW on expiration</li><br><li>NOTIFY_AND_MANUAL_RENEW: NOTIFY expiration without AUTO-RENEW. users need to manually RENEW.</li><br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: no AUTO-renewal AND no notification</li><br><br>default value: NOTIFY_AND_MANUAL_RENEW. if this parameter is set to NOTIFY_AND_AUTO_RENEW, the instance will automatically RENEW on a monthly basis after expiration when the account balance is sufficient.
 * @method void setRenewFlag(string $RenewFlag) Set AUTO-Renewal flag. valid values:<br><li>NOTIFY_AND_AUTO_RENEW: NOTIFY AND AUTO-RENEW on expiration</li><br><li>NOTIFY_AND_MANUAL_RENEW: NOTIFY expiration without AUTO-RENEW. users need to manually RENEW.</li><br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: no AUTO-renewal AND no notification</li><br><br>default value: NOTIFY_AND_MANUAL_RENEW. if this parameter is set to NOTIFY_AND_AUTO_RENEW, the instance will automatically RENEW on a monthly basis after expiration when the account balance is sufficient.
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer Duration of instance purchase. measurement unit: month.
-Valid values when creating an instance: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60.
-When renewing an instance, valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
     */
    public $Period;

    /**
     * @var string AUTO-Renewal flag. valid values:<br><li>NOTIFY_AND_AUTO_RENEW: NOTIFY AND AUTO-RENEW on expiration</li><br><li>NOTIFY_AND_MANUAL_RENEW: NOTIFY expiration without AUTO-RENEW. users need to manually RENEW.</li><br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: no AUTO-renewal AND no notification</li><br><br>default value: NOTIFY_AND_MANUAL_RENEW. if this parameter is set to NOTIFY_AND_AUTO_RENEW, the instance will automatically RENEW on a monthly basis after expiration when the account balance is sufficient.
     */
    public $RenewFlag;

    /**
     * @param integer $Period Duration of instance purchase. measurement unit: month.
-Valid values when creating an instance: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60.
-When renewing an instance, valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36.
     * @param string $RenewFlag AUTO-Renewal flag. valid values:<br><li>NOTIFY_AND_AUTO_RENEW: NOTIFY AND AUTO-RENEW on expiration</li><br><li>NOTIFY_AND_MANUAL_RENEW: NOTIFY expiration without AUTO-RENEW. users need to manually RENEW.</li><br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: no AUTO-renewal AND no notification</li><br><br>default value: NOTIFY_AND_MANUAL_RENEW. if this parameter is set to NOTIFY_AND_AUTO_RENEW, the instance will automatically RENEW on a monthly basis after expiration when the account balance is sufficient.
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
