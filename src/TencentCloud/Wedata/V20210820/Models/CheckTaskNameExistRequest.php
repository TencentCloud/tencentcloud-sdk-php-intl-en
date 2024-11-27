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
 * CheckTaskNameExist request structure.
 *
 * @method string getProjectId() Obtain Project ID/Workspace ID.
 * @method void setProjectId(string $ProjectId) Set Project ID/Workspace ID.
 * @method integer getTypeId() Obtain Task Type (consistent with scheduling parameters).
 * @method void setTypeId(integer $TypeId) Set Task Type (consistent with scheduling parameters).
 * @method string getTaskName() Obtain Task Name.
 * @method void setTaskName(string $TaskName) Set Task Name.
 */
class CheckTaskNameExistRequest extends AbstractModel
{
    /**
     * @var string Project ID/Workspace ID.
     */
    public $ProjectId;

    /**
     * @var integer Task Type (consistent with scheduling parameters).
     */
    public $TypeId;

    /**
     * @var string Task Name.
     */
    public $TaskName;

    /**
     * @param string $ProjectId Project ID/Workspace ID.
     * @param integer $TypeId Task Type (consistent with scheduling parameters).
     * @param string $TaskName Task Name.
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

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }
    }
}
