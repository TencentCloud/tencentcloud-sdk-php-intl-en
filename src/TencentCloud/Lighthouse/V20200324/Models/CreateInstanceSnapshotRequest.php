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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceSnapshot request structure.
 *
 * @method string getInstanceId() Obtain ID of the instance for which to create a snapshot.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance for which to create a snapshot.
 * @method string getSnapshotName() Obtain Snapshot name, which can contain up to 60 characters.
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name, which can contain up to 60 characters.
 */
class CreateInstanceSnapshotRequest extends AbstractModel
{
    /**
     * @var string ID of the instance for which to create a snapshot.
     */
    public $InstanceId;

    /**
     * @var string Snapshot name, which can contain up to 60 characters.
     */
    public $SnapshotName;

    /**
     * @param string $InstanceId ID of the instance for which to create a snapshot.
     * @param string $SnapshotName Snapshot name, which can contain up to 60 characters.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }
    }
}
