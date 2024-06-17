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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter details
 *
 * @method integer getID() Obtain Parameter ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setID(integer $ID) Set Parameter ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getName() Obtain Parameter name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Parameter name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getParamValueType() Obtain Value type of the parameter. Valid values: `integer`, `real` (floating-point), `bool`, `enum`, `mutil_enum` (this type of parameter can be set to multiple enumerated values).
For an `integer` or `real` parameter, the `Min` field represents the minimum value and the `Max` field the maximum value. 
For a `bool` parameter, the valid values include `true` and `false`; 
For an `enum` or `mutil_enum` parameter, the `EnumValue` field represents the valid values.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setParamValueType(string $ParamValueType) Set Value type of the parameter. Valid values: `integer`, `real` (floating-point), `bool`, `enum`, `mutil_enum` (this type of parameter can be set to multiple enumerated values).
For an `integer` or `real` parameter, the `Min` field represents the minimum value and the `Max` field the maximum value. 
For a `bool` parameter, the valid values include `true` and `false`; 
For an `enum` or `mutil_enum` parameter, the `EnumValue` field represents the valid values.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUnit() Obtain Unit of the parameter value. If the parameter has no unit, this field will return null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnit(string $Unit) Set Unit of the parameter value. If the parameter has no unit, this field will return null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefaultValue() Obtain Default value of the parameter, which is returned as a string
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDefaultValue(string $DefaultValue) Set Default value of the parameter, which is returned as a string
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCurrentValue() Obtain Current value of the parameter, which is returned as a string
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCurrentValue(string $CurrentValue) Set Current value of the parameter, which is returned as a string
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method float getMax() Obtain The maximum value of the `integer` or `real` parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMax(float $Max) Set The maximum value of the `integer` or `real` parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getEnumValue() Obtain Value range of the enum parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnumValue(array $EnumValue) Set Value range of the enum parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method float getMin() Obtain The minimum value of the `integer` or `real` parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMin(float $Min) Set The minimum value of the `integer` or `real` parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getParamDescriptionCH() Obtain Parameter description in Chinese
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setParamDescriptionCH(string $ParamDescriptionCH) Set Parameter description in Chinese
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getParamDescriptionEN() Obtain Parameter description in English
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setParamDescriptionEN(string $ParamDescriptionEN) Set Parameter description in English
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getNeedReboot() Obtain Whether to restart the instance for the modified parameter to take effect. Valid values: `true` (yes), `false` (no)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setNeedReboot(boolean $NeedReboot) Set Whether to restart the instance for the modified parameter to take effect. Valid values: `true` (yes), `false` (no)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getClassificationCN() Obtain Parameter category in Chinese
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setClassificationCN(string $ClassificationCN) Set Parameter category in Chinese
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getClassificationEN() Obtain Parameter category in English
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setClassificationEN(string $ClassificationEN) Set Parameter category in English
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getSpecRelated() Obtain Whether the parameter is related to specifications. Valid values: `true` (yes), `false` (no)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSpecRelated(boolean $SpecRelated) Set Whether the parameter is related to specifications. Valid values: `true` (yes), `false` (no)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getAdvanced() Obtain Whether it is a key parameter. Valid values: `true` (yes, and modifying it may affect instance performance), `false` (no)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAdvanced(boolean $Advanced) Set Whether it is a key parameter. Valid values: `true` (yes, and modifying it may affect instance performance), `false` (no)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getLastModifyTime() Obtain The last modified time of the parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setLastModifyTime(string $LastModifyTime) Set The last modified time of the parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getStandbyRelated() Obtain Parameter primary-secondary constraints, `0`: No constraint, `1`: Standby parameter value must be greater than that of the primary machine, `2`: Primary parameter value must be greater than that of the standby machine.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStandbyRelated(integer $StandbyRelated) Set Parameter primary-secondary constraints, `0`: No constraint, `1`: Standby parameter value must be greater than that of the primary machine, `2`: Primary parameter value must be greater than that of the standby machine.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVersionRelationSet() Obtain Parameter version association information, containing detailed parameter information for the respective kernel version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersionRelationSet(array $VersionRelationSet) Set Parameter version association information, containing detailed parameter information for the respective kernel version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSpecRelationSet() Obtain Parameter specification association information, containing detailed parameter information for the respective specification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecRelationSet(array $SpecRelationSet) Set Parameter specification association information, containing detailed parameter information for the respective specification
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ParamInfo extends AbstractModel
{
    /**
     * @var integer Parameter ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ID;

    /**
     * @var string Parameter name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Value type of the parameter. Valid values: `integer`, `real` (floating-point), `bool`, `enum`, `mutil_enum` (this type of parameter can be set to multiple enumerated values).
For an `integer` or `real` parameter, the `Min` field represents the minimum value and the `Max` field the maximum value. 
For a `bool` parameter, the valid values include `true` and `false`; 
For an `enum` or `mutil_enum` parameter, the `EnumValue` field represents the valid values.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ParamValueType;

    /**
     * @var string Unit of the parameter value. If the parameter has no unit, this field will return null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Unit;

    /**
     * @var string Default value of the parameter, which is returned as a string
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DefaultValue;

    /**
     * @var string Current value of the parameter, which is returned as a string
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CurrentValue;

    /**
     * @var float The maximum value of the `integer` or `real` parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Max;

    /**
     * @var array Value range of the enum parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnumValue;

    /**
     * @var float The minimum value of the `integer` or `real` parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Min;

    /**
     * @var string Parameter description in Chinese
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ParamDescriptionCH;

    /**
     * @var string Parameter description in English
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ParamDescriptionEN;

    /**
     * @var boolean Whether to restart the instance for the modified parameter to take effect. Valid values: `true` (yes), `false` (no)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $NeedReboot;

    /**
     * @var string Parameter category in Chinese
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClassificationCN;

    /**
     * @var string Parameter category in English
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClassificationEN;

    /**
     * @var boolean Whether the parameter is related to specifications. Valid values: `true` (yes), `false` (no)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SpecRelated;

    /**
     * @var boolean Whether it is a key parameter. Valid values: `true` (yes, and modifying it may affect instance performance), `false` (no)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Advanced;

    /**
     * @var string The last modified time of the parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $LastModifyTime;

    /**
     * @var integer Parameter primary-secondary constraints, `0`: No constraint, `1`: Standby parameter value must be greater than that of the primary machine, `2`: Primary parameter value must be greater than that of the standby machine.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StandbyRelated;

    /**
     * @var array Parameter version association information, containing detailed parameter information for the respective kernel version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VersionRelationSet;

    /**
     * @var array Parameter specification association information, containing detailed parameter information for the respective specification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpecRelationSet;

    /**
     * @param integer $ID Parameter ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Name Parameter name
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ParamValueType Value type of the parameter. Valid values: `integer`, `real` (floating-point), `bool`, `enum`, `mutil_enum` (this type of parameter can be set to multiple enumerated values).
For an `integer` or `real` parameter, the `Min` field represents the minimum value and the `Max` field the maximum value. 
For a `bool` parameter, the valid values include `true` and `false`; 
For an `enum` or `mutil_enum` parameter, the `EnumValue` field represents the valid values.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Unit Unit of the parameter value. If the parameter has no unit, this field will return null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DefaultValue Default value of the parameter, which is returned as a string
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CurrentValue Current value of the parameter, which is returned as a string
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param float $Max The maximum value of the `integer` or `real` parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $EnumValue Value range of the enum parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param float $Min The minimum value of the `integer` or `real` parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ParamDescriptionCH Parameter description in Chinese
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ParamDescriptionEN Parameter description in English
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $NeedReboot Whether to restart the instance for the modified parameter to take effect. Valid values: `true` (yes), `false` (no)
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ClassificationCN Parameter category in Chinese
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ClassificationEN Parameter category in English
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $SpecRelated Whether the parameter is related to specifications. Valid values: `true` (yes), `false` (no)
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $Advanced Whether it is a key parameter. Valid values: `true` (yes, and modifying it may affect instance performance), `false` (no)
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $LastModifyTime The last modified time of the parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $StandbyRelated Parameter primary-secondary constraints, `0`: No constraint, `1`: Standby parameter value must be greater than that of the primary machine, `2`: Primary parameter value must be greater than that of the standby machine.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VersionRelationSet Parameter version association information, containing detailed parameter information for the respective kernel version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SpecRelationSet Parameter specification association information, containing detailed parameter information for the respective specification
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParamValueType",$param) and $param["ParamValueType"] !== null) {
            $this->ParamValueType = $param["ParamValueType"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("ParamDescriptionCH",$param) and $param["ParamDescriptionCH"] !== null) {
            $this->ParamDescriptionCH = $param["ParamDescriptionCH"];
        }

        if (array_key_exists("ParamDescriptionEN",$param) and $param["ParamDescriptionEN"] !== null) {
            $this->ParamDescriptionEN = $param["ParamDescriptionEN"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("ClassificationCN",$param) and $param["ClassificationCN"] !== null) {
            $this->ClassificationCN = $param["ClassificationCN"];
        }

        if (array_key_exists("ClassificationEN",$param) and $param["ClassificationEN"] !== null) {
            $this->ClassificationEN = $param["ClassificationEN"];
        }

        if (array_key_exists("SpecRelated",$param) and $param["SpecRelated"] !== null) {
            $this->SpecRelated = $param["SpecRelated"];
        }

        if (array_key_exists("Advanced",$param) and $param["Advanced"] !== null) {
            $this->Advanced = $param["Advanced"];
        }

        if (array_key_exists("LastModifyTime",$param) and $param["LastModifyTime"] !== null) {
            $this->LastModifyTime = $param["LastModifyTime"];
        }

        if (array_key_exists("StandbyRelated",$param) and $param["StandbyRelated"] !== null) {
            $this->StandbyRelated = $param["StandbyRelated"];
        }

        if (array_key_exists("VersionRelationSet",$param) and $param["VersionRelationSet"] !== null) {
            $this->VersionRelationSet = [];
            foreach ($param["VersionRelationSet"] as $key => $value){
                $obj = new ParamVersionRelation();
                $obj->deserialize($value);
                array_push($this->VersionRelationSet, $obj);
            }
        }

        if (array_key_exists("SpecRelationSet",$param) and $param["SpecRelationSet"] !== null) {
            $this->SpecRelationSet = [];
            foreach ($param["SpecRelationSet"] as $key => $value){
                $obj = new ParamSpecRelation();
                $obj->deserialize($value);
                array_push($this->SpecRelationSet, $obj);
            }
        }
    }
}
