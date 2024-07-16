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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifications of nodes in the cluster and disk specifications description
 *
 * @method string getDiskType() Obtain Node disk type, such as CLOUD_SSD"\"CLOUD_PREMIUM
 * @method void setDiskType(string $DiskType) Set Node disk type, such as CLOUD_SSD"\"CLOUD_PREMIUM
 * @method integer getDiskSize() Obtain Disk capacity, in GB
 * @method void setDiskSize(integer $DiskSize) Set Disk capacity, in GB
 * @method integer getDiskCount() Obtain Total number of disks
 * @method void setDiskCount(integer $DiskCount) Set Total number of disks
 * @method string getDiskDesc() Obtain Description
 * @method void setDiskDesc(string $DiskDesc) Set Description
 */
class AttachCBSSpec extends AbstractModel
{
    /**
     * @var string Node disk type, such as CLOUD_SSD"\"CLOUD_PREMIUM
     */
    public $DiskType;

    /**
     * @var integer Disk capacity, in GB
     */
    public $DiskSize;

    /**
     * @var integer Total number of disks
     */
    public $DiskCount;

    /**
     * @var string Description
     */
    public $DiskDesc;

    /**
     * @param string $DiskType Node disk type, such as CLOUD_SSD"\"CLOUD_PREMIUM
     * @param integer $DiskSize Disk capacity, in GB
     * @param integer $DiskCount Total number of disks
     * @param string $DiskDesc Description
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("DiskDesc",$param) and $param["DiskDesc"] !== null) {
            $this->DiskDesc = $param["DiskDesc"];
        }
    }
}
