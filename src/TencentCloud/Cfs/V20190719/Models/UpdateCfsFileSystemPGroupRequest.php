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
 * UpdateCfsFileSystemPGroup request structure.
 *
 * @method string getPGroupId() Obtain Permission group ID, which can be obtained through the api [DescribeCfsPGroups](https://www.tencentcloud.com/document/api/582/38157?from_cn_redirect=1).
 * @method void setPGroupId(string $PGroupId) Set Permission group ID, which can be obtained through the api [DescribeCfsPGroups](https://www.tencentcloud.com/document/api/582/38157?from_cn_redirect=1).
 * @method string getFileSystemId() Obtain File system ID. obtain it by querying the file system interface (https://www.tencentcloud.com/document/api/582/38170?from_cn_redirect=1).
 * @method void setFileSystemId(string $FileSystemId) Set File system ID. obtain it by querying the file system interface (https://www.tencentcloud.com/document/api/582/38170?from_cn_redirect=1).
 */
class UpdateCfsFileSystemPGroupRequest extends AbstractModel
{
    /**
     * @var string Permission group ID, which can be obtained through the api [DescribeCfsPGroups](https://www.tencentcloud.com/document/api/582/38157?from_cn_redirect=1).
     */
    public $PGroupId;

    /**
     * @var string File system ID. obtain it by querying the file system interface (https://www.tencentcloud.com/document/api/582/38170?from_cn_redirect=1).
     */
    public $FileSystemId;

    /**
     * @param string $PGroupId Permission group ID, which can be obtained through the api [DescribeCfsPGroups](https://www.tencentcloud.com/document/api/582/38157?from_cn_redirect=1).
     * @param string $FileSystemId File system ID. obtain it by querying the file system interface (https://www.tencentcloud.com/document/api/582/38170?from_cn_redirect=1).
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
        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }
    }
}
