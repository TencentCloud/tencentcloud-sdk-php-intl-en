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
 * Configuration information of ECDB secondary database 2. This field is only applicable to ECDB instances
 *
 * @method string getReplicationMode() Obtain Replication mode of secondary database 2. Value range: async, semi-sync
 * @method void setReplicationMode(string $ReplicationMode) Set Replication mode of secondary database 2. Value range: async, semi-sync
 * @method string getZone() Obtain Name of the AZ of secondary database 2, such as ap-shanghai-1
 * @method void setZone(string $Zone) Set Name of the AZ of secondary database 2, such as ap-shanghai-1
 * @method string getVip() Obtain Private IP address of secondary database 2
 * @method void setVip(string $Vip) Set Private IP address of secondary database 2
 * @method integer getVport() Obtain Access port of secondary database 2
 * @method void setVport(integer $Vport) Set Access port of secondary database 2
 */
class BackupConfig extends AbstractModel
{
    /**
     * @var string Replication mode of secondary database 2. Value range: async, semi-sync
     */
    public $ReplicationMode;

    /**
     * @var string Name of the AZ of secondary database 2, such as ap-shanghai-1
     */
    public $Zone;

    /**
     * @var string Private IP address of secondary database 2
     */
    public $Vip;

    /**
     * @var integer Access port of secondary database 2
     */
    public $Vport;

    /**
     * @param string $ReplicationMode Replication mode of secondary database 2. Value range: async, semi-sync
     * @param string $Zone Name of the AZ of secondary database 2, such as ap-shanghai-1
     * @param string $Vip Private IP address of secondary database 2
     * @param integer $Vport Access port of secondary database 2
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
        if (array_key_exists("ReplicationMode",$param) and $param["ReplicationMode"] !== null) {
            $this->ReplicationMode = $param["ReplicationMode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
