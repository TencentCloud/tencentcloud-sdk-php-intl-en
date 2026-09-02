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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task creation return item
 *
 * @method integer getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(integer $TaskId) Set <p>Task ID.</p>
 * @method string getTaskType() Obtain <p>Task type: HOST-host scan/CONTAINER-container scan</p>
 * @method void setTaskType(string $TaskType) Set <p>Task type: HOST-host scan/CONTAINER-container scan</p>
 * @method integer getAppId() Obtain <p>AppId of the account associated with the task</p>
 * @method void setAppId(integer $AppId) Set <p>AppId of the account associated with the task</p>
 */
class CreatedTaskItem extends AbstractModel
{
    /**
     * @var integer <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task type: HOST-host scan/CONTAINER-container scan</p>
     */
    public $TaskType;

    /**
     * @var integer <p>AppId of the account associated with the task</p>
     */
    public $AppId;

    /**
     * @param integer $TaskId <p>Task ID.</p>
     * @param string $TaskType <p>Task type: HOST-host scan/CONTAINER-container scan</p>
     * @param integer $AppId <p>AppId of the account associated with the task</p>
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
