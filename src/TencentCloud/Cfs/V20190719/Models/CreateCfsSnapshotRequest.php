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
 * CreateCfsSnapshot request structure.
 *
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method string getSnapshotName() Obtain Snapshot name
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name
 * @method array getResourceTags() Obtain Snapshot tag
 * @method void setResourceTags(array $ResourceTags) Set Snapshot tag
 */
class CreateCfsSnapshotRequest extends AbstractModel
{
    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var string Snapshot name
     */
    public $SnapshotName;

    /**
     * @var array Snapshot tag
     */
    public $ResourceTags;

    /**
     * @param string $FileSystemId File system ID
     * @param string $SnapshotName Snapshot name
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
