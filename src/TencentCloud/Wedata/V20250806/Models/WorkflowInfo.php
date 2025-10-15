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
 * Retrieves workflow list information item.
 *
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method string getWorkflowName() Obtain Workflow name.

 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.

 * @method string getWorkflowType() Obtain Workflow type: cycle or manual.

 * @method void setWorkflowType(string $WorkflowType) Set Workflow type: cycle or manual.

 * @method string getOwnerUin() Obtain Owner ID


 * @method void setOwnerUin(string $OwnerUin) Set Owner ID


 * @method string getCreateTime() Obtain Creation time.

 * @method void setCreateTime(string $CreateTime) Set Creation time.

 * @method string getModifyTime() Obtain Last Modification Time

 * @method void setModifyTime(string $ModifyTime) Set Last Modification Time

 * @method string getUpdateUserUin() Obtain Last updated user ID.

 * @method void setUpdateUserUin(string $UpdateUserUin) Set Last updated user ID.

 * @method string getWorkflowDesc() Obtain Workflow description.

 * @method void setWorkflowDesc(string $WorkflowDesc) Set Workflow description.

 * @method string getCreateUserUin() Obtain Creator ID.

 * @method void setCreateUserUin(string $CreateUserUin) Set Creator ID.
 */
class WorkflowInfo extends AbstractModel
{
    /**
     * @var string Workflow ID.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.

     */
    public $WorkflowName;

    /**
     * @var string Workflow type: cycle or manual.

     */
    public $WorkflowType;

    /**
     * @var string Owner ID


     */
    public $OwnerUin;

    /**
     * @var string Creation time.

     */
    public $CreateTime;

    /**
     * @var string Last Modification Time

     */
    public $ModifyTime;

    /**
     * @var string Last updated user ID.

     */
    public $UpdateUserUin;

    /**
     * @var string Workflow description.

     */
    public $WorkflowDesc;

    /**
     * @var string Creator ID.

     */
    public $CreateUserUin;

    /**
     * @param string $WorkflowId Workflow ID.
     * @param string $WorkflowName Workflow name.

     * @param string $WorkflowType Workflow type: cycle or manual.

     * @param string $OwnerUin Owner ID


     * @param string $CreateTime Creation time.

     * @param string $ModifyTime Last Modification Time

     * @param string $UpdateUserUin Last updated user ID.

     * @param string $WorkflowDesc Workflow description.

     * @param string $CreateUserUin Creator ID.
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }
    }
}
