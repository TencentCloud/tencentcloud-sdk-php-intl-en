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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Execution policy for scheduled snapshot. It indicates that a scheduled snapshot policy is executed at the specified `Hour` in the days specified by `DayOfWeek` or `DayOfMonth` or once every `IntervalDays` days. Note: `DayOfWeek`, `DayOfMonth`, and `IntervalDays` are mutually exclusive, and only one policy rule can be set.
 *
 * @method array getHour() Obtain Specifies the time that that the scheduled snapshot policy will be triggered. The unit is hour. The value range is [0-23]. 00:00-23:00 is a total of 24 time points that can be selected. 1 indicates 01:00, and so on.
 * @method void setHour(array $Hour) Set Specifies the time that that the scheduled snapshot policy will be triggered. The unit is hour. The value range is [0-23]. 00:00-23:00 is a total of 24 time points that can be selected. 1 indicates 01:00, and so on.
 * @method array getDayOfWeek() Obtain Specifies the days of the week, from Monday to Sunday, on which a scheduled snapshot will be triggered. Value range: [0, 6]. 0 indicates triggering on Sunday, 1-6 indicate triggering on Monday-Saturday.
 * @method void setDayOfWeek(array $DayOfWeek) Set Specifies the days of the week, from Monday to Sunday, on which a scheduled snapshot will be triggered. Value range: [0, 6]. 0 indicates triggering on Sunday, 1-6 indicate triggering on Monday-Saturday.
 */
class Policy extends AbstractModel
{
    /**
     * @var array Specifies the time that that the scheduled snapshot policy will be triggered. The unit is hour. The value range is [0-23]. 00:00-23:00 is a total of 24 time points that can be selected. 1 indicates 01:00, and so on.
     */
    public $Hour;

    /**
     * @var array Specifies the days of the week, from Monday to Sunday, on which a scheduled snapshot will be triggered. Value range: [0, 6]. 0 indicates triggering on Sunday, 1-6 indicate triggering on Monday-Saturday.
     */
    public $DayOfWeek;

    /**
     * @param array $Hour Specifies the time that that the scheduled snapshot policy will be triggered. The unit is hour. The value range is [0-23]. 00:00-23:00 is a total of 24 time points that can be selected. 1 indicates 01:00, and so on.
     * @param array $DayOfWeek Specifies the days of the week, from Monday to Sunday, on which a scheduled snapshot will be triggered. Value range: [0, 6]. 0 indicates triggering on Sunday, 1-6 indicate triggering on Monday-Saturday.
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
        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }
    }
}
