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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describe the instance login related configuration and information.
 *
 * @method array getKeyIds() Obtain List of key IDs. After a key is associated, you can access the instance by using the corresponding private key. Note: This field may return [], indicating that no valid value can be obtained.
 * @method void setKeyIds(array $KeyIds) Set List of key IDs. After a key is associated, you can access the instance by using the corresponding private key. Note: This field may return [], indicating that no valid value can be obtained.
 */
class LoginSettings extends AbstractModel
{
    /**
     * @var array List of key IDs. After a key is associated, you can access the instance by using the corresponding private key. Note: This field may return [], indicating that no valid value can be obtained.
     */
    public $KeyIds;

    /**
     * @param array $KeyIds List of key IDs. After a key is associated, you can access the instance by using the corresponding private key. Note: This field may return [], indicating that no valid value can be obtained.
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
        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }
    }
}
