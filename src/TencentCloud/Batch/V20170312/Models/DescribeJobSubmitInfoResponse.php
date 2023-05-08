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
 * DescribeJobSubmitInfo response structure.
 *
 * @method string getJobId() Obtain Job ID
 * @method void setJobId(string $JobId) Set Job ID
 * @method string getJobName() Obtain Job name
 * @method void setJobName(string $JobName) Set Job name
 * @method string getJobDescription() Obtain Job description
 * @method void setJobDescription(string $JobDescription) Set Job description
 * @method integer getPriority() Obtain Job priority. Tasks (Task) and task instances (TaskInstance) inherit the job priority
 * @method void setPriority(integer $Priority) Set Job priority. Tasks (Task) and task instances (TaskInstance) inherit the job priority
 * @method array getTasks() Obtain Information of tasks in the job
 * @method void setTasks(array $Tasks) Set Information of tasks in the job
 * @method array getDependences() Obtain Dependency information
 * @method void setDependences(array $Dependences) Set Dependency information
 * @method array getTags() Obtain List of tags bound with the job.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set List of tags bound with the job.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeJobSubmitInfoResponse extends AbstractModel
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
     * @var string Job description
     */
    public $JobDescription;

    /**
     * @var integer Job priority. Tasks (Task) and task instances (TaskInstance) inherit the job priority
     */
    public $Priority;

    /**
     * @var array Information of tasks in the job
     */
    public $Tasks;

    /**
     * @var array Dependency information
     */
    public $Dependences;

    /**
     * @var array List of tags bound with the job.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $JobId Job ID
     * @param string $JobName Job name
     * @param string $JobDescription Job description
     * @param integer $Priority Job priority. Tasks (Task) and task instances (TaskInstance) inherit the job priority
     * @param array $Tasks Information of tasks in the job
     * @param array $Dependences Dependency information
     * @param array $Tags List of tags bound with the job.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("JobDescription",$param) and $param["JobDescription"] !== null) {
            $this->JobDescription = $param["JobDescription"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new Task();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Dependences",$param) and $param["Dependences"] !== null) {
            $this->Dependences = [];
            foreach ($param["Dependences"] as $key => $value){
                $obj = new Dependence();
                $obj->deserialize($value);
                array_push($this->Dependences, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
