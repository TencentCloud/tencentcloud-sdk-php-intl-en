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
 * Prepaid (monthly subscription) billing object.
 *
 * @method integer getPeriod() Obtain Purchased usage period (in month). Value range: [1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 24, 36].
 * @method void setPeriod(integer $Period) Set Purchased usage period (in month). Value range: [1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 24, 36].
 * @method string getRenewFlag() Obtain Auto-renewal ID. Value range: NOTIFY_AND_AUTO_RENEW: notify expiry and renew automatically, NOTIFY_AND_MANUAL_RENEW: notify expiry but do not renew automatically. The default is NOTIFY_AND_MANUAL_RENEW
 * @method void setRenewFlag(string $RenewFlag) Set Auto-renewal ID. Value range: NOTIFY_AND_AUTO_RENEW: notify expiry and renew automatically, NOTIFY_AND_MANUAL_RENEW: notify expiry but do not renew automatically. The default is NOTIFY_AND_MANUAL_RENEW
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer Purchased usage period (in month). Value range: [1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 24, 36].
     */
    public $Period;

    /**
     * @var string Auto-renewal ID. Value range: NOTIFY_AND_AUTO_RENEW: notify expiry and renew automatically, NOTIFY_AND_MANUAL_RENEW: notify expiry but do not renew automatically. The default is NOTIFY_AND_MANUAL_RENEW
     */
    public $RenewFlag;

    /**
     * @param integer $Period Purchased usage period (in month). Value range: [1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 24, 36].
     * @param string $RenewFlag Auto-renewal ID. Value range: NOTIFY_AND_AUTO_RENEW: notify expiry and renew automatically, NOTIFY_AND_MANUAL_RENEW: notify expiry but do not renew automatically. The default is NOTIFY_AND_MANUAL_RENEW
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
