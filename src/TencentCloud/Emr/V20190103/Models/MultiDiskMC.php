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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Multi-cloud disk parameters
 *
 * @method integer getCount() Obtain Number of cloud disks in this type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set Number of cloud disks in this type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getType() Obtain Disk type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setType(integer $Type) Set Disk type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getVolume() Obtain Cloud disk size
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVolume(integer $Volume) Set Cloud disk size
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MultiDiskMC extends AbstractModel
{
    /**
     * @var integer Number of cloud disks in this type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @var integer Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var integer Cloud disk size
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Volume;

    /**
     * @param integer $Count Number of cloud disks in this type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Type Disk type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Volume Cloud disk size
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}
