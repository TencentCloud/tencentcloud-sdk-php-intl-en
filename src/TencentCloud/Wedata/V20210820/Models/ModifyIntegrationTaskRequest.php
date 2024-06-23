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
 * ModifyIntegrationTask request structure.
 *
 * @method IntegrationTaskInfo getTaskInfo() Obtain Task Information
 * @method void setTaskInfo(IntegrationTaskInfo $TaskInfo) Set Task Information
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method boolean getRollbackFlag() Obtain Default is false. When true, it indicates rolling back to the node logic
 * @method void setRollbackFlag(boolean $RollbackFlag) Set Default is false. When true, it indicates rolling back to the node logic
 */
class ModifyIntegrationTaskRequest extends AbstractModel
{
    /**
     * @var IntegrationTaskInfo Task Information
     */
    public $TaskInfo;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var boolean Default is false. When true, it indicates rolling back to the node logic
     */
    public $RollbackFlag;

    /**
     * @param IntegrationTaskInfo $TaskInfo Task Information
     * @param string $ProjectId Project ID
     * @param boolean $RollbackFlag Default is false. When true, it indicates rolling back to the node logic
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
        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = new IntegrationTaskInfo();
            $this->TaskInfo->deserialize($param["TaskInfo"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RollbackFlag",$param) and $param["RollbackFlag"] !== null) {
            $this->RollbackFlag = $param["RollbackFlag"];
        }
    }
}
