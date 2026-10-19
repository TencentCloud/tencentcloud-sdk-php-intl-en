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
 * AddAlarmPolicy request structure.
 *
 * @method string getName() Obtain <p>Alarm policy name</p>
 * @method void setName(string $Name) Set <p>Alarm policy name</p>
 * @method integer getType() Obtain <p>Event type 1: Resource non-compliance event.</p>
 * @method void setType(integer $Type) Set <p>Event type 1: Resource non-compliance event.</p>
 * @method array getEventScope() Obtain <p>Event range. Valid values: 1 (current account) and 2 (multi-account).</p>
 * @method void setEventScope(array $EventScope) Set <p>Event range. Valid values: 1 (current account) and 2 (multi-account).</p>
 * @method array getRiskLevel() Obtain <p>Risk level. 1: high-risk 2: medium-risk 3: low risk</p>
 * @method void setRiskLevel(array $RiskLevel) Set <p>Risk level. 1: high-risk 2: medium-risk 3: low risk</p>
 * @method string getNoticeTime() Obtain <p>Notification period</p>
 * @method void setNoticeTime(string $NoticeTime) Set <p>Notification period</p>
 * @method string getNotificationMechanism() Obtain <p>Notification mechanism</p>
 * @method void setNotificationMechanism(string $NotificationMechanism) Set <p>Notification mechanism</p>
 * @method integer getStatus() Obtain <p>Status. Valid values: 1 (enabled) and 2 (disabled).</p>
 * @method void setStatus(integer $Status) Set <p>Status. Valid values: 1 (enabled) and 2 (disabled).</p>
 * @method array getNoticePeriod() Obtain <p>Notification cycle</p>
 * @method void setNoticePeriod(array $NoticePeriod) Set <p>Notification cycle</p>
 * @method string getDescription() Obtain <p>Policy description</p>
 * @method void setDescription(string $Description) Set <p>Policy description</p>
 */
class AddAlarmPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>Alarm policy name</p>
     */
    public $Name;

    /**
     * @var integer <p>Event type 1: Resource non-compliance event.</p>
     */
    public $Type;

    /**
     * @var array <p>Event range. Valid values: 1 (current account) and 2 (multi-account).</p>
     */
    public $EventScope;

    /**
     * @var array <p>Risk level. 1: high-risk 2: medium-risk 3: low risk</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Notification period</p>
     */
    public $NoticeTime;

    /**
     * @var string <p>Notification mechanism</p>
     */
    public $NotificationMechanism;

    /**
     * @var integer <p>Status. Valid values: 1 (enabled) and 2 (disabled).</p>
     */
    public $Status;

    /**
     * @var array <p>Notification cycle</p>
     */
    public $NoticePeriod;

    /**
     * @var string <p>Policy description</p>
     */
    public $Description;

    /**
     * @param string $Name <p>Alarm policy name</p>
     * @param integer $Type <p>Event type 1: Resource non-compliance event.</p>
     * @param array $EventScope <p>Event range. Valid values: 1 (current account) and 2 (multi-account).</p>
     * @param array $RiskLevel <p>Risk level. 1: high-risk 2: medium-risk 3: low risk</p>
     * @param string $NoticeTime <p>Notification period</p>
     * @param string $NotificationMechanism <p>Notification mechanism</p>
     * @param integer $Status <p>Status. Valid values: 1 (enabled) and 2 (disabled).</p>
     * @param array $NoticePeriod <p>Notification cycle</p>
     * @param string $Description <p>Policy description</p>
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

        if (array_key_exists("NoticeTime",$param) and $param["NoticeTime"] !== null) {
            $this->NoticeTime = $param["NoticeTime"];
        }

        if (array_key_exists("NotificationMechanism",$param) and $param["NotificationMechanism"] !== null) {
            $this->NotificationMechanism = $param["NotificationMechanism"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NoticePeriod",$param) and $param["NoticePeriod"] !== null) {
            $this->NoticePeriod = $param["NoticePeriod"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
