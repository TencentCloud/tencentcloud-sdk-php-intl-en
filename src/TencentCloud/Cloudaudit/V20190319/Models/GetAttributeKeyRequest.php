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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAttributeKey request structure.
 *
 * @method string getWebsiteType() Obtain Website type. Valid values: zh, en. If this parameter is left empty, `zh` will be used by default
 * @method void setWebsiteType(string $WebsiteType) Set Website type. Valid values: zh, en. If this parameter is left empty, `zh` will be used by default
 */
class GetAttributeKeyRequest extends AbstractModel
{
    /**
     * @var string Website type. Valid values: zh, en. If this parameter is left empty, `zh` will be used by default
     */
    public $WebsiteType;

    /**
     * @param string $WebsiteType Website type. Valid values: zh, en. If this parameter is left empty, `zh` will be used by default
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
        if (array_key_exists("WebsiteType",$param) and $param["WebsiteType"] !== null) {
            $this->WebsiteType = $param["WebsiteType"];
        }
    }
}
