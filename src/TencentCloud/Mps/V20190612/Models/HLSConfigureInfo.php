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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HLS configuration parameters
 *
 * @method integer getItemDuration() Obtain Duration of TS file, unit: second, value ranges from 5 to 30 seconds.

Leave it blank and it defaults to 30 seconds.
 * @method void setItemDuration(integer $ItemDuration) Set Duration of TS file, unit: second, value ranges from 5 to 30 seconds.

Leave it blank and it defaults to 30 seconds.
 * @method integer getInterval() Obtain Recording period, unit: second, value ranges from 10 minutes to 12 hr.

Leave it blank defaults to 10 minutes (3600 seconds).
 * @method void setInterval(integer $Interval) Set Recording period, unit: second, value ranges from 10 minutes to 12 hr.

Leave it blank defaults to 10 minutes (3600 seconds).
 * @method integer getContinueTimeout() Obtain Continuation waiting time, unit: second. Value range: 60 seconds to 1800 seconds.
Leave blank defaults to 0 (recording continuation disabled).
 * @method void setContinueTimeout(integer $ContinueTimeout) Set Continuation waiting time, unit: second. Value range: 60 seconds to 1800 seconds.
Leave blank defaults to 0 (recording continuation disabled).
 */
class HLSConfigureInfo extends AbstractModel
{
    /**
     * @var integer Duration of TS file, unit: second, value ranges from 5 to 30 seconds.

Leave it blank and it defaults to 30 seconds.
     */
    public $ItemDuration;

    /**
     * @var integer Recording period, unit: second, value ranges from 10 minutes to 12 hr.

Leave it blank defaults to 10 minutes (3600 seconds).
     */
    public $Interval;

    /**
     * @var integer Continuation waiting time, unit: second. Value range: 60 seconds to 1800 seconds.
Leave blank defaults to 0 (recording continuation disabled).
     */
    public $ContinueTimeout;

    /**
     * @param integer $ItemDuration Duration of TS file, unit: second, value ranges from 5 to 30 seconds.

Leave it blank and it defaults to 30 seconds.
     * @param integer $Interval Recording period, unit: second, value ranges from 10 minutes to 12 hr.

Leave it blank defaults to 10 minutes (3600 seconds).
     * @param integer $ContinueTimeout Continuation waiting time, unit: second. Value range: 60 seconds to 1800 seconds.
Leave blank defaults to 0 (recording continuation disabled).
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
