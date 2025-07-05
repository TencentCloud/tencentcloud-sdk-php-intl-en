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
 * DeleteReplicationInstance request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getReplicationRegistryId() Obtain Replica instance ID
 * @method void setReplicationRegistryId(string $ReplicationRegistryId) Set Replica instance ID
 * @method integer getReplicationRegionId() Obtain Region ID of the replica instance
 * @method void setReplicationRegionId(integer $ReplicationRegionId) Set Region ID of the replica instance
 */
class DeleteReplicationInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Replica instance ID
     */
    public $ReplicationRegistryId;

    /**
     * @var integer Region ID of the replica instance
     */
    public $ReplicationRegionId;

    /**
     * @param string $RegistryId Instance ID
     * @param string $ReplicationRegistryId Replica instance ID
     * @param integer $ReplicationRegionId Region ID of the replica instance
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
    }
}
