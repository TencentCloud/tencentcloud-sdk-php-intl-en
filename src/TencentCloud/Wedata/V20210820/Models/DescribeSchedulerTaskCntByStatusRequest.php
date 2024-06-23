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
 * DescribeSchedulerTaskCntByStatus request structure.
 *
 * @method integer getTaskType() Obtain 1
 * @method void setTaskType(integer $TaskType) Set 1
 * @method string getTypeName() Obtain Y
 * @method void setTypeName(string $TypeName) Set Y
 * @method string getProjectId() Obtain 111
 * @method void setProjectId(string $ProjectId) Set 111
 * @method string getInCharge() Obtain 1
 * @method void setInCharge(string $InCharge) Set 1
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 */
class DescribeSchedulerTaskCntByStatusRequest extends AbstractModel
{
    /**
     * @var integer 1
     */
    public $TaskType;

    /**
     * @var string Y
     */
    public $TypeName;

    /**
     * @var string 111
     */
    public $ProjectId;

    /**
     * @var string 1
     */
    public $InCharge;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @param integer $TaskType 1
     * @param string $TypeName Y
     * @param string $ProjectId 111
     * @param string $InCharge 1
     * @param string $WorkflowId Workflow ID
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }
    }
}
