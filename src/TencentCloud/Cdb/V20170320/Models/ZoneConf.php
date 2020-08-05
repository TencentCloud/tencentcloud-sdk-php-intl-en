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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Multi-AZ information
 *
 * @method array getDeployMode() Obtain AZ deployment mode. Value range: 0 (single-AZ), 1 (multi-AZ)
 * @method void setDeployMode(array $DeployMode) Set AZ deployment mode. Value range: 0 (single-AZ), 1 (multi-AZ)
 * @method array getMasterZone() Obtain AZ where the primary instance is located
 * @method void setMasterZone(array $MasterZone) Set AZ where the primary instance is located
 * @method array getSlaveZone() Obtain AZ where salve database 1 is located when the instance is deployed in multi-AZ mode
 * @method void setSlaveZone(array $SlaveZone) Set AZ where salve database 1 is located when the instance is deployed in multi-AZ mode
 * @method array getBackupZone() Obtain AZ where salve database 2 is located when the instance is deployed in multi-AZ mode
 * @method void setBackupZone(array $BackupZone) Set AZ where salve database 2 is located when the instance is deployed in multi-AZ mode
 */
class ZoneConf extends AbstractModel
{
    /**
     * @var array AZ deployment mode. Value range: 0 (single-AZ), 1 (multi-AZ)
     */
    public $DeployMode;

    /**
     * @var array AZ where the primary instance is located
     */
    public $MasterZone;

    /**
     * @var array AZ where salve database 1 is located when the instance is deployed in multi-AZ mode
     */
    public $SlaveZone;

    /**
     * @var array AZ where salve database 2 is located when the instance is deployed in multi-AZ mode
     */
    public $BackupZone;

    /**
     * @param array $DeployMode AZ deployment mode. Value range: 0 (single-AZ), 1 (multi-AZ)
     * @param array $MasterZone AZ where the primary instance is located
     * @param array $SlaveZone AZ where salve database 1 is located when the instance is deployed in multi-AZ mode
     * @param array $BackupZone AZ where salve database 2 is located when the instance is deployed in multi-AZ mode
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
        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("BackupZone",$param) and $param["BackupZone"] !== null) {
            $this->BackupZone = $param["BackupZone"];
        }
    }
}
