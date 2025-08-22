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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCollationTimeZone request structure.
 *
 * @method string getMachineType() Obtain Host type of the purchased instance. PM: physical server; CLOUD_PREMIUM: CVM with Premium Cloud Disk;
CLOUD_SSD: CVM with Cloud SSD; CLOUD_HSSD: CVM with Enhanced SSD; CLOUD_TSSD: CVM with Tremendous SSD; CLOUD_BSSD: CVM with Balanced SSD; CLOUD_BASIC: CVM with cloud disk. PM is set as the default value.
 * @method void setMachineType(string $MachineType) Set Host type of the purchased instance. PM: physical server; CLOUD_PREMIUM: CVM with Premium Cloud Disk;
CLOUD_SSD: CVM with Cloud SSD; CLOUD_HSSD: CVM with Enhanced SSD; CLOUD_TSSD: CVM with Tremendous SSD; CLOUD_BSSD: CVM with Balanced SSD; CLOUD_BASIC: CVM with cloud disk. PM is set as the default value.
 * @method string getDBVersion() Obtain Version number of the purchased instance.
 * @method void setDBVersion(string $DBVersion) Set Version number of the purchased instance.
 */
class DescribeCollationTimeZoneRequest extends AbstractModel
{
    /**
     * @var string Host type of the purchased instance. PM: physical server; CLOUD_PREMIUM: CVM with Premium Cloud Disk;
CLOUD_SSD: CVM with Cloud SSD; CLOUD_HSSD: CVM with Enhanced SSD; CLOUD_TSSD: CVM with Tremendous SSD; CLOUD_BSSD: CVM with Balanced SSD; CLOUD_BASIC: CVM with cloud disk. PM is set as the default value.
     */
    public $MachineType;

    /**
     * @var string Version number of the purchased instance.
     */
    public $DBVersion;

    /**
     * @param string $MachineType Host type of the purchased instance. PM: physical server; CLOUD_PREMIUM: CVM with Premium Cloud Disk;
CLOUD_SSD: CVM with Cloud SSD; CLOUD_HSSD: CVM with Enhanced SSD; CLOUD_TSSD: CVM with Tremendous SSD; CLOUD_BSSD: CVM with Balanced SSD; CLOUD_BASIC: CVM with cloud disk. PM is set as the default value.
     * @param string $DBVersion Version number of the purchased instance.
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
        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }
    }
}
