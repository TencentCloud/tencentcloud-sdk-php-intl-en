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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task details
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getTaskType() Obtain Task type
 * @method void setTaskType(string $TaskType) Set Task type
 * @method string getTransId() Obtain ID of TcaplusDB internal transaction associated with task
 * @method void setTransId(string $TransId) Set ID of TcaplusDB internal transaction associated with task
 * @method string getClusterId() Obtain ID of the cluster where a task resides
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where a task resides
 * @method string getClusterName() Obtain Name of the cluster where a task resides
 * @method void setClusterName(string $ClusterName) Set Name of the cluster where a task resides
 * @method integer getProgress() Obtain Task progress
 * @method void setProgress(integer $Progress) Set Task progress
 * @method string getStartTime() Obtain Task creation time
 * @method void setStartTime(string $StartTime) Set Task creation time
 * @method string getUpdateTime() Obtain Task last modified time
 * @method void setUpdateTime(string $UpdateTime) Set Task last modified time
 * @method string getOperator() Obtain Operator
 * @method void setOperator(string $Operator) Set Operator
 * @method string getContent() Obtain Task details
 * @method void setContent(string $Content) Set Task details
 */
class TaskInfoNew extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Task type
     */
    public $TaskType;

    /**
     * @var string ID of TcaplusDB internal transaction associated with task
     */
    public $TransId;

    /**
     * @var string ID of the cluster where a task resides
     */
    public $ClusterId;

    /**
     * @var string Name of the cluster where a task resides
     */
    public $ClusterName;

    /**
     * @var integer Task progress
     */
    public $Progress;

    /**
     * @var string Task creation time
     */
    public $StartTime;

    /**
     * @var string Task last modified time
     */
    public $UpdateTime;

    /**
     * @var string Operator
     */
    public $Operator;

    /**
     * @var string Task details
     */
    public $Content;

    /**
     * @param string $TaskId Task ID
     * @param string $TaskType Task type
     * @param string $TransId ID of TcaplusDB internal transaction associated with task
     * @param string $ClusterId ID of the cluster where a task resides
     * @param string $ClusterName Name of the cluster where a task resides
     * @param integer $Progress Task progress
     * @param string $StartTime Task creation time
     * @param string $UpdateTime Task last modified time
     * @param string $Operator Operator
     * @param string $Content Task details
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TransId",$param) and $param["TransId"] !== null) {
            $this->TransId = $param["TransId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
