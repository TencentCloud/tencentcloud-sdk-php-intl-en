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
 * Workflow running instance metadata
 *
 * @method string getQuery() Obtain User input.
 * @method void setQuery(string $Query) Set User input.
 * @method string getMainModelName() Obtain Name of the main model
 * @method void setMainModelName(string $MainModelName) Set Name of the main model
 * @method array getCustomVariableList() Obtain API parameter configuration
 * @method void setCustomVariableList(array $CustomVariableList) Set API parameter configuration
 * @method string getWorkflowGraph() Obtain Flowchart of the workflow
 * @method void setWorkflowGraph(string $WorkflowGraph) Set Flowchart of the workflow
 */
class WorkflowRunMetadata extends AbstractModel
{
    /**
     * @var string User input.
     */
    public $Query;

    /**
     * @var string Name of the main model
     */
    public $MainModelName;

    /**
     * @var array API parameter configuration
     */
    public $CustomVariableList;

    /**
     * @var string Flowchart of the workflow
     */
    public $WorkflowGraph;

    /**
     * @param string $Query User input.
     * @param string $MainModelName Name of the main model
     * @param array $CustomVariableList API parameter configuration
     * @param string $WorkflowGraph Flowchart of the workflow
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("MainModelName",$param) and $param["MainModelName"] !== null) {
            $this->MainModelName = $param["MainModelName"];
        }

        if (array_key_exists("CustomVariableList",$param) and $param["CustomVariableList"] !== null) {
            $this->CustomVariableList = [];
            foreach ($param["CustomVariableList"] as $key => $value){
                $obj = new CustomVariable();
                $obj->deserialize($value);
                array_push($this->CustomVariableList, $obj);
            }
        }

        if (array_key_exists("WorkflowGraph",$param) and $param["WorkflowGraph"] !== null) {
            $this->WorkflowGraph = $param["WorkflowGraph"];
        }
    }
}
