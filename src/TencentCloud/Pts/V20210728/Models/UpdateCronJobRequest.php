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
 * UpdateCronJob request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getCronJobId() Obtain Cron job ID.
 * @method void setCronJobId(string $CronJobId) Set Cron job ID.
 * @method string getNote() Obtain Note.
 * @method void setNote(string $Note) Set Note.
 * @method string getCronExpression() Obtain Cron expression.
 * @method void setCronExpression(string $CronExpression) Set Cron expression.
 * @method integer getFrequencyType() Obtain Execution frequency type: 1, execute once only; 2, Daily; 3, Weekly; 4, Advanced mode using cron expression.
 * @method void setFrequencyType(integer $FrequencyType) Set Execution frequency type: 1, execute once only; 2, Daily; 3, Weekly; 4, Advanced mode using cron expression.
 * @method string getName() Obtain Cron job Name.
 * @method void setName(string $Name) Set Cron job Name.
 * @method string getScenarioId() Obtain Scenario ID.
 * @method void setScenarioId(string $ScenarioId) Set Scenario ID.
 * @method string getScenarioName() Obtain Scenario name.
 * @method void setScenarioName(string $ScenarioName) Set Scenario name.
 * @method string getJobOwner() Obtain Cron job Initiator.
 * @method void setJobOwner(string $JobOwner) Set Cron job Initiator.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method string getNoticeId() Obtain Notice ID.
 * @method void setNoticeId(string $NoticeId) Set Notice ID.
 */
class UpdateCronJobRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Cron job ID.
     */
    public $CronJobId;

    /**
     * @var string Note.
     */
    public $Note;

    /**
     * @var string Cron expression.
     */
    public $CronExpression;

    /**
     * @var integer Execution frequency type: 1, execute once only; 2, Daily; 3, Weekly; 4, Advanced mode using cron expression.
     */
    public $FrequencyType;

    /**
     * @var string Cron job Name.
     */
    public $Name;

    /**
     * @var string Scenario ID.
     */
    public $ScenarioId;

    /**
     * @var string Scenario name.
     */
    public $ScenarioName;

    /**
     * @var string Cron job Initiator.
     */
    public $JobOwner;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var string Notice ID.
     */
    public $NoticeId;

    /**
     * @param string $ProjectId Project ID.
     * @param string $CronJobId Cron job ID.
     * @param string $Note Note.
     * @param string $CronExpression Cron expression.
     * @param integer $FrequencyType Execution frequency type: 1, execute once only; 2, Daily; 3, Weekly; 4, Advanced mode using cron expression.
     * @param string $Name Cron job Name.
     * @param string $ScenarioId Scenario ID.
     * @param string $ScenarioName Scenario name.
     * @param string $JobOwner Cron job Initiator.
     * @param string $EndTime End time.
     * @param string $NoticeId Notice ID.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CronJobId",$param) and $param["CronJobId"] !== null) {
            $this->CronJobId = $param["CronJobId"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("CronExpression",$param) and $param["CronExpression"] !== null) {
            $this->CronExpression = $param["CronExpression"];
        }

        if (array_key_exists("FrequencyType",$param) and $param["FrequencyType"] !== null) {
            $this->FrequencyType = $param["FrequencyType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("ScenarioName",$param) and $param["ScenarioName"] !== null) {
            $this->ScenarioName = $param["ScenarioName"];
        }

        if (array_key_exists("JobOwner",$param) and $param["JobOwner"] !== null) {
            $this->JobOwner = $param["JobOwner"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }
    }
}
