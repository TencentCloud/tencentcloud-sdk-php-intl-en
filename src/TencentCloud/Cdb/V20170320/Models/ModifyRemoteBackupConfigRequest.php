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
 * ModifyRemoteBackupConfig request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method string getRemoteBackupSave() Obtain Remote data backup. Valid values:`off` (disable), `on` (enable).
 * @method void setRemoteBackupSave(string $RemoteBackupSave) Set Remote data backup. Valid values:`off` (disable), `on` (enable).
 * @method string getRemoteBinlogSave() Obtain Remote log backup. Valid values: `off` (disable), `on` (enable). Only when the parameter `RemoteBackupSave` is `on`, the `RemoteBinlogSave` parameter can be set to `on`.
 * @method void setRemoteBinlogSave(string $RemoteBinlogSave) Set Remote log backup. Valid values: `off` (disable), `on` (enable). Only when the parameter `RemoteBackupSave` is `on`, the `RemoteBinlogSave` parameter can be set to `on`.
 * @method array getRemoteRegion() Obtain The custom backup region list
 * @method void setRemoteRegion(array $RemoteRegion) Set The custom backup region list
 * @method integer getExpireDays() Obtain Remote backup retention period in days
 * @method void setExpireDays(integer $ExpireDays) Set Remote backup retention period in days
 */
class ModifyRemoteBackupConfigRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     */
    public $InstanceId;

    /**
     * @var string Remote data backup. Valid values:`off` (disable), `on` (enable).
     */
    public $RemoteBackupSave;

    /**
     * @var string Remote log backup. Valid values: `off` (disable), `on` (enable). Only when the parameter `RemoteBackupSave` is `on`, the `RemoteBinlogSave` parameter can be set to `on`.
     */
    public $RemoteBinlogSave;

    /**
     * @var array The custom backup region list
     */
    public $RemoteRegion;

    /**
     * @var integer Remote backup retention period in days
     */
    public $ExpireDays;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     * @param string $RemoteBackupSave Remote data backup. Valid values:`off` (disable), `on` (enable).
     * @param string $RemoteBinlogSave Remote log backup. Valid values: `off` (disable), `on` (enable). Only when the parameter `RemoteBackupSave` is `on`, the `RemoteBinlogSave` parameter can be set to `on`.
     * @param array $RemoteRegion The custom backup region list
     * @param integer $ExpireDays Remote backup retention period in days
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

        if (array_key_exists("RemoteBackupSave",$param) and $param["RemoteBackupSave"] !== null) {
            $this->RemoteBackupSave = $param["RemoteBackupSave"];
        }

        if (array_key_exists("RemoteBinlogSave",$param) and $param["RemoteBinlogSave"] !== null) {
            $this->RemoteBinlogSave = $param["RemoteBinlogSave"];
        }

        if (array_key_exists("RemoteRegion",$param) and $param["RemoteRegion"] !== null) {
            $this->RemoteRegion = $param["RemoteRegion"];
        }

        if (array_key_exists("ExpireDays",$param) and $param["ExpireDays"] !== null) {
            $this->ExpireDays = $param["ExpireDays"];
        }
    }
}
