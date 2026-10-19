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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule input parameters.
 *
 * @method string getValueType() Obtain Value type. Valid values: Integer and String.
 * @method void setValueType(string $ValueType) Set Value type. Valid values: Integer and String.
 * @method string getParameterKey() Obtain Parameter key.
 * @method void setParameterKey(string $ParameterKey) Set Parameter key.
 * @method string getType() Obtain Parameter type. Valid values: Require (required) and Optional (optional).
 * @method void setType(string $Type) Set Parameter type. Valid values: Require (required) and Optional (optional).
 * @method string getDefaultValue() Obtain Default value
 * @method void setDefaultValue(string $DefaultValue) Set Default value
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 */
class InputParameterForManage extends AbstractModel
{
    /**
     * @var string Value type. Valid values: Integer and String.
     */
    public $ValueType;

    /**
     * @var string Parameter key.
     */
    public $ParameterKey;

    /**
     * @var string Parameter type. Valid values: Require (required) and Optional (optional).
     */
    public $Type;

    /**
     * @var string Default value
     */
    public $DefaultValue;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @param string $ValueType Value type. Valid values: Integer and String.
     * @param string $ParameterKey Parameter key.
     * @param string $Type Parameter type. Valid values: Require (required) and Optional (optional).
     * @param string $DefaultValue Default value
     * @param string $Description Description
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

        if (array_key_exists("ParameterKey",$param) and $param["ParameterKey"] !== null) {
            $this->ParameterKey = $param["ParameterKey"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
