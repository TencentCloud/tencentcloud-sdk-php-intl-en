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
 * DescribeIntegrationNode request structure.
 *
 * @method string getId() Obtain Node ID
 * @method void setId(string $Id) Set Node ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getTaskType() Obtain Task Type, 201 for Real-time Task, 202 for Offline Task
 * @method void setTaskType(integer $TaskType) Set Task Type, 201 for Real-time Task, 202 for Offline Task
 */
class DescribeIntegrationNodeRequest extends AbstractModel
{
    /**
     * @var string Node ID
     */
    public $Id;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Task Type, 201 for Real-time Task, 202 for Offline Task
     */
    public $TaskType;

    /**
     * @param string $Id Node ID
     * @param string $ProjectId Project ID
     * @param integer $TaskType Task Type, 201 for Real-time Task, 202 for Offline Task
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
