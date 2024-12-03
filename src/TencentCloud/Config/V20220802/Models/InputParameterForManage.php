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
 * Rule input parameters
 *
 * @method string getValueType() Obtain Value type. Integer: Integer, String: String.
Note: This field may return null, indicating that no valid value is found.
 * @method void setValueType(string $ValueType) Set Value type. Integer: Integer, String: String.
Note: This field may return null, indicating that no valid value is found.
 * @method string getParameterKey() Obtain Parameter key
Note: This field may return null, indicating that no valid value is found.
 * @method void setParameterKey(string $ParameterKey) Set Parameter key
Note: This field may return null, indicating that no valid value is found.
 * @method string getType() Obtain Parameter type. Required type: Required, Optional type: Optional.
Note: This field may return null, indicating that no valid value is found.
 * @method void setType(string $Type) Set Parameter type. Required type: Required, Optional type: Optional.
Note: This field may return null, indicating that no valid value is found.
 * @method string getDefaultValue() Obtain Default value

Note: This field may return null, indicating that no valid value is found.
 * @method void setDefaultValue(string $DefaultValue) Set Default value

Note: This field may return null, indicating that no valid value is found.
 * @method string getDescription() Obtain Description

Note: This field may return null, indicating that no valid value is found.
 * @method void setDescription(string $Description) Set Description

Note: This field may return null, indicating that no valid value is found.
 */
class InputParameterForManage extends AbstractModel
{
    /**
     * @var string Value type. Integer: Integer, String: String.
Note: This field may return null, indicating that no valid value is found.
     */
    public $ValueType;

    /**
     * @var string Parameter key
Note: This field may return null, indicating that no valid value is found.
     */
    public $ParameterKey;

    /**
     * @var string Parameter type. Required type: Required, Optional type: Optional.
Note: This field may return null, indicating that no valid value is found.
     */
    public $Type;

    /**
     * @var string Default value

Note: This field may return null, indicating that no valid value is found.
     */
    public $DefaultValue;

    /**
     * @var string Description

Note: This field may return null, indicating that no valid value is found.
     */
    public $Description;

    /**
     * @param string $ValueType Value type. Integer: Integer, String: String.
Note: This field may return null, indicating that no valid value is found.
     * @param string $ParameterKey Parameter key
Note: This field may return null, indicating that no valid value is found.
     * @param string $Type Parameter type. Required type: Required, Optional type: Optional.
Note: This field may return null, indicating that no valid value is found.
     * @param string $DefaultValue Default value

Note: This field may return null, indicating that no valid value is found.
     * @param string $Description Description

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
