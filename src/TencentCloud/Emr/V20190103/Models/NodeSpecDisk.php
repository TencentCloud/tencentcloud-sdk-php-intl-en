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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node disk type.
 *
 * @method integer getCount() Obtain Quantity.
 * @method void setCount(integer $Count) Set Quantity.
 * @method string getName() Obtain Name.
 * @method void setName(string $Name) Set Name.
 * @method string getDiskType() Obtain Disk type.
 * @method void setDiskType(string $DiskType) Set Disk type.
 * @method integer getDefaultDiskSize() Obtain Specified disk size.
 * @method void setDefaultDiskSize(integer $DefaultDiskSize) Set Specified disk size.
 */
class NodeSpecDisk extends AbstractModel
{
    /**
     * @var integer Quantity.
     */
    public $Count;

    /**
     * @var string Name.
     */
    public $Name;

    /**
     * @var string Disk type.
     */
    public $DiskType;

    /**
     * @var integer Specified disk size.
     */
    public $DefaultDiskSize;

    /**
     * @param integer $Count Quantity.
     * @param string $Name Name.
     * @param string $DiskType Disk type.
     * @param integer $DefaultDiskSize Specified disk size.
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DefaultDiskSize",$param) and $param["DefaultDiskSize"] !== null) {
            $this->DefaultDiskSize = $param["DefaultDiskSize"];
        }
    }
}
