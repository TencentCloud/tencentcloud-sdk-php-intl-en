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
 * Job information
 *
 * @method string getJobId() Obtain Job ID
 * @method void setJobId(string $JobId) Set Job ID
 * @method string getJobName() Obtain Job name
 * @method void setJobName(string $JobName) Set Job name
 * @method string getJobState() Obtain Job state
 * @method void setJobState(string $JobState) Set Job state
 * @method integer getPriority() Obtain Job priority
 * @method void setPriority(integer $Priority) Set Job priority
 * @method Placement getPlacement() Obtain Location information
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPlacement(Placement $Placement) Set Location information
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getEndTime() Obtain End time
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEndTime(string $EndTime) Set End time
Note: This field may return `null`, indicating that no valid value was found.
 * @method TaskMetrics getTaskMetrics() Obtain Task statistical metrics
 * @method void setTaskMetrics(TaskMetrics $TaskMetrics) Set Task statistical metrics
 * @method array getTags() Obtain List of tags bound with the job.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set List of tags bound with the job.
Note: This field may return `null`, indicating that no valid value was found.
 */
class JobView extends AbstractModel
{
    /**
     * @var string Job ID
     */
    public $JobId;

    /**
     * @var string Job name
     */
    public $JobName;

    /**
     * @var string Job state
     */
    public $JobState;

    /**
     * @var integer Job priority
     */
    public $Priority;

    /**
     * @var Placement Location information
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Placement;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string End time
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EndTime;

    /**
     * @var TaskMetrics Task statistical metrics
     */
    public $TaskMetrics;

    /**
     * @var array List of tags bound with the job.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @param string $JobId Job ID
     * @param string $JobName Job name
     * @param string $JobState Job state
     * @param integer $Priority Job priority
     * @param Placement $Placement Location information
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $CreateTime Creation time
     * @param string $EndTime End time
Note: This field may return `null`, indicating that no valid value was found.
     * @param TaskMetrics $TaskMetrics Task statistical metrics
     * @param array $Tags List of tags bound with the job.
Note: This field may return `null`, indicating that no valid value was found.
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
