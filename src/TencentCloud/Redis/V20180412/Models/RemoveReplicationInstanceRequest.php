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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveReplicationInstance request structure.
 *
 * @method string getGroupId() Obtain Replication group ID
 * @method void setGroupId(string $GroupId) Set Replication group ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method boolean getSyncType() Obtain Data sync type. Valid values: `true` (strong sync is required), `false` (strong sync is not required, only the master instance can be deleted).
 * @method void setSyncType(boolean $SyncType) Set Data sync type. Valid values: `true` (strong sync is required), `false` (strong sync is not required, only the master instance can be deleted).
 */
class RemoveReplicationInstanceRequest extends AbstractModel
{
    /**
     * @var string Replication group ID
     */
    public $GroupId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var boolean Data sync type. Valid values: `true` (strong sync is required), `false` (strong sync is not required, only the master instance can be deleted).
     */
    public $SyncType;

    /**
     * @param string $GroupId Replication group ID
     * @param string $InstanceId Instance ID
     * @param boolean $SyncType Data sync type. Valid values: `true` (strong sync is required), `false` (strong sync is not required, only the master instance can be deleted).
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SyncType",$param) and $param["SyncType"] !== null) {
            $this->SyncType = $param["SyncType"];
        }
    }
}
