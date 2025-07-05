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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Push authentication key information.
 *
 * @method string getDomainName() Obtain Domain name.
 * @method void setDomainName(string $DomainName) Set Domain name.
 * @method integer getEnable() Obtain Whether to enable. 0: disabled; 1: enabled.
 * @method void setEnable(integer $Enable) Set Whether to enable. 0: disabled; 1: enabled.
 * @method string getMasterAuthKey() Obtain Master authentication key.
 * @method void setMasterAuthKey(string $MasterAuthKey) Set Master authentication key.
 * @method string getBackupAuthKey() Obtain Standby authentication key.
 * @method void setBackupAuthKey(string $BackupAuthKey) Set Standby authentication key.
 * @method integer getAuthDelta() Obtain Validity period in seconds.
 * @method void setAuthDelta(integer $AuthDelta) Set Validity period in seconds.
 */
class PushAuthKeyInfo extends AbstractModel
{
    /**
     * @var string Domain name.
     */
    public $DomainName;

    /**
     * @var integer Whether to enable. 0: disabled; 1: enabled.
     */
    public $Enable;

    /**
     * @var string Master authentication key.
     */
    public $MasterAuthKey;

    /**
     * @var string Standby authentication key.
     */
    public $BackupAuthKey;

    /**
     * @var integer Validity period in seconds.
     */
    public $AuthDelta;

    /**
     * @param string $DomainName Domain name.
     * @param integer $Enable Whether to enable. 0: disabled; 1: enabled.
     * @param string $MasterAuthKey Master authentication key.
     * @param string $BackupAuthKey Standby authentication key.
     * @param integer $AuthDelta Validity period in seconds.
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("MasterAuthKey",$param) and $param["MasterAuthKey"] !== null) {
            $this->MasterAuthKey = $param["MasterAuthKey"];
        }

        if (array_key_exists("BackupAuthKey",$param) and $param["BackupAuthKey"] !== null) {
            $this->BackupAuthKey = $param["BackupAuthKey"];
        }

        if (array_key_exists("AuthDelta",$param) and $param["AuthDelta"] !== null) {
            $this->AuthDelta = $param["AuthDelta"];
        }
    }
}
