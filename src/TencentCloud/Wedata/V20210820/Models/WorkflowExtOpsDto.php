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
 * Workflow
 *
 * @method integer getTaskCount() Obtain Number of Tasks Count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskCount(integer $TaskCount) Set Number of Tasks Count
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFolderName() Obtain File NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderName(string $FolderName) Set File NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkFlowId() Obtain Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkFlowId(string $WorkFlowId) Set Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwner() Obtain Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwner(string $Owner) Set Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerId() Obtain Person in charge userId\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerId(string $OwnerId) Set Person in charge userId\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectIdent() Obtain Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectIdent(string $ProjectIdent) Set Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkFlowDesc() Obtain Workflow DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkFlowDesc(string $WorkFlowDesc) Set Workflow DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkFlowName() Obtain Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkFlowName(string $WorkFlowName) Set Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getFolderId() Obtain Workflow file id\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderId(string $FolderId) Set Workflow file id\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Workflow statusNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Workflow statusNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Workflow creation time\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Workflow creation time\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getModifyTime() Obtain Last update time\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Last update time\nNote: This field may return null, indicating that no valid value can be obtained.
 */
class WorkflowExtOpsDto extends AbstractModel
{
    /**
     * @var integer Number of Tasks Count
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskCount;

    /**
     * @var string File NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FolderName;

    /**
     * @var string Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkFlowId;

    /**
     * @var string Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Owner;

    /**
     * @var string Person in charge userId\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerId;

    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectIdent;

    /**
     * @var string Project nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Workflow DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkFlowDesc;

    /**
     * @var string Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkFlowName;

    /**
     * @var string Workflow file id\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FolderId;

    /**
     * @var string Workflow statusNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Workflow creation time\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last update time\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ModifyTime;

    /**
     * @param integer $TaskCount Number of Tasks Count
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FolderName File NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkFlowId Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Owner Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerId Person in charge userId\nNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectIdent Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkFlowDesc Workflow DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkFlowName Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $FolderId Workflow file id\nNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Status Workflow statusNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Workflow creation time\nNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ModifyTime Last update time\nNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("WorkFlowId",$param) and $param["WorkFlowId"] !== null) {
            $this->WorkFlowId = $param["WorkFlowId"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("WorkFlowDesc",$param) and $param["WorkFlowDesc"] !== null) {
            $this->WorkFlowDesc = $param["WorkFlowDesc"];
        }

        if (array_key_exists("WorkFlowName",$param) and $param["WorkFlowName"] !== null) {
            $this->WorkFlowName = $param["WorkFlowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
