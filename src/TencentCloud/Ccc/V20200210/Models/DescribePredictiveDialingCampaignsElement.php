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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query the predictive outbound call task list elements.
 *
 * @method integer getCampaignId() Obtain Task ID
Note: This field may return null if no valid value is obtained.
 * @method void setCampaignId(integer $CampaignId) Set Task ID
Note: This field may return null if no valid value is obtained.
 * @method string getName() Obtain Task Name
Note: This field might return null if no valid values can be obtained.
 * @method void setName(string $Name) Set Task Name
Note: This field might return null if no valid values can be obtained.
 * @method integer getStatus() Obtain Task status 0 - Ready to start, 1 - In progress, 2 - Paused, 3 - Terminated, 4 - Completed.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Task status 0 - Ready to start, 1 - In progress, 2 - Paused, 3 - Terminated, 4 - Completed.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatusReason() Obtain Task status reasons 0 - Normal, 1 - Manually ended, 2 - Ended due to overtime.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusReason(integer $StatusReason) Set Task status reasons 0 - Normal, 1 - Manually ended, 2 - Ended due to overtime.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCalleeCount() Obtain Number of called numbers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCalleeCount(integer $CalleeCount) Set Number of called numbers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getFinishedCalleeCount() Obtain Number of completed calls.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFinishedCalleeCount(integer $FinishedCalleeCount) Set Number of completed calls.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPriority() Obtain Running priority of multiple tasks in the same application, from high to low 1 - 5.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPriority(integer $Priority) Set Running priority of multiple tasks in the same application, from high to low 1 - 5.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSkillGroupId() Obtain ID of the used skill group of agents.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSkillGroupId(integer $SkillGroupId) Set ID of the used skill group of agents.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DescribePredictiveDialingCampaignsElement extends AbstractModel
{
    /**
     * @var integer Task ID
Note: This field may return null if no valid value is obtained.
     */
    public $CampaignId;

    /**
     * @var string Task Name
Note: This field might return null if no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer Task status 0 - Ready to start, 1 - In progress, 2 - Paused, 3 - Terminated, 4 - Completed.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Task status reasons 0 - Normal, 1 - Manually ended, 2 - Ended due to overtime.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusReason;

    /**
     * @var integer Number of called numbers.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CalleeCount;

    /**
     * @var integer Number of completed calls.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FinishedCalleeCount;

    /**
     * @var integer Running priority of multiple tasks in the same application, from high to low 1 - 5.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Priority;

    /**
     * @var integer ID of the used skill group of agents.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SkillGroupId;

    /**
     * @param integer $CampaignId Task ID
Note: This field may return null if no valid value is obtained.
     * @param string $Name Task Name
Note: This field might return null if no valid values can be obtained.
     * @param integer $Status Task status 0 - Ready to start, 1 - In progress, 2 - Paused, 3 - Terminated, 4 - Completed.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $StatusReason Task status reasons 0 - Normal, 1 - Manually ended, 2 - Ended due to overtime.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CalleeCount Number of called numbers.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $FinishedCalleeCount Number of completed calls.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Priority Running priority of multiple tasks in the same application, from high to low 1 - 5.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SkillGroupId ID of the used skill group of agents.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CampaignId",$param) and $param["CampaignId"] !== null) {
            $this->CampaignId = $param["CampaignId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("CalleeCount",$param) and $param["CalleeCount"] !== null) {
            $this->CalleeCount = $param["CalleeCount"];
        }

        if (array_key_exists("FinishedCalleeCount",$param) and $param["FinishedCalleeCount"] !== null) {
            $this->FinishedCalleeCount = $param["FinishedCalleeCount"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }
    }
}
