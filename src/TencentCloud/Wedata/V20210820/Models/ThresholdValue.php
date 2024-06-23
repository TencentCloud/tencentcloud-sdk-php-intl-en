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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data quality threshold
 *
 * @method integer getValueType() Obtain Threshold type 1. Low threshold 2. High threshold 3. Normal threshold 4. Enumerated values
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setValueType(integer $ValueType) Set Threshold type 1. Low threshold 2. High threshold 3. Normal threshold 4. Enumerated values
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getValue() Obtain ThresholdNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setValue(string $Value) Set ThresholdNote: This field may return null, indicating that no valid value can be obtained.
 */
class ThresholdValue extends AbstractModel
{
    /**
     * @var integer Threshold type 1. Low threshold 2. High threshold 3. Normal threshold 4. Enumerated values
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ValueType;

    /**
     * @var string ThresholdNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Value;

    /**
     * @param integer $ValueType Threshold type 1. Low threshold 2. High threshold 3. Normal threshold 4. Enumerated values
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Value ThresholdNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
