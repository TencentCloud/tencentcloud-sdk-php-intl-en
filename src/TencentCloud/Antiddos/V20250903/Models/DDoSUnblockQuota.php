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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Unconsumed unblocking quota info of the current account. Users who purchase Anti-DDoS products have a default unblocking quota of 3 resources. The system will reset the unblocking quota count at zero point (UTC+8) time zone each day. Unused unblocking quota on the day will not accumulate to the next day. The unblocking quota for Anti-DDoS Package (Lite) is 3 resources per month and resets monthly.
 *
 * @method integer getTotalQuota() Obtain <p>Total quota of the number of unblocking times.</p>
 * @method void setTotalQuota(integer $TotalQuota) Set <p>Total quota of the number of unblocking times.</p>
 * @method integer getUsedQuota() Obtain <p>Total quota used.</p>
 * @method void setUsedQuota(integer $UsedQuota) Set <p>Total quota used.</p>
 * @method string getQuotaStartTime() Obtain <p>Start time when the quota takes effect.</p>
 * @method void setQuotaStartTime(string $QuotaStartTime) Set <p>Start time when the quota takes effect.</p>
 * @method string getQuotaEndTime() Obtain <p>End time when the quota takes effect.</p>
 * @method void setQuotaEndTime(string $QuotaEndTime) Set <p>End time when the quota takes effect.</p>
 */
class DDoSUnblockQuota extends AbstractModel
{
    /**
     * @var integer <p>Total quota of the number of unblocking times.</p>
     */
    public $TotalQuota;

    /**
     * @var integer <p>Total quota used.</p>
     */
    public $UsedQuota;

    /**
     * @var string <p>Start time when the quota takes effect.</p>
     */
    public $QuotaStartTime;

    /**
     * @var string <p>End time when the quota takes effect.</p>
     */
    public $QuotaEndTime;

    /**
     * @param integer $TotalQuota <p>Total quota of the number of unblocking times.</p>
     * @param integer $UsedQuota <p>Total quota used.</p>
     * @param string $QuotaStartTime <p>Start time when the quota takes effect.</p>
     * @param string $QuotaEndTime <p>End time when the quota takes effect.</p>
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
        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("UsedQuota",$param) and $param["UsedQuota"] !== null) {
            $this->UsedQuota = $param["UsedQuota"];
        }

        if (array_key_exists("QuotaStartTime",$param) and $param["QuotaStartTime"] !== null) {
            $this->QuotaStartTime = $param["QuotaStartTime"];
        }

        if (array_key_exists("QuotaEndTime",$param) and $param["QuotaEndTime"] !== null) {
            $this->QuotaEndTime = $param["QuotaEndTime"];
        }
    }
}
