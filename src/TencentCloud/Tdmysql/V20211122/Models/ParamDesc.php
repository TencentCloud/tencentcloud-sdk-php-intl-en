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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DB parameter description.
 *
 * @method string getParam() Obtain Parameter name.
 * @method void setParam(string $Param) Set Parameter name.
 * @method string getValue() Obtain Current parameter value.
 * @method void setValue(string $Value) Set Current parameter value.
 * @method string getSetValue() Obtain The configured value is the same as the value once the parameter takes effect.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSetValue(string $SetValue) Set The configured value is the same as the value once the parameter takes effect.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefault() Obtain System default value.
 * @method void setDefault(string $Default) Set System default value.
 * @method ParamConstraint getConstraint() Obtain Parameter limits.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConstraint(ParamConstraint $Constraint) Set Parameter limits.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getHaveSetValue() Obtain Whether a value has been set. false: not set. true: has set.
 * @method void setHaveSetValue(boolean $HaveSetValue) Set Whether a value has been set. false: not set. true: has set.
 * @method boolean getNeedRestart() Obtain true: restart required.
 * @method void setNeedRestart(boolean $NeedRestart) Set true: restart required.
 * @method string getDescription() Obtain Parameter description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Parameter description.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ParamDesc extends AbstractModel
{
    /**
     * @var string Parameter name.
     */
    public $Param;

    /**
     * @var string Current parameter value.
     */
    public $Value;

    /**
     * @var string The configured value is the same as the value once the parameter takes effect.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SetValue;

    /**
     * @var string System default value.
     */
    public $Default;

    /**
     * @var ParamConstraint Parameter limits.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Constraint;

    /**
     * @var boolean Whether a value has been set. false: not set. true: has set.
     */
    public $HaveSetValue;

    /**
     * @var boolean true: restart required.
     */
    public $NeedRestart;

    /**
     * @var string Parameter description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @param string $Param Parameter name.
     * @param string $Value Current parameter value.
     * @param string $SetValue The configured value is the same as the value once the parameter takes effect.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Default System default value.
     * @param ParamConstraint $Constraint Parameter limits.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $HaveSetValue Whether a value has been set. false: not set. true: has set.
     * @param boolean $NeedRestart true: restart required.
     * @param string $Description Parameter description.
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
        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("SetValue",$param) and $param["SetValue"] !== null) {
            $this->SetValue = $param["SetValue"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Constraint",$param) and $param["Constraint"] !== null) {
            $this->Constraint = new ParamConstraint();
            $this->Constraint->deserialize($param["Constraint"]);
        }

        if (array_key_exists("HaveSetValue",$param) and $param["HaveSetValue"] !== null) {
            $this->HaveSetValue = $param["HaveSetValue"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
