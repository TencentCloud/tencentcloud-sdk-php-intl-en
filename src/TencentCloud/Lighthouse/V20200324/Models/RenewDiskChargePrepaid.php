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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter settings for renewing the monthly subscribed cloud disk
 *
 * @method integer getPeriod() Obtain Renewal period
 * @method void setPeriod(integer $Period) Set Renewal period
 * @method string getRenewFlag() Obtain Whether to renew the disk automatically. Values:

`NOTIFY_AND_AUTO_RENEW`: Trigger expiration notification and renew automatically; `NOTIFY_AND_MANUAL_RENEW`: Trigger expiration notification but do not renew; `DISABLE_NOTIFY_AND_MANUAL_RENEW`: Do not trigger the notification and do not renew.

Default: `NOTIFY_AND_MANUAL_RENEW`. If `NOTIFY_AND_AUTO_RENEW` is specified, the instance is automatically renewed on a monthly basis when the account balance is sufficient.
 * @method void setRenewFlag(string $RenewFlag) Set Whether to renew the disk automatically. Values:

`NOTIFY_AND_AUTO_RENEW`: Trigger expiration notification and renew automatically; `NOTIFY_AND_MANUAL_RENEW`: Trigger expiration notification but do not renew; `DISABLE_NOTIFY_AND_MANUAL_RENEW`: Do not trigger the notification and do not renew.

Default: `NOTIFY_AND_MANUAL_RENEW`. If `NOTIFY_AND_AUTO_RENEW` is specified, the instance is automatically renewed on a monthly basis when the account balance is sufficient.
 * @method string getTimeUnit() Obtain Unit of the period. Values: `m` (month).
 * @method void setTimeUnit(string $TimeUnit) Set Unit of the period. Values: `m` (month).
 * @method string getCurInstanceDeadline() Obtain Expiration time of the current instance, such as "2018-01-01 00:00:00". Specify this parameter to align the expiration time of the instance and attached cloud disks. `CurInstanceDeadline` and `Period` cannot be both specified.
 * @method void setCurInstanceDeadline(string $CurInstanceDeadline) Set Expiration time of the current instance, such as "2018-01-01 00:00:00". Specify this parameter to align the expiration time of the instance and attached cloud disks. `CurInstanceDeadline` and `Period` cannot be both specified.
 */
class RenewDiskChargePrepaid extends AbstractModel
{
    /**
     * @var integer Renewal period
     */
    public $Period;

    /**
     * @var string Whether to renew the disk automatically. Values:

`NOTIFY_AND_AUTO_RENEW`: Trigger expiration notification and renew automatically; `NOTIFY_AND_MANUAL_RENEW`: Trigger expiration notification but do not renew; `DISABLE_NOTIFY_AND_MANUAL_RENEW`: Do not trigger the notification and do not renew.

Default: `NOTIFY_AND_MANUAL_RENEW`. If `NOTIFY_AND_AUTO_RENEW` is specified, the instance is automatically renewed on a monthly basis when the account balance is sufficient.
     */
    public $RenewFlag;

    /**
     * @var string Unit of the period. Values: `m` (month).
     */
    public $TimeUnit;

    /**
     * @var string Expiration time of the current instance, such as "2018-01-01 00:00:00". Specify this parameter to align the expiration time of the instance and attached cloud disks. `CurInstanceDeadline` and `Period` cannot be both specified.
     */
    public $CurInstanceDeadline;

    /**
     * @param integer $Period Renewal period
     * @param string $RenewFlag Whether to renew the disk automatically. Values:

`NOTIFY_AND_AUTO_RENEW`: Trigger expiration notification and renew automatically; `NOTIFY_AND_MANUAL_RENEW`: Trigger expiration notification but do not renew; `DISABLE_NOTIFY_AND_MANUAL_RENEW`: Do not trigger the notification and do not renew.

Default: `NOTIFY_AND_MANUAL_RENEW`. If `NOTIFY_AND_AUTO_RENEW` is specified, the instance is automatically renewed on a monthly basis when the account balance is sufficient.
     * @param string $TimeUnit Unit of the period. Values: `m` (month).
     * @param string $CurInstanceDeadline Expiration time of the current instance, such as "2018-01-01 00:00:00". Specify this parameter to align the expiration time of the instance and attached cloud disks. `CurInstanceDeadline` and `Period` cannot be both specified.
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

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("CurInstanceDeadline",$param) and $param["CurInstanceDeadline"] !== null) {
            $this->CurInstanceDeadline = $param["CurInstanceDeadline"];
        }
    }
}
