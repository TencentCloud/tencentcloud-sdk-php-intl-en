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
 * 
 *
 * @method string getInstanceId() Obtain 
 * @method void setInstanceId(string $InstanceId) Set 
 * @method string getAuditStatus() Obtain 
 * @method void setAuditStatus(string $AuditStatus) Set 
 * @method integer getLogExpireDay() Obtain Specifies the log retention period.
 * @method void setLogExpireDay(integer $LogExpireDay) Set Specifies the log retention period.
 * @method integer getHighLogExpireDay() Obtain High-Frequency storage duration.
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) Set High-Frequency storage duration.
 * @method integer getLowLogExpireDay() Obtain Specifies the duration of low-frequency storage.
 * @method void setLowLogExpireDay(integer $LowLogExpireDay) Set Specifies the duration of low-frequency storage.
 * @method float getBillingAmount() Obtain Specifies the log storage volume.
 * @method void setBillingAmount(float $BillingAmount) Set Specifies the log storage volume.
 * @method float getHighRealStorage() Obtain Specifies the high-frequency storage volume.
 * @method void setHighRealStorage(float $HighRealStorage) Set Specifies the high-frequency storage volume.
 * @method float getLowRealStorage() Obtain Specifies the infrequent access storage size.
 * @method void setLowRealStorage(float $LowRealStorage) Set Specifies the infrequent access storage size.
 * @method boolean getAuditAll() Obtain Specifies whether it is a full audit. true - indicates a full audit.
 * @method void setAuditAll(boolean $AuditAll) Set Specifies whether it is a full audit. true - indicates a full audit.
 * @method string getCreateAt() Obtain Specifies the audit activation time.
 * @method void setCreateAt(string $CreateAt) Set Specifies the audit activation time.
 * @method AuditInstanceInfo getInstanceInfo() Obtain Instance-Related information.
 * @method void setInstanceInfo(AuditInstanceInfo $InstanceInfo) Set Instance-Related information.
 * @method float getRealStorage() Obtain Specifies the total storage capacity.
 * @method void setRealStorage(float $RealStorage) Set Specifies the total storage capacity.
 * @method array getRuleTemplateIds() Obtain The rule template applied to the instance.
 * @method void setRuleTemplateIds(array $RuleTemplateIds) Set The rule template applied to the instance.
 * @method string getDeliver() Obtain Specifies whether to enable log delivery: ON, OFF.
 * @method void setDeliver(string $Deliver) Set Specifies whether to enable log delivery: ON, OFF.
 * @method array getDeliverSummary() Obtain Log shipping type.
 * @method void setDeliverSummary(array $DeliverSummary) Set Log shipping type.
 */
class InstanceAuditStatus extends AbstractModel
{
    /**
     * @var string 
     */
    public $InstanceId;

    /**
     * @var string 
     */
    public $AuditStatus;

    /**
     * @var integer Specifies the log retention period.
     */
    public $LogExpireDay;

    /**
     * @var integer High-Frequency storage duration.
     */
    public $HighLogExpireDay;

    /**
     * @var integer Specifies the duration of low-frequency storage.
     */
    public $LowLogExpireDay;

    /**
     * @var float Specifies the log storage volume.
     */
    public $BillingAmount;

    /**
     * @var float Specifies the high-frequency storage volume.
     */
    public $HighRealStorage;

    /**
     * @var float Specifies the infrequent access storage size.
     */
    public $LowRealStorage;

    /**
     * @var boolean Specifies whether it is a full audit. true - indicates a full audit.
     */
    public $AuditAll;

    /**
     * @var string Specifies the audit activation time.
     */
    public $CreateAt;

    /**
     * @var AuditInstanceInfo Instance-Related information.
     */
    public $InstanceInfo;

    /**
     * @var float Specifies the total storage capacity.
     */
    public $RealStorage;

    /**
     * @var array The rule template applied to the instance.
     */
    public $RuleTemplateIds;

    /**
     * @var string Specifies whether to enable log delivery: ON, OFF.
     */
    public $Deliver;

    /**
     * @var array Log shipping type.
     */
    public $DeliverSummary;

    /**
     * @param string $InstanceId 
     * @param string $AuditStatus 
     * @param integer $LogExpireDay Specifies the log retention period.
     * @param integer $HighLogExpireDay High-Frequency storage duration.
     * @param integer $LowLogExpireDay Specifies the duration of low-frequency storage.
     * @param float $BillingAmount Specifies the log storage volume.
     * @param float $HighRealStorage Specifies the high-frequency storage volume.
     * @param float $LowRealStorage Specifies the infrequent access storage size.
     * @param boolean $AuditAll Specifies whether it is a full audit. true - indicates a full audit.
     * @param string $CreateAt Specifies the audit activation time.
     * @param AuditInstanceInfo $InstanceInfo Instance-Related information.
     * @param float $RealStorage Specifies the total storage capacity.
     * @param array $RuleTemplateIds The rule template applied to the instance.
     * @param string $Deliver Specifies whether to enable log delivery: ON, OFF.
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
