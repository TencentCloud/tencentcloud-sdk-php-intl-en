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
 * CreateCfsSnapshot request structure.
 *
 * @method string getFileSystemId() Obtain File system ID, which can be obtained by querying the file system list; [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1).
 * @method void setFileSystemId(string $FileSystemId) Set File system ID, which can be obtained by querying the file system list; [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1).
 * @method string getSnapshotName() Obtain Snapshot name, supports no more than 64 characters in length, supports chinese, numbers, _, and -.
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name, supports no more than 64 characters in length, supports chinese, numbers, _, and -.
 * @method array getResourceTags() Obtain Snapshot tag
 * @method void setResourceTags(array $ResourceTags) Set Snapshot tag
 */
class CreateCfsSnapshotRequest extends AbstractModel
{
    /**
     * @var string File system ID, which can be obtained by querying the file system list; [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1).
     */
    public $FileSystemId;

    /**
     * @var string Snapshot name, supports no more than 64 characters in length, supports chinese, numbers, _, and -.
     */
    public $SnapshotName;

    /**
     * @var array Snapshot tag
     */
    public $ResourceTags;

    /**
     * @param string $FileSystemId File system ID, which can be obtained by querying the file system list; [DescribeCfsFileSystems](https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1).
     * @param string $SnapshotName Snapshot name, supports no more than 64 characters in length, supports chinese, numbers, _, and -.
     * @param array $ResourceTags Snapshot tag
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

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
