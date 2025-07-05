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
 * BindAutoSnapshotPolicy request structure.
 *
 * @method string getAutoSnapshotPolicyId() Obtain Snapshot policy ID
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set Snapshot policy ID
 * @method string getFileSystemIds() Obtain List of file systems
 * @method void setFileSystemIds(string $FileSystemIds) Set List of file systems
 */
class BindAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string Snapshot policy ID
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string List of file systems
     */
    public $FileSystemIds;

    /**
     * @param string $AutoSnapshotPolicyId Snapshot policy ID
     * @param string $FileSystemIds List of file systems
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("FileSystemIds",$param) and $param["FileSystemIds"] !== null) {
            $this->FileSystemIds = $param["FileSystemIds"];
        }
    }
}
