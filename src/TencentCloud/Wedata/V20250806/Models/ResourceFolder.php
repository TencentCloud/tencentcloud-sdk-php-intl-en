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
 * @method string getCreateUserName() Obtain Creator's name.
 * @method void setCreateUserName(string $CreateUserName) Set Creator's name.
 * @method string getFolderPath() Obtain Specifies the folder path.
 * @method void setFolderPath(string $FolderPath) Set Specifies the folder path.
 * @method string getFolderName() Obtain Folder name.
 * @method void setFolderName(string $FolderName) Set Folder name.
 */
class ResourceFolder extends AbstractModel
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
     * @var string Creator's name.
     */
    public $CreateUserName;

    /**
     * @var string Specifies the folder path.
     */
    public $FolderPath;

    /**
     * @var string Folder name.
     */
    public $FolderName;

    /**
     * @param string $FolderId Resource folder ID.
     * @param string $CreateUserUin Creator ID.
     * @param string $CreateUserName Creator's name.
     * @param string $FolderPath Specifies the folder path.
     * @param string $FolderName Folder name.
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
    }
}
