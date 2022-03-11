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
 * Data disk information
 *
 * @method integer getDiskSize() Obtain Data disk size in GB.
 * @method void setDiskSize(integer $DiskSize) Set Data disk size in GB.
 * @method string getDiskType() Obtain Data disk type. Valid values:
- LOCAL_BASIC: local disk
- CLOUD_PREMIUM: Premium Cloud Storage

Default value: LOCAL_BASIC.
 * @method void setDiskType(string $DiskType) Set Data disk type. Valid values:
- LOCAL_BASIC: local disk
- CLOUD_PREMIUM: Premium Cloud Storage

Default value: LOCAL_BASIC.
 */
class DataDisk extends AbstractModel
{
    /**
     * @var integer Data disk size in GB.
     */
    public $DiskSize;

    /**
     * @var string Data disk type. Valid values:
- LOCAL_BASIC: local disk
- CLOUD_PREMIUM: Premium Cloud Storage

Default value: LOCAL_BASIC.
     */
    public $DiskType;

    /**
     * @param integer $DiskSize Data disk size in GB.
     * @param string $DiskType Data disk type. Valid values:
- LOCAL_BASIC: local disk
- CLOUD_PREMIUM: Premium Cloud Storage

Default value: LOCAL_BASIC.
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
        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }
    }
}
