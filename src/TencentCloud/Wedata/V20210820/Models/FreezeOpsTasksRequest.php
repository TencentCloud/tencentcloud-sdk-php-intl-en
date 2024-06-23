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
 * FreezeOpsTasks request structure.
 *
 * @method array getTasks() Obtain Task List
 * @method void setTasks(array $Tasks) Set Task List
 * @method boolean getOperateIsInform() Obtain Whether Task Operation Notifies Downstream Task Owners
 * @method void setOperateIsInform(boolean $OperateIsInform) Set Whether Task Operation Notifies Downstream Task Owners
 * @method boolean getKillInstance() Obtain Whether to terminate the generated instance
 * @method void setKillInstance(boolean $KillInstance) Set Whether to terminate the generated instance
 */
class FreezeOpsTasksRequest extends AbstractModel
{
    /**
     * @var array Task List
     */
    public $Tasks;

    /**
     * @var boolean Whether Task Operation Notifies Downstream Task Owners
     */
    public $OperateIsInform;

    /**
     * @var boolean Whether to terminate the generated instance
     */
    public $KillInstance;

    /**
     * @param array $Tasks Task List
     * @param boolean $OperateIsInform Whether Task Operation Notifies Downstream Task Owners
     * @param boolean $KillInstance Whether to terminate the generated instance
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
                $obj = new SimpleTaskInfo();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("OperateIsInform",$param) and $param["OperateIsInform"] !== null) {
            $this->OperateIsInform = $param["OperateIsInform"];
        }

        if (array_key_exists("KillInstance",$param) and $param["KillInstance"] !== null) {
            $this->KillInstance = $param["KillInstance"];
        }
    }
}
