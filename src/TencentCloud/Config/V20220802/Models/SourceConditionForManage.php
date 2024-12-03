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
 * Managing end rule conditions
 *
 * @method string getEmptyAs() Obtain Condition is empty, Compliant: COMPLIANT, Non-compliant: NON_COMPLIANT, Not applicable: NOT_APPLICABLE.
Note: This field may return null, indicating that no valid value is found.
 * @method void setEmptyAs(string $EmptyAs) Set Condition is empty, Compliant: COMPLIANT, Non-compliant: NON_COMPLIANT, Not applicable: NOT_APPLICABLE.
Note: This field may return null, indicating that no valid value is found.
 * @method string getSelectPath() Obtain Configuration path

Note: This field may return null, indicating that no valid value is found.
 * @method void setSelectPath(string $SelectPath) Set Configuration path

Note: This field may return null, indicating that no valid value is found.
 * @method string getOperator() Obtain Operators
Note: This field may return null, indicating that no valid value is found.
 * @method void setOperator(string $Operator) Set Operators
Note: This field may return null, indicating that no valid value is found.
 * @method boolean getRequired() Obtain Required or not.

Note: This field may return null, indicating that no valid value is found.
 * @method void setRequired(boolean $Required) Set Required or not.

Note: This field may return null, indicating that no valid value is found.
 * @method string getDesiredValue() Obtain Expected value
Note: This field may return null, indicating that no valid value is found.
 * @method void setDesiredValue(string $DesiredValue) Set Expected value
Note: This field may return null, indicating that no valid value is found.
 */
class SourceConditionForManage extends AbstractModel
{
    /**
     * @var string Condition is empty, Compliant: COMPLIANT, Non-compliant: NON_COMPLIANT, Not applicable: NOT_APPLICABLE.
Note: This field may return null, indicating that no valid value is found.
     */
    public $EmptyAs;

    /**
     * @var string Configuration path

Note: This field may return null, indicating that no valid value is found.
     */
    public $SelectPath;

    /**
     * @var string Operators
Note: This field may return null, indicating that no valid value is found.
     */
    public $Operator;

    /**
     * @var boolean Required or not.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Required;

    /**
     * @var string Expected value
Note: This field may return null, indicating that no valid value is found.
     */
    public $DesiredValue;

    /**
     * @param string $EmptyAs Condition is empty, Compliant: COMPLIANT, Non-compliant: NON_COMPLIANT, Not applicable: NOT_APPLICABLE.
Note: This field may return null, indicating that no valid value is found.
     * @param string $SelectPath Configuration path

Note: This field may return null, indicating that no valid value is found.
     * @param string $Operator Operators
Note: This field may return null, indicating that no valid value is found.
     * @param boolean $Required Required or not.

Note: This field may return null, indicating that no valid value is found.
     * @param string $DesiredValue Expected value
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
        if (array_key_exists("EmptyAs",$param) and $param["EmptyAs"] !== null) {
            $this->EmptyAs = $param["EmptyAs"];
        }

        if (array_key_exists("SelectPath",$param) and $param["SelectPath"] !== null) {
            $this->SelectPath = $param["SelectPath"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("DesiredValue",$param) and $param["DesiredValue"] !== null) {
            $this->DesiredValue = $param["DesiredValue"];
        }
    }
}
