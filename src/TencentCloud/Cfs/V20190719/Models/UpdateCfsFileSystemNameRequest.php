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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCfsFileSystemName request structure.
 *
 * @method string getFileSystemId() Obtain File system ID. obtain it by querying the file system interface (https://www.tencentcloud.com/document/api/582/38170?from_cn_redirect=1).
 * @method void setFileSystemId(string $FileSystemId) Set File system ID. obtain it by querying the file system interface (https://www.tencentcloud.com/document/api/582/38170?from_cn_redirect=1).
 * @method string getFsName() Obtain User-Defined file system name, alphanumeric chinese characters or _,- within 64 bytes. at least one of them or CreationToken must be provided.
 * @method void setFsName(string $FsName) Set User-Defined file system name, alphanumeric chinese characters or _,- within 64 bytes. at least one of them or CreationToken must be provided.
 */
class UpdateCfsFileSystemNameRequest extends AbstractModel
{
    /**
     * @var string File system ID. obtain it by querying the file system interface (https://www.tencentcloud.com/document/api/582/38170?from_cn_redirect=1).
     */
    public $FileSystemId;

    /**
     * @var string User-Defined file system name, alphanumeric chinese characters or _,- within 64 bytes. at least one of them or CreationToken must be provided.
     */
    public $FsName;

    /**
     * @param string $FileSystemId File system ID. obtain it by querying the file system interface (https://www.tencentcloud.com/document/api/582/38170?from_cn_redirect=1).
     * @param string $FsName User-Defined file system name, alphanumeric chinese characters or _,- within 64 bytes. at least one of them or CreationToken must be provided.
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

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }
    }
}
