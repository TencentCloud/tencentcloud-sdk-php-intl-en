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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The thinking process of Agent.
 *
 * @method string getSessionId() Obtain Session ID.
 * @method void setSessionId(string $SessionId) Set Session ID.
 * @method string getRequestId() Obtain Request ID
 * @method void setRequestId(string $RequestId) Set Request ID
 * @method string getRecordId() Obtain It corresponds to a session, session ID, used for message storage in answering. It can be generated in advance and used when saving messages.
 * @method void setRecordId(string $RecordId) Set It corresponds to a session, session ID, used for message storage in answering. It can be generated in advance and used when saving messages.
 * @method integer getElapsed() Obtain Current request execution time, in milliseconds.
 * @method void setElapsed(integer $Elapsed) Set Current request execution time, in milliseconds.
 * @method boolean getIsWorkflow() Obtain Whether it is a workflow currently.
 * @method void setIsWorkflow(boolean $IsWorkflow) Set Whether it is a workflow currently.
 * @method string getWorkflowName() Obtain If it is a workflow, workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set If it is a workflow, workflow name.
 * @method array getProcedures() Obtain Detailed thinking process.
 * @method void setProcedures(array $Procedures) Set Detailed thinking process.
 * @method string getTraceId() Obtain TraceId.
 * @method void setTraceId(string $TraceId) Set TraceId.
 * @method array getFiles() Obtain File information
 * @method void setFiles(array $Files) Set File information
 */
class AgentThought extends AbstractModel
{
    /**
     * @var string Session ID.
     */
    public $SessionId;

    /**
     * @var string Request ID
     */
    public $RequestId;

    /**
     * @var string It corresponds to a session, session ID, used for message storage in answering. It can be generated in advance and used when saving messages.
     */
    public $RecordId;

    /**
     * @var integer Current request execution time, in milliseconds.
     */
    public $Elapsed;

    /**
     * @var boolean Whether it is a workflow currently.
     */
    public $IsWorkflow;

    /**
     * @var string If it is a workflow, workflow name.
     */
    public $WorkflowName;

    /**
     * @var array Detailed thinking process.
     */
    public $Procedures;

    /**
     * @var string TraceId.
     */
    public $TraceId;

    /**
     * @var array File information
     */
    public $Files;

    /**
     * @param string $SessionId Session ID.
     * @param string $RequestId Request ID
     * @param string $RecordId It corresponds to a session, session ID, used for message storage in answering. It can be generated in advance and used when saving messages.
     * @param integer $Elapsed Current request execution time, in milliseconds.
     * @param boolean $IsWorkflow Whether it is a workflow currently.
     * @param string $WorkflowName If it is a workflow, workflow name.
     * @param array $Procedures Detailed thinking process.
     * @param string $TraceId TraceId.
     * @param array $Files File information
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Elapsed",$param) and $param["Elapsed"] !== null) {
            $this->Elapsed = $param["Elapsed"];
        }

        if (array_key_exists("IsWorkflow",$param) and $param["IsWorkflow"] !== null) {
            $this->IsWorkflow = $param["IsWorkflow"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Procedures",$param) and $param["Procedures"] !== null) {
            $this->Procedures = [];
            foreach ($param["Procedures"] as $key => $value){
                $obj = new AgentProcedure();
                $obj->deserialize($value);
                array_push($this->Procedures, $obj);
            }
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = [];
            foreach ($param["Files"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->Files, $obj);
            }
        }
    }
}
