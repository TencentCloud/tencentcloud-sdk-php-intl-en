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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getReplicateSetId() Obtain ID of the replica set/shard to which a backup file belongs
 * @method void setReplicateSetId(string $ReplicateSetId) Set ID of the replica set/shard to which a backup file belongs
 * @method string getFile() Obtain Path to a backup file
 * @method void setFile(string $File) Set Path to a backup file
 */

/**
 *Storage information of a backup file
 */
class BackupFile extends AbstractModel
{
    /**
     * @var string ID of the replica set/shard to which a backup file belongs
     */
    public $ReplicateSetId;

    /**
     * @var string Path to a backup file
     */
    public $File;
    /**
     * @param string $ReplicateSetId ID of the replica set/shard to which a backup file belongs
     * @param string $File Path to a backup file
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
        if (array_key_exists("ReplicateSetId",$param) and $param["ReplicateSetId"] !== null) {
            $this->ReplicateSetId = $param["ReplicateSetId"];
        }

        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = $param["File"];
        }
    }
}
