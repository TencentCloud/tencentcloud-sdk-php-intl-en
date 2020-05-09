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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Local disk information of node
 *
 * @method string getLocalDiskType() Obtain Local disk type <li>LOCAL_SATA: big data </li><li>NVME_SSD: high IO</li>
 * @method void setLocalDiskType(string $LocalDiskType) Set Local disk type <li>LOCAL_SATA: big data </li><li>NVME_SSD: high IO</li>
 * @method integer getLocalDiskSize() Obtain Size of a single local disk
 * @method void setLocalDiskSize(integer $LocalDiskSize) Set Size of a single local disk
 * @method integer getLocalDiskCount() Obtain Number of local disks
 * @method void setLocalDiskCount(integer $LocalDiskCount) Set Number of local disks
 */
class LocalDiskInfo extends AbstractModel
{
    /**
     * @var string Local disk type <li>LOCAL_SATA: big data </li><li>NVME_SSD: high IO</li>
     */
    public $LocalDiskType;

    /**
     * @var integer Size of a single local disk
     */
    public $LocalDiskSize;

    /**
     * @var integer Number of local disks
     */
    public $LocalDiskCount;

    /**
     * @param string $LocalDiskType Local disk type <li>LOCAL_SATA: big data </li><li>NVME_SSD: high IO</li>
     * @param integer $LocalDiskSize Size of a single local disk
     * @param integer $LocalDiskCount Number of local disks
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
        if (array_key_exists("LocalDiskType",$param) and $param["LocalDiskType"] !== null) {
            $this->LocalDiskType = $param["LocalDiskType"];
        }

        if (array_key_exists("LocalDiskSize",$param) and $param["LocalDiskSize"] !== null) {
            $this->LocalDiskSize = $param["LocalDiskSize"];
        }

        if (array_key_exists("LocalDiskCount",$param) and $param["LocalDiskCount"] !== null) {
            $this->LocalDiskCount = $param["LocalDiskCount"];
        }
    }
}
