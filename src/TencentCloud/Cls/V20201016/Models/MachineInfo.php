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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Machine status information
 *
 * @method string getIp() Obtain Machine IP
 * @method void setIp(string $Ip) Set Machine IP
 * @method string getInstanceID() Obtain Machine instance IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceID(string $InstanceID) Set Machine instance IDNote: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Machine status. Valid values: `0`: exceptional; `1`: normal
 * @method void setStatus(integer $Status) Set Machine status. Valid values: `0`: exceptional; `1`: normal
 * @method string getOfflineTime() Obtain Machine disconnection time. If the value is empty, the machine is normal. If the machine is exceptional, a specific value will be returned.
 * @method void setOfflineTime(string $OfflineTime) Set Machine disconnection time. If the value is empty, the machine is normal. If the machine is exceptional, a specific value will be returned.
 * @method integer getAutoUpdate() Obtain Whether to enable automatic update for the machine. Valid values: `0`: no; `1`: yes
 * @method void setAutoUpdate(integer $AutoUpdate) Set Whether to enable automatic update for the machine. Valid values: `0`: no; `1`: yes
 * @method string getVersion() Obtain Current machine version number
 * @method void setVersion(string $Version) Set Current machine version number
 * @method integer getUpdateStatus() Obtain Machine upgrade status. 0: Upgrade successful; 1: Upgrading; -1: Upgrade failed.
 * @method void setUpdateStatus(integer $UpdateStatus) Set Machine upgrade status. 0: Upgrade successful; 1: Upgrading; -1: Upgrade failed.
 * @method integer getErrCode() Obtain Machine upgrade result identifier.0: Success; 1200: Upgrade successful; Other values indicate exceptions.
 * @method void setErrCode(integer $ErrCode) Set Machine upgrade result identifier.0: Success; 1200: Upgrade successful; Other values indicate exceptions.
 * @method string getErrMsg() Obtain Machine upgrade result information."ok": Success; "update success": Upgrade successful; Other values indicate the reason for failure.
 * @method void setErrMsg(string $ErrMsg) Set Machine upgrade result information."ok": Success; "update success": Upgrade successful; Other values indicate the reason for failure.
 */
class MachineInfo extends AbstractModel
{
    /**
     * @var string Machine IP
     */
    public $Ip;

    /**
     * @var string Machine instance IDNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceID;

    /**
     * @var integer Machine status. Valid values: `0`: exceptional; `1`: normal
     */
    public $Status;

    /**
     * @var string Machine disconnection time. If the value is empty, the machine is normal. If the machine is exceptional, a specific value will be returned.
     */
    public $OfflineTime;

    /**
     * @var integer Whether to enable automatic update for the machine. Valid values: `0`: no; `1`: yes
     */
    public $AutoUpdate;

    /**
     * @var string Current machine version number
     */
    public $Version;

    /**
     * @var integer Machine upgrade status. 0: Upgrade successful; 1: Upgrading; -1: Upgrade failed.
     */
    public $UpdateStatus;

    /**
     * @var integer Machine upgrade result identifier.0: Success; 1200: Upgrade successful; Other values indicate exceptions.
     */
    public $ErrCode;

    /**
     * @var string Machine upgrade result information."ok": Success; "update success": Upgrade successful; Other values indicate the reason for failure.
     */
    public $ErrMsg;

    /**
     * @param string $Ip Machine IP
     * @param string $InstanceID Machine instance IDNote: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Machine status. Valid values: `0`: exceptional; `1`: normal
     * @param string $OfflineTime Machine disconnection time. If the value is empty, the machine is normal. If the machine is exceptional, a specific value will be returned.
     * @param integer $AutoUpdate Whether to enable automatic update for the machine. Valid values: `0`: no; `1`: yes
     * @param string $Version Current machine version number
     * @param integer $UpdateStatus Machine upgrade status. 0: Upgrade successful; 1: Upgrading; -1: Upgrade failed.
     * @param integer $ErrCode Machine upgrade result identifier.0: Success; 1200: Upgrade successful; Other values indicate exceptions.
     * @param string $ErrMsg Machine upgrade result information."ok": Success; "update success": Upgrade successful; Other values indicate the reason for failure.
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("AutoUpdate",$param) and $param["AutoUpdate"] !== null) {
            $this->AutoUpdate = $param["AutoUpdate"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("UpdateStatus",$param) and $param["UpdateStatus"] !== null) {
            $this->UpdateStatus = $param["UpdateStatus"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
