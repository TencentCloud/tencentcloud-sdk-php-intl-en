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
 * Alert history record.
 *
 * @method string getAlertRecordId() Obtain Alert history record ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAlertRecordId(string $AlertRecordId) Set Alert history record ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getProjectId() Obtain Project ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setProjectId(string $ProjectId) Set Project ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getScenarioId() Obtain Scenario ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setScenarioId(string $ScenarioId) Set Scenario ID.

Note: This field may return null, indicating that no valid value is found.
 * @method AlertRecordStatus getStatus() Obtain Status.

Note: This field may return null, indicating that no valid value is found.
 * @method void setStatus(AlertRecordStatus $Status) Set Status.

Note: This field may return null, indicating that no valid value is found.
 * @method string getCreatedAt() Obtain Create time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setCreatedAt(string $CreatedAt) Set Create time.

Note: This field may return null, indicating that no valid value is found.
 * @method string getUpdatedAt() Obtain Update time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.

Note: This field may return null, indicating that no valid value is found.
 * @method string getJobId() Obtain Job ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setJobId(string $JobId) Set Job ID.

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
 * @method string getScenarioName() Obtain Scenario name.

Note: This field may return null, indicating that no valid value is found.
 * @method void setScenarioName(string $ScenarioName) Set Scenario name.

Note: This field may return null, indicating that no valid value is found.
 * @method string getTarget() Obtain Alert target.

Note: This field may return null, indicating that no valid value is found.
 * @method void setTarget(string $Target) Set Alert target.

Note: This field may return null, indicating that no valid value is found.
 * @method string getJobSLAId() Obtain SLA ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setJobSLAId(string $JobSLAId) Set SLA ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getJobSLADescription() Obtain SLA description.

Note: This field may return null, indicating that no valid value is found.
 * @method void setJobSLADescription(string $JobSLADescription) Set SLA description.

Note: This field may return null, indicating that no valid value is found.
 */
class AlertRecord extends AbstractModel
{
    /**
     * @var string Alert history record ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AlertRecordId;

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
     * @var AlertRecordStatus Status.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Status;

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
     * @var string Job ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $JobId;

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
     * @var string Scenario name.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ScenarioName;

    /**
     * @var string Alert target.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Target;

    /**
     * @var string SLA ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $JobSLAId;

    /**
     * @var string SLA description.

Note: This field may return null, indicating that no valid value is found.
     */
    public $JobSLADescription;

    /**
     * @param string $AlertRecordId Alert history record ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ProjectId Project ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ScenarioId Scenario ID.

Note: This field may return null, indicating that no valid value is found.
     * @param AlertRecordStatus $Status Status.

Note: This field may return null, indicating that no valid value is found.
     * @param string $CreatedAt Create time.

Note: This field may return null, indicating that no valid value is found.
     * @param string $UpdatedAt Update time.

Note: This field may return null, indicating that no valid value is found.
     * @param string $JobId Job ID.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $AppId App ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Uin Account uin.

Note: This field may return null, indicating that no valid value is found.
     * @param string $SubAccountUin Sub account uin.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ScenarioName Scenario name.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Target Alert target.

Note: This field may return null, indicating that no valid value is found.
     * @param string $JobSLAId SLA ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $JobSLADescription SLA description.

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
        if (array_key_exists("AlertRecordId",$param) and $param["AlertRecordId"] !== null) {
            $this->AlertRecordId = $param["AlertRecordId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new AlertRecordStatus();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
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

        if (array_key_exists("ScenarioName",$param) and $param["ScenarioName"] !== null) {
            $this->ScenarioName = $param["ScenarioName"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("JobSLAId",$param) and $param["JobSLAId"] !== null) {
            $this->JobSLAId = $param["JobSLAId"];
        }

        if (array_key_exists("JobSLADescription",$param) and $param["JobSLADescription"] !== null) {
            $this->JobSLADescription = $param["JobSLADescription"];
        }
    }
}
