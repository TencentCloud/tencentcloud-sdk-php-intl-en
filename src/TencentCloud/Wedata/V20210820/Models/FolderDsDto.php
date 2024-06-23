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
 * Folder Attributes
 *
 * @method string getId() Obtain Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(string $Id) Set Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getName() Obtain Folder NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Folder NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getParentsFolderId() Obtain Parent Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParentsFolderId(string $ParentsFolderId) Set Parent Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTotal() Obtain Total Workflows
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotal(integer $Total) Set Total Workflows
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getWorkflows() Obtain Workflow ListNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflows(array $Workflows) Set Workflow ListNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTotalFolders() Obtain Total Subfolders
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalFolders(integer $TotalFolders) Set Total Subfolders
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getFolders() Obtain Subfolder List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolders(array $Folders) Set Subfolder List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFindType() Obtain Search typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFindType(string $FindType) Set Search typeNote: This field may return null, indicating that no valid value can be obtained.
 */
class FolderDsDto extends AbstractModel
{
    /**
     * @var string Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Folder NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var string Project ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Update timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Parent Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParentsFolderId;

    /**
     * @var integer Total Workflows
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Total;

    /**
     * @var array Workflow ListNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Workflows;

    /**
     * @var integer Total Subfolders
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalFolders;

    /**
     * @var array Subfolder List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Folders;

    /**
     * @var string Search typeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FindType;

    /**
     * @param string $Id Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Name Folder NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ParentsFolderId Parent Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Total Total Workflows
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Workflows Workflow ListNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TotalFolders Total Subfolders
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Folders Subfolder List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FindType Search typeNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ParentsFolderId",$param) and $param["ParentsFolderId"] !== null) {
            $this->ParentsFolderId = $param["ParentsFolderId"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Workflows",$param) and $param["Workflows"] !== null) {
            $this->Workflows = [];
            foreach ($param["Workflows"] as $key => $value){
                $obj = new WorkflowCanvasOpsDto();
                $obj->deserialize($value);
                array_push($this->Workflows, $obj);
            }
        }

        if (array_key_exists("TotalFolders",$param) and $param["TotalFolders"] !== null) {
            $this->TotalFolders = $param["TotalFolders"];
        }

        if (array_key_exists("Folders",$param) and $param["Folders"] !== null) {
            $this->Folders = [];
            foreach ($param["Folders"] as $key => $value){
                $obj = new FolderDsDto();
                $obj->deserialize($value);
                array_push($this->Folders, $obj);
            }
        }

        if (array_key_exists("FindType",$param) and $param["FindType"] !== null) {
            $this->FindType = $param["FindType"];
        }
    }
}
