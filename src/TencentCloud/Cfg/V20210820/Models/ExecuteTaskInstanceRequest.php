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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExecuteTaskInstance request structure.
 *
 * @method integer getTaskId() Obtain Task ID
 * @method void setTaskId(integer $TaskId) Set Task ID
 * @method integer getTaskActionId() Obtain Task action ID
 * @method void setTaskActionId(integer $TaskActionId) Set Task action ID
 * @method array getTaskInstanceIds() Obtain Task action instance ID
 * @method void setTaskInstanceIds(array $TaskInstanceIds) Set Task action instance ID
 * @method boolean getIsOperateAll() Obtain Whether to operate on the entire task
 * @method void setIsOperateAll(boolean $IsOperateAll) Set Whether to operate on the entire task
 * @method integer getActionType() Obtain Operation type (1: start; 2: execute; 3: skip; 5: retry)
 * @method void setActionType(integer $ActionType) Set Operation type (1: start; 2: execute; 3: skip; 5: retry)
 * @method integer getTaskGroupId() Obtain Action group ID
 * @method void setTaskGroupId(integer $TaskGroupId) Set Action group ID
 */
class ExecuteTaskInstanceRequest extends AbstractModel
{
    /**
     * @var integer Task ID
     */
    public $TaskId;

    /**
     * @var integer Task action ID
     */
    public $TaskActionId;

    /**
     * @var array Task action instance ID
     */
    public $TaskInstanceIds;

    /**
     * @var boolean Whether to operate on the entire task
     */
    public $IsOperateAll;

    /**
     * @var integer Operation type (1: start; 2: execute; 3: skip; 5: retry)
     */
    public $ActionType;

    /**
     * @var integer Action group ID
     */
    public $TaskGroupId;

    /**
     * @param integer $TaskId Task ID
     * @param integer $TaskActionId Task action ID
     * @param array $TaskInstanceIds Task action instance ID
     * @param boolean $IsOperateAll Whether to operate on the entire task
     * @param integer $ActionType Operation type (1: start; 2: execute; 3: skip; 5: retry)
     * @param integer $TaskGroupId Action group ID
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

        if (array_key_exists("TaskActionId",$param) and $param["TaskActionId"] !== null) {
            $this->TaskActionId = $param["TaskActionId"];
        }

        if (array_key_exists("TaskInstanceIds",$param) and $param["TaskInstanceIds"] !== null) {
            $this->TaskInstanceIds = $param["TaskInstanceIds"];
        }

        if (array_key_exists("IsOperateAll",$param) and $param["IsOperateAll"] !== null) {
            $this->IsOperateAll = $param["IsOperateAll"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("TaskGroupId",$param) and $param["TaskGroupId"] !== null) {
            $this->TaskGroupId = $param["TaskGroupId"];
        }
    }
}
