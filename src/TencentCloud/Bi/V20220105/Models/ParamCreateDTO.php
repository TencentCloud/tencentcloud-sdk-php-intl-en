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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 1
 *
 * @method string getParamName() Obtain Parameter name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParamName(string $ParamName) Set Parameter name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefaultValue() Obtain Default value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultValue(string $DefaultValue) Set Default value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParamType() Obtain Parameter type, string/datetime/number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParamType(string $ParamType) Set Parameter type, string/datetime/number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFormatRule() Obtain Format type, yyyy-MM-dd HH:mm:ss.SSS (only time required)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFormatRule(string $FormatRule) Set Format type, yyyy-MM-dd HH:mm:ss.SSS (only time required)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComplexType() Obtain Complex type, another format expression, such as YYYY-MM
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComplexType(string $ComplexType) Set Complex type, another format expression, such as YYYY-MM
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScope() Obtain Application scope
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScope(string $Scope) Set Application scope
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ParamCreateDTO extends AbstractModel
{
    /**
     * @var string Parameter name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParamName;

    /**
     * @var string Default value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultValue;

    /**
     * @var string Parameter type, string/datetime/number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParamType;

    /**
     * @var string Format type, yyyy-MM-dd HH:mm:ss.SSS (only time required)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FormatRule;

    /**
     * @var string Complex type, another format expression, such as YYYY-MM
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComplexType;

    /**
     * @var string Application scope
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Scope;

    /**
     * @param string $ParamName Parameter name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DefaultValue Default value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ParamType Parameter type, string/datetime/number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FormatRule Format type, yyyy-MM-dd HH:mm:ss.SSS (only time required)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ComplexType Complex type, another format expression, such as YYYY-MM
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Scope Application scope
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("FormatRule",$param) and $param["FormatRule"] !== null) {
            $this->FormatRule = $param["FormatRule"];
        }

        if (array_key_exists("ComplexType",$param) and $param["ComplexType"] !== null) {
            $this->ComplexType = $param["ComplexType"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }
    }
}
