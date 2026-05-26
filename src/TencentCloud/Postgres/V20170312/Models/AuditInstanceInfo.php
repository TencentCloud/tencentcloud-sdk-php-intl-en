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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audit instance info
 *
 * @method string getInstanceId() Obtain <p>Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p>
 * @method string getAuditStatus() Obtain <p>Enabled</p><p>Enumeration value:</p><ul><li>OFF: Off</li><li>ON: On</li></ul>
 * @method void setAuditStatus(string $AuditStatus) Set <p>Enabled</p><p>Enumeration value:</p><ul><li>OFF: Off</li><li>ON: On</li></ul>
 * @method integer getLogExpireDay() Obtain <p>Log storage validity period</p><p>Unit: day</p>
 * @method void setLogExpireDay(integer $LogExpireDay) Set <p>Log storage validity period</p><p>Unit: day</p>
 * @method integer getHotLogExpireDay() Obtain <p>Hot storage period</p><p>Unit: day</p>
 * @method void setHotLogExpireDay(integer $HotLogExpireDay) Set <p>Hot storage period</p><p>Unit: day</p>
 * @method integer getColdLogExpireDay() Obtain <p>Cold storage period</p><p>Unit: day</p>
 * @method void setColdLogExpireDay(integer $ColdLogExpireDay) Set <p>Cold storage period</p><p>Unit: day</p>
 * @method float getHotLogSize() Obtain <p>Hot storage size</p><p>Unit: MB</p>
 * @method void setHotLogSize(float $HotLogSize) Set <p>Hot storage size</p><p>Unit: MB</p>
 * @method float getColdLogSize() Obtain <p>Cold storage size</p><p>Unit: MB</p>
 * @method void setColdLogSize(float $ColdLogSize) Set <p>Cold storage size</p><p>Unit: MB</p>
 * @method string getCreateTime() Obtain <p>Start time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Start time</p>
 * @method string getDeliver() Obtain <p>Delivery status</p>
 * @method void setDeliver(string $Deliver) Set <p>Delivery status</p>
 * @method array getDeliverSummary() Obtain <p>Shipping information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeliverSummary(array $DeliverSummary) Set <p>Shipping information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LogInstanceInfo getInstanceInfo() Obtain <p>Instance information</p>
 * @method void setInstanceInfo(LogInstanceInfo $InstanceInfo) Set <p>Instance information</p>
 */
class AuditInstanceInfo extends AbstractModel
{
    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Enabled</p><p>Enumeration value:</p><ul><li>OFF: Off</li><li>ON: On</li></ul>
     */
    public $AuditStatus;

    /**
     * @var integer <p>Log storage validity period</p><p>Unit: day</p>
     */
    public $LogExpireDay;

    /**
     * @var integer <p>Hot storage period</p><p>Unit: day</p>
     */
    public $HotLogExpireDay;

    /**
     * @var integer <p>Cold storage period</p><p>Unit: day</p>
     */
    public $ColdLogExpireDay;

    /**
     * @var float <p>Hot storage size</p><p>Unit: MB</p>
     */
    public $HotLogSize;

    /**
     * @var float <p>Cold storage size</p><p>Unit: MB</p>
     */
    public $ColdLogSize;

    /**
     * @var string <p>Start time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Delivery status</p>
     */
    public $Deliver;

    /**
     * @var array <p>Shipping information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeliverSummary;

    /**
     * @var LogInstanceInfo <p>Instance information</p>
     */
    public $InstanceInfo;

    /**
     * @param string $InstanceId <p>Instance ID</p>
     * @param string $AuditStatus <p>Enabled</p><p>Enumeration value:</p><ul><li>OFF: Off</li><li>ON: On</li></ul>
     * @param integer $LogExpireDay <p>Log storage validity period</p><p>Unit: day</p>
     * @param integer $HotLogExpireDay <p>Hot storage period</p><p>Unit: day</p>
     * @param integer $ColdLogExpireDay <p>Cold storage period</p><p>Unit: day</p>
     * @param float $HotLogSize <p>Hot storage size</p><p>Unit: MB</p>
     * @param float $ColdLogSize <p>Cold storage size</p><p>Unit: MB</p>
     * @param string $CreateTime <p>Start time</p>
     * @param string $Deliver <p>Delivery status</p>
     * @param array $DeliverSummary <p>Shipping information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LogInstanceInfo $InstanceInfo <p>Instance information</p>
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

        if (array_key_exists("HotLogExpireDay",$param) and $param["HotLogExpireDay"] !== null) {
            $this->HotLogExpireDay = $param["HotLogExpireDay"];
        }

        if (array_key_exists("ColdLogExpireDay",$param) and $param["ColdLogExpireDay"] !== null) {
            $this->ColdLogExpireDay = $param["ColdLogExpireDay"];
        }

        if (array_key_exists("HotLogSize",$param) and $param["HotLogSize"] !== null) {
            $this->HotLogSize = $param["HotLogSize"];
        }

        if (array_key_exists("ColdLogSize",$param) and $param["ColdLogSize"] !== null) {
            $this->ColdLogSize = $param["ColdLogSize"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new LogInstanceInfo();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }
    }
}
