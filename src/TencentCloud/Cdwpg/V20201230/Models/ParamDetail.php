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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ParamDetail
 *
 * @method string getParamName() Obtain Parameter name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParamName(string $ParamName) Set Parameter name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefaultValue() Obtain Default value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefaultValue(string $DefaultValue) Set Default value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getNeedRestart() Obtain Indicates whether the restart is required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNeedRestart(boolean $NeedRestart) Set Indicates whether the restart is required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRunningValue() Obtain Current value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRunningValue(string $RunningValue) Set Current value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ValueRange getValueRange() Obtain Value range.
 * @method void setValueRange(ValueRange $ValueRange) Set Value range.
 * @method string getUnit() Obtain Unit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnit(string $Unit) Set Unit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getShortDesc() Obtain Introduction in English.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShortDesc(string $ShortDesc) Set Introduction in English.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParameterName() Obtain Parameter name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParameterName(string $ParameterName) Set Parameter name.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ParamDetail extends AbstractModel
{
    /**
     * @var string Parameter name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParamName;

    /**
     * @var string Default value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefaultValue;

    /**
     * @var boolean Indicates whether the restart is required.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NeedRestart;

    /**
     * @var string Current value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RunningValue;

    /**
     * @var ValueRange Value range.
     */
    public $ValueRange;

    /**
     * @var string Unit.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Unit;

    /**
     * @var string Introduction in English.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShortDesc;

    /**
     * @var string Parameter name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParameterName;

    /**
     * @param string $ParamName Parameter name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DefaultValue Default value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $NeedRestart Indicates whether the restart is required.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RunningValue Current value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ValueRange $ValueRange Value range.
     * @param string $Unit Unit.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ShortDesc Introduction in English.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ParameterName Parameter name.
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

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("RunningValue",$param) and $param["RunningValue"] !== null) {
            $this->RunningValue = $param["RunningValue"];
        }

        if (array_key_exists("ValueRange",$param) and $param["ValueRange"] !== null) {
            $this->ValueRange = new ValueRange();
            $this->ValueRange->deserialize($param["ValueRange"]);
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("ShortDesc",$param) and $param["ShortDesc"] !== null) {
            $this->ShortDesc = $param["ShortDesc"];
        }

        if (array_key_exists("ParameterName",$param) and $param["ParameterName"] !== null) {
            $this->ParameterName = $param["ParameterName"];
        }
    }
}
