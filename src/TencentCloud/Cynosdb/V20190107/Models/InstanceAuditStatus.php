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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance audit details.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getAuditStatus() Obtain Audit status. ON - Audit is enabled, OFF - Audit is disabled.
 * @method void setAuditStatus(string $AuditStatus) Set Audit status. ON - Audit is enabled, OFF - Audit is disabled.
 * @method integer getLogExpireDay() Obtain Log retention period.
 * @method void setLogExpireDay(integer $LogExpireDay) Set Log retention period.
 * @method integer getHighLogExpireDay() Obtain High-frequency storage duration.
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) Set High-frequency storage duration.
 * @method integer getLowLogExpireDay() Obtain Low-frequency storage duration.
 * @method void setLowLogExpireDay(integer $LowLogExpireDay) Set Low-frequency storage duration.
 * @method float getBillingAmount() Obtain Log storage volume.
 * @method void setBillingAmount(float $BillingAmount) Set Log storage volume.
 * @method float getHighRealStorage() Obtain High-frequency storage volume.
 * @method void setHighRealStorage(float $HighRealStorage) Set High-frequency storage volume.
 * @method float getLowRealStorage() Obtain Infrequent access storage size.
 * @method void setLowRealStorage(float $LowRealStorage) Set Infrequent access storage size.
 * @method boolean getAuditAll() Obtain Whether full audit is enabled. true - Full audit.
 * @method void setAuditAll(boolean $AuditAll) Set Whether full audit is enabled. true - Full audit.
 * @method string getCreateAt() Obtain Time when the audit service was activated.
 * @method void setCreateAt(string $CreateAt) Set Time when the audit service was activated.
 * @method AuditInstanceInfo getInstanceInfo() Obtain Instance-related information.
 * @method void setInstanceInfo(AuditInstanceInfo $InstanceInfo) Set Instance-related information.
 * @method float getRealStorage() Obtain Total storage.
 * @method void setRealStorage(float $RealStorage) Set Total storage.
 * @method array getRuleTemplateIds() Obtain Rule template applied to the instance.
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set Rule template applied to the instance.
 * @method string getDeliver() Obtain Whether to enable log delivery: ON, OFF
 * @method void setDeliver(string $Deliver) Set Whether to enable log delivery: ON, OFF
 * @method array getDeliverSummary() Obtain Log shipping type.
 * @method void setDeliverSummary(array $DeliverSummary) Set Log shipping type.
 */
class InstanceAuditStatus extends AbstractModel
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
     * @var integer Log retention period.
     */
    public $LogExpireDay;

    /**
     * @var integer High-frequency storage duration.
     */
    public $HighLogExpireDay;

    /**
     * @var integer Low-frequency storage duration.
     */
    public $LowLogExpireDay;

    /**
     * @var float Log storage volume.
     */
    public $BillingAmount;

    /**
     * @var float High-frequency storage volume.
     */
    public $HighRealStorage;

    /**
     * @var float Infrequent access storage size.
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
     * @var AuditInstanceInfo Instance-related information.
     */
    public $InstanceInfo;

    /**
     * @var float Total storage.
     */
    public $RealStorage;

    /**
     * @var array Rule template applied to the instance.
     */
    public $RuleTemplateIds;

    /**
     * @var string Whether to enable log delivery: ON, OFF
     */
    public $Deliver;

    /**
     * @var array Log shipping type.
     */
    public $DeliverSummary;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $AuditStatus Audit status. ON - Audit is enabled, OFF - Audit is disabled.
     * @param integer $LogExpireDay Log retention period.
     * @param integer $HighLogExpireDay High-frequency storage duration.
     * @param integer $LowLogExpireDay Low-frequency storage duration.
     * @param float $BillingAmount Log storage volume.
     * @param float $HighRealStorage High-frequency storage volume.
     * @param float $LowRealStorage Infrequent access storage size.
     * @param boolean $AuditAll Whether full audit is enabled. true - Full audit.
     * @param string $CreateAt Time when the audit service was activated.
     * @param AuditInstanceInfo $InstanceInfo Instance-related information.
     * @param float $RealStorage Total storage.
     * @param array $RuleTemplateIds Rule template applied to the instance.
     * @param string $Deliver Whether to enable log delivery: ON, OFF
     * @param array $DeliverSummary Log shipping type.
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

        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }

        if (array_key_exists("Deliver",$param) and $param["Deliver"] !== null) {
            $this->Deliver = $param["Deliver"];
        }

        if (array_key_exists("DeliverSummary",$param) and $param["DeliverSummary"] !== null) {
            $this->DeliverSummary = [];
            foreach ($param["DeliverSummary"] as $key => $value){
                $obj = new DeliverSummary();
                $obj->deserialize($value);
                array_push($this->DeliverSummary, $obj);
            }
        }
    }
}
