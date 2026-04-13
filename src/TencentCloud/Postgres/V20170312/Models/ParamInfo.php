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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter details
 *
 * @method integer getID() Obtain Parameter ID
 * @method void setID(integer $ID) Set Parameter ID
 * @method string getName() Obtain Parameter name.
 * @method void setName(string $Name) Set Parameter name.
 * @method string getParamValueType() Obtain Parameter value type: integer, real, bool, enum, mutil_enum.
When the parameter type is integer or real (floating-point), the value range is determined based on the Max and Min of the return value. 
When the parameter type is boolean, the valid values are true or false. 
When the parameter type is enum (enumeration type) or mutil_enum (multi-enum type), the valid values are determined by EnumValue in the return value.
 * @method void setParamValueType(string $ParamValueType) Set Parameter value type: integer, real, bool, enum, mutil_enum.
When the parameter type is integer or real (floating-point), the value range is determined based on the Max and Min of the return value. 
When the parameter type is boolean, the valid values are true or false. 
When the parameter type is enum (enumeration type) or mutil_enum (multi-enum type), the valid values are determined by EnumValue in the return value.
 * @method string getUnit() Obtain Parameter value unit. returns null if the parameter has no units.
 * @method void setUnit(string $Unit) Set Parameter value unit. returns null if the parameter has no units.
 * @method string getDefaultValue() Obtain Default parameter value. returns in string form.
 * @method void setDefaultValue(string $DefaultValue) Set Default parameter value. returns in string form.
 * @method string getCurrentValue() Obtain Specifies the current value in string form.
 * @method void setCurrentValue(string $CurrentValue) Set Specifies the current value in string form.
 * @method float getMax() Obtain Specifies the numerical type (integer, real) parameter and its lower bound.
 * @method void setMax(float $Max) Set Specifies the numerical type (integer, real) parameter and its lower bound.
 * @method array getEnumValue() Obtain Value range of the enum parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnumValue(array $EnumValue) Set Value range of the enum parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method float getMin() Obtain Numerical type (integer, real) parameter specifies the upper bound.
 * @method void setMin(float $Min) Set Numerical type (integer, real) parameter specifies the upper bound.
 * @method string getParamDescriptionCH() Obtain Chinese description.
 * @method void setParamDescriptionCH(string $ParamDescriptionCH) Set Chinese description.
 * @method string getParamDescriptionEN() Obtain Specifies the english description of the parameter.
 * @method void setParamDescriptionEN(string $ParamDescriptionEN) Set Specifies the english description of the parameter.
 * @method boolean getNeedReboot() Obtain Specifies whether a restart is required for parameter modification (true indicates required, false indicates not required).
 * @method void setNeedReboot(boolean $NeedReboot) Set Specifies whether a restart is required for parameter modification (true indicates required, false indicates not required).
 * @method string getClassificationCN() Obtain Parameter chinese category.
 * @method void setClassificationCN(string $ClassificationCN) Set Parameter chinese category.
 * @method string getClassificationEN() Obtain Parameter english category.
 * @method void setClassificationEN(string $ClassificationEN) Set Parameter english category.
 * @method boolean getSpecRelated() Obtain Specifies whether it is related to the specification (true for related, false for unrelated).
 * @method void setSpecRelated(boolean $SpecRelated) Set Specifies whether it is related to the specification (true for related, false for unrelated).
 * @method boolean getAdvanced() Obtain Indicates whether it is a key parameter (true means it is a key parameter, modification requires special attention and may affect instance performance).
 * @method void setAdvanced(boolean $Advanced) Set Indicates whether it is a key parameter (true means it is a key parameter, modification requires special attention and may affect instance performance).
 * @method string getLastModifyTime() Obtain Specifies the last modified time.
 * @method void setLastModifyTime(string $LastModifyTime) Set Specifies the last modified time.
 * @method integer getStandbyRelated() Obtain Parameter primary-secondary constraints. `0`: no constraint between primary and standby. `1`: standby parameter value > primary machine parameter value. `2`: primary parameter value must be greater than that of the standby machine.
 * @method void setStandbyRelated(integer $StandbyRelated) Set Parameter primary-secondary constraints. `0`: no constraint between primary and standby. `1`: standby parameter value > primary machine parameter value. `2`: primary parameter value must be greater than that of the standby machine.
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
     */
    public $ID;

    /**
     * @var string Parameter name.
     */
    public $Name;

    /**
     * @var string Parameter value type: integer, real, bool, enum, mutil_enum.
When the parameter type is integer or real (floating-point), the value range is determined based on the Max and Min of the return value. 
When the parameter type is boolean, the valid values are true or false. 
When the parameter type is enum (enumeration type) or mutil_enum (multi-enum type), the valid values are determined by EnumValue in the return value.
     */
    public $ParamValueType;

    /**
     * @var string Parameter value unit. returns null if the parameter has no units.
     */
    public $Unit;

    /**
     * @var string Default parameter value. returns in string form.
     */
    public $DefaultValue;

    /**
     * @var string Specifies the current value in string form.
     */
    public $CurrentValue;

    /**
     * @var float Specifies the numerical type (integer, real) parameter and its lower bound.
     */
    public $Max;

    /**
     * @var array Value range of the enum parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnumValue;

    /**
     * @var float Numerical type (integer, real) parameter specifies the upper bound.
     */
    public $Min;

    /**
     * @var string Chinese description.
     */
    public $ParamDescriptionCH;

    /**
     * @var string Specifies the english description of the parameter.
     */
    public $ParamDescriptionEN;

    /**
     * @var boolean Specifies whether a restart is required for parameter modification (true indicates required, false indicates not required).
     */
    public $NeedReboot;

    /**
     * @var string Parameter chinese category.
     */
    public $ClassificationCN;

    /**
     * @var string Parameter english category.
     */
    public $ClassificationEN;

    /**
     * @var boolean Specifies whether it is related to the specification (true for related, false for unrelated).
     */
    public $SpecRelated;

    /**
     * @var boolean Indicates whether it is a key parameter (true means it is a key parameter, modification requires special attention and may affect instance performance).
     */
    public $Advanced;

    /**
     * @var string Specifies the last modified time.
     */
    public $LastModifyTime;

    /**
     * @var integer Parameter primary-secondary constraints. `0`: no constraint between primary and standby. `1`: standby parameter value > primary machine parameter value. `2`: primary parameter value must be greater than that of the standby machine.
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
     * @param string $Name Parameter name.
     * @param string $ParamValueType Parameter value type: integer, real, bool, enum, mutil_enum.
When the parameter type is integer or real (floating-point), the value range is determined based on the Max and Min of the return value. 
When the parameter type is boolean, the valid values are true or false. 
When the parameter type is enum (enumeration type) or mutil_enum (multi-enum type), the valid values are determined by EnumValue in the return value.
     * @param string $Unit Parameter value unit. returns null if the parameter has no units.
     * @param string $DefaultValue Default parameter value. returns in string form.
     * @param string $CurrentValue Specifies the current value in string form.
     * @param float $Max Specifies the numerical type (integer, real) parameter and its lower bound.
     * @param array $EnumValue Value range of the enum parameter
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param float $Min Numerical type (integer, real) parameter specifies the upper bound.
     * @param string $ParamDescriptionCH Chinese description.
     * @param string $ParamDescriptionEN Specifies the english description of the parameter.
     * @param boolean $NeedReboot Specifies whether a restart is required for parameter modification (true indicates required, false indicates not required).
     * @param string $ClassificationCN Parameter chinese category.
     * @param string $ClassificationEN Parameter english category.
     * @param boolean $SpecRelated Specifies whether it is related to the specification (true for related, false for unrelated).
     * @param boolean $Advanced Indicates whether it is a key parameter (true means it is a key parameter, modification requires special attention and may affect instance performance).
     * @param string $LastModifyTime Specifies the last modified time.
     * @param integer $StandbyRelated Parameter primary-secondary constraints. `0`: no constraint between primary and standby. `1`: standby parameter value > primary machine parameter value. `2`: primary parameter value must be greater than that of the standby machine.
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
