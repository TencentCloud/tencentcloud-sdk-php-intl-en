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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ID of Enterprise Registry replication instance
 *
 * @method string getRegistryId() Obtain Master instance ID
 * @method void setRegistryId(string $RegistryId) Set Master instance ID
 * @method string getReplicationRegistryId() Obtain Replication instance ID
 * @method void setReplicationRegistryId(string $ReplicationRegistryId) Set Replication instance ID
 * @method integer getReplicationRegionId() Obtain Region ID of the replication instance
 * @method void setReplicationRegionId(integer $ReplicationRegionId) Set Region ID of the replication instance
 * @method string getReplicationRegionName() Obtain Region name of the replication instance
 * @method void setReplicationRegionName(string $ReplicationRegionName) Set Region name of the replication instance
 * @method string getStatus() Obtain Status of the replication instance
 * @method void setStatus(string $Status) Set Status of the replication instance
 * @method string getCreatedAt() Obtain Creation time
 * @method void setCreatedAt(string $CreatedAt) Set Creation time
 */
class ReplicationRegistry extends AbstractModel
{
    /**
     * @var string Master instance ID
     */
    public $RegistryId;

    /**
     * @var string Replication instance ID
     */
    public $ReplicationRegistryId;

    /**
     * @var integer Region ID of the replication instance
     */
    public $ReplicationRegionId;

    /**
     * @var string Region name of the replication instance
     */
    public $ReplicationRegionName;

    /**
     * @var string Status of the replication instance
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreatedAt;

    /**
     * @param string $RegistryId Master instance ID
     * @param string $ReplicationRegistryId Replication instance ID
     * @param integer $ReplicationRegionId Region ID of the replication instance
     * @param string $ReplicationRegionName Region name of the replication instance
     * @param string $Status Status of the replication instance
     * @param string $CreatedAt Creation time
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("ReplicationRegistryId",$param) and $param["ReplicationRegistryId"] !== null) {
            $this->ReplicationRegistryId = $param["ReplicationRegistryId"];
        }

        if (array_key_exists("ReplicationRegionId",$param) and $param["ReplicationRegionId"] !== null) {
            $this->ReplicationRegionId = $param["ReplicationRegionId"];
        }

        if (array_key_exists("ReplicationRegionName",$param) and $param["ReplicationRegionName"] !== null) {
            $this->ReplicationRegionName = $param["ReplicationRegionName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }
    }
}
