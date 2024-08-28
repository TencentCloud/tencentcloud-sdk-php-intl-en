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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Client Exception Information Structure
 *
 * @method string getHostIP() Obtain Host IP
 * @method void setHostIP(string $HostIP) Set Host IP
 * @method string getInstanceID() Obtain Host Instance ID
 * @method void setInstanceID(string $InstanceID) Set Host Instance ID
 * @method string getOfflineTime() Obtain Client Offline Time
 * @method void setOfflineTime(string $OfflineTime) Set Client Offline Time
 * @method string getUninstallTime() Obtain Client Uninstallation Time
 * @method void setUninstallTime(string $UninstallTime) Set Client Uninstallation Time
 * @method string getUninstallCmd() Obtain Client Uninstallation Call Chain
 * @method void setUninstallCmd(string $UninstallCmd) Set Client Uninstallation Call Chain
 * @method string getUuid() Obtain Client UUID
 * @method void setUuid(string $Uuid) Set Client UUID
 */
class RecordInfo extends AbstractModel
{
    /**
     * @var string Host IP
     */
    public $HostIP;

    /**
     * @var string Host Instance ID
     */
    public $InstanceID;

    /**
     * @var string Client Offline Time
     */
    public $OfflineTime;

    /**
     * @var string Client Uninstallation Time
     */
    public $UninstallTime;

    /**
     * @var string Client Uninstallation Call Chain
     */
    public $UninstallCmd;

    /**
     * @var string Client UUID
     */
    public $Uuid;

    /**
     * @param string $HostIP Host IP
     * @param string $InstanceID Host Instance ID
     * @param string $OfflineTime Client Offline Time
     * @param string $UninstallTime Client Uninstallation Time
     * @param string $UninstallCmd Client Uninstallation Call Chain
     * @param string $Uuid Client UUID
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
        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("UninstallTime",$param) and $param["UninstallTime"] !== null) {
            $this->UninstallTime = $param["UninstallTime"];
        }

        if (array_key_exists("UninstallCmd",$param) and $param["UninstallCmd"] !== null) {
            $this->UninstallCmd = $param["UninstallCmd"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
