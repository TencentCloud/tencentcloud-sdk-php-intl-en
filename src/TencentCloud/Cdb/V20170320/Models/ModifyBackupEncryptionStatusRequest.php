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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupEncryptionStatus request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-XXXX, which is the same as that displayed in the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-XXXX, which is the same as that displayed in the TencentDB console.
 * @method string getEncryptionStatus() Obtain Default encryption status for the new auto-generated physical backup files. Valid values: `on`, `off`.
 * @method void setEncryptionStatus(string $EncryptionStatus) Set Default encryption status for the new auto-generated physical backup files. Valid values: `on`, `off`.
 */
class ModifyBackupEncryptionStatusRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-XXXX, which is the same as that displayed in the TencentDB console.
     */
    public $InstanceId;

    /**
     * @var string Default encryption status for the new auto-generated physical backup files. Valid values: `on`, `off`.
     */
    public $EncryptionStatus;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-XXXX, which is the same as that displayed in the TencentDB console.
     * @param string $EncryptionStatus Default encryption status for the new auto-generated physical backup files. Valid values: `on`, `off`.
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

        if (array_key_exists("EncryptionStatus",$param) and $param["EncryptionStatus"] !== null) {
            $this->EncryptionStatus = $param["EncryptionStatus"];
        }
    }
}
