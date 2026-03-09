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
 * Resource folder details.
 *
 * @method string getFolderId() Obtain Resource folder ID.
 * @method void setFolderId(string $FolderId) Set Resource folder ID.
 * @method string getCreateUserUin() Obtain Creator ID.
 * @method void setCreateUserUin(string $CreateUserUin) Set Creator ID.
 * @method string getCreateUserName() Obtain Creator'S name.
 * @method void setCreateUserName(string $CreateUserName) Set Creator'S name.
 * @method string getFolderPath() Obtain Folder path.
 * @method void setFolderPath(string $FolderPath) Set Folder path.
 * @method string getFolderName() Obtain Folder name.
 * @method void setFolderName(string $FolderName) Set Folder name.
 * @method string getParentFolderPath() Obtain Absolute path of the parent folder, excluding the folder name.
 * @method void setParentFolderPath(string $ParentFolderPath) Set Absolute path of the parent folder, excluding the folder name.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 */
class ResourceFolderDetail extends AbstractModel
{
    /**
     * @var string Resource folder ID.
     */
    public $FolderId;

    /**
     * @var string Creator ID.
     */
    public $CreateUserUin;

    /**
     * @var string Creator'S name.
     */
    public $CreateUserName;

    /**
     * @var string Folder path.
     */
    public $FolderPath;

    /**
     * @var string Folder name.
     */
    public $FolderName;

    /**
     * @var string Absolute path of the parent folder, excluding the folder name.
     */
    public $ParentFolderPath;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @param string $FolderId Resource folder ID.
     * @param string $CreateUserUin Creator ID.
     * @param string $CreateUserName Creator'S name.
     * @param string $FolderPath Folder path.
     * @param string $FolderName Folder name.
     * @param string $ParentFolderPath Absolute path of the parent folder, excluding the folder name.
     * @param string $ProjectId Project ID.
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
        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("CreateUserName",$param) and $param["CreateUserName"] !== null) {
            $this->CreateUserName = $param["CreateUserName"];
        }

        if (array_key_exists("FolderPath",$param) and $param["FolderPath"] !== null) {
            $this->FolderPath = $param["FolderPath"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
