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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Plugin parameter request structure.
 *
 * @method string getName() Obtain Parameter name.
 * @method void setName(string $Name) Set Parameter name.
 * @method string getDesc() Obtain Parameter description.
 * @method void setDesc(string $Desc) Set Parameter description.
 * @method integer getType() Obtain Parameter type, 0: string; 1: int; 2: float; 3: bool; 4: object; 5: array_string; 6: array_int; 7: array_float; 8: array_bool; 9: array_object, 99: null, 100: upspecified.
 * @method void setType(integer $Type) Set Parameter type, 0: string; 1: int; 2: float; 3: bool; 4: object; 5: array_string; 6: array_int; 7: array_float; 8: array_bool; 9: array_object, 99: null, 100: upspecified.
 * @method boolean getIsRequired() Obtain Whether the parameter is required.
 * @method void setIsRequired(boolean $IsRequired) Set Whether the parameter is required.
 * @method string getDefaultValue() Obtain Parameter default value.
 * @method void setDefaultValue(string $DefaultValue) Set Parameter default value.
 * @method array getSubParams() Obtain Sub-parameter. "ParamType" is useful when it is "OBJECT " or "ARRAY<>" type.
 * @method void setSubParams(array $SubParams) Set Sub-parameter. "ParamType" is useful when it is "OBJECT " or "ARRAY<>" type.
 * @method boolean getGlobalHidden() Obtain Whether the plugin parameter configuration is hidden and invisible. true - Hidden and invisible; false - Visible.
 * @method void setGlobalHidden(boolean $GlobalHidden) Set Whether the plugin parameter configuration is hidden and invisible. true - Hidden and invisible; false - Visible.
 * @method array getOneOf() Obtain OneOf type parameter.
 * @method void setOneOf(array $OneOf) Set OneOf type parameter.
 * @method array getAnyOf() Obtain AnyOf type parameter.
 * @method void setAnyOf(array $AnyOf) Set AnyOf type parameter.
 */
class PluginToolReqParam extends AbstractModel
{
    /**
     * @var string Parameter name.
     */
    public $Name;

    /**
     * @var string Parameter description.
     */
    public $Desc;

    /**
     * @var integer Parameter type, 0: string; 1: int; 2: float; 3: bool; 4: object; 5: array_string; 6: array_int; 7: array_float; 8: array_bool; 9: array_object, 99: null, 100: upspecified.
     */
    public $Type;

    /**
     * @var boolean Whether the parameter is required.
     */
    public $IsRequired;

    /**
     * @var string Parameter default value.
     */
    public $DefaultValue;

    /**
     * @var array Sub-parameter. "ParamType" is useful when it is "OBJECT " or "ARRAY<>" type.
     */
    public $SubParams;

    /**
     * @var boolean Whether the plugin parameter configuration is hidden and invisible. true - Hidden and invisible; false - Visible.
     */
    public $GlobalHidden;

    /**
     * @var array OneOf type parameter.
     */
    public $OneOf;

    /**
     * @var array AnyOf type parameter.
     */
    public $AnyOf;

    /**
     * @param string $Name Parameter name.
     * @param string $Desc Parameter description.
     * @param integer $Type Parameter type, 0: string; 1: int; 2: float; 3: bool; 4: object; 5: array_string; 6: array_int; 7: array_float; 8: array_bool; 9: array_object, 99: null, 100: upspecified.
     * @param boolean $IsRequired Whether the parameter is required.
     * @param string $DefaultValue Parameter default value.
     * @param array $SubParams Sub-parameter. "ParamType" is useful when it is "OBJECT " or "ARRAY<>" type.
     * @param boolean $GlobalHidden Whether the plugin parameter configuration is hidden and invisible. true - Hidden and invisible; false - Visible.
     * @param array $OneOf OneOf type parameter.
     * @param array $AnyOf AnyOf type parameter.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("SubParams",$param) and $param["SubParams"] !== null) {
            $this->SubParams = [];
            foreach ($param["SubParams"] as $key => $value){
                $obj = new PluginToolReqParam();
                $obj->deserialize($value);
                array_push($this->SubParams, $obj);
            }
        }

        if (array_key_exists("GlobalHidden",$param) and $param["GlobalHidden"] !== null) {
            $this->GlobalHidden = $param["GlobalHidden"];
        }

        if (array_key_exists("OneOf",$param) and $param["OneOf"] !== null) {
            $this->OneOf = [];
            foreach ($param["OneOf"] as $key => $value){
                $obj = new PluginToolReqParam();
                $obj->deserialize($value);
                array_push($this->OneOf, $obj);
            }
        }

        if (array_key_exists("AnyOf",$param) and $param["AnyOf"] !== null) {
            $this->AnyOf = [];
            foreach ($param["AnyOf"] as $key => $value){
                $obj = new PluginToolReqParam();
                $obj->deserialize($value);
                array_push($this->AnyOf, $obj);
            }
        }
    }
}
