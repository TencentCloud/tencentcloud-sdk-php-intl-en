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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method ConversationAppArtifact getApp() Obtain 
 * @method void setApp(ConversationAppArtifact $App) Set 
 * @method integer getType() Obtain 
 * @method void setType(integer $Type) Set 
 * @method ConversationWorkflowArtifact getWorkflow() Obtain 
 * @method void setWorkflow(ConversationWorkflowArtifact $Workflow) Set 
 */
class ConversationResourceArtifact extends AbstractModel
{
    /**
     * @var ConversationAppArtifact 
     */
    public $App;

    /**
     * @var integer 
     */
    public $Type;

    /**
     * @var ConversationWorkflowArtifact 
     */
    public $Workflow;

    /**
     * @param ConversationAppArtifact $App 
     * @param integer $Type 
     * @param ConversationWorkflowArtifact $Workflow 
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
        if (array_key_exists("App",$param) and $param["App"] !== null) {
            $this->App = new ConversationAppArtifact();
            $this->App->deserialize($param["App"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Workflow",$param) and $param["Workflow"] !== null) {
            $this->Workflow = new ConversationWorkflowArtifact();
            $this->Workflow->deserialize($param["Workflow"]);
        }
    }
}
