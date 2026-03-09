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
 * Task folder info.
 *
 * @method string getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskFolderId() Obtain Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskFolderId(string $TaskFolderId) Set Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskFolderPath() Obtain Folder absolute path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskFolderPath(string $TaskFolderPath) Set Folder absolute path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUserUin() Obtain Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUserUin(string $CreateUserUin) Set Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskFolder extends AbstractModel
{
    /**
     * @var string Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskFolderId;

    /**
     * @var string Folder absolute path.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskFolderPath;

    /**
     * @var string Creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUserUin;

    /**
     * @param string $ProjectId Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskFolderId Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskFolderPath Folder absolute path.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }

        if (array_key_exists("TaskFolderPath",$param) and $param["TaskFolderPath"] !== null) {
            $this->TaskFolderPath = $param["TaskFolderPath"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }
    }
}
