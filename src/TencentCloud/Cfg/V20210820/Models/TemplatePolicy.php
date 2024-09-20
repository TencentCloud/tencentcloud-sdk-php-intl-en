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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Protection policy
 *
 * @method array getTemplatePolicyIdList() Obtain Protection policy ID list
 * @method void setTemplatePolicyIdList(array $TemplatePolicyIdList) Set Protection policy ID list
 * @method string getTemplatePolicyRule() Obtain Policy rules
 * @method void setTemplatePolicyRule(string $TemplatePolicyRule) Set Policy rules
 * @method integer getTemplatePolicyDealType() Obtain Process method when the guardrail policy takes effect. 1: sequential execution, 2: pausing.
 * @method void setTemplatePolicyDealType(integer $TemplatePolicyDealType) Set Process method when the guardrail policy takes effect. 1: sequential execution, 2: pausing.
 */
class TemplatePolicy extends AbstractModel
{
    /**
     * @var array Protection policy ID list
     */
    public $TemplatePolicyIdList;

    /**
     * @var string Policy rules
     */
    public $TemplatePolicyRule;

    /**
     * @var integer Process method when the guardrail policy takes effect. 1: sequential execution, 2: pausing.
     */
    public $TemplatePolicyDealType;

    /**
     * @param array $TemplatePolicyIdList Protection policy ID list
     * @param string $TemplatePolicyRule Policy rules
     * @param integer $TemplatePolicyDealType Process method when the guardrail policy takes effect. 1: sequential execution, 2: pausing.
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
        if (array_key_exists("TemplatePolicyIdList",$param) and $param["TemplatePolicyIdList"] !== null) {
            $this->TemplatePolicyIdList = $param["TemplatePolicyIdList"];
        }

        if (array_key_exists("TemplatePolicyRule",$param) and $param["TemplatePolicyRule"] !== null) {
            $this->TemplatePolicyRule = $param["TemplatePolicyRule"];
        }

        if (array_key_exists("TemplatePolicyDealType",$param) and $param["TemplatePolicyDealType"] !== null) {
            $this->TemplatePolicyDealType = $param["TemplatePolicyDealType"];
        }
    }
}
