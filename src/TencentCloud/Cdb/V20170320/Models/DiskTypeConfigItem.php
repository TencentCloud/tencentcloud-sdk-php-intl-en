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
 * Disk sale type
 *
 * @method string getDeviceType() Obtain Type of instance corresponding to the disk. Only support single node (cloud disk) and cloud disk edition.
 * @method void setDeviceType(string $DeviceType) Set Type of instance corresponding to the disk. Only support single node (cloud disk) and cloud disk edition.
 * @method array getDiskType() Obtain List of disk types to choose.
 * @method void setDiskType(array $DiskType) Set List of disk types to choose.
 */
class DiskTypeConfigItem extends AbstractModel
{
    /**
     * @var string Type of instance corresponding to the disk. Only support single node (cloud disk) and cloud disk edition.
     */
    public $DeviceType;

    /**
     * @var array List of disk types to choose.
     */
    public $DiskType;

    /**
     * @param string $DeviceType Type of instance corresponding to the disk. Only support single node (cloud disk) and cloud disk edition.
     * @param array $DiskType List of disk types to choose.
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
        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }
    }
}
