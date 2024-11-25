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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monthly subscription configuration
 *
 * @method integer getPeriod() Obtain Billing cycle of the pay-as-you-go mode (unit: month):
1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60
 * @method void setPeriod(integer $Period) Set Billing cycle of the pay-as-you-go mode (unit: month):
1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60
 * @method string getRenewFlag() Obtain Renewal method of the prepayment mode:
- NOTIFY_AND_AUTO_RENEW: Notify the user of expiration and auto-renew (default)
- NOTIFY_AND_MANUAL_RENEW: Notify the user of expiration but do not auto-renew
- DISABLE_NOTIFY_AND_MANUAL_RENEW: Do not notify the user of expiration and do not auto-renew

 * @method void setRenewFlag(string $RenewFlag) Set Renewal method of the prepayment mode:
- NOTIFY_AND_AUTO_RENEW: Notify the user of expiration and auto-renew (default)
- NOTIFY_AND_MANUAL_RENEW: Notify the user of expiration but do not auto-renew
- DISABLE_NOTIFY_AND_MANUAL_RENEW: Do not notify the user of expiration and do not auto-renew
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer Billing cycle of the pay-as-you-go mode (unit: month):
1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60
     */
    public $Period;

    /**
     * @var string Renewal method of the prepayment mode:
- NOTIFY_AND_AUTO_RENEW: Notify the user of expiration and auto-renew (default)
- NOTIFY_AND_MANUAL_RENEW: Notify the user of expiration but do not auto-renew
- DISABLE_NOTIFY_AND_MANUAL_RENEW: Do not notify the user of expiration and do not auto-renew

     */
    public $RenewFlag;

    /**
     * @param integer $Period Billing cycle of the pay-as-you-go mode (unit: month):
1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60
     * @param string $RenewFlag Renewal method of the prepayment mode:
- NOTIFY_AND_AUTO_RENEW: Notify the user of expiration and auto-renew (default)
- NOTIFY_AND_MANUAL_RENEW: Notify the user of expiration but do not auto-renew
- DISABLE_NOTIFY_AND_MANUAL_RENEW: Do not notify the user of expiration and do not auto-renew
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
