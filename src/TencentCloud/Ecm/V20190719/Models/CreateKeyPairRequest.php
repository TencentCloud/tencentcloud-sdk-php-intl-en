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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKeyPair request structure.
 *
 * @method string getKeyName() Obtain Key pair name, which can contain up to 25 digits, letters, and underscores.
 * @method void setKeyName(string $KeyName) Set Key pair name, which can contain up to 25 digits, letters, and underscores.
 */
class CreateKeyPairRequest extends AbstractModel
{
    /**
     * @var string Key pair name, which can contain up to 25 digits, letters, and underscores.
     */
    public $KeyName;

    /**
     * @param string $KeyName Key pair name, which can contain up to 25 digits, letters, and underscores.
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }
    }
}
