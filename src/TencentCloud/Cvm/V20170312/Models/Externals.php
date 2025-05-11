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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Additional data
 *
 * @method boolean getReleaseAddress() Obtain Release Address
 * @method void setReleaseAddress(boolean $ReleaseAddress) Set Release Address
 * @method array getUnsupportNetworks() Obtain Unsupported network type. valid values: <br><li>BASIC: BASIC network</li><li>VPC1.0: private network VPC1.0</li>.
 * @method void setUnsupportNetworks(array $UnsupportNetworks) Set Unsupported network type. valid values: <br><li>BASIC: BASIC network</li><li>VPC1.0: private network VPC1.0</li>.
 * @method StorageBlock getStorageBlockAttr() Obtain Specifies the HDD local storage attributes.
 * @method void setStorageBlockAttr(StorageBlock $StorageBlockAttr) Set Specifies the HDD local storage attributes.
 */
class Externals extends AbstractModel
{
    /**
     * @var boolean Release Address
     */
    public $ReleaseAddress;

    /**
     * @var array Unsupported network type. valid values: <br><li>BASIC: BASIC network</li><li>VPC1.0: private network VPC1.0</li>.
     */
    public $UnsupportNetworks;

    /**
     * @var StorageBlock Specifies the HDD local storage attributes.
     */
    public $StorageBlockAttr;

    /**
     * @param boolean $ReleaseAddress Release Address
     * @param array $UnsupportNetworks Unsupported network type. valid values: <br><li>BASIC: BASIC network</li><li>VPC1.0: private network VPC1.0</li>.
     * @param StorageBlock $StorageBlockAttr Specifies the HDD local storage attributes.
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
