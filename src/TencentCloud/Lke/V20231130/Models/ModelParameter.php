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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Model parameter value range.
 *
 * @method float getDefault() Obtain Default value.
 * @method void setDefault(float $Default) Set Default value.
 * @method float getMin() Obtain Minimum value.
 * @method void setMin(float $Min) Set Minimum value.
 * @method float getMax() Obtain Maximum value.
 * @method void setMax(float $Max) Set Maximum value.
 */
class ModelParameter extends AbstractModel
{
    /**
     * @var float Default value.
     */
    public $Default;

    /**
     * @var float Minimum value.
     */
    public $Min;

    /**
     * @var float Maximum value.
     */
    public $Max;

    /**
     * @param float $Default Default value.
     * @param float $Min Minimum value.
     * @param float $Max Maximum value.
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
        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }
    }
}
