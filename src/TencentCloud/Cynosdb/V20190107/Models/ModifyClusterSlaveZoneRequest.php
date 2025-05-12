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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterSlaveZone request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getOldSlaveZone() Obtain Old replica AZ
 * @method void setOldSlaveZone(string $OldSlaveZone) Set Old replica AZ
 * @method string getNewSlaveZone() Obtain New replica AZ
 * @method void setNewSlaveZone(string $NewSlaveZone) Set New replica AZ
 * @method string getBinlogSyncWay() Obtain Specifies the binlog synchronization mode. the default value is async. valid values are sync, semisync, and async.
 * @method void setBinlogSyncWay(string $BinlogSyncWay) Set Specifies the binlog synchronization mode. the default value is async. valid values are sync, semisync, and async.
 */
class ModifyClusterSlaveZoneRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Old replica AZ
     */
    public $OldSlaveZone;

    /**
     * @var string New replica AZ
     */
    public $NewSlaveZone;

    /**
     * @var string Specifies the binlog synchronization mode. the default value is async. valid values are sync, semisync, and async.
     */
    public $BinlogSyncWay;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $OldSlaveZone Old replica AZ
     * @param string $NewSlaveZone New replica AZ
     * @param string $BinlogSyncWay Specifies the binlog synchronization mode. the default value is async. valid values are sync, semisync, and async.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("OldSlaveZone",$param) and $param["OldSlaveZone"] !== null) {
            $this->OldSlaveZone = $param["OldSlaveZone"];
        }

        if (array_key_exists("NewSlaveZone",$param) and $param["NewSlaveZone"] !== null) {
            $this->NewSlaveZone = $param["NewSlaveZone"];
        }

        if (array_key_exists("BinlogSyncWay",$param) and $param["BinlogSyncWay"] !== null) {
            $this->BinlogSyncWay = $param["BinlogSyncWay"];
        }
    }
}
