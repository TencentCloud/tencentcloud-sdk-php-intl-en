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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Authentication-free conditional information.
 *
 * @method string getAttributes() Obtain Condition attribute. Currently, only VpcID is supported.
 * @method void setAttributes(string $Attributes) Set Condition attribute. Currently, only VpcID is supported.
 * @method integer getRule() Obtain Conditional rule. 1: equal to; 2: not equal to.
 * @method void setRule(integer $Rule) Set Conditional rule. 1: equal to; 2: not equal to.
 * @method string getConditionValue() Obtain Value corresponding to the condition attribute.
 * @method void setConditionValue(string $ConditionValue) Set Value corresponding to the condition attribute.
 */
class ConditionInfo extends AbstractModel
{
    /**
     * @var string Condition attribute. Currently, only VpcID is supported.
     */
    public $Attributes;

    /**
     * @var integer Conditional rule. 1: equal to; 2: not equal to.
     */
    public $Rule;

    /**
     * @var string Value corresponding to the condition attribute.
     */
    public $ConditionValue;

    /**
     * @param string $Attributes Condition attribute. Currently, only VpcID is supported.
     * @param integer $Rule Conditional rule. 1: equal to; 2: not equal to.
     * @param string $ConditionValue Value corresponding to the condition attribute.
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
        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = $param["Attributes"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("ConditionValue",$param) and $param["ConditionValue"] !== null) {
            $this->ConditionValue = $param["ConditionValue"];
        }
    }
}
