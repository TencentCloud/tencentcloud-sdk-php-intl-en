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
 * Updates the basic attribute information of the task.
 *
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method string getOwnerUin() Obtain Task owner ID.
 * @method void setOwnerUin(string $OwnerUin) Set Task owner ID.
 * @method string getTaskDescription() Obtain Task description
 * @method void setTaskDescription(string $TaskDescription) Set Task description
 */
class UpdateTaskBaseAttribute extends AbstractModel
{
    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var string Task owner ID.
     */
    public $OwnerUin;

    /**
     * @var string Task description
     */
    public $TaskDescription;

    /**
     * @param string $TaskName Task name.
     * @param string $OwnerUin Task owner ID.
     * @param string $TaskDescription Task description
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

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }
    }
}
