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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance information
 *
 * @method string getJobId() Obtain Instance ID
 * @method void setJobId(string $JobId) Set Instance ID
 * @method string getJobName() Obtain Instance name
 * @method void setJobName(string $JobName) Set Instance name
 * @method string getJobState() Obtain Instance state
 * @method void setJobState(string $JobState) Set Instance state
 * @method integer getPriority() Obtain Instance priority
 * @method void setPriority(integer $Priority) Set Instance priority
 * @method Placement getPlacement() Obtain Location information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPlacement(Placement $Placement) Set Location information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getEndTime() Obtain End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaskMetrics getTaskMetrics() Obtain Task statistical metrics
 * @method void setTaskMetrics(TaskMetrics $TaskMetrics) Set Task statistical metrics
 */
class JobView extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $JobId;

    /**
     * @var string Instance name
     */
    public $JobName;

    /**
     * @var string Instance state
     */
    public $JobState;

    /**
     * @var integer Instance priority
     */
    public $Priority;

    /**
     * @var Placement Location information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Placement;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string End time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var TaskMetrics Task statistical metrics
     */
    public $TaskMetrics;

    /**
     * @param string $JobId Instance ID
     * @param string $JobName Instance name
     * @param string $JobState Instance state
     * @param integer $Priority Instance priority
     * @param Placement $Placement Location information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
     * @param string $EndTime End time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaskMetrics $TaskMetrics Task statistical metrics
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("JobState",$param) and $param["JobState"] !== null) {
            $this->JobState = $param["JobState"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskMetrics",$param) and $param["TaskMetrics"] !== null) {
            $this->TaskMetrics = new TaskMetrics();
            $this->TaskMetrics->deserialize($param["TaskMetrics"]);
        }
    }
}
