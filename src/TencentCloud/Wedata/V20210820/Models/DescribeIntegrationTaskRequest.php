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
 * DescribeIntegrationTask request structure.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getTaskType() Obtain Task Type, 201: Real-time Integration Task, 202: Offline Integration Task, default value is 201 for real-time task if not specified
 * @method void setTaskType(integer $TaskType) Set Task Type, 201: Real-time Integration Task, 202: Offline Integration Task, default value is 201 for real-time task if not specified
 * @method integer getInstanceVersion() Obtain Submit version number
 * @method void setInstanceVersion(integer $InstanceVersion) Set Submit version number
 */
class DescribeIntegrationTaskRequest extends AbstractModel
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
     * @var integer Task Type, 201: Real-time Integration Task, 202: Offline Integration Task, default value is 201 for real-time task if not specified
     */
    public $TaskType;

    /**
     * @var integer Submit version number
     */
    public $InstanceVersion;

    /**
     * @param string $TaskId Task ID
     * @param string $ProjectId Project ID
     * @param integer $TaskType Task Type, 201: Real-time Integration Task, 202: Offline Integration Task, default value is 201 for real-time task if not specified
     * @param integer $InstanceVersion Submit version number
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }
    }
}
