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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on local HDD storage.
 *
 * @method string getType() Obtain HDD LOCAL storage type specifies the value: LOCAL_PRO.
 * @method void setType(string $Type) Set HDD LOCAL storage type specifies the value: LOCAL_PRO.
 * @method integer getMinSize() Obtain Specifies the minimum HDD local storage capacity. measurement unit: GiB.
 * @method void setMinSize(integer $MinSize) Set Specifies the minimum HDD local storage capacity. measurement unit: GiB.
 * @method integer getMaxSize() Obtain Specifies the maximum capacity of HDD local storage. measurement unit: GiB.
 * @method void setMaxSize(integer $MaxSize) Set Specifies the maximum capacity of HDD local storage. measurement unit: GiB.
 */
class StorageBlock extends AbstractModel
{
    /**
     * @var string HDD LOCAL storage type specifies the value: LOCAL_PRO.
     */
    public $Type;

    /**
     * @var integer Specifies the minimum HDD local storage capacity. measurement unit: GiB.
     */
    public $MinSize;

    /**
     * @var integer Specifies the maximum capacity of HDD local storage. measurement unit: GiB.
     */
    public $MaxSize;

    /**
     * @param string $Type HDD LOCAL storage type specifies the value: LOCAL_PRO.
     * @param integer $MinSize Specifies the minimum HDD local storage capacity. measurement unit: GiB.
     * @param integer $MaxSize Specifies the maximum capacity of HDD local storage. measurement unit: GiB.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
