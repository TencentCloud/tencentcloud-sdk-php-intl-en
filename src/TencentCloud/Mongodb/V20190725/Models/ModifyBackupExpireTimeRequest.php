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
 * ModifyBackupExpireTime request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getExpireTime() Obtain <p>Expiration time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Expiration time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method array getBackupIds() Obtain <p>Backup ID.</p>
 * @method void setBackupIds(array $BackupIds) Set <p>Backup ID.</p>
 */
class ModifyBackupExpireTimeRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Expiration time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $ExpireTime;

    /**
     * @var array <p>Backup ID.</p>
     */
    public $BackupIds;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $ExpireTime <p>Expiration time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param array $BackupIds <p>Backup ID.</p>
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

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("BackupIds",$param) and $param["BackupIds"] !== null) {
            $this->BackupIds = $param["BackupIds"];
        }
    }
}
