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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the billing method of an instance.
 *
 * @method integer getPeriod() Obtain Subscription period in months. value range: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60.
 * @method void setPeriod(integer $Period) Set Subscription period in months. value range: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60.
 * @method string getRenewFlag() Obtain AUTO-Renewal flag. value ranges:<br><li>NOTIFY_AND_AUTO_RENEW: NOTIFY of expiration AND automatically RENEW.</li><br><li>NOTIFY_AND_MANUAL_RENEW: NOTIFY of expiration but do not automatically RENEW.</li><br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: do not NOTIFY of expiration AND do not automatically RENEW.</li><br><br>default value: NOTIFY_AND_MANUAL_RENEW. if this parameter is set to NOTIFY_AND_AUTO_RENEW, the instance will be automatically renewed monthly after expiration, provided that the account balance is sufficient.
 * @method void setRenewFlag(string $RenewFlag) Set AUTO-Renewal flag. value ranges:<br><li>NOTIFY_AND_AUTO_RENEW: NOTIFY of expiration AND automatically RENEW.</li><br><li>NOTIFY_AND_MANUAL_RENEW: NOTIFY of expiration but do not automatically RENEW.</li><br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: do not NOTIFY of expiration AND do not automatically RENEW.</li><br><br>default value: NOTIFY_AND_MANUAL_RENEW. if this parameter is set to NOTIFY_AND_AUTO_RENEW, the instance will be automatically renewed monthly after expiration, provided that the account balance is sufficient.
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer Subscription period in months. value range: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60.
     */
    public $Period;

    /**
     * @var string AUTO-Renewal flag. value ranges:<br><li>NOTIFY_AND_AUTO_RENEW: NOTIFY of expiration AND automatically RENEW.</li><br><li>NOTIFY_AND_MANUAL_RENEW: NOTIFY of expiration but do not automatically RENEW.</li><br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: do not NOTIFY of expiration AND do not automatically RENEW.</li><br><br>default value: NOTIFY_AND_MANUAL_RENEW. if this parameter is set to NOTIFY_AND_AUTO_RENEW, the instance will be automatically renewed monthly after expiration, provided that the account balance is sufficient.
     */
    public $RenewFlag;

    /**
     * @param integer $Period Subscription period in months. value range: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60.
     * @param string $RenewFlag AUTO-Renewal flag. value ranges:<br><li>NOTIFY_AND_AUTO_RENEW: NOTIFY of expiration AND automatically RENEW.</li><br><li>NOTIFY_AND_MANUAL_RENEW: NOTIFY of expiration but do not automatically RENEW.</li><br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: do not NOTIFY of expiration AND do not automatically RENEW.</li><br><br>default value: NOTIFY_AND_MANUAL_RENEW. if this parameter is set to NOTIFY_AND_AUTO_RENEW, the instance will be automatically renewed monthly after expiration, provided that the account balance is sufficient.
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
