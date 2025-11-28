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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monitoring data points
 *
 * @method array getTimestamps() Obtain Monitoring value array, which corresponds one-to-one with Timestamps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimestamps(array $Timestamps) Set Monitoring value array, which corresponds one-to-one with Timestamps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getValues() Obtain Monitoring data point position. For example, a day is divided into 1,440 points per minute, with each point having a serial number between 0 and 1439. If a certain serial number is not in the array, it indicates a missing data point.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValues(array $Values) Set Monitoring data point position. For example, a day is divided into 1,440 points per minute, with each point having a serial number between 0 and 1439. If a certain serial number is not in the array, it indicates a missing data point.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RocketMQDataPoint extends AbstractModel
{
    /**
     * @var array Monitoring value array, which corresponds one-to-one with Timestamps
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Timestamps;

    /**
     * @var array Monitoring data point position. For example, a day is divided into 1,440 points per minute, with each point having a serial number between 0 and 1439. If a certain serial number is not in the array, it indicates a missing data point.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Values;

    /**
     * @param array $Timestamps Monitoring value array, which corresponds one-to-one with Timestamps
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Values Monitoring data point position. For example, a day is divided into 1,440 points per minute, with each point having a serial number between 0 and 1439. If a certain serial number is not in the array, it indicates a missing data point.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Timestamps",$param) and $param["Timestamps"] !== null) {
            $this->Timestamps = $param["Timestamps"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
