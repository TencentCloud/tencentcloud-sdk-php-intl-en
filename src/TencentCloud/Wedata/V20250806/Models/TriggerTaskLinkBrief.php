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
 * Task link summary information.
 *
 * @method string getLinkId() Obtain Connection ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLinkId(string $LinkId) Set Connection ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowId() Obtain Workflow ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowVersionId() Obtain Workflow version ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowVersionId(string $WorkflowVersionId) Set Workflow version ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpstreamTaskId() Obtain Upstream task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpstreamTaskId(string $UpstreamTaskId) Set Upstream task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDownstreamTaskId() Obtain Downstream task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDownstreamTaskId(string $DownstreamTaskId) Set Downstream task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TriggerTaskLinkBrief extends AbstractModel
{
    /**
     * @var string Connection ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LinkId;

    /**
     * @var string Workflow ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Workflow version ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowVersionId;

    /**
     * @var string Upstream task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpstreamTaskId;

    /**
     * @var string Downstream task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DownstreamTaskId;

    /**
     * @param string $LinkId Connection ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowId Workflow ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowVersionId Workflow version ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpstreamTaskId Upstream task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DownstreamTaskId Downstream task ID.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("LinkId",$param) and $param["LinkId"] !== null) {
            $this->LinkId = $param["LinkId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowVersionId",$param) and $param["WorkflowVersionId"] !== null) {
            $this->WorkflowVersionId = $param["WorkflowVersionId"];
        }

        if (array_key_exists("UpstreamTaskId",$param) and $param["UpstreamTaskId"] !== null) {
            $this->UpstreamTaskId = $param["UpstreamTaskId"];
        }

        if (array_key_exists("DownstreamTaskId",$param) and $param["DownstreamTaskId"] !== null) {
            $this->DownstreamTaskId = $param["DownstreamTaskId"];
        }
    }
}
