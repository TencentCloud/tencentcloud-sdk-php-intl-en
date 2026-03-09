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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Permission resource model.
 *
 * @method string getResourceType() Obtain Resource type, Catalog, Schema.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceType(string $ResourceType) Set Resource type, Catalog, Schema.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceUri() Obtain Resource URI.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceUri(string $ResourceUri) Set Resource URI.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrivilegeResource extends AbstractModel
{
    /**
     * @var string Resource type, Catalog, Schema.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceType;

    /**
     * @var string Resource URI.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceUri;

    /**
     * @param string $ResourceType Resource type, Catalog, Schema.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceUri Resource URI.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceUri",$param) and $param["ResourceUri"] !== null) {
            $this->ResourceUri = $param["ResourceUri"];
        }
    }
}
