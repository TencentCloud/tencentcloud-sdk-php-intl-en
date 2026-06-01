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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenAuditService request structure.
 *
 * @method string getInstanceId() Obtain CDB instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set CDB instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method integer getLogExpireDay() Obtain Audit log retention period. Supported values include:
7 - A week;
30 - one month
90 - three months;
180 - 6 months;
365 - One year;
1095 - Three years;
1825 - Five years.
 * @method void setLogExpireDay(integer $LogExpireDay) Set Audit log retention period. Supported values include:
7 - A week;
30 - one month
90 - three months;
180 - 6 months;
365 - One year;
1095 - Three years;
1825 - Five years.
 * @method integer getHighLogExpireDay() Obtain High frequency audit log retention period. Default value is 7. This item must take value less than or equal to LogExpireDay. Supported values include:
3 - 3 days;
7 - A week;
30 - one month
90 - three months;
180 - 6 months;
365 - One year;
1095 - Three years;
1825 - Five years.
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) Set High frequency audit log retention period. Default value is 7. This item must take value less than or equal to LogExpireDay. Supported values include:
3 - 3 days;
7 - A week;
30 - one month
90 - three months;
180 - 6 months;
365 - One year;
1095 - Three years;
1825 - Five years.
 * @method array getAuditRuleFilters() Obtain Audit rule (deprecated, no longer effective).
 * @method void setAuditRuleFilters(array $AuditRuleFilters) Set Audit rule (deprecated, no longer effective).
 * @method array getRuleTemplateIds() Obtain Rule template ID.
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Rule template ID.
 * @method boolean getAuditAll() Obtain Audit type. true - full audit; default false - rule audit.
 * @method void setAuditAll(boolean $AuditAll) Set Audit type. true - full audit; default false - rule audit.
 */
class OpenAuditServiceRequest extends AbstractModel
{
    /**
     * @var string CDB instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var integer Audit log retention period. Supported values include:
7 - A week;
30 - one month
90 - three months;
180 - 6 months;
365 - One year;
1095 - Three years;
1825 - Five years.
     */
    public $LogExpireDay;

    /**
     * @var integer High frequency audit log retention period. Default value is 7. This item must take value less than or equal to LogExpireDay. Supported values include:
3 - 3 days;
7 - A week;
30 - one month
90 - three months;
180 - 6 months;
365 - One year;
1095 - Three years;
1825 - Five years.
     */
    public $HighLogExpireDay;

    /**
     * @var array Audit rule (deprecated, no longer effective).
     * @deprecated
     */
    public $AuditRuleFilters;

    /**
     * @var array Rule template ID.
     */
    public $RuleTemplateIds;

    /**
     * @var boolean Audit type. true - full audit; default false - rule audit.
     */
    public $AuditAll;

    /**
     * @param string $InstanceId CDB instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param integer $LogExpireDay Audit log retention period. Supported values include:
7 - A week;
30 - one month
90 - three months;
180 - 6 months;
365 - One year;
1095 - Three years;
1825 - Five years.
     * @param integer $HighLogExpireDay High frequency audit log retention period. Default value is 7. This item must take value less than or equal to LogExpireDay. Supported values include:
3 - 3 days;
7 - A week;
30 - one month
90 - three months;
180 - 6 months;
365 - One year;
1095 - Three years;
1825 - Five years.
     * @param array $AuditRuleFilters Audit rule (deprecated, no longer effective).
     * @param array $RuleTemplateIds Rule template ID.
     * @param boolean $AuditAll Audit type. true - full audit; default false - rule audit.
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

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HighLogExpireDay",$param) and $param["HighLogExpireDay"] !== null) {
            $this->HighLogExpireDay = $param["HighLogExpireDay"];
        }

        if (array_key_exists("AuditRuleFilters",$param) and $param["AuditRuleFilters"] !== null) {
            $this->AuditRuleFilters = [];
            foreach ($param["AuditRuleFilters"] as $key => $value){
                $obj = new AuditRuleFilters();
                $obj->deserialize($value);
                array_push($this->AuditRuleFilters, $obj);
            }
        }

        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
        }
    }
}
