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
 * Workflow basic info (for output parameters, including system-generated fields and owner display information)
 *
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getCreateUserUin() Obtain Creator UIN
 * @method void setCreateUserUin(string $CreateUserUin) Set Creator UIN
 * @method string getRunUserUin() Obtain UIN of the person who runs the workflow
 * @method void setRunUserUin(string $RunUserUin) Set UIN of the person who runs the workflow
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getOwnerUserName() Obtain Workflow owner userName
 * @method void setOwnerUserName(string $OwnerUserName) Set Workflow owner userName
 * @method string getOwnerUserUin() Obtain Workflow owner UIN
 * @method void setOwnerUserUin(string $OwnerUserUin) Set Workflow owner UIN
 * @method string getOwnerDisplayName() Obtain Display name of the workflow owner
 * @method void setOwnerDisplayName(string $OwnerDisplayName) Set Display name of the workflow owner
 * @method string getCreateTime() Obtain Creation time. Unit: millisecond timestamp
 * @method void setCreateTime(string $CreateTime) Set Creation time. Unit: millisecond timestamp
 * @method string getUpdateTime() Obtain Last update time. Unit: timestamp in milliseconds
 * @method void setUpdateTime(string $UpdateTime) Set Last update time. Unit: timestamp in milliseconds
 */
class WorkflowBaseInfoDetail extends AbstractModel
{
    /**
     * @var string Workflow name.
     */
    public $WorkflowName;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Creator UIN
     */
    public $CreateUserUin;

    /**
     * @var string UIN of the person who runs the workflow
     */
    public $RunUserUin;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Workflow owner userName
     */
    public $OwnerUserName;

    /**
     * @var string Workflow owner UIN
     */
    public $OwnerUserUin;

    /**
     * @var string Display name of the workflow owner
     */
    public $OwnerDisplayName;

    /**
     * @var string Creation time. Unit: millisecond timestamp
     */
    public $CreateTime;

    /**
     * @var string Last update time. Unit: timestamp in milliseconds
     */
    public $UpdateTime;

    /**
     * @param string $WorkflowName Workflow name.
     * @param string $WorkflowId Workflow ID
     * @param string $CreateUserUin Creator UIN
     * @param string $RunUserUin UIN of the person who runs the workflow
     * @param string $Description Description
     * @param string $OwnerUserName Workflow owner userName
     * @param string $OwnerUserUin Workflow owner UIN
     * @param string $OwnerDisplayName Display name of the workflow owner
     * @param string $CreateTime Creation time. Unit: millisecond timestamp
     * @param string $UpdateTime Last update time. Unit: timestamp in milliseconds
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

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("RunUserUin",$param) and $param["RunUserUin"] !== null) {
            $this->RunUserUin = $param["RunUserUin"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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
    }
}
