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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tracking set storage information
 *
 * @method string getStorageType() Obtain Storage type (Valid values: cos, cls)
 * @method void setStorageType(string $StorageType) Set Storage type (Valid values: cos, cls)
 * @method string getStorageRegion() Obtain Storage region
 * @method void setStorageRegion(string $StorageRegion) Set Storage region
 * @method string getStorageName() Obtain Storage name. For COS, the storage name is the custom bucket name, which can contain up to 50 lowercase letters, digits, and hyphens. It cannot contain "-APPID" and cannot start or end with a hyphen. For CLS, the storage name is the log topic ID, which can contain 1-50 characters.
 * @method void setStorageName(string $StorageName) Set Storage name. For COS, the storage name is the custom bucket name, which can contain up to 50 lowercase letters, digits, and hyphens. It cannot contain "-APPID" and cannot start or end with a hyphen. For CLS, the storage name is the log topic ID, which can contain 1-50 characters.
 * @method string getStoragePrefix() Obtain Storage directory prefix. The COS log file prefix can only contain 3-40 letters and digits.
 * @method void setStoragePrefix(string $StoragePrefix) Set Storage directory prefix. The COS log file prefix can only contain 3-40 letters and digits.
 */
class Storage extends AbstractModel
{
    /**
     * @var string Storage type (Valid values: cos, cls)
     */
    public $StorageType;

    /**
     * @var string Storage region
     */
    public $StorageRegion;

    /**
     * @var string Storage name. For COS, the storage name is the custom bucket name, which can contain up to 50 lowercase letters, digits, and hyphens. It cannot contain "-APPID" and cannot start or end with a hyphen. For CLS, the storage name is the log topic ID, which can contain 1-50 characters.
     */
    public $StorageName;

    /**
     * @var string Storage directory prefix. The COS log file prefix can only contain 3-40 letters and digits.
     */
    public $StoragePrefix;

    /**
     * @param string $StorageType Storage type (Valid values: cos, cls)
     * @param string $StorageRegion Storage region
     * @param string $StorageName Storage name. For COS, the storage name is the custom bucket name, which can contain up to 50 lowercase letters, digits, and hyphens. It cannot contain "-APPID" and cannot start or end with a hyphen. For CLS, the storage name is the log topic ID, which can contain 1-50 characters.
     * @param string $StoragePrefix Storage directory prefix. The COS log file prefix can only contain 3-40 letters and digits.
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("StorageName",$param) and $param["StorageName"] !== null) {
            $this->StorageName = $param["StorageName"];
        }

        if (array_key_exists("StoragePrefix",$param) and $param["StoragePrefix"] !== null) {
            $this->StoragePrefix = $param["StoragePrefix"];
        }
    }
}
