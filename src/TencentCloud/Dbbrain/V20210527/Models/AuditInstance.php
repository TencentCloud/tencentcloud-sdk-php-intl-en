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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance details
 *
 * @method string getAuditStatus() Obtain Audit status. Valid values: `ON` (Enabled), `OFF` (Not enabled).
 * @method void setAuditStatus(string $AuditStatus) Set Audit status. Valid values: `ON` (Enabled), `OFF` (Not enabled).
 * @method integer getBillingAmount() Obtain Audit log size. This parameter is only used for the free trial edition of Database Audit.
 * @method void setBillingAmount(integer $BillingAmount) Set Audit log size. This parameter is only used for the free trial edition of Database Audit.
 * @method integer getBillingConfirmed() Obtain Billing confirmation status. Valid values: `0` (Unconfirmed), `1` (Confirmed).
 * @method void setBillingConfirmed(integer $BillingConfirmed) Set Billing confirmation status. Valid values: `0` (Unconfirmed), `1` (Confirmed).
 * @method integer getColdLogExpireDay() Obtain Infrequent access storage period
 * @method void setColdLogExpireDay(integer $ColdLogExpireDay) Set Infrequent access storage period
 * @method integer getColdLogSize() Obtain Storage size of infrequently accessed logs in MB
 * @method void setColdLogSize(integer $ColdLogSize) Set Storage size of infrequently accessed logs in MB
 * @method integer getHotLogExpireDay() Obtain Storage period of frequently accessed logs in days
 * @method void setHotLogExpireDay(integer $HotLogExpireDay) Set Storage period of frequently accessed logs in days
 * @method integer getHotLogSize() Obtain Storage size of frequently accessed logs in MB
 * @method void setHotLogSize(integer $HotLogSize) Set Storage size of frequently accessed logs in MB
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getLogExpireDay() Obtain Log retention period in days, which is the sum of the frequent and infrequent access storage periods.
 * @method void setLogExpireDay(integer $LogExpireDay) Set Log retention period in days, which is the sum of the frequent and infrequent access storage periods.
 * @method string getCreateTime() Obtain Instance creation time
 * @method void setCreateTime(string $CreateTime) Set Instance creation time
 * @method AuditInstanceInfo getInstanceInfo() Obtain Instance details
 * @method void setInstanceInfo(AuditInstanceInfo $InstanceInfo) Set Instance details
 */
class AuditInstance extends AbstractModel
{
    /**
     * @var string Audit status. Valid values: `ON` (Enabled), `OFF` (Not enabled).
     */
    public $AuditStatus;

    /**
     * @var integer Audit log size. This parameter is only used for the free trial edition of Database Audit.
     */
    public $BillingAmount;

    /**
     * @var integer Billing confirmation status. Valid values: `0` (Unconfirmed), `1` (Confirmed).
     */
    public $BillingConfirmed;

    /**
     * @var integer Infrequent access storage period
     */
    public $ColdLogExpireDay;

    /**
     * @var integer Storage size of infrequently accessed logs in MB
     */
    public $ColdLogSize;

    /**
     * @var integer Storage period of frequently accessed logs in days
     */
    public $HotLogExpireDay;

    /**
     * @var integer Storage size of frequently accessed logs in MB
     */
    public $HotLogSize;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Log retention period in days, which is the sum of the frequent and infrequent access storage periods.
     */
    public $LogExpireDay;

    /**
     * @var string Instance creation time
     */
    public $CreateTime;

    /**
     * @var AuditInstanceInfo Instance details
     */
    public $InstanceInfo;

    /**
     * @param string $AuditStatus Audit status. Valid values: `ON` (Enabled), `OFF` (Not enabled).
     * @param integer $BillingAmount Audit log size. This parameter is only used for the free trial edition of Database Audit.
     * @param integer $BillingConfirmed Billing confirmation status. Valid values: `0` (Unconfirmed), `1` (Confirmed).
     * @param integer $ColdLogExpireDay Infrequent access storage period
     * @param integer $ColdLogSize Storage size of infrequently accessed logs in MB
     * @param integer $HotLogExpireDay Storage period of frequently accessed logs in days
     * @param integer $HotLogSize Storage size of frequently accessed logs in MB
     * @param string $InstanceId Instance ID
     * @param integer $LogExpireDay Log retention period in days, which is the sum of the frequent and infrequent access storage periods.
     * @param string $CreateTime Instance creation time
     * @param AuditInstanceInfo $InstanceInfo Instance details
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
        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("BillingAmount",$param) and $param["BillingAmount"] !== null) {
            $this->BillingAmount = $param["BillingAmount"];
        }

        if (array_key_exists("BillingConfirmed",$param) and $param["BillingConfirmed"] !== null) {
            $this->BillingConfirmed = $param["BillingConfirmed"];
        }

        if (array_key_exists("ColdLogExpireDay",$param) and $param["ColdLogExpireDay"] !== null) {
            $this->ColdLogExpireDay = $param["ColdLogExpireDay"];
        }

        if (array_key_exists("ColdLogSize",$param) and $param["ColdLogSize"] !== null) {
            $this->ColdLogSize = $param["ColdLogSize"];
        }

        if (array_key_exists("HotLogExpireDay",$param) and $param["HotLogExpireDay"] !== null) {
            $this->HotLogExpireDay = $param["HotLogExpireDay"];
        }

        if (array_key_exists("HotLogSize",$param) and $param["HotLogSize"] !== null) {
            $this->HotLogSize = $param["HotLogSize"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new AuditInstanceInfo();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }
    }
}
