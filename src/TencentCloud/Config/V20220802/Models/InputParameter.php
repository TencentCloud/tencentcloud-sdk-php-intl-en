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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter value
 *
 * @method string getParameterKey() Obtain Parameter name
 * @method void setParameterKey(string $ParameterKey) Set Parameter name
 * @method string getType() Obtain Parameter type. Required type: Require, optional type: Optional.
 * @method void setType(string $Type) Set Parameter type. Required type: Require, optional type: Optional.
 * @method string getValue() Obtain Parameter value

Note: This field may return null, indicating that no valid value is found.
 * @method void setValue(string $Value) Set Parameter value

Note: This field may return null, indicating that no valid value is found.
 */
class InputParameter extends AbstractModel
{
    /**
     * @var string Parameter name
     */
    public $ParameterKey;

    /**
     * @var string Parameter type. Required type: Require, optional type: Optional.
     */
    public $Type;

    /**
     * @var string Parameter value

Note: This field may return null, indicating that no valid value is found.
     */
    public $Value;

    /**
     * @param string $ParameterKey Parameter name
     * @param string $Type Parameter type. Required type: Require, optional type: Optional.
     * @param string $Value Parameter value

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("ParameterKey",$param) and $param["ParameterKey"] !== null) {
            $this->ParameterKey = $param["ParameterKey"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
