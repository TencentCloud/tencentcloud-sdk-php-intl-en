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
 * UpdatePredictiveDialingCampaign request structure.
 *
 * @method integer getSdkAppId() Obtain Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method integer getCampaignId() Obtain Generated task ID.
 * @method void setCampaignId(integer $CampaignId) Set Generated task ID.
 * @method string getName() Obtain Task Name
 * @method void setName(string $Name) Set Task Name
 * @method array getCallees() Obtain Called list supporting E.164 or number formats without country code.
 * @method void setCallees(array $Callees) Set Called list supporting E.164 or number formats without country code.
 * @method array getCallers() Obtain Calling list using the number formats displayed on the management side.
 * @method void setCallers(array $Callers) Set Calling list using the number formats displayed on the management side.
 * @method integer getCallOrder() Obtain Being called sequence: 0 for random 1 for in order.
 * @method void setCallOrder(integer $CallOrder) Set Being called sequence: 0 for random 1 for in order.
 * @method integer getSkillGroupId() Obtain ID of the used skill group of agents.
 * @method void setSkillGroupId(integer $SkillGroupId) Set ID of the used skill group of agents.
 * @method integer getPriority() Obtain Running priority of multiple tasks in the same application, from high to low 1 - 5.
 * @method void setPriority(integer $Priority) Set Running priority of multiple tasks in the same application, from high to low 1 - 5.
 * @method integer getExpectedAbandonRate() Obtain Expected call drop rate, percentage, 5 - 50.
 * @method void setExpectedAbandonRate(integer $ExpectedAbandonRate) Set Expected call drop rate, percentage, 5 - 50.
 * @method integer getRetryInterval() Obtain Call retry interval, in seconds, [60 - 86,400].
 * @method void setRetryInterval(integer $RetryInterval) Set Call retry interval, in seconds, [60 - 86,400].
 * @method integer getStartTime() Obtain Task start time. Unix timestamp. The task will automatically start after this time.
 * @method void setStartTime(integer $StartTime) Set Task start time. Unix timestamp. The task will automatically start after this time.
 * @method integer getEndTime() Obtain Task termination time. Unix timestamp. The task will automatically terminate after this time.
 * @method void setEndTime(integer $EndTime) Set Task termination time. Unix timestamp. The task will automatically terminate after this time.
 * @method integer getIVRId() Obtain Specified IVR ID.
 * @method void setIVRId(integer $IVRId) Set Specified IVR ID.
 * @method integer getRetryTimes() Obtain Number of call retries, 0 - 2.
 * @method void setRetryTimes(integer $RetryTimes) Set Number of call retries, 0 - 2.
 */
class UpdatePredictiveDialingCampaignRequest extends AbstractModel
{
    /**
     * @var integer Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var integer Generated task ID.
     */
    public $CampaignId;

    /**
     * @var string Task Name
     */
    public $Name;

    /**
     * @var array Called list supporting E.164 or number formats without country code.
     */
    public $Callees;

    /**
     * @var array Calling list using the number formats displayed on the management side.
     */
    public $Callers;

    /**
     * @var integer Being called sequence: 0 for random 1 for in order.
     */
    public $CallOrder;

    /**
     * @var integer ID of the used skill group of agents.
     */
    public $SkillGroupId;

    /**
     * @var integer Running priority of multiple tasks in the same application, from high to low 1 - 5.
     */
    public $Priority;

    /**
     * @var integer Expected call drop rate, percentage, 5 - 50.
     */
    public $ExpectedAbandonRate;

    /**
     * @var integer Call retry interval, in seconds, [60 - 86,400].
     */
    public $RetryInterval;

    /**
     * @var integer Task start time. Unix timestamp. The task will automatically start after this time.
     */
    public $StartTime;

    /**
     * @var integer Task termination time. Unix timestamp. The task will automatically terminate after this time.
     */
    public $EndTime;

    /**
     * @var integer Specified IVR ID.
     */
    public $IVRId;

    /**
     * @var integer Number of call retries, 0 - 2.
     */
    public $RetryTimes;

    /**
     * @param integer $SdkAppId Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param integer $CampaignId Generated task ID.
     * @param string $Name Task Name
     * @param array $Callees Called list supporting E.164 or number formats without country code.
     * @param array $Callers Calling list using the number formats displayed on the management side.
     * @param integer $CallOrder Being called sequence: 0 for random 1 for in order.
     * @param integer $SkillGroupId ID of the used skill group of agents.
     * @param integer $Priority Running priority of multiple tasks in the same application, from high to low 1 - 5.
     * @param integer $ExpectedAbandonRate Expected call drop rate, percentage, 5 - 50.
     * @param integer $RetryInterval Call retry interval, in seconds, [60 - 86,400].
     * @param integer $StartTime Task start time. Unix timestamp. The task will automatically start after this time.
     * @param integer $EndTime Task termination time. Unix timestamp. The task will automatically terminate after this time.
     * @param integer $IVRId Specified IVR ID.
     * @param integer $RetryTimes Number of call retries, 0 - 2.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("CampaignId",$param) and $param["CampaignId"] !== null) {
            $this->CampaignId = $param["CampaignId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Callees",$param) and $param["Callees"] !== null) {
            $this->Callees = $param["Callees"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("CallOrder",$param) and $param["CallOrder"] !== null) {
            $this->CallOrder = $param["CallOrder"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("ExpectedAbandonRate",$param) and $param["ExpectedAbandonRate"] !== null) {
            $this->ExpectedAbandonRate = $param["ExpectedAbandonRate"];
        }

        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IVRId",$param) and $param["IVRId"] !== null) {
            $this->IVRId = $param["IVRId"];
        }

        if (array_key_exists("RetryTimes",$param) and $param["RetryTimes"] !== null) {
            $this->RetryTimes = $param["RetryTimes"];
        }
    }
}
