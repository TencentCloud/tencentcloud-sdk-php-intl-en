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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Analysis engine sync object
 *
 * @method string getSrcInstanceType() Obtain Source instance type
 * @method void setSrcInstanceType(string $SrcInstanceType) Set Source instance type
 * @method string getSrcClusterId() Obtain Source cluster Id
 * @method void setSrcClusterId(string $SrcClusterId) Set Source cluster Id
 * @method string getSrcInstanceId() Obtain Source instance ID
 * @method void setSrcInstanceId(string $SrcInstanceId) Set Source instance ID
 * @method string getReplicationJobId() Obtain Copy task ID
 * @method void setReplicationJobId(string $ReplicationJobId) Set Copy task ID
 * @method MigrateOpt getMigrateObjects() Obtain Synchronization object details
 * @method void setMigrateObjects(MigrateOpt $MigrateObjects) Set Synchronization object details
 */
class ReplicationObject extends AbstractModel
{
    /**
     * @var string Source instance type
     */
    public $SrcInstanceType;

    /**
     * @var string Source cluster Id
     */
    public $SrcClusterId;

    /**
     * @var string Source instance ID
     */
    public $SrcInstanceId;

    /**
     * @var string Copy task ID
     */
    public $ReplicationJobId;

    /**
     * @var MigrateOpt Synchronization object details
     */
    public $MigrateObjects;

    /**
     * @param string $SrcInstanceType Source instance type
     * @param string $SrcClusterId Source cluster Id
     * @param string $SrcInstanceId Source instance ID
     * @param string $ReplicationJobId Copy task ID
     * @param MigrateOpt $MigrateObjects Synchronization object details
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
        if (array_key_exists("SrcInstanceType",$param) and $param["SrcInstanceType"] !== null) {
            $this->SrcInstanceType = $param["SrcInstanceType"];
        }

        if (array_key_exists("SrcClusterId",$param) and $param["SrcClusterId"] !== null) {
            $this->SrcClusterId = $param["SrcClusterId"];
        }

        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("ReplicationJobId",$param) and $param["ReplicationJobId"] !== null) {
            $this->ReplicationJobId = $param["ReplicationJobId"];
        }

        if (array_key_exists("MigrateObjects",$param) and $param["MigrateObjects"] !== null) {
            $this->MigrateObjects = new MigrateOpt();
            $this->MigrateObjects->deserialize($param["MigrateObjects"]);
        }
    }
}
