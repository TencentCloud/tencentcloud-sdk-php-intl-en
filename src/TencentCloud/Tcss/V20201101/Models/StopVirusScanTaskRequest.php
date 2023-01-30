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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopVirusScanTask request structure.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method array getContainerIds() Obtain ID of the container to be stopped. If it is left empty, the entire task will be stopped.
 * @method void setContainerIds(array $ContainerIds) Set ID of the container to be stopped. If it is left empty, the entire task will be stopped.
 */
class StopVirusScanTaskRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var array ID of the container to be stopped. If it is left empty, the entire task will be stopped.
     */
    public $ContainerIds;

    /**
     * @param string $TaskId Task ID
     * @param array $ContainerIds ID of the container to be stopped. If it is left empty, the entire task will be stopped.
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

        if (array_key_exists("ContainerIds",$param) and $param["ContainerIds"] !== null) {
            $this->ContainerIds = $param["ContainerIds"];
        }
    }
}
