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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWorkflowInfo request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getOwner() Obtain Person in Charge
 * @method void setOwner(string $Owner) Set Person in Charge
 * @method string getOwnerId() Obtain Responsible Person ID
 * @method void setOwnerId(string $OwnerId) Set Responsible Person ID
 * @method string getWorkflowDesc() Obtain Remarks
 * @method void setWorkflowDesc(string $WorkflowDesc) Set Remarks
 * @method string getWorkflowName() Obtain Workflow name
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name
 * @method string getFolderId() Obtain Parent Folder ID
 * @method void setFolderId(string $FolderId) Set Parent Folder ID
 * @method string getUserGroupId() Obtain Workflow User Group ID If multiple, separated by semicolons: a;b;c
 * @method void setUserGroupId(string $UserGroupId) Set Workflow User Group ID If multiple, separated by semicolons: a;b;c
 * @method string getUserGroupName() Obtain Workflow User Group Name If multiple, separated by semicolons: a;b;c
 * @method void setUserGroupName(string $UserGroupName) Set Workflow User Group Name If multiple, separated by semicolons: a;b;c
 * @method array getWorkflowParams() Obtain Workflow Parameter List
 * @method void setWorkflowParams(array $WorkflowParams) Set Workflow Parameter List
 * @method array getGeneralTaskParams() Obtain Used to configure optimized parameters (Thread, Memory, CPU Core Count, etc.), applicable only to Spark SQL Node. Separate multiple parameters with English semicolons.
 * @method void setGeneralTaskParams(array $GeneralTaskParams) Set Used to configure optimized parameters (Thread, Memory, CPU Core Count, etc.), applicable only to Spark SQL Node. Separate multiple parameters with English semicolons.
 */
class ModifyWorkflowInfoRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Person in Charge
     */
    public $Owner;

    /**
     * @var string Responsible Person ID
     */
    public $OwnerId;

    /**
     * @var string Remarks
     */
    public $WorkflowDesc;

    /**
     * @var string Workflow name
     */
    public $WorkflowName;

    /**
     * @var string Parent Folder ID
     */
    public $FolderId;

    /**
     * @var string Workflow User Group ID If multiple, separated by semicolons: a;b;c
     */
    public $UserGroupId;

    /**
     * @var string Workflow User Group Name If multiple, separated by semicolons: a;b;c
     */
    public $UserGroupName;

    /**
     * @var array Workflow Parameter List
     */
    public $WorkflowParams;

    /**
     * @var array Used to configure optimized parameters (Thread, Memory, CPU Core Count, etc.), applicable only to Spark SQL Node. Separate multiple parameters with English semicolons.
     */
    public $GeneralTaskParams;

    /**
     * @param string $ProjectId Project ID
     * @param string $WorkflowId Workflow ID
     * @param string $Owner Person in Charge
     * @param string $OwnerId Responsible Person ID
     * @param string $WorkflowDesc Remarks
     * @param string $WorkflowName Workflow name
     * @param string $FolderId Parent Folder ID
     * @param string $UserGroupId Workflow User Group ID If multiple, separated by semicolons: a;b;c
     * @param string $UserGroupName Workflow User Group Name If multiple, separated by semicolons: a;b;c
     * @param array $WorkflowParams Workflow Parameter List
     * @param array $GeneralTaskParams Used to configure optimized parameters (Thread, Memory, CPU Core Count, etc.), applicable only to Spark SQL Node. Separate multiple parameters with English semicolons.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("UserGroupName",$param) and $param["UserGroupName"] !== null) {
            $this->UserGroupName = $param["UserGroupName"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = [];
            foreach ($param["WorkflowParams"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->WorkflowParams, $obj);
            }
        }

        if (array_key_exists("GeneralTaskParams",$param) and $param["GeneralTaskParams"] !== null) {
            $this->GeneralTaskParams = [];
            foreach ($param["GeneralTaskParams"] as $key => $value){
                $obj = new GeneralTaskParam();
                $obj->deserialize($value);
                array_push($this->GeneralTaskParams, $obj);
            }
        }
    }
}
