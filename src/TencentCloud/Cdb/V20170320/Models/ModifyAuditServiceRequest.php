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
 * ModifyAuditService request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.comom/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.comom/document/product/236/15872?from_cn_redirect=1) API.
 * @method integer getLogExpireDay() Obtain Log retention period. Valid values:7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
 * @method void setLogExpireDay(integer $LogExpireDay) Set Log retention period. Valid values:7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
 * @method integer getHighLogExpireDay() Obtain High-frequency log retention period. Default value: 7. This value must be less than or equal to LogExpireDay. Valid values include:3 - 3 days;7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) Set High-frequency log retention period. Default value: 7. This value must be less than or equal to LogExpireDay. Valid values include:3 - 3 days;7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
 * @method boolean getAuditAll() Obtain Modifies the instance audit rule to Full audit.
 * @method void setAuditAll(boolean $AuditAll) Set Modifies the instance audit rule to Full audit.
 * @method array getAuditRuleFilters() Obtain Deprecated.
 * @method void setAuditRuleFilters(array $AuditRuleFilters) Set Deprecated.
 * @method array getRuleTemplateIds() Obtain Rule template ID, which can be obtained through the [DescribeAuditRuleTemplates](https://www.tencentcloud.comom/document/api/236/101811?from_cn_redirect=1) API.
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Rule template ID, which can be obtained through the [DescribeAuditRuleTemplates](https://www.tencentcloud.comom/document/api/236/101811?from_cn_redirect=1) API.
 */
class ModifyAuditServiceRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.comom/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var integer Log retention period. Valid values:7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
     */
    public $LogExpireDay;

    /**
     * @var integer High-frequency log retention period. Default value: 7. This value must be less than or equal to LogExpireDay. Valid values include:3 - 3 days;7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
     */
    public $HighLogExpireDay;

    /**
     * @var boolean Modifies the instance audit rule to Full audit.
     */
    public $AuditAll;

    /**
     * @var array Deprecated.
     * @deprecated
     */
    public $AuditRuleFilters;

    /**
     * @var array Rule template ID, which can be obtained through the [DescribeAuditRuleTemplates](https://www.tencentcloud.comom/document/api/236/101811?from_cn_redirect=1) API.
     */
    public $RuleTemplateIds;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.comom/document/product/236/15872?from_cn_redirect=1) API.
     * @param integer $LogExpireDay Log retention period. Valid values:7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
     * @param integer $HighLogExpireDay High-frequency log retention period. Default value: 7. This value must be less than or equal to LogExpireDay. Valid values include:3 - 3 days;7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
     * @param boolean $AuditAll Modifies the instance audit rule to Full audit.
     * @param array $AuditRuleFilters Deprecated.
     * @param array $RuleTemplateIds Rule template ID, which can be obtained through the [DescribeAuditRuleTemplates](https://www.tencentcloud.comom/document/api/236/101811?from_cn_redirect=1) API.
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

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
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
    }
}
