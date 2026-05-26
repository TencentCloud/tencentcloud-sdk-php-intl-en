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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monitor the collected data.
 *
 * @method array getTimestamps() Obtain The time when monitoring data is collected

 * @method void setTimestamps(array $Timestamps) Set The time when monitoring data is collected

 * @method array getValues() Obtain Monitoring metric data; if involved in the gap time of monitoring data of multiple instances, the value will be null

 * @method void setValues(array $Values) Set Monitoring metric data; if involved in the gap time of monitoring data of multiple instances, the value will be null
 */
class DataPointView extends AbstractModel
{
    /**
     * @var array The time when monitoring data is collected

     */
    public $Timestamps;

    /**
     * @var array Monitoring metric data; if involved in the gap time of monitoring data of multiple instances, the value will be null

     */
    public $Values;

    /**
     * @param array $Timestamps The time when monitoring data is collected

     * @param array $Values Monitoring metric data; if involved in the gap time of monitoring data of multiple instances, the value will be null
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
