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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteExtension request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method string getExtensionId() Obtain Extension.
 * @method void setExtensionId(string $ExtensionId) Set Extension.
 */
class DeleteExtensionRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Extension.
     */
    public $ExtensionId;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param string $ExtensionId Extension.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("ExtensionId",$param) and $param["ExtensionId"] !== null) {
            $this->ExtensionId = $param["ExtensionId"];
        }
    }
}
