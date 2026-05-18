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
 * @method string getMongoVersion() Obtain The newly upgraded database version. Currently supported versions are as follows. Upgrade from an earlier version to a high version is supported. Cross-version upgrade is not supported.
- MONGO_40_WT: Version 4.0.
- MONGO_42_WT: Version 4.2.
- MONGO_44_WT: Version 4.4.
- MONGO_50_WT: Version 5.0.
- MONGO_60_WT: Version 6.0.
-MONGO_70_WT: Version 7.0.
- MONGO_80_WT: Version 8.0.
 * @method void setMongoVersion(string $MongoVersion) Set The newly upgraded database version. Currently supported versions are as follows. Upgrade from an earlier version to a high version is supported. Cross-version upgrade is not supported.
- MONGO_40_WT: Version 4.0.
- MONGO_42_WT: Version 4.2.
- MONGO_44_WT: Version 4.4.
- MONGO_50_WT: Version 5.0.
- MONGO_60_WT: Version 6.0.
-MONGO_70_WT: Version 7.0.
- MONGO_80_WT: Version 8.0.
 * @method integer getInMaintenance() Obtain Specify whether to perform the upgrade during the maintenance period.
-0: Upgrade now.
- 1: Upgrade during the maintenance window.
 * @method void setInMaintenance(integer $InMaintenance) Set Specify whether to perform the upgrade during the maintenance period.
-0: Upgrade now.
- 1: Upgrade during the maintenance window.
 */
class UpgradeDbInstanceVersionRequest extends AbstractModel
{
    /**
     * @var string List of instance IDs, which are in the format of cmgo-p8vnipr5. It is the same as the format of the instance ID displayed on the TencentDB for MongoDB console page.
     */
    public $InstanceId;

    /**
     * @var string The newly upgraded database version. Currently supported versions are as follows. Upgrade from an earlier version to a high version is supported. Cross-version upgrade is not supported.
- MONGO_40_WT: Version 4.0.
- MONGO_42_WT: Version 4.2.
- MONGO_44_WT: Version 4.4.
- MONGO_50_WT: Version 5.0.
- MONGO_60_WT: Version 6.0.
-MONGO_70_WT: Version 7.0.
- MONGO_80_WT: Version 8.0.
     */
    public $MongoVersion;

    /**
     * @var integer Specify whether to perform the upgrade during the maintenance period.
-0: Upgrade now.
- 1: Upgrade during the maintenance window.
     */
    public $InMaintenance;

    /**
     * @param string $InstanceId List of instance IDs, which are in the format of cmgo-p8vnipr5. It is the same as the format of the instance ID displayed on the TencentDB for MongoDB console page.
     * @param string $MongoVersion The newly upgraded database version. Currently supported versions are as follows. Upgrade from an earlier version to a high version is supported. Cross-version upgrade is not supported.
- MONGO_40_WT: Version 4.0.
- MONGO_42_WT: Version 4.2.
- MONGO_44_WT: Version 4.4.
- MONGO_50_WT: Version 5.0.
- MONGO_60_WT: Version 6.0.
-MONGO_70_WT: Version 7.0.
- MONGO_80_WT: Version 8.0.
     * @param integer $InMaintenance Specify whether to perform the upgrade during the maintenance period.
-0: Upgrade now.
- 1: Upgrade during the maintenance window.
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
