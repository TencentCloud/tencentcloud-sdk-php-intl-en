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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cron job.
 *
 * @method string getCronJobId() Obtain Cron job ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setCronJobId(string $CronJobId) Set Cron job ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getName() Obtain Cron job name.

Note: This field may return null, indicating that no valid value is found.
 * @method void setName(string $Name) Set Cron job name.

Note: This field may return null, indicating that no valid value is found.
 * @method string getProjectId() Obtain Project ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setProjectId(string $ProjectId) Set Project ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getScenarioId() Obtain Scenario ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setScenarioId(string $ScenarioId) Set Scenario ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getScenarioName() Obtain Scenario name.

Note: This field may return null, indicating that no valid value is found.
 * @method void setScenarioName(string $ScenarioName) Set Scenario name.

Note: This field may return null, indicating that no valid value is found.
 * @method string getCronExpression() Obtain Cron expression.

Note: This field may return null, indicating that no valid value is found.
 * @method void setCronExpression(string $CronExpression) Set Cron expression.

Note: This field may return null, indicating that no valid value is found.
 * @method string getEndTime() Obtain End time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setEndTime(string $EndTime) Set End time.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getAbortReason() Obtain Abort reason.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAbortReason(integer $AbortReason) Set Abort reason.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getStatus() Obtain Cron job status.

Note: This field may return null, indicating that no valid value is found.
 * @method void setStatus(integer $Status) Set Cron job status.

Note: This field may return null, indicating that no valid value is found.
 * @method string getNoticeId() Obtain Notice ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setNoticeId(string $NoticeId) Set Notice ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getCreatedAt() Obtain Create time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setCreatedAt(string $CreatedAt) Set Create time.

Note: This field may return null, indicating that no valid value is found.
 * @method string getUpdatedAt() Obtain Update time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getFrequencyType() Obtain Execution frequency type: 1, execute once only; 2, Daily; 3, Weekly; 4, Advanced mode using cron expression.

Note: This field may return null, indicating that no valid value is found.
 * @method void setFrequencyType(integer $FrequencyType) Set Execution frequency type: 1, execute once only; 2, Daily; 3, Weekly; 4, Advanced mode using cron expression.

Note: This field may return null, indicating that no valid value is found.
 * @method string getNote() Obtain Note.

Note: This field may return null, indicating that no valid value is found.
 * @method void setNote(string $Note) Set Note.

Note: This field may return null, indicating that no valid value is found.
 * @method string getJobOwner() Obtain Cron job initiator.

Note: This field may return null, indicating that no valid value is found.
 * @method void setJobOwner(string $JobOwner) Set Cron job initiator.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getAppId() Obtain App ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAppId(integer $AppId) Set App ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getUin() Obtain Account uin.

Note: This field may return null, indicating that no valid value is found.
 * @method void setUin(string $Uin) Set Account uin.

Note: This field may return null, indicating that no valid value is found.
 * @method string getSubAccountUin() Obtain Sub account uin.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSubAccountUin(string $SubAccountUin) Set Sub account uin.

Note: This field may return null, indicating that no valid value is found.
 */
class CronJob extends AbstractModel
{
    /**
     * @var string Cron job ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $CronJobId;

    /**
     * @var string Cron job name.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Name;

    /**
     * @var string Project ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ProjectId;

    /**
     * @var string Scenario ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ScenarioId;

    /**
     * @var string Scenario name.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ScenarioName;

    /**
     * @var string Cron expression.

Note: This field may return null, indicating that no valid value is found.
     */
    public $CronExpression;

    /**
     * @var string End time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $EndTime;

    /**
     * @var integer Abort reason.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AbortReason;

    /**
     * @var integer Cron job status.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Status;

    /**
     * @var string Notice ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $NoticeId;

    /**
     * @var string Create time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $CreatedAt;

    /**
     * @var string Update time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $UpdatedAt;

    /**
     * @var integer Execution frequency type: 1, execute once only; 2, Daily; 3, Weekly; 4, Advanced mode using cron expression.

Note: This field may return null, indicating that no valid value is found.
     */
    public $FrequencyType;

    /**
     * @var string Note.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Note;

    /**
     * @var string Cron job initiator.

Note: This field may return null, indicating that no valid value is found.
     */
    public $JobOwner;

    /**
     * @var integer App ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AppId;

    /**
     * @var string Account uin.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Uin;

    /**
     * @var string Sub account uin.

Note: This field may return null, indicating that no valid value is found.
     */
    public $SubAccountUin;

    /**
     * @param string $CronJobId Cron job ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Name Cron job name.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ProjectId Project ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ScenarioId Scenario ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ScenarioName Scenario name.

Note: This field may return null, indicating that no valid value is found.
     * @param string $CronExpression Cron expression.

Note: This field may return null, indicating that no valid value is found.
     * @param string $EndTime End time.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $AbortReason Abort reason.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Status Cron job status.

Note: This field may return null, indicating that no valid value is found.
     * @param string $NoticeId Notice ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $CreatedAt Create time.

Note: This field may return null, indicating that no valid value is found.
     * @param string $UpdatedAt Update time.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $FrequencyType Execution frequency type: 1, execute once only; 2, Daily; 3, Weekly; 4, Advanced mode using cron expression.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Note Note.

Note: This field may return null, indicating that no valid value is found.
     * @param string $JobOwner Cron job initiator.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $AppId App ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Uin Account uin.

Note: This field may return null, indicating that no valid value is found.
     * @param string $SubAccountUin Sub account uin.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("CronJobId",$param) and $param["CronJobId"] !== null) {
            $this->CronJobId = $param["CronJobId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("ScenarioName",$param) and $param["ScenarioName"] !== null) {
            $this->ScenarioName = $param["ScenarioName"];
        }

        if (array_key_exists("CronExpression",$param) and $param["CronExpression"] !== null) {
            $this->CronExpression = $param["CronExpression"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AbortReason",$param) and $param["AbortReason"] !== null) {
            $this->AbortReason = $param["AbortReason"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("FrequencyType",$param) and $param["FrequencyType"] !== null) {
            $this->FrequencyType = $param["FrequencyType"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("JobOwner",$param) and $param["JobOwner"] !== null) {
            $this->JobOwner = $param["JobOwner"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }
    }
}
