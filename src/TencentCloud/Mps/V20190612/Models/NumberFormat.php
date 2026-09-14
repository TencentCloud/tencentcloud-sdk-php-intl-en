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
 * Rules for the `{number}` variable in the output filename.
 *
 * @method integer getInitialValue() Obtain The starting value of the `{number}` variable. Default value: 0.
 * @method void setInitialValue(integer $InitialValue) Set The starting value of the `{number}` variable. Default value: 0.
 * @method integer getIncrement() Obtain The growth step length of the `{number}` variable, with a default value of 1.
 * @method void setIncrement(integer $Increment) Set The growth step length of the `{number}` variable, with a default value of 1.
 * @method integer getMinLength() Obtain Minimum length of the `{number}` variable. Placeholder is used if the length is not sufficient. Default value: 1.
 * @method void setMinLength(integer $MinLength) Set Minimum length of the `{number}` variable. Placeholder is used if the length is not sufficient. Default value: 1.
 * @method string getPlaceHolder() Obtain Placeholder to add when the length of the `{number}` variable is not sufficient. Default value: "0".
 * @method void setPlaceHolder(string $PlaceHolder) Set Placeholder to add when the length of the `{number}` variable is not sufficient. Default value: "0".
 */
class NumberFormat extends AbstractModel
{
    /**
     * @var integer The starting value of the `{number}` variable. Default value: 0.
     */
    public $InitialValue;

    /**
     * @var integer The growth step length of the `{number}` variable, with a default value of 1.
     */
    public $Increment;

    /**
     * @var integer Minimum length of the `{number}` variable. Placeholder is used if the length is not sufficient. Default value: 1.
     */
    public $MinLength;

    /**
     * @var string Placeholder to add when the length of the `{number}` variable is not sufficient. Default value: "0".
     */
    public $PlaceHolder;

    /**
     * @param integer $InitialValue The starting value of the `{number}` variable. Default value: 0.
     * @param integer $Increment The growth step length of the `{number}` variable, with a default value of 1.
     * @param integer $MinLength Minimum length of the `{number}` variable. Placeholder is used if the length is not sufficient. Default value: 1.
     * @param string $PlaceHolder Placeholder to add when the length of the `{number}` variable is not sufficient. Default value: "0".
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
        if (array_key_exists("InitialValue",$param) and $param["InitialValue"] !== null) {
            $this->InitialValue = $param["InitialValue"];
        }

        if (array_key_exists("Increment",$param) and $param["Increment"] !== null) {
            $this->Increment = $param["Increment"];
        }

        if (array_key_exists("MinLength",$param) and $param["MinLength"] !== null) {
            $this->MinLength = $param["MinLength"];
        }

        if (array_key_exists("PlaceHolder",$param) and $param["PlaceHolder"] !== null) {
            $this->PlaceHolder = $param["PlaceHolder"];
        }
    }
}
