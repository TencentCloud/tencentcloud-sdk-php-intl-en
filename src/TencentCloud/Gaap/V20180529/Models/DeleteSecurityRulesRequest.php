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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSecurityRules request structure.
 *
 * @method string getPolicyId() Obtain Security policy ID
 * @method void setPolicyId(string $PolicyId) Set Security policy ID
 * @method array getRuleIdList() Obtain List of access rule IDs
 * @method void setRuleIdList(array $RuleIdList) Set List of access rule IDs
 */
class DeleteSecurityRulesRequest extends AbstractModel
{
    /**
     * @var string Security policy ID
     */
    public $PolicyId;

    /**
     * @var array List of access rule IDs
     */
    public $RuleIdList;

    /**
     * @param string $PolicyId Security policy ID
     * @param array $RuleIdList List of access rule IDs
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("RuleIdList",$param) and $param["RuleIdList"] !== null) {
            $this->RuleIdList = $param["RuleIdList"];
        }
    }
}
