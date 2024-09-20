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
 * @method array getTaskPolicyIdList() Obtain Protection policy ID list
 * @method void setTaskPolicyIdList(array $TaskPolicyIdList) Set Protection policy ID list
 * @method string getTaskPolicyStatus() Obtain Protection policy status
 * @method void setTaskPolicyStatus(string $TaskPolicyStatus) Set Protection policy status
 * @method string getTaskPolicyRule() Obtain Policy rule
 * @method void setTaskPolicyRule(string $TaskPolicyRule) Set Policy rule
 * @method integer getTaskPolicyDealType() Obtain Process method when the guardrail policy takes effect. 1: sequential execution, 2: pausing.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskPolicyDealType(integer $TaskPolicyDealType) Set Process method when the guardrail policy takes effect. 1: sequential execution, 2: pausing.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribePolicy extends AbstractModel
{
    /**
     * @var array Protection policy ID list
     */
    public $TaskPolicyIdList;

    /**
     * @var string Protection policy status
     */
    public $TaskPolicyStatus;

    /**
     * @var string Policy rule
     */
    public $TaskPolicyRule;

    /**
     * @var integer Process method when the guardrail policy takes effect. 1: sequential execution, 2: pausing.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskPolicyDealType;

    /**
     * @param array $TaskPolicyIdList Protection policy ID list
     * @param string $TaskPolicyStatus Protection policy status
     * @param string $TaskPolicyRule Policy rule
     * @param integer $TaskPolicyDealType Process method when the guardrail policy takes effect. 1: sequential execution, 2: pausing.
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
        if (array_key_exists("TaskPolicyIdList",$param) and $param["TaskPolicyIdList"] !== null) {
            $this->TaskPolicyIdList = $param["TaskPolicyIdList"];
        }

        if (array_key_exists("TaskPolicyStatus",$param) and $param["TaskPolicyStatus"] !== null) {
            $this->TaskPolicyStatus = $param["TaskPolicyStatus"];
        }

        if (array_key_exists("TaskPolicyRule",$param) and $param["TaskPolicyRule"] !== null) {
            $this->TaskPolicyRule = $param["TaskPolicyRule"];
        }

        if (array_key_exists("TaskPolicyDealType",$param) and $param["TaskPolicyDealType"] !== null) {
            $this->TaskPolicyDealType = $param["TaskPolicyDealType"];
        }
    }
}
