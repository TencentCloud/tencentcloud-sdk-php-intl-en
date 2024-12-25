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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HLS configuration parameters
 *
 * @method integer getItemDuration() Obtain Duration of a single TS file in seconds. Value range: 5-30 seconds.

If this parameter is left empty, 30 seconds will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setItemDuration(integer $ItemDuration) Set Duration of a single TS file in seconds. Value range: 5-30 seconds.

If this parameter is left empty, 30 seconds will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getInterval() Obtain Recording cycle in seconds. Value range: 10 minutes to 12 hours.

If this parameter is left empty, 10 minutes (3600 seconds) will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInterval(integer $Interval) Set Recording cycle in seconds. Value range: 10 minutes to 12 hours.

If this parameter is left empty, 10 minutes (3600 seconds) will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getContinueTimeout() Obtain Resume recording waiting time, unit: seconds. Value range: 60-1800 seconds.
If this parameter is left empty, 0 (resume recording not enabled) will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setContinueTimeout(integer $ContinueTimeout) Set Resume recording waiting time, unit: seconds. Value range: 60-1800 seconds.
If this parameter is left empty, 0 (resume recording not enabled) will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class HLSConfigureInfo extends AbstractModel
{
    /**
     * @var integer Duration of a single TS file in seconds. Value range: 5-30 seconds.

If this parameter is left empty, 30 seconds will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ItemDuration;

    /**
     * @var integer Recording cycle in seconds. Value range: 10 minutes to 12 hours.

If this parameter is left empty, 10 minutes (3600 seconds) will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Interval;

    /**
     * @var integer Resume recording waiting time, unit: seconds. Value range: 60-1800 seconds.
If this parameter is left empty, 0 (resume recording not enabled) will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ContinueTimeout;

    /**
     * @param integer $ItemDuration Duration of a single TS file in seconds. Value range: 5-30 seconds.

If this parameter is left empty, 30 seconds will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Interval Recording cycle in seconds. Value range: 10 minutes to 12 hours.

If this parameter is left empty, 10 minutes (3600 seconds) will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ContinueTimeout Resume recording waiting time, unit: seconds. Value range: 60-1800 seconds.
If this parameter is left empty, 0 (resume recording not enabled) will be used by default.
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("ItemDuration",$param) and $param["ItemDuration"] !== null) {
            $this->ItemDuration = $param["ItemDuration"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("ContinueTimeout",$param) and $param["ContinueTimeout"] !== null) {
            $this->ContinueTimeout = $param["ContinueTimeout"];
        }
    }
}
