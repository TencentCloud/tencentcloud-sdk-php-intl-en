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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result of creating a backup download task.
 *
 * @method string getReplicaSetId() Obtain Shard name.
 * @method void setReplicaSetId(string $ReplicaSetId) Set Shard name.
 * @method integer getStatus() Obtain Current status of the task.
- 0: wait for execution.
- 1: downloading.
- 2: download completed.
- 3: download failed.
- 4: wait for retry.
 * @method void setStatus(integer $Status) Set Current status of the task.
- 0: wait for execution.
- 1: downloading.
- 2: download completed.
- 3: download failed.
- 4: wait for retry.
 */
class BackupDownloadTaskStatus extends AbstractModel
{
    /**
     * @var string Shard name.
     */
    public $ReplicaSetId;

    /**
     * @var integer Current status of the task.
- 0: wait for execution.
- 1: downloading.
- 2: download completed.
- 3: download failed.
- 4: wait for retry.
     */
    public $Status;

    /**
     * @param string $ReplicaSetId Shard name.
     * @param integer $Status Current status of the task.
- 0: wait for execution.
- 1: downloading.
- 2: download completed.
- 3: download failed.
- 4: wait for retry.
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
        if (array_key_exists("ReplicaSetId",$param) and $param["ReplicaSetId"] !== null) {
            $this->ReplicaSetId = $param["ReplicaSetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
