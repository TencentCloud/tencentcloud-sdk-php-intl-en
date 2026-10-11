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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workflow list item
 *
 * @method string getWorkflowName() Obtain <p>Workflow name</p>
 * @method void setWorkflowName(string $WorkflowName) Set <p>Workflow name</p>
 * @method string getWorkflowId() Obtain <p>Workflow ID</p>
 * @method void setWorkflowId(string $WorkflowId) Set <p>Workflow ID</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method string getCreateUserUin() Obtain <p>Creator UIN</p>
 * @method void setCreateUserUin(string $CreateUserUin) Set <p>Creator UIN</p>
 * @method string getOwnerUserName() Obtain <p>Workflow owner userName</p>
 * @method void setOwnerUserName(string $OwnerUserName) Set <p>Workflow owner userName</p>
 * @method string getOwnerUserUin() Obtain <p>Workflow owner UIN</p>
 * @method void setOwnerUserUin(string $OwnerUserUin) Set <p>Workflow owner UIN</p>
 * @method string getOwnerDisplayName() Obtain <p>Display name of the workflow owner</p>
 * @method void setOwnerDisplayName(string $OwnerDisplayName) Set <p>Display name of the workflow owner</p>
 * @method string getCreateTime() Obtain <p>Creation time. Unit: millisecond timestamp</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time. Unit: millisecond timestamp</p>
 * @method string getUpdateTime() Obtain <p>Last update time. Unit: timestamp in milliseconds</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last update time. Unit: timestamp in milliseconds</p>
 * @method array getLabelList() Obtain <p>Tag list.</p>
 * @method void setLabelList(array $LabelList) Set <p>Tag list.</p>
 * @method array getTrigger() Obtain <p>Workflow scheduling configuration.</p>
 * @method void setTrigger(array $Trigger) Set <p>Workflow scheduling configuration.</p>
 * @method string getRunUserUin() Obtain <p>Workflow runner UIN</p>
 * @method void setRunUserUin(string $RunUserUin) Set <p>Workflow runner UIN</p>
 * @method string getRunUserName() Obtain <p>Workflow runner userName</p>
 * @method void setRunUserName(string $RunUserName) Set <p>Workflow runner userName</p>
 * @method array getTaskList() Obtain <p>Workflow task node list</p>
 * @method void setTaskList(array $TaskList) Set <p>Workflow task node list</p>
 * @method array getWorkflowRunList() Obtain <p>Workflow running status list</p>
 * @method void setWorkflowRunList(array $WorkflowRunList) Set <p>Workflow running status list</p>
 * @method array getResourceGroupInfoList() Obtain <p>Resource group information list.</p>
 * @method void setResourceGroupInfoList(array $ResourceGroupInfoList) Set <p>Resource group information list.</p>
 * @method string getPermission() Obtain <p>Authorization permission type<br>PERMISSION_TYPE_UNSPECIFIED: unspecified permission<br>MANAGE: management permission, including all operation permissions<br>RUN: execution permission, executable entity<br>VIEW: view permission, viewable entity content</p>
 * @method void setPermission(string $Permission) Set <p>Authorization permission type<br>PERMISSION_TYPE_UNSPECIFIED: unspecified permission<br>MANAGE: management permission, including all operation permissions<br>RUN: execution permission, executable entity<br>VIEW: view permission, viewable entity content</p>
 * @method string getBundleId() Obtain <p>Unique ID of the Bundle bound to the workflow. Empty if not bound</p>
 * @method void setBundleId(string $BundleId) Set <p>Unique ID of the Bundle bound to the workflow. Empty if not bound</p>
 * @method string getBundleInfo() Obtain <p>Bundle information</p>
 * @method void setBundleInfo(string $BundleInfo) Set <p>Bundle information</p>
 * @method string getGitConfigId() Obtain <p>Git configuration ID.</p>
 * @method void setGitConfigId(string $GitConfigId) Set <p>Git configuration ID.</p>
 * @method string getGitBranch() Obtain <p>Git branch information.</p>
 * @method void setGitBranch(string $GitBranch) Set <p>Git branch information.</p>
 */
class WorkflowBrief extends AbstractModel
{
    /**
     * @var string <p>Workflow name</p>
     */
    public $WorkflowName;

    /**
     * @var string <p>Workflow ID</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var string <p>Creator UIN</p>
     */
    public $CreateUserUin;

    /**
     * @var string <p>Workflow owner userName</p>
     */
    public $OwnerUserName;

    /**
     * @var string <p>Workflow owner UIN</p>
     */
    public $OwnerUserUin;

    /**
     * @var string <p>Display name of the workflow owner</p>
     */
    public $OwnerDisplayName;

    /**
     * @var string <p>Creation time. Unit: millisecond timestamp</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last update time. Unit: timestamp in milliseconds</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>Tag list.</p>
     */
    public $LabelList;

    /**
     * @var array <p>Workflow scheduling configuration.</p>
     */
    public $Trigger;

    /**
     * @var string <p>Workflow runner UIN</p>
     */
    public $RunUserUin;

    /**
     * @var string <p>Workflow runner userName</p>
     */
    public $RunUserName;

    /**
     * @var array <p>Workflow task node list</p>
     */
    public $TaskList;

    /**
     * @var array <p>Workflow running status list</p>
     */
    public $WorkflowRunList;

    /**
     * @var array <p>Resource group information list.</p>
     */
    public $ResourceGroupInfoList;

    /**
     * @var string <p>Authorization permission type<br>PERMISSION_TYPE_UNSPECIFIED: unspecified permission<br>MANAGE: management permission, including all operation permissions<br>RUN: execution permission, executable entity<br>VIEW: view permission, viewable entity content</p>
     */
    public $Permission;

    /**
     * @var string <p>Unique ID of the Bundle bound to the workflow. Empty if not bound</p>
     */
    public $BundleId;

    /**
     * @var string <p>Bundle information</p>
     */
    public $BundleInfo;

    /**
     * @var string <p>Git configuration ID.</p>
     */
    public $GitConfigId;

    /**
     * @var string <p>Git branch information.</p>
     */
    public $GitBranch;

    /**
     * @param string $WorkflowName <p>Workflow name</p>
     * @param string $WorkflowId <p>Workflow ID</p>
     * @param string $Description <p>Description.</p>
     * @param string $CreateUserUin <p>Creator UIN</p>
     * @param string $OwnerUserName <p>Workflow owner userName</p>
     * @param string $OwnerUserUin <p>Workflow owner UIN</p>
     * @param string $OwnerDisplayName <p>Display name of the workflow owner</p>
     * @param string $CreateTime <p>Creation time. Unit: millisecond timestamp</p>
     * @param string $UpdateTime <p>Last update time. Unit: timestamp in milliseconds</p>
     * @param array $LabelList <p>Tag list.</p>
     * @param array $Trigger <p>Workflow scheduling configuration.</p>
     * @param string $RunUserUin <p>Workflow runner UIN</p>
     * @param string $RunUserName <p>Workflow runner userName</p>
     * @param array $TaskList <p>Workflow task node list</p>
     * @param array $WorkflowRunList <p>Workflow running status list</p>
     * @param array $ResourceGroupInfoList <p>Resource group information list.</p>
     * @param string $Permission <p>Authorization permission type<br>PERMISSION_TYPE_UNSPECIFIED: unspecified permission<br>MANAGE: management permission, including all operation permissions<br>RUN: execution permission, executable entity<br>VIEW: view permission, viewable entity content</p>
     * @param string $BundleId <p>Unique ID of the Bundle bound to the workflow. Empty if not bound</p>
     * @param string $BundleInfo <p>Bundle information</p>
     * @param string $GitConfigId <p>Git configuration ID.</p>
     * @param string $GitBranch <p>Git branch information.</p>
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
        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("OwnerUserName",$param) and $param["OwnerUserName"] !== null) {
            $this->OwnerUserName = $param["OwnerUserName"];
        }

        if (array_key_exists("OwnerUserUin",$param) and $param["OwnerUserUin"] !== null) {
            $this->OwnerUserUin = $param["OwnerUserUin"];
        }

        if (array_key_exists("OwnerDisplayName",$param) and $param["OwnerDisplayName"] !== null) {
            $this->OwnerDisplayName = $param["OwnerDisplayName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LabelList",$param) and $param["LabelList"] !== null) {
            $this->LabelList = [];
            foreach ($param["LabelList"] as $key => $value){
                $obj = new LabelBrief();
                $obj->deserialize($value);
                array_push($this->LabelList, $obj);
            }
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = [];
            foreach ($param["Trigger"] as $key => $value){
                $obj = new WorkflowTriggerConfiguration();
                $obj->deserialize($value);
                array_push($this->Trigger, $obj);
            }
        }

        if (array_key_exists("RunUserUin",$param) and $param["RunUserUin"] !== null) {
            $this->RunUserUin = $param["RunUserUin"];
        }

        if (array_key_exists("RunUserName",$param) and $param["RunUserName"] !== null) {
            $this->RunUserName = $param["RunUserName"];
        }

        if (array_key_exists("TaskList",$param) and $param["TaskList"] !== null) {
            $this->TaskList = [];
            foreach ($param["TaskList"] as $key => $value){
                $obj = new WorkflowTaskNodeBrief();
                $obj->deserialize($value);
                array_push($this->TaskList, $obj);
            }
        }

        if (array_key_exists("WorkflowRunList",$param) and $param["WorkflowRunList"] !== null) {
            $this->WorkflowRunList = [];
            foreach ($param["WorkflowRunList"] as $key => $value){
                $obj = new WorkflowRunBrief();
                $obj->deserialize($value);
                array_push($this->WorkflowRunList, $obj);
            }
        }

        if (array_key_exists("ResourceGroupInfoList",$param) and $param["ResourceGroupInfoList"] !== null) {
            $this->ResourceGroupInfoList = [];
            foreach ($param["ResourceGroupInfoList"] as $key => $value){
                $obj = new ResourceGroupInfo();
                $obj->deserialize($value);
                array_push($this->ResourceGroupInfoList, $obj);
            }
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("GitConfigId",$param) and $param["GitConfigId"] !== null) {
            $this->GitConfigId = $param["GitConfigId"];
        }

        if (array_key_exists("GitBranch",$param) and $param["GitBranch"] !== null) {
            $this->GitBranch = $param["GitBranch"];
        }
    }
}
