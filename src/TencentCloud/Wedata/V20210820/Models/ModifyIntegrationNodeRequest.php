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
 * ModifyIntegrationNode request structure.
 *
 * @method IntegrationNodeInfo getNodeInfo() Obtain Integrated Node Information
 * @method void setNodeInfo(IntegrationNodeInfo $NodeInfo) Set Integrated Node Information
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getTaskType() Obtain Task Type "201. stream, 202. offline"
 * @method void setTaskType(integer $TaskType) Set Task Type "201. stream, 202. offline"
 * @method integer getTaskMode() Obtain Distinguish Canvas Mode and Form "1. Canvas, 2. Form" mode
 * @method void setTaskMode(integer $TaskMode) Set Distinguish Canvas Mode and Form "1. Canvas, 2. Form" mode
 */
class ModifyIntegrationNodeRequest extends AbstractModel
{
    /**
     * @var IntegrationNodeInfo Integrated Node Information
     */
    public $NodeInfo;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Task Type "201. stream, 202. offline"
     */
    public $TaskType;

    /**
     * @var integer Distinguish Canvas Mode and Form "1. Canvas, 2. Form" mode
     */
    public $TaskMode;

    /**
     * @param IntegrationNodeInfo $NodeInfo Integrated Node Information
     * @param string $ProjectId Project ID
     * @param integer $TaskType Task Type "201. stream, 202. offline"
     * @param integer $TaskMode Distinguish Canvas Mode and Form "1. Canvas, 2. Form" mode
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
        if (array_key_exists("NodeInfo",$param) and $param["NodeInfo"] !== null) {
            $this->NodeInfo = new IntegrationNodeInfo();
            $this->NodeInfo->deserialize($param["NodeInfo"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }
    }
}
