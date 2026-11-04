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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information of node operation
 *
 * @method string getNodeRunId() Obtain ID of the node operation
 * @method void setNodeRunId(string $NodeRunId) Set ID of the node operation
 * @method string getNodeId() Obtain Node ID.
 * @method void setNodeId(string $NodeId) Set Node ID.
 * @method string getWorkflowRunId() Obtain ID of the workflow running instance
 * @method void setWorkflowRunId(string $WorkflowRunId) Set ID of the workflow running instance
 * @method string getNodeName() Obtain Node name.
 * @method void setNodeName(string $NodeName) Set Node name.
 * @method integer getNodeType() Obtain Node type.
1: Start node
2: Parameter extraction node
3: Large model node
4: Knowledge Q&A node
5: Knowledge retrieval node
6: Tag extraction node
7: Code execution node
8: Tool node
9: Logic judgment node
10: Reply node
11: Tab node
12: Loop node
13: Intent recognition node
14: Workflow node
15: Plug-in node
16: End node
17: Variable aggregate node data
18: Batch processing node
19: Message Queue node
20: Database node
21: Variable assignment node data
22: Variable conversion node data
23: Agent node
24: Annotation node
25: File collection node
26: Text collection node
27: Widget node
 * @method void setNodeType(integer $NodeType) Set Node type.
1: Start node
2: Parameter extraction node
3: Large model node
4: Knowledge Q&A node
5: Knowledge retrieval node
6: Tag extraction node
7: Code execution node
8: Tool node
9: Logic judgment node
10: Reply node
11: Tab node
12: Loop node
13: Intent recognition node
14: Workflow node
15: Plug-in node
16: End node
17: Variable aggregate node data
18: Batch processing node
19: Message Queue node
20: Database node
21: Variable assignment node data
22: Variable conversion node data
23: Agent node
24: Annotation node
25: File collection node
26: Text collection node
27: Widget node
 * @method integer getStatus() Obtain Running state. 1: initial status; 2: running; 3: operation successful; 4: operation failure; 5: canceled
 * @method void setStatus(integer $Status) Set Running state. 1: initial status; 2: running; 3: operation successful; 4: operation failure; 5: canceled
 * @method string getFailMessage() Obtain Error message
 * @method void setFailMessage(string $FailMessage) Set Error message
 * @method integer getTotalCostMs() Obtain Total time consumed (ms)
 * @method void setTotalCostMs(integer $TotalCostMs) Set Total time consumed (ms)
 * @method integer getTotalTokens() Obtain Total number of tokens consumed
 * @method void setTotalTokens(integer $TotalTokens) Set Total number of tokens consumed
 * @method string getFailCode() Obtain Error code.
 * @method void setFailCode(string $FailCode) Set Error code.
 * @method array getBranchIndexList() Obtain List of branch indexes
 * @method void setBranchIndexList(array $BranchIndexList) Set List of branch indexes
 */
class NodeRun extends AbstractModel
{
    /**
     * @var string ID of the node operation
     */
    public $NodeRunId;

    /**
     * @var string Node ID.
     */
    public $NodeId;

    /**
     * @var string ID of the workflow running instance
     */
    public $WorkflowRunId;

    /**
     * @var string Node name.
     */
    public $NodeName;

    /**
     * @var integer Node type.
1: Start node
2: Parameter extraction node
3: Large model node
4: Knowledge Q&A node
5: Knowledge retrieval node
6: Tag extraction node
7: Code execution node
8: Tool node
9: Logic judgment node
10: Reply node
11: Tab node
12: Loop node
13: Intent recognition node
14: Workflow node
15: Plug-in node
16: End node
17: Variable aggregate node data
18: Batch processing node
19: Message Queue node
20: Database node
21: Variable assignment node data
22: Variable conversion node data
23: Agent node
24: Annotation node
25: File collection node
26: Text collection node
27: Widget node
     */
    public $NodeType;

    /**
     * @var integer Running state. 1: initial status; 2: running; 3: operation successful; 4: operation failure; 5: canceled
     */
    public $Status;

    /**
     * @var string Error message
     */
    public $FailMessage;

    /**
     * @var integer Total time consumed (ms)
     */
    public $TotalCostMs;

    /**
     * @var integer Total number of tokens consumed
     */
    public $TotalTokens;

    /**
     * @var string Error code.
     */
    public $FailCode;

    /**
     * @var array List of branch indexes
     */
    public $BranchIndexList;

    /**
     * @param string $NodeRunId ID of the node operation
     * @param string $NodeId Node ID.
     * @param string $WorkflowRunId ID of the workflow running instance
     * @param string $NodeName Node name.
     * @param integer $NodeType Node type.
1: Start node
2: Parameter extraction node
3: Large model node
4: Knowledge Q&A node
5: Knowledge retrieval node
6: Tag extraction node
7: Code execution node
8: Tool node
9: Logic judgment node
10: Reply node
11: Tab node
12: Loop node
13: Intent recognition node
14: Workflow node
15: Plug-in node
16: End node
17: Variable aggregate node data
18: Batch processing node
19: Message Queue node
20: Database node
21: Variable assignment node data
22: Variable conversion node data
23: Agent node
24: Annotation node
25: File collection node
26: Text collection node
27: Widget node
     * @param integer $Status Running state. 1: initial status; 2: running; 3: operation successful; 4: operation failure; 5: canceled
     * @param string $FailMessage Error message
     * @param integer $TotalCostMs Total time consumed (ms)
     * @param integer $TotalTokens Total number of tokens consumed
     * @param string $FailCode Error code.
     * @param array $BranchIndexList List of branch indexes
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
        if (array_key_exists("NodeRunId",$param) and $param["NodeRunId"] !== null) {
            $this->NodeRunId = $param["NodeRunId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }

        if (array_key_exists("TotalCostMs",$param) and $param["TotalCostMs"] !== null) {
            $this->TotalCostMs = $param["TotalCostMs"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }

        if (array_key_exists("FailCode",$param) and $param["FailCode"] !== null) {
            $this->FailCode = $param["FailCode"];
        }

        if (array_key_exists("BranchIndexList",$param) and $param["BranchIndexList"] !== null) {
            $this->BranchIndexList = $param["BranchIndexList"];
        }
    }
}
