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
 * DeleteTaskDs request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method boolean getDeleteScript() Obtain Delete script?
true: delete
false: do not delete
Default false if not passed
 * @method void setDeleteScript(boolean $DeleteScript) Set Delete script?
true: delete
false: do not delete
Default false if not passed
 * @method boolean getOperateInform() Obtain Task operation: Notify downstream task owners?
true: notify
false: do not notify
Default false if not passed
 * @method void setOperateInform(boolean $OperateInform) Set Task operation: Notify downstream task owners?
true: notify
false: do not notify
Default false if not passed
 * @method string getTaskId() Obtain Task IDChoose either VirtualTaskId or
 * @method void setTaskId(string $TaskId) Set Task IDChoose either VirtualTaskId or
 * @method string getVirtualTaskId() Obtain Virtual task id
Either TaskId or this field is optional

 * @method void setVirtualTaskId(string $VirtualTaskId) Set Virtual task id
Either TaskId or this field is optional

 * @method boolean getVirtualFlag() Obtain Virtual task flag
true: It is a virtual task
false: It is not a virtual task
Default false if not passed
 * @method void setVirtualFlag(boolean $VirtualFlag) Set Virtual task flag
true: It is a virtual task
false: It is not a virtual task
Default false if not passed
 * @method boolean getDeleteMode() Obtain Task deletion method
true: Do not force fail downstream task instances
false: Force fail downstream task instances
If not specified, the default is false

 * @method void setDeleteMode(boolean $DeleteMode) Set Task deletion method
true: Do not force fail downstream task instances
false: Force fail downstream task instances
If not specified, the default is false
 */
class DeleteTaskDsRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var boolean Delete script?
true: delete
false: do not delete
Default false if not passed
     */
    public $DeleteScript;

    /**
     * @var boolean Task operation: Notify downstream task owners?
true: notify
false: do not notify
Default false if not passed
     */
    public $OperateInform;

    /**
     * @var string Task IDChoose either VirtualTaskId or
     */
    public $TaskId;

    /**
     * @var string Virtual task id
Either TaskId or this field is optional

     */
    public $VirtualTaskId;

    /**
     * @var boolean Virtual task flag
true: It is a virtual task
false: It is not a virtual task
Default false if not passed
     */
    public $VirtualFlag;

    /**
     * @var boolean Task deletion method
true: Do not force fail downstream task instances
false: Force fail downstream task instances
If not specified, the default is false

     */
    public $DeleteMode;

    /**
     * @param string $ProjectId Project ID
     * @param boolean $DeleteScript Delete script?
true: delete
false: do not delete
Default false if not passed
     * @param boolean $OperateInform Task operation: Notify downstream task owners?
true: notify
false: do not notify
Default false if not passed
     * @param string $TaskId Task IDChoose either VirtualTaskId or
     * @param string $VirtualTaskId Virtual task id
Either TaskId or this field is optional

     * @param boolean $VirtualFlag Virtual task flag
true: It is a virtual task
false: It is not a virtual task
Default false if not passed
     * @param boolean $DeleteMode Task deletion method
true: Do not force fail downstream task instances
false: Force fail downstream task instances
If not specified, the default is false
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

        if (array_key_exists("DeleteScript",$param) and $param["DeleteScript"] !== null) {
            $this->DeleteScript = $param["DeleteScript"];
        }

        if (array_key_exists("OperateInform",$param) and $param["OperateInform"] !== null) {
            $this->OperateInform = $param["OperateInform"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VirtualTaskId",$param) and $param["VirtualTaskId"] !== null) {
            $this->VirtualTaskId = $param["VirtualTaskId"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }
    }
}
