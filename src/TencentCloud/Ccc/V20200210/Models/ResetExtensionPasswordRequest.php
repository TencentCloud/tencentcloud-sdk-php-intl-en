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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetExtensionPassword request structure.
 *
 * @method integer getSdkAppId() Obtain TCCC instance application ID.
 * @method void setSdkAppId(integer $SdkAppId) Set TCCC instance application ID.
 * @method string getExtensionId() Obtain Extension
 * @method void setExtensionId(string $ExtensionId) Set Extension
 */
class ResetExtensionPasswordRequest extends AbstractModel
{
    /**
     * @var integer TCCC instance application ID.
     */
    public $SdkAppId;

    /**
     * @var string Extension
     */
    public $ExtensionId;

    /**
     * @param integer $SdkAppId TCCC instance application ID.
     * @param string $ExtensionId Extension
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
