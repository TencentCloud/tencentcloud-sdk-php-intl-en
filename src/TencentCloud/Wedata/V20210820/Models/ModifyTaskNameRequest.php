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
 * ModifyTaskName request structure.
 *
 * @method string getTaskName() Obtain Name
 * @method void setTaskName(string $TaskName) Set Name
 * @method string getTaskId() Obtain id
 * @method void setTaskId(string $TaskId) Set id
 * @method string getProjectId() Obtain Project/workspace ID
 * @method void setProjectId(string $ProjectId) Set Project/workspace ID
 * @method string getNotes() Obtain Remarks
 * @method void setNotes(string $Notes) Set Remarks
 */
class ModifyTaskNameRequest extends AbstractModel
{
    /**
     * @var string Name
     */
    public $TaskName;

    /**
     * @var string id
     */
    public $TaskId;

    /**
     * @var string Project/workspace ID
     */
    public $ProjectId;

    /**
     * @var string Remarks
     */
    public $Notes;

    /**
     * @param string $TaskName Name
     * @param string $TaskId id
     * @param string $ProjectId Project/workspace ID
     * @param string $Notes Remarks
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }
    }
}
