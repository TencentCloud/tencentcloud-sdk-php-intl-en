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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CommitIntegrationTask request structure.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getCommitType() Obtain 0. Only submit, 1. Start immediately, 2. Stop online jobs, discard job state data, restart, 3. Pause online jobs, keep job state data, continue running, 4. Keep job state data, continue running
 * @method void setCommitType(integer $CommitType) Set 0. Only submit, 1. Start immediately, 2. Stop online jobs, discard job state data, restart, 3. Pause online jobs, keep job state data, continue running, 4. Keep job state data, continue running
 * @method integer getTaskType() Obtain Real-time task 201 Offline task 202 Default is real-time task
 * @method void setTaskType(integer $TaskType) Set Real-time task 201 Offline task 202 Default is real-time task
 * @method array getExtConfig() Obtain Additional parameters
 * @method void setExtConfig(array $ExtConfig) Set Additional parameters
 * @method string getVersionDesc() Obtain Submit version description
 * @method void setVersionDesc(string $VersionDesc) Set Submit version description
 * @method integer getInstanceVersion() Obtain Submit version number
 * @method void setInstanceVersion(integer $InstanceVersion) Set Submit version number
 * @method string getEventDesc() Obtain Describe the type of front-end operation
 * @method void setEventDesc(string $EventDesc) Set Describe the type of front-end operation
 */
class CommitIntegrationTaskRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer 0. Only submit, 1. Start immediately, 2. Stop online jobs, discard job state data, restart, 3. Pause online jobs, keep job state data, continue running, 4. Keep job state data, continue running
     */
    public $CommitType;

    /**
     * @var integer Real-time task 201 Offline task 202 Default is real-time task
     */
    public $TaskType;

    /**
     * @var array Additional parameters
     */
    public $ExtConfig;

    /**
     * @var string Submit version description
     */
    public $VersionDesc;

    /**
     * @var integer Submit version number
     */
    public $InstanceVersion;

    /**
     * @var string Describe the type of front-end operation
     */
    public $EventDesc;

    /**
     * @param string $TaskId Task ID
     * @param string $ProjectId Project ID
     * @param integer $CommitType 0. Only submit, 1. Start immediately, 2. Stop online jobs, discard job state data, restart, 3. Pause online jobs, keep job state data, continue running, 4. Keep job state data, continue running
     * @param integer $TaskType Real-time task 201 Offline task 202 Default is real-time task
     * @param array $ExtConfig Additional parameters
     * @param string $VersionDesc Submit version description
     * @param integer $InstanceVersion Submit version number
     * @param string $EventDesc Describe the type of front-end operation
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CommitType",$param) and $param["CommitType"] !== null) {
            $this->CommitType = $param["CommitType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ExtConfig",$param) and $param["ExtConfig"] !== null) {
            $this->ExtConfig = [];
            foreach ($param["ExtConfig"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtConfig, $obj);
            }
        }

        if (array_key_exists("VersionDesc",$param) and $param["VersionDesc"] !== null) {
            $this->VersionDesc = $param["VersionDesc"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("EventDesc",$param) and $param["EventDesc"] !== null) {
            $this->EventDesc = $param["EventDesc"];
        }
    }
}
