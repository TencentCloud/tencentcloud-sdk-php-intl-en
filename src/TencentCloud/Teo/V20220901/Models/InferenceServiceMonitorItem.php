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
 * Service monitoring data items for reasoning.
 *
 * @method string getTimestamp() Obtain Corresponding time point of monitoring data.
 * @method void setTimestamp(string $Timestamp) Set Corresponding time point of monitoring data.
 * @method float getValue() Obtain Specific values.
 * @method void setValue(float $Value) Set Specific values.
 */
class InferenceServiceMonitorItem extends AbstractModel
{
    /**
     * @var string Corresponding time point of monitoring data.
     */
    public $Timestamp;

    /**
     * @var float Specific values.
     */
    public $Value;

    /**
     * @param string $Timestamp Corresponding time point of monitoring data.
     * @param float $Value Specific values.
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
