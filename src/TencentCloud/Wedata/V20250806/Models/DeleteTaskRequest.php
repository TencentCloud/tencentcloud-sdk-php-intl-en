<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTask request structure.
 *
 * @method string getProjectId() Obtain Project ID.

 * @method void setProjectId(string $ProjectId) Set Project ID.

 * @method string getTaskId() Obtain Either Task ID or VirtualTaskId must be provided (optional, choose one).
 * @method void setTaskId(string $TaskId) Set Either Task ID or VirtualTaskId must be provided (optional, choose one).
 * @method boolean getOperateInform() Obtain Whether to send a notification to downstream task owners when performing task operations.
true: Send notification
false: Do not send notification
default: false.
 * @method void setOperateInform(boolean $OperateInform) Set Whether to send a notification to downstream task owners when performing task operations.
true: Send notification
false: Do not send notification
default: false.
 * @method boolean getDeleteMode() Obtain Task Deletion Mode.
true: Do not force downstream task instances to fail
false: Force downstream task instances to fail
default: false 

 * @method void setDeleteMode(boolean $DeleteMode) Set Task Deletion Mode.
true: Do not force downstream task instances to fail
false: Force downstream task instances to fail
default: false 
 */
class DeleteTaskRequest extends AbstractModel
{
    /**
     * @var string Project ID.

     */
    public $ProjectId;

    /**
     * @var string Either Task ID or VirtualTaskId must be provided (optional, choose one).
     */
    public $TaskId;

    /**
     * @var boolean Whether to send a notification to downstream task owners when performing task operations.
true: Send notification
false: Do not send notification
default: false.
     */
    public $OperateInform;

    /**
     * @var boolean Task Deletion Mode.
true: Do not force downstream task instances to fail
false: Force downstream task instances to fail
default: false 

     */
    public $DeleteMode;

    /**
     * @param string $ProjectId Project ID.

     * @param string $TaskId Either Task ID or VirtualTaskId must be provided (optional, choose one).
     * @param boolean $OperateInform Whether to send a notification to downstream task owners when performing task operations.
true: Send notification
false: Do not send notification
default: false.
     * @param boolean $DeleteMode Task Deletion Mode.
true: Do not force downstream task instances to fail
false: Force downstream task instances to fail
default: false 
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("OperateInform",$param) and $param["OperateInform"] !== null) {
            $this->OperateInform = $param["OperateInform"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }
    }
}
