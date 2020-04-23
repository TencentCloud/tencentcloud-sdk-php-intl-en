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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TencentDB instance backup time configuration information
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getStartBackupTime() Obtain Start time of daily backup window in the format of `mm:ss`, such as 22:00
 * @method void setStartBackupTime(string $StartBackupTime) Set Start time of daily backup window in the format of `mm:ss`, such as 22:00
 * @method string getEndBackupTime() Obtain End time of daily backup window in the format of `mm:ss`, such as 23:00
 * @method void setEndBackupTime(string $EndBackupTime) Set End time of daily backup window in the format of `mm:ss`, such as 23:00
 */
class DBBackupTimeConfig extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Start time of daily backup window in the format of `mm:ss`, such as 22:00
     */
    public $StartBackupTime;

    /**
     * @var string End time of daily backup window in the format of `mm:ss`, such as 23:00
     */
    public $EndBackupTime;

    /**
     * @param string $InstanceId Instance ID
     * @param string $StartBackupTime Start time of daily backup window in the format of `mm:ss`, such as 22:00
     * @param string $EndBackupTime End time of daily backup window in the format of `mm:ss`, such as 23:00
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

        if (array_key_exists("StartBackupTime",$param) and $param["StartBackupTime"] !== null) {
            $this->StartBackupTime = $param["StartBackupTime"];
        }

        if (array_key_exists("EndBackupTime",$param) and $param["EndBackupTime"] !== null) {
            $this->EndBackupTime = $param["EndBackupTime"];
        }
    }
}
