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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCfsFileSystem request structure.
 *
 * @method string getFileSystemId() Obtain File system ID. Note: please call the `DeleteMountTarget` API to delete the mount target first before deleting a file system; otherwise, the delete operation will fail.
 * @method void setFileSystemId(string $FileSystemId) Set File system ID. Note: please call the `DeleteMountTarget` API to delete the mount target first before deleting a file system; otherwise, the delete operation will fail.
 */
class DeleteCfsFileSystemRequest extends AbstractModel
{
    /**
     * @var string File system ID. Note: please call the `DeleteMountTarget` API to delete the mount target first before deleting a file system; otherwise, the delete operation will fail.
     */
    public $FileSystemId;

    /**
     * @param string $FileSystemId File system ID. Note: please call the `DeleteMountTarget` API to delete the mount target first before deleting a file system; otherwise, the delete operation will fail.
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }
    }
}
