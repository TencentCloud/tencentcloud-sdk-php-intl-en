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
 * Rule of the `{number}` variable in the output file name.
 *
 * @method integer getInitialValue() Obtain Start value of the `{number}` variable. Default value: 0.
 * @method void setInitialValue(integer $InitialValue) Set Start value of the `{number}` variable. Default value: 0.
 * @method integer getIncrement() Obtain Increment of the `{number}` variable. Default value: 1.
 * @method void setIncrement(integer $Increment) Set Increment of the `{number}` variable. Default value: 1.
 * @method integer getMinLength() Obtain Minimum length of the `{number}` variable. A placeholder will be used if the variable length is below the minimum requirement. Default value: 1.
 * @method void setMinLength(integer $MinLength) Set Minimum length of the `{number}` variable. A placeholder will be used if the variable length is below the minimum requirement. Default value: 1.
 * @method string getPlaceHolder() Obtain Placeholder used when the `{number}` variable length is below the minimum requirement. Default value: 0.
 * @method void setPlaceHolder(string $PlaceHolder) Set Placeholder used when the `{number}` variable length is below the minimum requirement. Default value: 0.
 */
class NumberFormat extends AbstractModel
{
    /**
     * @var integer Start value of the `{number}` variable. Default value: 0.
     */
    public $InitialValue;

    /**
     * @var integer Increment of the `{number}` variable. Default value: 1.
     */
    public $Increment;

    /**
     * @var integer Minimum length of the `{number}` variable. A placeholder will be used if the variable length is below the minimum requirement. Default value: 1.
     */
    public $MinLength;

    /**
     * @var string Placeholder used when the `{number}` variable length is below the minimum requirement. Default value: 0.
     */
    public $PlaceHolder;

    /**
     * @param integer $InitialValue Start value of the `{number}` variable. Default value: 0.
     * @param integer $Increment Increment of the `{number}` variable. Default value: 1.
     * @param integer $MinLength Minimum length of the `{number}` variable. A placeholder will be used if the variable length is below the minimum requirement. Default value: 1.
     * @param string $PlaceHolder Placeholder used when the `{number}` variable length is below the minimum requirement. Default value: 0.
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
