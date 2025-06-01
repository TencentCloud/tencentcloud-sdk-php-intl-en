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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost allocation regular expression.
 *
 * @method string getRuleKey() Obtain RuleKey: cost allocation dimension.
Enumeration value.
ownerUin - user UIN.
Operator UIN.
businessCode - product-level code.
productCode - 2-tier product code.
itemCode - 4-tier product code.
projectId - specifies the project ID.
regionId.
resourceId - specifies the resource ID.
tag - tag key-value pair.
payMode - billing mode.
instanceType - instance type.
actionType - transaction type.
 * @method void setRuleKey(string $RuleKey) Set RuleKey: cost allocation dimension.
Enumeration value.
ownerUin - user UIN.
Operator UIN.
businessCode - product-level code.
productCode - 2-tier product code.
itemCode - 4-tier product code.
projectId - specifies the project ID.
regionId.
resourceId - specifies the resource ID.
tag - tag key-value pair.
payMode - billing mode.
instanceType - instance type.
actionType - transaction type.
 * @method string getOperator() Obtain Specifies the dimension rules for cost allocation.
Enumeration value.
in.
not in.
 * @method void setOperator(string $Operator) Set Specifies the dimension rules for cost allocation.
Enumeration value.
in.
not in.
 * @method array getRuleValue() Obtain Cost allocation dimension value. for example, when RuleKey is businessCode, ["p_cbs","p_sqlserver"] indicates the cost of products at the "p_cbs","p_sqlserver" level.
 * @method void setRuleValue(array $RuleValue) Set Cost allocation dimension value. for example, when RuleKey is businessCode, ["p_cbs","p_sqlserver"] indicates the cost of products at the "p_cbs","p_sqlserver" level.
 * @method string getConnectors() Obtain Logical connection for cost allocation, enumeration values are as follows:.
Create and bind a policy query an instance reset the access password of an instance.
Create and bind a policy query an instance reset the access password of an instance.
 * @method void setConnectors(string $Connectors) Set Logical connection for cost allocation, enumeration values are as follows:.
Create and bind a policy query an instance reset the access password of an instance.
Create and bind a policy query an instance reset the access password of an instance.
 * @method array getChildren() Obtain Nested rule.
 * @method void setChildren(array $Children) Set Nested rule.
 */
class AllocationRuleExpression extends AbstractModel
{
    /**
     * @var string RuleKey: cost allocation dimension.
Enumeration value.
ownerUin - user UIN.
Operator UIN.
businessCode - product-level code.
productCode - 2-tier product code.
itemCode - 4-tier product code.
projectId - specifies the project ID.
regionId.
resourceId - specifies the resource ID.
tag - tag key-value pair.
payMode - billing mode.
instanceType - instance type.
actionType - transaction type.
     */
    public $RuleKey;

    /**
     * @var string Specifies the dimension rules for cost allocation.
Enumeration value.
in.
not in.
     */
    public $Operator;

    /**
     * @var array Cost allocation dimension value. for example, when RuleKey is businessCode, ["p_cbs","p_sqlserver"] indicates the cost of products at the "p_cbs","p_sqlserver" level.
     */
    public $RuleValue;

    /**
     * @var string Logical connection for cost allocation, enumeration values are as follows:.
Create and bind a policy query an instance reset the access password of an instance.
Create and bind a policy query an instance reset the access password of an instance.
     */
    public $Connectors;

    /**
     * @var array Nested rule.
     */
    public $Children;

    /**
     * @param string $RuleKey RuleKey: cost allocation dimension.
Enumeration value.
ownerUin - user UIN.
Operator UIN.
businessCode - product-level code.
productCode - 2-tier product code.
itemCode - 4-tier product code.
projectId - specifies the project ID.
regionId.
resourceId - specifies the resource ID.
tag - tag key-value pair.
payMode - billing mode.
instanceType - instance type.
actionType - transaction type.
     * @param string $Operator Specifies the dimension rules for cost allocation.
Enumeration value.
in.
not in.
     * @param array $RuleValue Cost allocation dimension value. for example, when RuleKey is businessCode, ["p_cbs","p_sqlserver"] indicates the cost of products at the "p_cbs","p_sqlserver" level.
     * @param string $Connectors Logical connection for cost allocation, enumeration values are as follows:.
Create and bind a policy query an instance reset the access password of an instance.
Create and bind a policy query an instance reset the access password of an instance.
     * @param array $Children Nested rule.
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
        if (array_key_exists("RuleKey",$param) and $param["RuleKey"] !== null) {
            $this->RuleKey = $param["RuleKey"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("RuleValue",$param) and $param["RuleValue"] !== null) {
            $this->RuleValue = $param["RuleValue"];
        }

        if (array_key_exists("Connectors",$param) and $param["Connectors"] !== null) {
            $this->Connectors = $param["Connectors"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new AllocationRuleExpression();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
