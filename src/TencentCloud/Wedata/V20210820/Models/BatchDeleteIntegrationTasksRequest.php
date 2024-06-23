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
 * BatchDeleteIntegrationTasks request structure.
 *
 * @method array getTaskIds() Obtain Task ID
 * @method void setTaskIds(array $TaskIds) Set Task ID
 * @method integer getTaskType() Obtain Task Type, 201 for real-time tasks, 202 for offline tasks
 * @method void setTaskType(integer $TaskType) Set Task Type, 201 for real-time tasks, 202 for offline tasks
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getDeleteKFFlag() Obtain Whether to delete development state tasks. By default, development state is not deleted, 0 means do not delete, 1 means delete
 * @method void setDeleteKFFlag(integer $DeleteKFFlag) Set Whether to delete development state tasks. By default, development state is not deleted, 0 means do not delete, 1 means delete
 * @method string getName() Obtain Operation Name
 * @method void setName(string $Name) Set Operation Name
 * @method array getTaskNames() Obtain This batch operation involves tasks for auditing
 * @method void setTaskNames(array $TaskNames) Set This batch operation involves tasks for auditing
 */
class BatchDeleteIntegrationTasksRequest extends AbstractModel
{
    /**
     * @var array Task ID
     */
    public $TaskIds;

    /**
     * @var integer Task Type, 201 for real-time tasks, 202 for offline tasks
     */
    public $TaskType;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Whether to delete development state tasks. By default, development state is not deleted, 0 means do not delete, 1 means delete
     */
    public $DeleteKFFlag;

    /**
     * @var string Operation Name
     */
    public $Name;

    /**
     * @var array This batch operation involves tasks for auditing
     */
    public $TaskNames;

    /**
     * @param array $TaskIds Task ID
     * @param integer $TaskType Task Type, 201 for real-time tasks, 202 for offline tasks
     * @param string $ProjectId Project ID
     * @param integer $DeleteKFFlag Whether to delete development state tasks. By default, development state is not deleted, 0 means do not delete, 1 means delete
     * @param string $Name Operation Name
     * @param array $TaskNames This batch operation involves tasks for auditing
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeleteKFFlag",$param) and $param["DeleteKFFlag"] !== null) {
            $this->DeleteKFFlag = $param["DeleteKFFlag"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskNames",$param) and $param["TaskNames"] !== null) {
            $this->TaskNames = $param["TaskNames"];
        }
    }
}
