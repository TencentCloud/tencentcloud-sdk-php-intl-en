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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRuleExecLog request structure.
 *
 * @method integer getRuleExecId() Obtain Rule Execution ID
 * @method void setRuleExecId(integer $RuleExecId) Set Rule Execution ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getRuleGroupExecId() Obtain Rule Group Execution ID
 * @method void setRuleGroupExecId(integer $RuleGroupExecId) Set Rule Group Execution ID
 */
class DescribeRuleExecLogRequest extends AbstractModel
{
    /**
     * @var integer Rule Execution ID
     */
    public $RuleExecId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Rule Group Execution ID
     */
    public $RuleGroupExecId;

    /**
     * @param integer $RuleExecId Rule Execution ID
     * @param string $ProjectId Project ID
     * @param integer $RuleGroupExecId Rule Group Execution ID
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
        if (array_key_exists("RuleExecId",$param) and $param["RuleExecId"] !== null) {
            $this->RuleExecId = $param["RuleExecId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RuleGroupExecId",$param) and $param["RuleGroupExecId"] !== null) {
            $this->RuleGroupExecId = $param["RuleGroupExecId"];
        }
    }
}
