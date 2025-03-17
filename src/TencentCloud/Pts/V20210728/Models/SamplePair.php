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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric sample value with timestamp.
 *
 * @method integer getTimestamp() Obtain Timestamp. It is the number of milliseconds since the epoch (1970-01-01 00:00 UTC) excluding leap seconds.
 * @method void setTimestamp(integer $Timestamp) Set Timestamp. It is the number of milliseconds since the epoch (1970-01-01 00:00 UTC) excluding leap seconds.
 * @method float getValue() Obtain Value of a given sample at a given time.
 * @method void setValue(float $Value) Set Value of a given sample at a given time.
 */
class SamplePair extends AbstractModel
{
    /**
     * @var integer Timestamp. It is the number of milliseconds since the epoch (1970-01-01 00:00 UTC) excluding leap seconds.
     */
    public $Timestamp;

    /**
     * @var float Value of a given sample at a given time.
     */
    public $Value;

    /**
     * @param integer $Timestamp Timestamp. It is the number of milliseconds since the epoch (1970-01-01 00:00 UTC) excluding leap seconds.
     * @param float $Value Value of a given sample at a given time.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
