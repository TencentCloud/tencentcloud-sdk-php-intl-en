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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AppTriggerParamBindingValue
 *
 * @method string getParamValue() Obtain <p>Parameter value</p>
 * @method void setParamValue(string $ParamValue) Set <p>Parameter value</p>
 * @method string getVariableName() Obtain <p>Application variable name</p>
 * @method void setVariableName(string $VariableName) Set <p>Application variable name</p>
 */
class AppTriggerParamBindingValue extends AbstractModel
{
    /**
     * @var string <p>Parameter value</p>
     */
    public $ParamValue;

    /**
     * @var string <p>Application variable name</p>
     */
    public $VariableName;

    /**
     * @param string $ParamValue <p>Parameter value</p>
     * @param string $VariableName <p>Application variable name</p>
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
        if (array_key_exists("ParamValue",$param) and $param["ParamValue"] !== null) {
            $this->ParamValue = $param["ParamValue"];
        }

        if (array_key_exists("VariableName",$param) and $param["VariableName"] !== null) {
            $this->VariableName = $param["VariableName"];
        }
    }
}
