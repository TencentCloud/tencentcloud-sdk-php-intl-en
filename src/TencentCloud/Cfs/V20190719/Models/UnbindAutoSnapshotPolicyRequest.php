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
 * UnbindAutoSnapshotPolicy request structure.
 *
 * @method string getFileSystemIds() Obtain List of IDs of the file systems to be unbound, separated by comma
 * @method void setFileSystemIds(string $FileSystemIds) Set List of IDs of the file systems to be unbound, separated by comma
 * @method string getAutoSnapshotPolicyId() Obtain ID of the snapshot to be unbound
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set ID of the snapshot to be unbound
 */
class UnbindAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string List of IDs of the file systems to be unbound, separated by comma
     */
    public $FileSystemIds;

    /**
     * @var string ID of the snapshot to be unbound
     */
    public $AutoSnapshotPolicyId;

    /**
     * @param string $FileSystemIds List of IDs of the file systems to be unbound, separated by comma
     * @param string $AutoSnapshotPolicyId ID of the snapshot to be unbound
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
        if (array_key_exists("FileSystemIds",$param) and $param["FileSystemIds"] !== null) {
            $this->FileSystemIds = $param["FileSystemIds"];
        }

        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }
    }
}
