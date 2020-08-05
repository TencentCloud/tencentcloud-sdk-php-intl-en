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
 * Configuration information of the salve database
 *
 * @method string getReplicationMode() Obtain Replication mode of the secondary database. Value range: async, semi-sync
 * @method void setReplicationMode(string $ReplicationMode) Set Replication mode of the secondary database. Value range: async, semi-sync
 * @method string getZone() Obtain AZ name of the secondary database, such as ap-shanghai-1
 * @method void setZone(string $Zone) Set AZ name of the secondary database, such as ap-shanghai-1
 */
class SlaveConfig extends AbstractModel
{
    /**
     * @var string Replication mode of the secondary database. Value range: async, semi-sync
     */
    public $ReplicationMode;

    /**
     * @var string AZ name of the secondary database, such as ap-shanghai-1
     */
    public $Zone;

    /**
     * @param string $ReplicationMode Replication mode of the secondary database. Value range: async, semi-sync
     * @param string $Zone AZ name of the secondary database, such as ap-shanghai-1
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
    }
}
