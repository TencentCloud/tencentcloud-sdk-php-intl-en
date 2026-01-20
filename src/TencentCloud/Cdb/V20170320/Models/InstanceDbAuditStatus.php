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
 * Instance audit details.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getAuditStatus() Obtain Audit status. ON - Audit is enabled, OFF - Audit is disabled.
 * @method void setAuditStatus(string $AuditStatus) Set Audit status. ON - Audit is enabled, OFF - Audit is disabled.
 * @method integer getAuditTask() Obtain Task status. Valid values: 0 - No task; 1 - Enabling audit; 2 - Disabling audit.
 * @method void setAuditTask(integer $AuditTask) Set Task status. Valid values: 0 - No task; 1 - Enabling audit; 2 - Disabling audit.
 * @method integer getLogExpireDay() Obtain Log retention period. Valid values:7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
 * @method void setLogExpireDay(integer $LogExpireDay) Set Log retention period. Valid values:7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
 * @method integer getHighLogExpireDay() Obtain High-frequency storage period. Valid values:3 - 3 days;7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) Set High-frequency storage period. Valid values:3 - 3 days;7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
 * @method integer getLowLogExpireDay() Obtain Low-frequency storage period (in days). This equals the log retention period minus the high-frequency storage period.
 * @method void setLowLogExpireDay(integer $LowLogExpireDay) Set Low-frequency storage period (in days). This equals the log retention period minus the high-frequency storage period.
 * @method float getBillingAmount() Obtain Log storage volume (in GB).
 * @method void setBillingAmount(float $BillingAmount) Set Log storage volume (in GB).
 * @method float getHighRealStorage() Obtain High-frequency storage volume (in GB).
 * @method void setHighRealStorage(float $HighRealStorage) Set High-frequency storage volume (in GB).
 * @method float getLowRealStorage() Obtain Low-frequency storage volume (in GB).
 * @method void setLowRealStorage(float $LowRealStorage) Set Low-frequency storage volume (in GB).
 * @method boolean getAuditAll() Obtain Whether full audit is enabled. true - Full audit.
 * @method void setAuditAll(boolean $AuditAll) Set Whether full audit is enabled. true - Full audit.
 * @method string getCreateAt() Obtain Time when the audit service was activated.
 * @method void setCreateAt(string $CreateAt) Set Time when the audit service was activated.
 * @method AuditInstanceInfo getInstanceInfo() Obtain Related information about the instance.
 * @method void setInstanceInfo(AuditInstanceInfo $InstanceInfo) Set Related information about the instance.
 * @method float getRealStorage() Obtain Total storage volume (in GB).
 * @method void setRealStorage(float $RealStorage) Set Total storage volume (in GB).
 * @method boolean getOldRule() Obtain Whether an audit policy is configured.
 * @method void setOldRule(boolean $OldRule) Set Whether an audit policy is configured.
 * @method array getRuleTemplateIds() Obtain Rule template applied to the instance.
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Rule template applied to the instance.
 * @method string getTrialStatus() Obtain Trial status.
 * @method void setTrialStatus(string $TrialStatus) Set Trial status.
 * @method integer getTrialStartTime() Obtain Trial start time.
 * @method void setTrialStartTime(integer $TrialStartTime) Set Trial start time.
 * @method integer getTrialDuration() Obtain Trial duration.
 * @method void setTrialDuration(integer $TrialDuration) Set Trial duration.
 * @method integer getTrialCloseTime() Obtain Trial end time.
 * @method void setTrialCloseTime(integer $TrialCloseTime) Set Trial end time.
 * @method integer getTrialDescribeLogHours() Obtain Log query time limit during the trial period.
 * @method void setTrialDescribeLogHours(integer $TrialDescribeLogHours) Set Log query time limit during the trial period.
 */
class InstanceDbAuditStatus extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Audit status. ON - Audit is enabled, OFF - Audit is disabled.
     */
    public $AuditStatus;

    /**
     * @var integer Task status. Valid values: 0 - No task; 1 - Enabling audit; 2 - Disabling audit.
     */
    public $AuditTask;

    /**
     * @var integer Log retention period. Valid values:7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
     */
    public $LogExpireDay;

    /**
     * @var integer High-frequency storage period. Valid values:3 - 3 days;7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
     */
    public $HighLogExpireDay;

    /**
     * @var integer Low-frequency storage period (in days). This equals the log retention period minus the high-frequency storage period.
     */
    public $LowLogExpireDay;

    /**
     * @var float Log storage volume (in GB).
     */
    public $BillingAmount;

    /**
     * @var float High-frequency storage volume (in GB).
     */
    public $HighRealStorage;

    /**
     * @var float Low-frequency storage volume (in GB).
     */
    public $LowRealStorage;

    /**
     * @var boolean Whether full audit is enabled. true - Full audit.
     */
    public $AuditAll;

    /**
     * @var string Time when the audit service was activated.
     */
    public $CreateAt;

    /**
     * @var AuditInstanceInfo Related information about the instance.
     */
    public $InstanceInfo;

    /**
     * @var float Total storage volume (in GB).
     */
    public $RealStorage;

    /**
     * @var boolean Whether an audit policy is configured.
     */
    public $OldRule;

    /**
     * @var array Rule template applied to the instance.
     */
    public $RuleTemplateIds;

    /**
     * @var string Trial status.
     */
    public $TrialStatus;

    /**
     * @var integer Trial start time.
     */
    public $TrialStartTime;

    /**
     * @var integer Trial duration.
     */
    public $TrialDuration;

    /**
     * @var integer Trial end time.
     */
    public $TrialCloseTime;

    /**
     * @var integer Log query time limit during the trial period.
     */
    public $TrialDescribeLogHours;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $AuditStatus Audit status. ON - Audit is enabled, OFF - Audit is disabled.
     * @param integer $AuditTask Task status. Valid values: 0 - No task; 1 - Enabling audit; 2 - Disabling audit.
     * @param integer $LogExpireDay Log retention period. Valid values:7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
     * @param integer $HighLogExpireDay High-frequency storage period. Valid values:3 - 3 days;7 - One week;30 - One month;90 - Three months;180 - Six months;365 - One year;1095 - Three years;1825 - Five years.
     * @param integer $LowLogExpireDay Low-frequency storage period (in days). This equals the log retention period minus the high-frequency storage period.
     * @param float $BillingAmount Log storage volume (in GB).
     * @param float $HighRealStorage High-frequency storage volume (in GB).
     * @param float $LowRealStorage Low-frequency storage volume (in GB).
     * @param boolean $AuditAll Whether full audit is enabled. true - Full audit.
     * @param string $CreateAt Time when the audit service was activated.
     * @param AuditInstanceInfo $InstanceInfo Related information about the instance.
     * @param float $RealStorage Total storage volume (in GB).
     * @param boolean $OldRule Whether an audit policy is configured.
     * @param array $RuleTemplateIds Rule template applied to the instance.
     * @param string $TrialStatus Trial status.
     * @param integer $TrialStartTime Trial start time.
     * @param integer $TrialDuration Trial duration.
     * @param integer $TrialCloseTime Trial end time.
     * @param integer $TrialDescribeLogHours Log query time limit during the trial period.
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

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("AuditTask",$param) and $param["AuditTask"] !== null) {
            $this->AuditTask = $param["AuditTask"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HighLogExpireDay",$param) and $param["HighLogExpireDay"] !== null) {
            $this->HighLogExpireDay = $param["HighLogExpireDay"];
        }

        if (array_key_exists("LowLogExpireDay",$param) and $param["LowLogExpireDay"] !== null) {
            $this->LowLogExpireDay = $param["LowLogExpireDay"];
        }

        if (array_key_exists("BillingAmount",$param) and $param["BillingAmount"] !== null) {
            $this->BillingAmount = $param["BillingAmount"];
        }

        if (array_key_exists("HighRealStorage",$param) and $param["HighRealStorage"] !== null) {
            $this->HighRealStorage = $param["HighRealStorage"];
        }

        if (array_key_exists("LowRealStorage",$param) and $param["LowRealStorage"] !== null) {
            $this->LowRealStorage = $param["LowRealStorage"];
        }

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new AuditInstanceInfo();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }

        if (array_key_exists("RealStorage",$param) and $param["RealStorage"] !== null) {
            $this->RealStorage = $param["RealStorage"];
        }

        if (array_key_exists("OldRule",$param) and $param["OldRule"] !== null) {
            $this->OldRule = $param["OldRule"];
        }

        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }

        if (array_key_exists("TrialStatus",$param) and $param["TrialStatus"] !== null) {
            $this->TrialStatus = $param["TrialStatus"];
        }

        if (array_key_exists("TrialStartTime",$param) and $param["TrialStartTime"] !== null) {
            $this->TrialStartTime = $param["TrialStartTime"];
        }

        if (array_key_exists("TrialDuration",$param) and $param["TrialDuration"] !== null) {
            $this->TrialDuration = $param["TrialDuration"];
        }

        if (array_key_exists("TrialCloseTime",$param) and $param["TrialCloseTime"] !== null) {
            $this->TrialCloseTime = $param["TrialCloseTime"];
        }

        if (array_key_exists("TrialDescribeLogHours",$param) and $param["TrialDescribeLogHours"] !== null) {
            $this->TrialDescribeLogHours = $param["TrialDescribeLogHours"];
        }
    }
}
