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
 * ResumeWorkflowRun request structure.
 *
 * @method string getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(string $AppId) Set <p>Application ID.</p>
 * @method string getWorkflowRunId() Obtain <p>Workflow operation instance ID</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) Set <p>Workflow operation instance ID</p>
 * @method string getQuery() Obtain <p>User input</p>
 * @method void setQuery(string $Query) Set <p>User input</p>
 * @method array getFileList() Obtain <p>File information</p>
 * @method void setFileList(array $FileList) Set <p>File information</p>
 */
class ResumeWorkflowRunRequest extends AbstractModel
{
    /**
     * @var string <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var string <p>Workflow operation instance ID</p>
     */
    public $WorkflowRunId;

    /**
     * @var string <p>User input</p>
     */
    public $Query;

    /**
     * @var array <p>File information</p>
     */
    public $FileList;

    /**
     * @param string $AppId <p>Application ID.</p>
     * @param string $WorkflowRunId <p>Workflow operation instance ID</p>
     * @param string $Query <p>User input</p>
     * @param array $FileList <p>File information</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("FileList",$param) and $param["FileList"] !== null) {
            $this->FileList = [];
            foreach ($param["FileList"] as $key => $value){
                $obj = new ConversationFileInfo();
                $obj->deserialize($value);
                array_push($this->FileList, $obj);
            }
        }
    }
}
