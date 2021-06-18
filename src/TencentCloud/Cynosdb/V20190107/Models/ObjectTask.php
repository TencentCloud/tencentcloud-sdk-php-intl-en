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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task information
 *
 * @method integer getTaskId() Obtain Auto-Incrementing task ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(integer $TaskId) Set Auto-Incrementing task ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTaskType() Obtain Task type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTaskType(string $TaskType) Set Task type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTaskStatus() Obtain Task status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTaskStatus(string $TaskStatus) Set Task status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getObjectId() Obtain Task ID (cluster ID | instance group ID | instance ID)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setObjectId(string $ObjectId) Set Task ID (cluster ID | instance group ID | instance ID)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getObjectType() Obtain Task type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setObjectType(string $ObjectType) Set Task type
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ObjectTask extends AbstractModel
{
    /**
     * @var integer Auto-Incrementing task ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TaskType;

    /**
     * @var string Task status
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TaskStatus;

    /**
     * @var string Task ID (cluster ID | instance group ID | instance ID)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectId;

    /**
     * @var string Task type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectType;

    /**
     * @param integer $TaskId Auto-Incrementing task ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TaskType Task type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TaskStatus Task status
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ObjectId Task ID (cluster ID | instance group ID | instance ID)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ObjectType Task type
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }
    }
}
