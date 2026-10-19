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
 * Rule conditions on the operation side.
 *
 * @method string getEmptyAs() Obtain Compliance status when the condition is empty. Valid values: COMPLIANT, NON_COMPLIANT, and NOT_APPLICABLE.
 * @method void setEmptyAs(string $EmptyAs) Set Compliance status when the condition is empty. Valid values: COMPLIANT, NON_COMPLIANT, and NOT_APPLICABLE.
 * @method string getSelectPath() Obtain Configuration path
 * @method void setSelectPath(string $SelectPath) Set Configuration path
 * @method string getOperator() Obtain Operator.
 * @method void setOperator(string $Operator) Set Operator.
 * @method boolean getRequired() Obtain Whether it is mandatory.
 * @method void setRequired(boolean $Required) Set Whether it is mandatory.
 * @method string getDesiredValue() Obtain Expected value
 * @method void setDesiredValue(string $DesiredValue) Set Expected value
 */
class SourceConditionForManage extends AbstractModel
{
    /**
     * @var string Compliance status when the condition is empty. Valid values: COMPLIANT, NON_COMPLIANT, and NOT_APPLICABLE.
     */
    public $EmptyAs;

    /**
     * @var string Configuration path
     */
    public $SelectPath;

    /**
     * @var string Operator.
     */
    public $Operator;

    /**
     * @var boolean Whether it is mandatory.
     */
    public $Required;

    /**
     * @var string Expected value
     */
    public $DesiredValue;

    /**
     * @param string $EmptyAs Compliance status when the condition is empty. Valid values: COMPLIANT, NON_COMPLIANT, and NOT_APPLICABLE.
     * @param string $SelectPath Configuration path
     * @param string $Operator Operator.
     * @param boolean $Required Whether it is mandatory.
     * @param string $DesiredValue Expected value
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
