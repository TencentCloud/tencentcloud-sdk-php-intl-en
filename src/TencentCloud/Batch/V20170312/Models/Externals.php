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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method boolean getReleaseAddress() 获取Release address
Note: This field may return null, indicating that no valid value is found.
 * @method void setReleaseAddress(boolean $ReleaseAddress) 设置Release address
Note: This field may return null, indicating that no valid value is found.
 * @method array getUnsupportNetworks() 获取Unsupported network types
Note: This field may return null, indicating that no valid value is found.
 * @method void setUnsupportNetworks(array $UnsupportNetworks) 设置Unsupported network types
Note: This field may return null, indicating that no valid value is found.
 * @method StorageBlock getStorageBlockAttr() 获取Attributes of local HDD storage
Note: This field may return null, indicating that no valid value is found.
 * @method void setStorageBlockAttr(StorageBlock $StorageBlockAttr) 设置Attributes of local HDD storage
Note: This field may return null, indicating that no valid value is found.
 */

/**
 *Additional data
 */
class Externals extends AbstractModel
{
    /**
     * @var boolean Release address
Note: This field may return null, indicating that no valid value is found.
     */
    public $ReleaseAddress;

    /**
     * @var array Unsupported network types
Note: This field may return null, indicating that no valid value is found.
     */
    public $UnsupportNetworks;

    /**
     * @var StorageBlock Attributes of local HDD storage
Note: This field may return null, indicating that no valid value is found.
     */
    public $StorageBlockAttr;
    /**
     * @param boolean $ReleaseAddress Release address
Note: This field may return null, indicating that no valid value is found.
     * @param array $UnsupportNetworks Unsupported network types
Note: This field may return null, indicating that no valid value is found.
     * @param StorageBlock $StorageBlockAttr Attributes of local HDD storage
Note: This field may return null, indicating that no valid value is found.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ReleaseAddress",$param) and $param["ReleaseAddress"] !== null) {
            $this->ReleaseAddress = $param["ReleaseAddress"];
        }

        if (array_key_exists("UnsupportNetworks",$param) and $param["UnsupportNetworks"] !== null) {
            $this->UnsupportNetworks = $param["UnsupportNetworks"];
        }

        if (array_key_exists("StorageBlockAttr",$param) and $param["StorageBlockAttr"] !== null) {
            $this->StorageBlockAttr = new StorageBlock();
            $this->StorageBlockAttr->deserialize($param["StorageBlockAttr"]);
        }
    }
}
