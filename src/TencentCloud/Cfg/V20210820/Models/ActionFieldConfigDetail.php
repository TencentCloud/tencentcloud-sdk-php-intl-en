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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response format of dynamic action parameters
 *
 * @method string getType() Obtain Component type
The options are as follows:
input: text box
textarea: multi-line text box
number: number input box
select: selector
cascader: cascade selector
radio: single choice
time: time selection
 * @method void setType(string $Type) Set Component type
The options are as follows:
input: text box
textarea: multi-line text box
number: number input box
select: selector
cascader: cascade selector
radio: single choice
time: time selection
 * @method string getLable() Obtain Component label
 * @method void setLable(string $Lable) Set Component label
 * @method string getField() Obtain Unique identifier of the component, key when it is sent back to the backend
 * @method void setField(string $Field) Set Unique identifier of the component, key when it is sent back to the backend
 * @method string getDefaultValue() Obtain Default value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultValue(string $DefaultValue) Set Default value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConfig() Obtain The supported configuration items are as follows. You can select the configuration items as needed. If no configuration is required, set the value to {}.

{  placeholder: string (placeholder)

  tooltip: string (prompt message)

  reg: RegExp (regular expression for the input content format)

  max: number (maximum number of input characters for text boxes and upper limit of the input number for number input boxes)

  min: number (lower limit of the input number for number input boxes)

  step: number (step size for number input boxes; default value: 1)

  format: string (format for time selection, for example YYYY-MM-DD and YYYY-MM-DD HH:mm:ss)

  separator: string[] (separator for multi-line input boxes. If it is left blank, no separator is used, and the text string entered by the user is returned directly.)

  multiple: boolean (multiple-choice or not, valid for selectors and cascade selectors)

  options: selector options (support the following two forms)

Directly provide the option array: { value: string; label: string }[]
Obtain options by calling the API: { api: string (API URL), params: string[] (interface parameters, corresponding to field of the parameter configuration. The frontend uses the input values of all components corresponding to field as parameters to query data. If no value is input, the frontend directly requests data when components are loaded.) 
}
}
 * @method void setConfig(string $Config) Set The supported configuration items are as follows. You can select the configuration items as needed. If no configuration is required, set the value to {}.

{  placeholder: string (placeholder)

  tooltip: string (prompt message)

  reg: RegExp (regular expression for the input content format)

  max: number (maximum number of input characters for text boxes and upper limit of the input number for number input boxes)

  min: number (lower limit of the input number for number input boxes)

  step: number (step size for number input boxes; default value: 1)

  format: string (format for time selection, for example YYYY-MM-DD and YYYY-MM-DD HH:mm:ss)

  separator: string[] (separator for multi-line input boxes. If it is left blank, no separator is used, and the text string entered by the user is returned directly.)

  multiple: boolean (multiple-choice or not, valid for selectors and cascade selectors)

  options: selector options (support the following two forms)

Directly provide the option array: { value: string; label: string }[]
Obtain options by calling the API: { api: string (API URL), params: string[] (interface parameters, corresponding to field of the parameter configuration. The frontend uses the input values of all components corresponding to field as parameters to query data. If no value is input, the frontend directly requests data when components are loaded.) 
}
}
 * @method integer getRequired() Obtain Whether it is required (0: no; 1: yes)
 * @method void setRequired(integer $Required) Set Whether it is required (0: no; 1: yes)
 * @method string getValidate() Obtain The compute configuration passes the verification when other fields that it depends on meet the conditions. (For example, at least one of the three form items must be filled in.)

[fieldName,

{ config: This item is retained and will be refined based on subsequent scenes. }

]
 * @method void setValidate(string $Validate) Set The compute configuration passes the verification when other fields that it depends on meet the conditions. (For example, at least one of the three form items must be filled in.)

[fieldName,

{ config: This item is retained and will be refined based on subsequent scenes. }

]
 * @method string getVisible() Obtain Whether it is visible
 * @method void setVisible(string $Visible) Set Whether it is visible
 */
class ActionFieldConfigDetail extends AbstractModel
{
    /**
     * @var string Component type
The options are as follows:
input: text box
textarea: multi-line text box
number: number input box
select: selector
cascader: cascade selector
radio: single choice
time: time selection
     */
    public $Type;

    /**
     * @var string Component label
     */
    public $Lable;

    /**
     * @var string Unique identifier of the component, key when it is sent back to the backend
     */
    public $Field;

    /**
     * @var string Default value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultValue;

    /**
     * @var string The supported configuration items are as follows. You can select the configuration items as needed. If no configuration is required, set the value to {}.

{  placeholder: string (placeholder)

  tooltip: string (prompt message)

  reg: RegExp (regular expression for the input content format)

  max: number (maximum number of input characters for text boxes and upper limit of the input number for number input boxes)

  min: number (lower limit of the input number for number input boxes)

  step: number (step size for number input boxes; default value: 1)

  format: string (format for time selection, for example YYYY-MM-DD and YYYY-MM-DD HH:mm:ss)

  separator: string[] (separator for multi-line input boxes. If it is left blank, no separator is used, and the text string entered by the user is returned directly.)

  multiple: boolean (multiple-choice or not, valid for selectors and cascade selectors)

  options: selector options (support the following two forms)

Directly provide the option array: { value: string; label: string }[]
Obtain options by calling the API: { api: string (API URL), params: string[] (interface parameters, corresponding to field of the parameter configuration. The frontend uses the input values of all components corresponding to field as parameters to query data. If no value is input, the frontend directly requests data when components are loaded.) 
}
}
     */
    public $Config;

    /**
     * @var integer Whether it is required (0: no; 1: yes)
     */
    public $Required;

    /**
     * @var string The compute configuration passes the verification when other fields that it depends on meet the conditions. (For example, at least one of the three form items must be filled in.)

[fieldName,

{ config: This item is retained and will be refined based on subsequent scenes. }

]
     */
    public $Validate;

    /**
     * @var string Whether it is visible
     */
    public $Visible;

    /**
     * @param string $Type Component type
The options are as follows:
input: text box
textarea: multi-line text box
number: number input box
select: selector
cascader: cascade selector
radio: single choice
time: time selection
     * @param string $Lable Component label
     * @param string $Field Unique identifier of the component, key when it is sent back to the backend
     * @param string $DefaultValue Default value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Config The supported configuration items are as follows. You can select the configuration items as needed. If no configuration is required, set the value to {}.

{  placeholder: string (placeholder)

  tooltip: string (prompt message)

  reg: RegExp (regular expression for the input content format)

  max: number (maximum number of input characters for text boxes and upper limit of the input number for number input boxes)

  min: number (lower limit of the input number for number input boxes)

  step: number (step size for number input boxes; default value: 1)

  format: string (format for time selection, for example YYYY-MM-DD and YYYY-MM-DD HH:mm:ss)

  separator: string[] (separator for multi-line input boxes. If it is left blank, no separator is used, and the text string entered by the user is returned directly.)

  multiple: boolean (multiple-choice or not, valid for selectors and cascade selectors)

  options: selector options (support the following two forms)

Directly provide the option array: { value: string; label: string }[]
Obtain options by calling the API: { api: string (API URL), params: string[] (interface parameters, corresponding to field of the parameter configuration. The frontend uses the input values of all components corresponding to field as parameters to query data. If no value is input, the frontend directly requests data when components are loaded.) 
}
}
     * @param integer $Required Whether it is required (0: no; 1: yes)
     * @param string $Validate The compute configuration passes the verification when other fields that it depends on meet the conditions. (For example, at least one of the three form items must be filled in.)

[fieldName,

{ config: This item is retained and will be refined based on subsequent scenes. }

]
     * @param string $Visible Whether it is visible
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Lable",$param) and $param["Lable"] !== null) {
            $this->Lable = $param["Lable"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("Validate",$param) and $param["Validate"] !== null) {
            $this->Validate = $param["Validate"];
        }

        if (array_key_exists("Visible",$param) and $param["Visible"] !== null) {
            $this->Visible = $param["Visible"];
        }
    }
}
