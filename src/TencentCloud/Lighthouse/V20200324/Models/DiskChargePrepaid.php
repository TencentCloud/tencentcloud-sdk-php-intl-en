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
 * Parameter settings for the monthly subscribed cloud disk
 *
 * @method integer getPeriod() Obtain Purchase duration.
 * @method void setPeriod(integer $Period) Set Purchase duration.
 * @method string getRenewFlag() Obtain Auto-Renewal flag. Valid values:

`NOTIFY_AND_AUTO_RENEW`: Trigger expiration notification and renew automatically
`NOTIFY_AND_MANUAL_RENEW`: Trigger expiration notification but do not renew
`u200cDISABLE_NOTIFY_AND_AUTO_RENEW`: Neither trigger expiration notification nor renew

Default: `NOTIFY_AND_MANUAL_RENEW`. If `NOTIFY_AND_AUTO_RENEW` is specified, the instance is automatically renewed on a monthly basis when the account balance is sufficient.
 * @method void setRenewFlag(string $RenewFlag) Set Auto-Renewal flag. Valid values:

`NOTIFY_AND_AUTO_RENEW`: Trigger expiration notification and renew automatically
`NOTIFY_AND_MANUAL_RENEW`: Trigger expiration notification but do not renew
`u200cDISABLE_NOTIFY_AND_AUTO_RENEW`: Neither trigger expiration notification nor renew

Default: `NOTIFY_AND_MANUAL_RENEW`. If `NOTIFY_AND_AUTO_RENEW` is specified, the instance is automatically renewed on a monthly basis when the account balance is sufficient.
 * @method string getTimeUnit() Obtain Purchase duration unit. Default value: "m" (month)
 * @method void setTimeUnit(string $TimeUnit) Set Purchase duration unit. Default value: "m" (month)
 */
class DiskChargePrepaid extends AbstractModel
{
    /**
     * @var integer Purchase duration.
     */
    public $Period;

    /**
     * @var string Auto-Renewal flag. Valid values:

`NOTIFY_AND_AUTO_RENEW`: Trigger expiration notification and renew automatically
`NOTIFY_AND_MANUAL_RENEW`: Trigger expiration notification but do not renew
`u200cDISABLE_NOTIFY_AND_AUTO_RENEW`: Neither trigger expiration notification nor renew

Default: `NOTIFY_AND_MANUAL_RENEW`. If `NOTIFY_AND_AUTO_RENEW` is specified, the instance is automatically renewed on a monthly basis when the account balance is sufficient.
     */
    public $RenewFlag;

    /**
     * @var string Purchase duration unit. Default value: "m" (month)
     */
    public $TimeUnit;

    /**
     * @param integer $Period Purchase duration.
     * @param string $RenewFlag Auto-Renewal flag. Valid values:

`NOTIFY_AND_AUTO_RENEW`: Trigger expiration notification and renew automatically
`NOTIFY_AND_MANUAL_RENEW`: Trigger expiration notification but do not renew
`u200cDISABLE_NOTIFY_AND_AUTO_RENEW`: Neither trigger expiration notification nor renew

Default: `NOTIFY_AND_MANUAL_RENEW`. If `NOTIFY_AND_AUTO_RENEW` is specified, the instance is automatically renewed on a monthly basis when the account balance is sufficient.
     * @param string $TimeUnit Purchase duration unit. Default value: "m" (month)
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
    }
}
