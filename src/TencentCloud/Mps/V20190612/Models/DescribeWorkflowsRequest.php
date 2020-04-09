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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkflows request structure.
 *
 * @method array getWorkflowIds() Obtain Workflow ID filter. Array length limit: 100.
 * @method void setWorkflowIds(array $WorkflowIds) Set Workflow ID filter. Array length limit: 100.
 * @method string getStatus() Obtain Workflow status. Valid values:
<li>Enabled: Enabled,</li>
<li>Disabled: Disabled.</li>
If this parameter is left empty, the workflow status will not be distinguished.
 * @method void setStatus(string $Status) Set Workflow status. Valid values:
<li>Enabled: Enabled,</li>
<li>Disabled: Disabled.</li>
If this parameter is left empty, the workflow status will not be distinguished.
 * @method integer getOffset() Obtain Paging offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Paging offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 10. Maximum value: 100.
 */
class DescribeWorkflowsRequest extends AbstractModel
{
    /**
     * @var array Workflow ID filter. Array length limit: 100.
     */
    public $WorkflowIds;

    /**
     * @var string Workflow status. Valid values:
<li>Enabled: Enabled,</li>
<li>Disabled: Disabled.</li>
If this parameter is left empty, the workflow status will not be distinguished.
     */
    public $Status;

    /**
     * @var integer Paging offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param array $WorkflowIds Workflow ID filter. Array length limit: 100.
     * @param string $Status Workflow status. Valid values:
<li>Enabled: Enabled,</li>
<li>Disabled: Disabled.</li>
If this parameter is left empty, the workflow status will not be distinguished.
     * @param integer $Offset Paging offset. Default value: 0.
     * @param integer $Limit Number of returned entries. Default value: 10. Maximum value: 100.
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
