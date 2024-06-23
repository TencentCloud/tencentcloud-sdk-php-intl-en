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
 * DescribeDependOpsTasks request structure.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method integer getDeep() Obtain Upstream/Downstream Levels 1-6
 * @method void setDeep(integer $Deep) Set Upstream/Downstream Levels 1-6
 * @method integer getUp() Obtain 1: Indicates querying upstream nodes; 0: Indicates querying downstream nodes; 2: Indicates querying both upstream and downstream nodes
 * @method void setUp(integer $Up) Set 1: Indicates querying upstream nodes; 0: Indicates querying downstream nodes; 2: Indicates querying both upstream and downstream nodes
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getWorkflowId() Obtain Task Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Task Workflow ID
 */
class DescribeDependOpsTasksRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var integer Upstream/Downstream Levels 1-6
     */
    public $Deep;

    /**
     * @var integer 1: Indicates querying upstream nodes; 0: Indicates querying downstream nodes; 2: Indicates querying both upstream and downstream nodes
     */
    public $Up;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Task Workflow ID
     */
    public $WorkflowId;

    /**
     * @param string $TaskId Task ID
     * @param integer $Deep Upstream/Downstream Levels 1-6
     * @param integer $Up 1: Indicates querying upstream nodes; 0: Indicates querying downstream nodes; 2: Indicates querying both upstream and downstream nodes
     * @param string $ProjectId Project ID
     * @param string $WorkflowId Task Workflow ID
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

        if (array_key_exists("Deep",$param) and $param["Deep"] !== null) {
            $this->Deep = $param["Deep"];
        }

        if (array_key_exists("Up",$param) and $param["Up"] !== null) {
            $this->Up = $param["Up"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }
    }
}
