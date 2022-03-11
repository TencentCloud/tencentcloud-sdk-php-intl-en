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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Disk information
 *
 * @method string getDiskType() Obtain Disk type: LOCAL_BASIC.
 * @method void setDiskType(string $DiskType) Set Disk type: LOCAL_BASIC.
 * @method string getDiskId() Obtain Disk ID
 * @method void setDiskId(string $DiskId) Set Disk ID
 * @method integer getDiskSize() Obtain Disk size in GB
 * @method void setDiskSize(integer $DiskSize) Set Disk size in GB
 */
class DiskInfo extends AbstractModel
{
    /**
     * @var string Disk type: LOCAL_BASIC.
     */
    public $DiskType;

    /**
     * @var string Disk ID
     */
    public $DiskId;

    /**
     * @var integer Disk size in GB
     */
    public $DiskSize;

    /**
     * @param string $DiskType Disk type: LOCAL_BASIC.
     * @param string $DiskId Disk ID
     * @param integer $DiskSize Disk size in GB
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

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
