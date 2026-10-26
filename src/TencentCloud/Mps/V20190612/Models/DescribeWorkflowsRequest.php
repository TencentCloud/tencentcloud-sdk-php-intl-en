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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkflows request structure.
 *
 * @method array getWorkflowIds() Obtain <p>Workflow ID filter condition, with an array length limit of 100.</p>
 * @method void setWorkflowIds(array $WorkflowIds) Set <p>Workflow ID filter condition, with an array length limit of 100.</p>
 * @method string getStatus() Obtain <p>Workflow status. Value range:</p><li>Enabled: on,</li><li>Disabled: off.</li>If this parameter is not specified, workflow status is not distinguished.
 * @method void setStatus(string $Status) Set <p>Workflow status. Value range:</p><li>Enabled: on,</li><li>Disabled: off.</li>If this parameter is not specified, workflow status is not distinguished.
 * @method integer getOffset() Obtain <p>Paging offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
 */
class DescribeWorkflowsRequest extends AbstractModel
{
    /**
     * @var array <p>Workflow ID filter condition, with an array length limit of 100.</p>
     */
    public $WorkflowIds;

    /**
     * @var string <p>Workflow status. Value range:</p><li>Enabled: on,</li><li>Disabled: off.</li>If this parameter is not specified, workflow status is not distinguished.
     */
    public $Status;

    /**
     * @var integer <p>Paging offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @param array $WorkflowIds <p>Workflow ID filter condition, with an array length limit of 100.</p>
     * @param string $Status <p>Workflow status. Value range:</p><li>Enabled: on,</li><li>Disabled: off.</li>If this parameter is not specified, workflow status is not distinguished.
     * @param integer $Offset <p>Paging offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of returned entries. Default value: 10. Maximum value: 100.</p>
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
        if (array_key_exists("WorkflowIds",$param) and $param["WorkflowIds"] !== null) {
            $this->WorkflowIds = $param["WorkflowIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
