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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event settings
 *
 * @method TimedRecordSettings getTimedRecordSettings() Obtain Timed recording settings
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTimedRecordSettings(TimedRecordSettings $TimedRecordSettings) Set Timed recording settings
Note: This field may return `null`, indicating that no valid value was found.
 */
class PlanSettings extends AbstractModel
{
    /**
     * @var TimedRecordSettings Timed recording settings
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TimedRecordSettings;

    /**
     * @param TimedRecordSettings $TimedRecordSettings Timed recording settings
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("TimedRecordSettings",$param) and $param["TimedRecordSettings"] !== null) {
            $this->TimedRecordSettings = new TimedRecordSettings();
            $this->TimedRecordSettings->deserialize($param["TimedRecordSettings"]);
        }
    }
}
