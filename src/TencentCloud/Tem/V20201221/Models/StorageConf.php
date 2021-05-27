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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Storage volume configuration
 *
 * @method string getStorageVolName() Obtain Storage volume name
 * @method void setStorageVolName(string $StorageVolName) Set Storage volume name
 * @method string getStorageVolPath() Obtain Storage volume path
 * @method void setStorageVolPath(string $StorageVolPath) Set Storage volume path
 * @method string getStorageVolIp() Obtain Storage volume IP
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStorageVolIp(string $StorageVolIp) Set Storage volume IP
Note: this field may return null, indicating that no valid values can be obtained.
 */
class StorageConf extends AbstractModel
{
    /**
     * @var string Storage volume name
     */
    public $StorageVolName;

    /**
     * @var string Storage volume path
     */
    public $StorageVolPath;

    /**
     * @var string Storage volume IP
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StorageVolIp;

    /**
     * @param string $StorageVolName Storage volume name
     * @param string $StorageVolPath Storage volume path
     * @param string $StorageVolIp Storage volume IP
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
        if (array_key_exists("StorageVolName",$param) and $param["StorageVolName"] !== null) {
            $this->StorageVolName = $param["StorageVolName"];
        }

        if (array_key_exists("StorageVolPath",$param) and $param["StorageVolPath"] !== null) {
            $this->StorageVolPath = $param["StorageVolPath"];
        }

        if (array_key_exists("StorageVolIp",$param) and $param["StorageVolIp"] !== null) {
            $this->StorageVolIp = $param["StorageVolIp"];
        }
    }
}
