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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetLocalStorageExpire request structure.
 *
 * @method string getKey() Obtain Key
 * @method void setKey(string $Key) Set Key
 * @method integer getExpire() Obtain Expiration time (unit: second)
 * @method void setExpire(integer $Expire) Set Expiration time (unit: second)
 */
class SetLocalStorageExpireRequest extends AbstractModel
{
    /**
     * @var string Key
     */
    public $Key;

    /**
     * @var integer Expiration time (unit: second)
     */
    public $Expire;

    /**
     * @param string $Key Key
     * @param integer $Expire Expiration time (unit: second)
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }
    }
}
