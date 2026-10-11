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
 * UpdateFolder request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID</p>
 * @method FolderLocator getFolder() Obtain <p>Folder to update</p>
 * @method void setFolder(FolderLocator $Folder) Set <p>Folder to update</p>
 * @method string getOperationType() Obtain <p>Operation type</p><p>Enumeration values:</p><ul><li>1: Rename</li><li>2: Move</li></ul>
 * @method void setOperationType(string $OperationType) Set <p>Operation type</p><p>Enumeration values:</p><ul><li>1: Rename</li><li>2: Move</li></ul>
 * @method string getFolderName() Obtain <p>New file name. This parameter is valid only when OperationType = 1.</p>
 * @method void setFolderName(string $FolderName) Set <p>New file name. This parameter is valid only when OperationType = 1.</p>
 * @method FolderLocator getTargetParent() Obtain <p>Destination folder to move to. This parameter is valid only when OperationType = 2.</p>
 * @method void setTargetParent(FolderLocator $TargetParent) Set <p>Destination folder to move to. This parameter is valid only when OperationType = 2.</p>
 */
class UpdateFolderRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID</p>
     */
    public $WorkspaceId;

    /**
     * @var FolderLocator <p>Folder to update</p>
     */
    public $Folder;

    /**
     * @var string <p>Operation type</p><p>Enumeration values:</p><ul><li>1: Rename</li><li>2: Move</li></ul>
     */
    public $OperationType;

    /**
     * @var string <p>New file name. This parameter is valid only when OperationType = 1.</p>
     */
    public $FolderName;

    /**
     * @var FolderLocator <p>Destination folder to move to. This parameter is valid only when OperationType = 2.</p>
     */
    public $TargetParent;

    /**
     * @param string $WorkspaceId <p>Workspace ID</p>
     * @param FolderLocator $Folder <p>Folder to update</p>
     * @param string $OperationType <p>Operation type</p><p>Enumeration values:</p><ul><li>1: Rename</li><li>2: Move</li></ul>
     * @param string $FolderName <p>New file name. This parameter is valid only when OperationType = 1.</p>
     * @param FolderLocator $TargetParent <p>Destination folder to move to. This parameter is valid only when OperationType = 2.</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Folder",$param) and $param["Folder"] !== null) {
            $this->Folder = new FolderLocator();
            $this->Folder->deserialize($param["Folder"]);
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("TargetParent",$param) and $param["TargetParent"] !== null) {
            $this->TargetParent = new FolderLocator();
            $this->TargetParent->deserialize($param["TargetParent"]);
        }
    }
}
