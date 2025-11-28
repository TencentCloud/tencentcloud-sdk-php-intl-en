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
 * UpgradeDbInstanceVersion request structure.
 *
 * @method string getInstanceId() Obtain List of instance IDs, which are in the format of cmgo-p8vnipr5. It is the same as the format of the instance ID displayed on the TencentDB for MongoDB console page.
 * @method void setInstanceId(string $InstanceId) Set List of instance IDs, which are in the format of cmgo-p8vnipr5. It is the same as the format of the instance ID displayed on the TencentDB for MongoDB console page.
 * @method string getMongoVersion() Obtain Newly upgraded database version. Currently, it only supports MONGO_40_WT (version of the MongoDB 4.0 WiredTiger storage engine) and MONGO_42_WT (version of the MongoDB 4.2 WiredTiger storage engine).
 * @method void setMongoVersion(string $MongoVersion) Set Newly upgraded database version. Currently, it only supports MONGO_40_WT (version of the MongoDB 4.0 WiredTiger storage engine) and MONGO_42_WT (version of the MongoDB 4.2 WiredTiger storage engine).
 * @method integer getInMaintenance() Obtain Whether to perform the upgrade during the maintenance period. 0 - upgrade now; 1 - upgrade during the maintenance period.
 * @method void setInMaintenance(integer $InMaintenance) Set Whether to perform the upgrade during the maintenance period. 0 - upgrade now; 1 - upgrade during the maintenance period.
 */
class UpgradeDbInstanceVersionRequest extends AbstractModel
{
    /**
     * @var string List of instance IDs, which are in the format of cmgo-p8vnipr5. It is the same as the format of the instance ID displayed on the TencentDB for MongoDB console page.
     */
    public $InstanceId;

    /**
     * @var string Newly upgraded database version. Currently, it only supports MONGO_40_WT (version of the MongoDB 4.0 WiredTiger storage engine) and MONGO_42_WT (version of the MongoDB 4.2 WiredTiger storage engine).
     */
    public $MongoVersion;

    /**
     * @var integer Whether to perform the upgrade during the maintenance period. 0 - upgrade now; 1 - upgrade during the maintenance period.
     */
    public $InMaintenance;

    /**
     * @param string $InstanceId List of instance IDs, which are in the format of cmgo-p8vnipr5. It is the same as the format of the instance ID displayed on the TencentDB for MongoDB console page.
     * @param string $MongoVersion Newly upgraded database version. Currently, it only supports MONGO_40_WT (version of the MongoDB 4.0 WiredTiger storage engine) and MONGO_42_WT (version of the MongoDB 4.2 WiredTiger storage engine).
     * @param integer $InMaintenance Whether to perform the upgrade during the maintenance period. 0 - upgrade now; 1 - upgrade during the maintenance period.
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

        if (array_key_exists("MongoVersion",$param) and $param["MongoVersion"] !== null) {
            $this->MongoVersion = $param["MongoVersion"];
        }

        if (array_key_exists("InMaintenance",$param) and $param["InMaintenance"] !== null) {
            $this->InMaintenance = $param["InMaintenance"];
        }
    }
}
