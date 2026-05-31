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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcInstanceType(string $SrcInstanceType) Set Source instance type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSrcClusterId() Obtain Source Cluster Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcClusterId(string $SrcClusterId) Set Source Cluster Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSrcInstanceId() Obtain Source instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcInstanceId(string $SrcInstanceId) Set Source instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReplicationJobId() Obtain Copy task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplicationJobId(string $ReplicationJobId) Set Copy task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MigrateOpt getMigrateObjects() Obtain sync object details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMigrateObjects(MigrateOpt $MigrateObjects) Set sync object details
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ReplicationObject extends AbstractModel
{
    /**
     * @var string Source instance type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcInstanceType;

    /**
     * @var string Source Cluster Id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcClusterId;

    /**
     * @var string Source instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcInstanceId;

    /**
     * @var string Copy task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReplicationJobId;

    /**
     * @var MigrateOpt sync object details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MigrateObjects;

    /**
     * @param string $SrcInstanceType Source instance type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SrcClusterId Source Cluster Id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SrcInstanceId Source instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReplicationJobId Copy task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MigrateOpt $MigrateObjects sync object details
Note: This field may return null, indicating that no valid values can be obtained.
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
