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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Range
 *
 * @method string getMin() Obtain Minimum value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMin(string $Min) Set Minimum value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMax() Obtain Maximum value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMax(string $Max) Set Maximum value.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Range extends AbstractModel
{
    /**
     * @var string Minimum value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Min;

    /**
     * @var string Maximum value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Max;

    /**
     * @param string $Min Minimum value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Max Maximum value.
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
        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }
    }
}
