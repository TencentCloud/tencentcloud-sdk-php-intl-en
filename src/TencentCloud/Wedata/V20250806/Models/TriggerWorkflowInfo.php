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
 * Retrieve workflow list information.
 *
 * @method string getWorkflowId() Obtain Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowName() Obtain Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwnerUin() Obtain Person in Charge ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUin(string $OwnerUin) Set Person in Charge ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Last Modification Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Last Modification Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateUserUin() Obtain Last updated by user ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateUserUin(string $UpdateUserUin) Set Last updated by user ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowDesc() Obtain Workflow description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowDesc(string $WorkflowDesc) Set Workflow description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUserUin() Obtain Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUserUin(string $CreateUserUin) Set Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TriggerWorkflowInfo extends AbstractModel
{
    /**
     * @var string Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowName;

    /**
     * @var string Person in Charge ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUin;

    /**
     * @var string Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last Modification Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string Last updated by user ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateUserUin;

    /**
     * @var string Workflow description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowDesc;

    /**
     * @var string Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUserUin;

    /**
     * @param string $WorkflowId Workflow ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowName Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OwnerUin Person in Charge ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.


Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Last Modification Time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateUserUin Last updated by user ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowDesc Workflow description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUserUin Creator ID.
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
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
