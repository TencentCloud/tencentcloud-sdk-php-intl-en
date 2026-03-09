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
 * DeleteTriggerTask request structure.
 *
 * @method string getProjectId() Obtain Project ID.

 * @method void setProjectId(string $ProjectId) Set Project ID.

 * @method string getTaskId() Obtain Task ID.
Specifies either VirtualTaskId or the other parameter.
 * @method void setTaskId(string $TaskId) Set Task ID.
Specifies either VirtualTaskId or the other parameter.
 * @method boolean getOperateInform() Obtain Whether task operation notifies downstream task owners. valid values: true (notify).
false: do not notify.
Default false if not passed.
 * @method void setOperateInform(boolean $OperateInform) Set Whether task operation notifies downstream task owners. valid values: true (notify).
false: do not notify.
Default false if not passed.
 * @method boolean getDeleteMode() Obtain This parameter does not take effect. currently, deleting an upstream task does not force failure on downstream task instances.
 * @method void setDeleteMode(boolean $DeleteMode) Set This parameter does not take effect. currently, deleting an upstream task does not force failure on downstream task instances.
 */
class DeleteTriggerTaskRequest extends AbstractModel
{
    /**
     * @var string Project ID.

     */
    public $ProjectId;

    /**
     * @var string Task ID.
Specifies either VirtualTaskId or the other parameter.
     */
    public $TaskId;

    /**
     * @var boolean Whether task operation notifies downstream task owners. valid values: true (notify).
false: do not notify.
Default false if not passed.
     */
    public $OperateInform;

    /**
     * @var boolean This parameter does not take effect. currently, deleting an upstream task does not force failure on downstream task instances.
     */
    public $DeleteMode;

    /**
     * @param string $ProjectId Project ID.

     * @param string $TaskId Task ID.
Specifies either VirtualTaskId or the other parameter.
     * @param boolean $OperateInform Whether task operation notifies downstream task owners. valid values: true (notify).
false: do not notify.
Default false if not passed.
     * @param boolean $DeleteMode This parameter does not take effect. currently, deleting an upstream task does not force failure on downstream task instances.
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
