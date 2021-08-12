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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance parameter details
 *
 * @method string getName() Obtain Parameter name
 * @method void setName(string $Name) Set Parameter name
 * @method string getParamType() Obtain Data type of the parameter. Valid values: `integer`, `enum`
 * @method void setParamType(string $ParamType) Set Data type of the parameter. Valid values: `integer`, `enum`
 * @method string getDefault() Obtain Default value of the parameter
 * @method void setDefault(string $Default) Set Default value of the parameter
 * @method string getDescription() Obtain Parameter description
 * @method void setDescription(string $Description) Set Parameter description
 * @method string getCurrentValue() Obtain Current value of the parameter
 * @method void setCurrentValue(string $CurrentValue) Set Current value of the parameter
 * @method integer getNeedReboot() Obtain Whether the database needs to be restarted for the modified parameter to take effect. Valid values: `0` (no),`1` (yes)
 * @method void setNeedReboot(integer $NeedReboot) Set Whether the database needs to be restarted for the modified parameter to take effect. Valid values: `0` (no),`1` (yes)
 * @method integer getMax() Obtain Maximum value of the parameter
 * @method void setMax(integer $Max) Set Maximum value of the parameter
 * @method integer getMin() Obtain Minimum value of the parameter
 * @method void setMin(integer $Min) Set Minimum value of the parameter
 * @method array getEnumValue() Obtain Enumerated values of the parameter
 * @method void setEnumValue(array $EnumValue) Set Enumerated values of the parameter
 * @method integer getStatus() Obtain Parameter status. Valid values: `0` (normal), `1` (modifying)
 * @method void setStatus(integer $Status) Set Parameter status. Valid values: `0` (normal), `1` (modifying)
 */
class ParameterDetail extends AbstractModel
{
    /**
     * @var string Parameter name
     */
    public $Name;

    /**
     * @var string Data type of the parameter. Valid values: `integer`, `enum`
     */
    public $ParamType;

    /**
     * @var string Default value of the parameter
     */
    public $Default;

    /**
     * @var string Parameter description
     */
    public $Description;

    /**
     * @var string Current value of the parameter
     */
    public $CurrentValue;

    /**
     * @var integer Whether the database needs to be restarted for the modified parameter to take effect. Valid values: `0` (no),`1` (yes)
     */
    public $NeedReboot;

    /**
     * @var integer Maximum value of the parameter
     */
    public $Max;

    /**
     * @var integer Minimum value of the parameter
     */
    public $Min;

    /**
     * @var array Enumerated values of the parameter
     */
    public $EnumValue;

    /**
     * @var integer Parameter status. Valid values: `0` (normal), `1` (modifying)
     */
    public $Status;

    /**
     * @param string $Name Parameter name
     * @param string $ParamType Data type of the parameter. Valid values: `integer`, `enum`
     * @param string $Default Default value of the parameter
     * @param string $Description Parameter description
     * @param string $CurrentValue Current value of the parameter
     * @param integer $NeedReboot Whether the database needs to be restarted for the modified parameter to take effect. Valid values: `0` (no),`1` (yes)
     * @param integer $Max Maximum value of the parameter
     * @param integer $Min Minimum value of the parameter
     * @param array $EnumValue Enumerated values of the parameter
     * @param integer $Status Parameter status. Valid values: `0` (normal), `1` (modifying)
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

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
