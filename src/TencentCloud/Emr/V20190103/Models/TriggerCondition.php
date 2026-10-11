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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule trigger condition.
 *
 * @method integer getCompareMethod() Obtain Condition comparison method. Valid values: 1 for greater than, 2 for less than, 3 for greater than or equal to, and 4 for less than or equal to.
 * @method void setCompareMethod(integer $CompareMethod) Set Condition comparison method. Valid values: 1 for greater than, 2 for less than, 3 for greater than or equal to, and 4 for less than or equal to.
 * @method float getThreshold() Obtain Condition threshold.
 * @method void setThreshold(float $Threshold) Set Condition threshold.
 */
class TriggerCondition extends AbstractModel
{
    /**
     * @var integer Condition comparison method. Valid values: 1 for greater than, 2 for less than, 3 for greater than or equal to, and 4 for less than or equal to.
     */
    public $CompareMethod;

    /**
     * @var float Condition threshold.
     */
    public $Threshold;

    /**
     * @param integer $CompareMethod Condition comparison method. Valid values: 1 for greater than, 2 for less than, 3 for greater than or equal to, and 4 for less than or equal to.
     * @param float $Threshold Condition threshold.
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
        if (array_key_exists("CompareMethod",$param) and $param["CompareMethod"] !== null) {
            $this->CompareMethod = $param["CompareMethod"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
