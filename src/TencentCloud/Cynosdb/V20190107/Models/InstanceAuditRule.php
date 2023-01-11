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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audit rule details of the instance, which is an output parameter of the `DescribeAuditRuleWithInstanceIds` API.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method boolean getAuditRule() Obtain Whether the audit is rule audit. Valid values: `true` (rule audit), `false` (full audit).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuditRule(boolean $AuditRule) Set Whether the audit is rule audit. Valid values: `true` (rule audit), `false` (full audit).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAuditRuleFilters() Obtain Audit rule details, which is valid only when `AuditRule` is `true`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuditRuleFilters(array $AuditRuleFilters) Set Audit rule details, which is valid only when `AuditRule` is `true`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceAuditRule extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var boolean Whether the audit is rule audit. Valid values: `true` (rule audit), `false` (full audit).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuditRule;

    /**
     * @var array Audit rule details, which is valid only when `AuditRule` is `true`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuditRuleFilters;

    /**
     * @param string $InstanceId Instance ID.
     * @param boolean $AuditRule Whether the audit is rule audit. Valid values: `true` (rule audit), `false` (full audit).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AuditRuleFilters Audit rule details, which is valid only when `AuditRule` is `true`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AuditRule",$param) and $param["AuditRule"] !== null) {
            $this->AuditRule = $param["AuditRule"];
        }

        if (array_key_exists("AuditRuleFilters",$param) and $param["AuditRuleFilters"] !== null) {
            $this->AuditRuleFilters = [];
            foreach ($param["AuditRuleFilters"] as $key => $value){
                $obj = new AuditRuleFilters();
                $obj->deserialize($value);
                array_push($this->AuditRuleFilters, $obj);
            }
        }
    }
}
