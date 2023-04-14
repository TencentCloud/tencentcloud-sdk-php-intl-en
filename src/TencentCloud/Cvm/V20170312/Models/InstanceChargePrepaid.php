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
 * @method integer getPeriod() Obtain Subscription period (in month). Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`, `48’, `60`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPeriod(integer $Period) Set Subscription period (in month). Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`, `48’, `60`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRenewFlag() Obtain Auto-renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: Notify upon expiration and renew automatically <br><li>NOTIFY_AND_MANUAL_RENEW: Notify upon expiration but do not renew automatically <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify upon expiration nor renew automatically <br><br>Default value: `NOTIFY_AND_MANUAL_RENEW`. When `NOTIFY_AND_AUTO_RENEW` is specified, the instance is automatically renewed on a monthly basis if the account has sufficient balance.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRenewFlag(string $RenewFlag) Set Auto-renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: Notify upon expiration and renew automatically <br><li>NOTIFY_AND_MANUAL_RENEW: Notify upon expiration but do not renew automatically <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify upon expiration nor renew automatically <br><br>Default value: `NOTIFY_AND_MANUAL_RENEW`. When `NOTIFY_AND_AUTO_RENEW` is specified, the instance is automatically renewed on a monthly basis if the account has sufficient balance.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer Subscription period (in month). Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`, `48’, `60`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Period;

    /**
     * @var string Auto-renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: Notify upon expiration and renew automatically <br><li>NOTIFY_AND_MANUAL_RENEW: Notify upon expiration but do not renew automatically <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify upon expiration nor renew automatically <br><br>Default value: `NOTIFY_AND_MANUAL_RENEW`. When `NOTIFY_AND_AUTO_RENEW` is specified, the instance is automatically renewed on a monthly basis if the account has sufficient balance.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @param integer $Period Subscription period (in month). Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`, `48’, `60`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RenewFlag Auto-renewal flag. Valid values: <br><li>NOTIFY_AND_AUTO_RENEW: Notify upon expiration and renew automatically <br><li>NOTIFY_AND_MANUAL_RENEW: Notify upon expiration but do not renew automatically <br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW: Neither notify upon expiration nor renew automatically <br><br>Default value: `NOTIFY_AND_MANUAL_RENEW`. When `NOTIFY_AND_AUTO_RENEW` is specified, the instance is automatically renewed on a monthly basis if the account has sufficient balance.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
