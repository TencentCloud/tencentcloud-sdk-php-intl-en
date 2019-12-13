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
 * @method string getJobId() 获取Instance ID
 * @method void setJobId(string $JobId) 设置Instance ID
 * @method string getJobName() 获取Instance name
 * @method void setJobName(string $JobName) 设置Instance name
 * @method string getJobDescription() 获取Instance description
 * @method void setJobDescription(string $JobDescription) 设置Instance description
 * @method integer getPriority() 获取Job priority. Tasks (Task) and task instances (TaskInstance) inherit the priority of the job
 * @method void setPriority(integer $Priority) 设置Job priority. Tasks (Task) and task instances (TaskInstance) inherit the priority of the job
 * @method array getTasks() 获取Task information
 * @method void setTasks(array $Tasks) 设置Task information
 * @method array getDependences() 获取Dependency information
 * @method void setDependences(array $Dependences) 设置Dependency information
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeJobSubmitInfo response structure.
 */
class DescribeJobSubmitInfoResponse extends AbstractModel
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
     * @var string Instance description
     */
    public $JobDescription;

    /**
     * @var integer Job priority. Tasks (Task) and task instances (TaskInstance) inherit the priority of the job
     */
    public $Priority;

    /**
     * @var array Task information
     */
    public $Tasks;

    /**
     * @var array Dependency information
     */
    public $Dependences;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $JobId Instance ID
     * @param string $JobName Instance name
     * @param string $JobDescription Instance description
     * @param integer $Priority Job priority. Tasks (Task) and task instances (TaskInstance) inherit the priority of the job
     * @param array $Tasks Task information
     * @param array $Dependences Dependency information
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
