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
 * DescribeCfsFileSystemClients request structure.
 *
 * @method string getFileSystemId() Obtain File system ID. obtain it by querying the file system interface (https://www.tencentcloud.com/document/api/582/38170?from_cn_redirect=1).
 * @method void setFileSystemId(string $FileSystemId) Set File system ID. obtain it by querying the file system interface (https://www.tencentcloud.com/document/api/582/38170?from_cn_redirect=1).
 * @method integer getOffset() Obtain Offset paging number, defaults to 0.
 * @method void setOffset(integer $Offset) Set Offset paging number, defaults to 0.
 * @method integer getLimit() Obtain Limit page size. default value 10. maximum value 100.
 * @method void setLimit(integer $Limit) Set Limit page size. default value 10. maximum value 100.
 */
class DescribeCfsFileSystemClientsRequest extends AbstractModel
{
    /**
     * @var string File system ID. obtain it by querying the file system interface (https://www.tencentcloud.com/document/api/582/38170?from_cn_redirect=1).
     */
    public $FileSystemId;

    /**
     * @var integer Offset paging number, defaults to 0.
     */
    public $Offset;

    /**
     * @var integer Limit page size. default value 10. maximum value 100.
     */
    public $Limit;

    /**
     * @param string $FileSystemId File system ID. obtain it by querying the file system interface (https://www.tencentcloud.com/document/api/582/38170?from_cn_redirect=1).
     * @param integer $Offset Offset paging number, defaults to 0.
     * @param integer $Limit Limit page size. default value 10. maximum value 100.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
