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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Structure of a single alarm policy record.
 *
 * @method integer getAlarmPolicyId() Obtain Unique alarm policy ID.
 * @method void setAlarmPolicyId(integer $AlarmPolicyId) Set Unique alarm policy ID.
 * @method string getName() Obtain Policy name.
 * @method void setName(string $Name) Set Policy name.
 * @method integer getType() Obtain Event type
 * @method void setType(integer $Type) Set Event type
 * @method array getEventScope() Obtain Valid values: 1 (current account) and 2 (multi-account).
 * @method void setEventScope(array $EventScope) Set Valid values: 1 (current account) and 2 (multi-account).
 * @method array getRiskLevel() Obtain Valid values: 1 (high risk), 2 (medium risk), and 3 (low risk).
 * @method void setRiskLevel(array $RiskLevel) Set Valid values: 1 (high risk), 2 (medium risk), and 3 (low risk).
 * @method array getNoticePeriod() Obtain Notification cycle. Value range: 1 to 7, representing Monday to Sunday respectively.
 * @method void setNoticePeriod(array $NoticePeriod) Set Notification cycle. Value range: 1 to 7, representing Monday to Sunday respectively.
 * @method string getNoticeTime() Obtain Notification period
 * @method void setNoticeTime(string $NoticeTime) Set Notification period
 * @method string getNotificationMechanism() Obtain Notification mechanism
 * @method void setNotificationMechanism(string $NotificationMechanism) Set Notification mechanism
 * @method integer getStatus() Obtain Policy status. Valid values: 1 (enabled) and 2 (disabled).
 * @method void setStatus(integer $Status) Set Policy status. Valid values: 1 (enabled) and 2 (disabled).
 * @method string getDescription() Obtain Policy description
 * @method void setDescription(string $Description) Set Policy description
 */
class AlarmPolicyRsp extends AbstractModel
{
    /**
     * @var integer Unique alarm policy ID.
     */
    public $AlarmPolicyId;

    /**
     * @var string Policy name.
     */
    public $Name;

    /**
     * @var integer Event type
     */
    public $Type;

    /**
     * @var array Valid values: 1 (current account) and 2 (multi-account).
     */
    public $EventScope;

    /**
     * @var array Valid values: 1 (high risk), 2 (medium risk), and 3 (low risk).
     */
    public $RiskLevel;

    /**
     * @var array Notification cycle. Value range: 1 to 7, representing Monday to Sunday respectively.
     */
    public $NoticePeriod;

    /**
     * @var string Notification period
     */
    public $NoticeTime;

    /**
     * @var string Notification mechanism
     */
    public $NotificationMechanism;

    /**
     * @var integer Policy status. Valid values: 1 (enabled) and 2 (disabled).
     */
    public $Status;

    /**
     * @var string Policy description
     */
    public $Description;

    /**
     * @param integer $AlarmPolicyId Unique alarm policy ID.
     * @param string $Name Policy name.
     * @param integer $Type Event type
     * @param array $EventScope Valid values: 1 (current account) and 2 (multi-account).
     * @param array $RiskLevel Valid values: 1 (high risk), 2 (medium risk), and 3 (low risk).
     * @param array $NoticePeriod Notification cycle. Value range: 1 to 7, representing Monday to Sunday respectively.
     * @param string $NoticeTime Notification period
     * @param string $NotificationMechanism Notification mechanism
     * @param integer $Status Policy status. Valid values: 1 (enabled) and 2 (disabled).
     * @param string $Description Policy description
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
        if (array_key_exists("AlarmPolicyId",$param) and $param["AlarmPolicyId"] !== null) {
            $this->AlarmPolicyId = $param["AlarmPolicyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EventScope",$param) and $param["EventScope"] !== null) {
            $this->EventScope = $param["EventScope"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("NoticePeriod",$param) and $param["NoticePeriod"] !== null) {
            $this->NoticePeriod = $param["NoticePeriod"];
        }

        if (array_key_exists("NoticeTime",$param) and $param["NoticeTime"] !== null) {
            $this->NoticeTime = $param["NoticeTime"];
        }

        if (array_key_exists("NotificationMechanism",$param) and $param["NotificationMechanism"] !== null) {
            $this->NotificationMechanism = $param["NotificationMechanism"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
