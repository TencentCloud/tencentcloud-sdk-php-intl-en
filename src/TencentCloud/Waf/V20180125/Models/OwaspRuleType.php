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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Owasp rule type.
 *
 * @method integer getTypeId() Obtain Type ID
 * @method void setTypeId(integer $TypeId) Set Type ID
 * @method string getTypeName() Obtain Type name
 * @method void setTypeName(string $TypeName) Set Type name
 * @method string getDescription() Obtain Type description.


 * @method void setDescription(string $Description) Set Type description.


 * @method string getClassification() Obtain Data type category.
 * @method void setClassification(string $Classification) Set Data type category.
 * @method integer getAction() Obtain Protection mode of the rule type. valid values: 0 (observation), 1 (intercept).
 * @method void setAction(integer $Action) Set Protection mode of the rule type. valid values: 0 (observation), 1 (intercept).
 * @method integer getLevel() Obtain Protection level of the rule type. valid values: 100 (loose), 200 (normal), 300 (strict), 400 (ultra-strict).
 * @method void setLevel(integer $Level) Set Protection level of the rule type. valid values: 100 (loose), 200 (normal), 300 (strict), 400 (ultra-strict).
 * @method integer getStatus() Obtain The switch status of the rule type. valid values: 0 (disabled), 1 (enabled).
 * @method void setStatus(integer $Status) Set The switch status of the rule type. valid values: 0 (disabled), 1 (enabled).
 * @method integer getTotalRule() Obtain Specifies all rules under the rule type. always.
 * @method void setTotalRule(integer $TotalRule) Set Specifies all rules under the rule type. always.
 * @method integer getActiveRule() Obtain Indicates the total number of rules enabled under the rule type.
 * @method void setActiveRule(integer $ActiveRule) Set Indicates the total number of rules enabled under the rule type.
 */
class OwaspRuleType extends AbstractModel
{
    /**
     * @var integer Type ID
     */
    public $TypeId;

    /**
     * @var string Type name
     */
    public $TypeName;

    /**
     * @var string Type description.


     */
    public $Description;

    /**
     * @var string Data type category.
     */
    public $Classification;

    /**
     * @var integer Protection mode of the rule type. valid values: 0 (observation), 1 (intercept).
     */
    public $Action;

    /**
     * @var integer Protection level of the rule type. valid values: 100 (loose), 200 (normal), 300 (strict), 400 (ultra-strict).
     */
    public $Level;

    /**
     * @var integer The switch status of the rule type. valid values: 0 (disabled), 1 (enabled).
     */
    public $Status;

    /**
     * @var integer Specifies all rules under the rule type. always.
     */
    public $TotalRule;

    /**
     * @var integer Indicates the total number of rules enabled under the rule type.
     */
    public $ActiveRule;

    /**
     * @param integer $TypeId Type ID
     * @param string $TypeName Type name
     * @param string $Description Type description.


     * @param string $Classification Data type category.
     * @param integer $Action Protection mode of the rule type. valid values: 0 (observation), 1 (intercept).
     * @param integer $Level Protection level of the rule type. valid values: 100 (loose), 200 (normal), 300 (strict), 400 (ultra-strict).
     * @param integer $Status The switch status of the rule type. valid values: 0 (disabled), 1 (enabled).
     * @param integer $TotalRule Specifies all rules under the rule type. always.
     * @param integer $ActiveRule Indicates the total number of rules enabled under the rule type.
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
        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Classification",$param) and $param["Classification"] !== null) {
            $this->Classification = $param["Classification"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TotalRule",$param) and $param["TotalRule"] !== null) {
            $this->TotalRule = $param["TotalRule"];
        }

        if (array_key_exists("ActiveRule",$param) and $param["ActiveRule"] !== null) {
            $this->ActiveRule = $param["ActiveRule"];
        }
    }
}
