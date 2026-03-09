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
 * BusinessMetadata
 *
 * @method array getTagNames() Obtain Tag name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagNames(array $TagNames) Set Tag name.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BusinessMetadata extends AbstractModel
{
    /**
     * @var array Tag name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagNames;

    /**
     * @param array $TagNames Tag name.
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
        if (array_key_exists("TagNames",$param) and $param["TagNames"] !== null) {
            $this->TagNames = $param["TagNames"];
        }
    }
}
