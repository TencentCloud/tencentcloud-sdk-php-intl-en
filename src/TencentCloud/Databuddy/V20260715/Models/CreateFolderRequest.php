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
 * CreateFolder request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace name</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace name</p>
 * @method string getFolderName() Obtain <p>Folder name.</p>
 * @method void setFolderName(string $FolderName) Set <p>Folder name.</p>
 * @method string getFolderType() Obtain <p>FOLDER type</p><p>Enumeration values:</p><ul><li>FOLDER: FOLDER</li><li>GIT_FOLDER: GIT FOLDER</li></ul>
 * @method void setFolderType(string $FolderType) Set <p>FOLDER type</p><p>Enumeration values:</p><ul><li>FOLDER: FOLDER</li><li>GIT_FOLDER: GIT FOLDER</li></ul>
 * @method FolderLocator getParentFolder() Obtain <p>Parent node</p>
 * @method void setParentFolder(FolderLocator $ParentFolder) Set <p>Parent node</p>
 * @method GitRepoConfig getGitConfig() Obtain <p>git configuration. Required when FolderType is git_FOLDER.</p>
 * @method void setGitConfig(GitRepoConfig $GitConfig) Set <p>git configuration. Required when FolderType is git_FOLDER.</p>
 */
class CreateFolderRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace name</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>Folder name.</p>
     */
    public $FolderName;

    /**
     * @var string <p>FOLDER type</p><p>Enumeration values:</p><ul><li>FOLDER: FOLDER</li><li>GIT_FOLDER: GIT FOLDER</li></ul>
     */
    public $FolderType;

    /**
     * @var FolderLocator <p>Parent node</p>
     */
    public $ParentFolder;

    /**
     * @var GitRepoConfig <p>git configuration. Required when FolderType is git_FOLDER.</p>
     */
    public $GitConfig;

    /**
     * @param string $WorkspaceId <p>Workspace name</p>
     * @param string $FolderName <p>Folder name.</p>
     * @param string $FolderType <p>FOLDER type</p><p>Enumeration values:</p><ul><li>FOLDER: FOLDER</li><li>GIT_FOLDER: GIT FOLDER</li></ul>
     * @param FolderLocator $ParentFolder <p>Parent node</p>
     * @param GitRepoConfig $GitConfig <p>git configuration. Required when FolderType is git_FOLDER.</p>
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

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("FolderType",$param) and $param["FolderType"] !== null) {
            $this->FolderType = $param["FolderType"];
        }

        if (array_key_exists("ParentFolder",$param) and $param["ParentFolder"] !== null) {
            $this->ParentFolder = new FolderLocator();
            $this->ParentFolder->deserialize($param["ParentFolder"]);
        }

        if (array_key_exists("GitConfig",$param) and $param["GitConfig"] !== null) {
            $this->GitConfig = new GitRepoConfig();
            $this->GitConfig->deserialize($param["GitConfig"]);
        }
    }
}
