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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Edge reasoning scheduled scaling policy configuration.
 *
 * @method array getScheduledActions() Obtain Scheduled scaling action list. Fill in at least 1, supports up to 10.
 * @method void setScheduledActions(array $ScheduledActions) Set Scheduled scaling action list. Fill in at least 1, supports up to 10.
 * @method InferenceScheduledScalingEffectiveRange getEffectiveRange() Obtain Validity period range, for description of whether the scheduled scaling policy is permanently valid or valid only within a specified date range.
 * @method void setEffectiveRange(InferenceScheduledScalingEffectiveRange $EffectiveRange) Set Validity period range, for description of whether the scheduled scaling policy is permanently valid or valid only within a specified date range.
 * @method string getTimeZone() Obtain Time zone, using [IANA time zone](https://www.iana.org/time-zones) to identify the trigger time in ScheduledActions, such as UTC, Asia/Shanghai, America/New_York, Europe/London, Asia/Kolkata. UTC is used by default if not specified.





 * @method void setTimeZone(string $TimeZone) Set Time zone, using [IANA time zone](https://www.iana.org/time-zones) to identify the trigger time in ScheduledActions, such as UTC, Asia/Shanghai, America/New_York, Europe/London, Asia/Kolkata. UTC is used by default if not specified.
 */
class InferenceScheduledScalingPolicy extends AbstractModel
{
    /**
     * @var array Scheduled scaling action list. Fill in at least 1, supports up to 10.
     */
    public $ScheduledActions;

    /**
     * @var InferenceScheduledScalingEffectiveRange Validity period range, for description of whether the scheduled scaling policy is permanently valid or valid only within a specified date range.
     */
    public $EffectiveRange;

    /**
     * @var string Time zone, using [IANA time zone](https://www.iana.org/time-zones) to identify the trigger time in ScheduledActions, such as UTC, Asia/Shanghai, America/New_York, Europe/London, Asia/Kolkata. UTC is used by default if not specified.





     */
    public $TimeZone;

    /**
     * @param array $ScheduledActions Scheduled scaling action list. Fill in at least 1, supports up to 10.
     * @param InferenceScheduledScalingEffectiveRange $EffectiveRange Validity period range, for description of whether the scheduled scaling policy is permanently valid or valid only within a specified date range.
     * @param string $TimeZone Time zone, using [IANA time zone](https://www.iana.org/time-zones) to identify the trigger time in ScheduledActions, such as UTC, Asia/Shanghai, America/New_York, Europe/London, Asia/Kolkata. UTC is used by default if not specified.
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
        if (array_key_exists("ScheduledActions",$param) and $param["ScheduledActions"] !== null) {
            $this->ScheduledActions = [];
            foreach ($param["ScheduledActions"] as $key => $value){
                $obj = new InferenceScheduledScalingAction();
                $obj->deserialize($value);
                array_push($this->ScheduledActions, $obj);
            }
        }

        if (array_key_exists("EffectiveRange",$param) and $param["EffectiveRange"] !== null) {
            $this->EffectiveRange = new InferenceScheduledScalingEffectiveRange();
            $this->EffectiveRange->deserialize($param["EffectiveRange"]);
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
