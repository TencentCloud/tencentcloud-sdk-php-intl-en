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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRebuildIndexTasks request structure.
 *
 * @method string getTopicId() Obtain <p>Log topic ID.</p>
 * @method void setTopicId(string $TopicId) Set <p>Log topic ID.</p>
 * @method string getTaskId() Obtain <p>Index rebuild task ID</p>
 * @method void setTaskId(string $TaskId) Set <p>Index rebuild task ID</p>
 * @method string getStatus() Obtain <p>Index rebuild task status. Leave it blank to return the task list of all statuses. Multiple statuses are separated by commas.</p><p>Enumeration value:</p><ul><li>0: Reindexing task created</li><li>1: Creating reindexing resources</li><li>2: Index rebuild resource created</li><li>3: Rebuilding</li><li>4: Suspension</li><li>5: Rebuild complete</li><li>6: Rebuild successful (retrievable)</li><li>7: Rebuilding failed</li><li>8: Task cancellation</li><li>9: Metadata and index deleted</li></ul>
 * @method void setStatus(string $Status) Set <p>Index rebuild task status. Leave it blank to return the task list of all statuses. Multiple statuses are separated by commas.</p><p>Enumeration value:</p><ul><li>0: Reindexing task created</li><li>1: Creating reindexing resources</li><li>2: Index rebuild resource created</li><li>3: Rebuilding</li><li>4: Suspension</li><li>5: Rebuild complete</li><li>6: Rebuild successful (retrievable)</li><li>7: Rebuilding failed</li><li>8: Task cancellation</li><li>9: Metadata and index deleted</li></ul>
 * @method integer getOffset() Obtain <p>Pagination offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of entries per page. Default value: 10. Maximum value: 20.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of entries per page. Default value: 10. Maximum value: 20.</p>
 */
class DescribeRebuildIndexTasksRequest extends AbstractModel
{
    /**
     * @var string <p>Log topic ID.</p>
     */
    public $TopicId;

    /**
     * @var string <p>Index rebuild task ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>Index rebuild task status. Leave it blank to return the task list of all statuses. Multiple statuses are separated by commas.</p><p>Enumeration value:</p><ul><li>0: Reindexing task created</li><li>1: Creating reindexing resources</li><li>2: Index rebuild resource created</li><li>3: Rebuilding</li><li>4: Suspension</li><li>5: Rebuild complete</li><li>6: Rebuild successful (retrievable)</li><li>7: Rebuilding failed</li><li>8: Task cancellation</li><li>9: Metadata and index deleted</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Pagination offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of entries per page. Default value: 10. Maximum value: 20.</p>
     */
    public $Limit;

    /**
     * @param string $TopicId <p>Log topic ID.</p>
     * @param string $TaskId <p>Index rebuild task ID</p>
     * @param string $Status <p>Index rebuild task status. Leave it blank to return the task list of all statuses. Multiple statuses are separated by commas.</p><p>Enumeration value:</p><ul><li>0: Reindexing task created</li><li>1: Creating reindexing resources</li><li>2: Index rebuild resource created</li><li>3: Rebuilding</li><li>4: Suspension</li><li>5: Rebuild complete</li><li>6: Rebuild successful (retrievable)</li><li>7: Rebuilding failed</li><li>8: Task cancellation</li><li>9: Metadata and index deleted</li></ul>
     * @param integer $Offset <p>Pagination offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of entries per page. Default value: 10. Maximum value: 20.</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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
