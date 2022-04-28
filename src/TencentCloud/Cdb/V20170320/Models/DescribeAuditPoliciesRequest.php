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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditPolicies request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method string getPolicyId() Obtain Audit policy ID.
 * @method void setPolicyId(string $PolicyId) Set Audit policy ID.
 * @method string getPolicyName() Obtain Audit policy name. Fuzzy match query is supported.
 * @method void setPolicyName(string $PolicyName) Set Audit policy name. Fuzzy match query is supported.
 * @method integer getLimit() Obtain Number of entries per page. Value range: 1-100. Default value: 20.
 * @method void setLimit(integer $Limit) Set Number of entries per page. Value range: 1-100. Default value: 20.
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method string getRuleId() Obtain Audit rule ID, which can be used to query its associated audit policies.
Note: At least one of the parameters (“RuleId”, “PolicyId”, PolicyId”, or “PolicyName”) must be passed in.
 * @method void setRuleId(string $RuleId) Set Audit rule ID, which can be used to query its associated audit policies.
Note: At least one of the parameters (“RuleId”, “PolicyId”, PolicyId”, or “PolicyName”) must be passed in.
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 */
class DescribeAuditPoliciesRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     */
    public $InstanceId;

    /**
     * @var string Audit policy ID.
     */
    public $PolicyId;

    /**
     * @var string Audit policy name. Fuzzy match query is supported.
     */
    public $PolicyName;

    /**
     * @var integer Number of entries per page. Value range: 1-100. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var string Audit rule ID, which can be used to query its associated audit policies.
Note: At least one of the parameters (“RuleId”, “PolicyId”, PolicyId”, or “PolicyName”) must be passed in.
     */
    public $RuleId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     * @param string $PolicyId Audit policy ID.
     * @param string $PolicyName Audit policy name. Fuzzy match query is supported.
     * @param integer $Limit Number of entries per page. Value range: 1-100. Default value: 20.
     * @param integer $Offset Pagination offset
     * @param string $RuleId Audit rule ID, which can be used to query its associated audit policies.
Note: At least one of the parameters (“RuleId”, “PolicyId”, PolicyId”, or “PolicyName”) must be passed in.
     * @param string $InstanceName Instance name
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
