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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMNGOfflinePackageURL request structure.
 *
 * @method string getMNPId() Obtain <p>Mini game appid</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini game appid</p>
 * @method string getPlatformId() Obtain <p>Platform ID</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID</p>
 */
class DescribeMNGOfflinePackageURLRequest extends AbstractModel
{
    /**
     * @var string <p>Mini game appid</p>
     */
    public $MNPId;

    /**
     * @var string <p>Platform ID</p>
     */
    public $PlatformId;

    /**
     * @param string $MNPId <p>Mini game appid</p>
     * @param string $PlatformId <p>Platform ID</p>
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }
    }
}
