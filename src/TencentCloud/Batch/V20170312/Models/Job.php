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
 * Instance
 *
 * @method array getTasks() Obtain Job information
 * @method void setTasks(array $Tasks) Set Job information
 * @method string getJobName() Obtain Instance name
 * @method void setJobName(string $JobName) Set Instance name
 * @method string getJobDescription() Obtain Instance description
 * @method void setJobDescription(string $JobDescription) Set Instance description
 * @method integer getPriority() Obtain Instance priority. Tasks (Task) and task instances (TaskInstance) inherit the priority of the instance
 * @method void setPriority(integer $Priority) Set Instance priority. Tasks (Task) and task instances (TaskInstance) inherit the priority of the instance
 * @method array getDependences() Obtain Dependency information
 * @method void setDependences(array $Dependences) Set Dependency information
 * @method array getNotifications() Obtain Notification information
 * @method void setNotifications(array $Notifications) Set Notification information
 * @method string getTaskExecutionDependOn() Obtain This is the dependency of the subsequent task on the previous task if there is a dependent relationship between them. Value range: PRE_TASK_SUCCEED, PRE_TASK_AT_LEAST_PARTLY_SUCCEED, PRE_TASK_FINISHED. Default value: PRE_TASK_SUCCEED.
 * @method void setTaskExecutionDependOn(string $TaskExecutionDependOn) Set This is the dependency of the subsequent task on the previous task if there is a dependent relationship between them. Value range: PRE_TASK_SUCCEED, PRE_TASK_AT_LEAST_PARTLY_SUCCEED, PRE_TASK_FINISHED. Default value: PRE_TASK_SUCCEED.
 * @method string getStateIfCreateCvmFailed() Obtain Indicates which policy will be used in case that CVM instance creation fails. Value range: FAILED, RUNNABLE. FAILED indicates that the CVM instance creation failure will be processed as an execution failure, while RUNNABLE indicates that the failure will be processed as "keep waiting". Default value: FAILED. StateIfCreateCvmFailed is not valid for submitted jobs for which a compute environment is specified.
 * @method void setStateIfCreateCvmFailed(string $StateIfCreateCvmFailed) Set Indicates which policy will be used in case that CVM instance creation fails. Value range: FAILED, RUNNABLE. FAILED indicates that the CVM instance creation failure will be processed as an execution failure, while RUNNABLE indicates that the failure will be processed as "keep waiting". Default value: FAILED. StateIfCreateCvmFailed is not valid for submitted jobs for which a compute environment is specified.
 * @method array getTags() Obtain Tag list. By setting this parameter, you can bind tags to a job. Each job supports up to 10 tags.
 * @method void setTags(array $Tags) Set Tag list. By setting this parameter, you can bind tags to a job. Each job supports up to 10 tags.
 */
class Job extends AbstractModel
{
    /**
     * @var array Job information
     */
    public $Tasks;

    /**
     * @var string Instance name
     */
    public $JobName;

    /**
     * @var string Instance description
     */
    public $JobDescription;

    /**
     * @var integer Instance priority. Tasks (Task) and task instances (TaskInstance) inherit the priority of the instance
     */
    public $Priority;

    /**
     * @var array Dependency information
     */
    public $Dependences;

    /**
     * @var array Notification information
     */
    public $Notifications;

    /**
     * @var string This is the dependency of the subsequent task on the previous task if there is a dependent relationship between them. Value range: PRE_TASK_SUCCEED, PRE_TASK_AT_LEAST_PARTLY_SUCCEED, PRE_TASK_FINISHED. Default value: PRE_TASK_SUCCEED.
     */
    public $TaskExecutionDependOn;

    /**
     * @var string Indicates which policy will be used in case that CVM instance creation fails. Value range: FAILED, RUNNABLE. FAILED indicates that the CVM instance creation failure will be processed as an execution failure, while RUNNABLE indicates that the failure will be processed as "keep waiting". Default value: FAILED. StateIfCreateCvmFailed is not valid for submitted jobs for which a compute environment is specified.
     */
    public $StateIfCreateCvmFailed;

    /**
     * @var array Tag list. By setting this parameter, you can bind tags to a job. Each job supports up to 10 tags.
     */
    public $Tags;

    /**
     * @param array $Tasks Job information
     * @param string $JobName Instance name
     * @param string $JobDescription Instance description
     * @param integer $Priority Instance priority. Tasks (Task) and task instances (TaskInstance) inherit the priority of the instance
     * @param array $Dependences Dependency information
     * @param array $Notifications Notification information
     * @param string $TaskExecutionDependOn This is the dependency of the subsequent task on the previous task if there is a dependent relationship between them. Value range: PRE_TASK_SUCCEED, PRE_TASK_AT_LEAST_PARTLY_SUCCEED, PRE_TASK_FINISHED. Default value: PRE_TASK_SUCCEED.
     * @param string $StateIfCreateCvmFailed Indicates which policy will be used in case that CVM instance creation fails. Value range: FAILED, RUNNABLE. FAILED indicates that the CVM instance creation failure will be processed as an execution failure, while RUNNABLE indicates that the failure will be processed as "keep waiting". Default value: FAILED. StateIfCreateCvmFailed is not valid for submitted jobs for which a compute environment is specified.
     * @param array $Tags Tag list. By setting this parameter, you can bind tags to a job. Each job supports up to 10 tags.
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
        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new Task();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
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

        if (array_key_exists("Dependences",$param) and $param["Dependences"] !== null) {
            $this->Dependences = [];
            foreach ($param["Dependences"] as $key => $value){
                $obj = new Dependence();
                $obj->deserialize($value);
                array_push($this->Dependences, $obj);
            }
        }

        if (array_key_exists("Notifications",$param) and $param["Notifications"] !== null) {
            $this->Notifications = [];
            foreach ($param["Notifications"] as $key => $value){
                $obj = new Notification();
                $obj->deserialize($value);
                array_push($this->Notifications, $obj);
            }
        }

        if (array_key_exists("TaskExecutionDependOn",$param) and $param["TaskExecutionDependOn"] !== null) {
            $this->TaskExecutionDependOn = $param["TaskExecutionDependOn"];
        }

        if (array_key_exists("StateIfCreateCvmFailed",$param) and $param["StateIfCreateCvmFailed"] !== null) {
            $this->StateIfCreateCvmFailed = $param["StateIfCreateCvmFailed"];
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
