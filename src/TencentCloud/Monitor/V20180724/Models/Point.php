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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monitoring data point
 *
 * @method integer getTimestamp() Obtain Time point when this monitoring data point is generated
 * @method void setTimestamp(integer $Timestamp) Set Time point when this monitoring data point is generated
 * @method float getValue() Obtain Monitoring data point value
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setValue(float $Value) Set Monitoring data point value
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Point extends AbstractModel
{
    /**
     * @var integer Time point when this monitoring data point is generated
     */
    public $Timestamp;

    /**
     * @var float Monitoring data point value
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @param integer $Timestamp Time point when this monitoring data point is generated
     * @param float $Value Monitoring data point value
Note: this field may return null, indicating that no valid values can be obtained.
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
