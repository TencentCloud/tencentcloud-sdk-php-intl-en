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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sorting conditions for query results.
 *
 * @method string getKey() Obtain Fields that can be sorted. Values:
`createTime`: Domain name creation time
`certExpireTime`: Certificate expiration time
`certDeployTime`: Certificate deployment time
 * @method void setKey(string $Key) Set Fields that can be sorted. Values:
`createTime`: Domain name creation time
`certExpireTime`: Certificate expiration time
`certDeployTime`: Certificate deployment time
 * @method string getSequence() Obtain Sorting order. Valid values: `asc` and `desc` (default).
 * @method void setSequence(string $Sequence) Set Sorting order. Valid values: `asc` and `desc` (default).
 */
class CertSort extends AbstractModel
{
    /**
     * @var string Fields that can be sorted. Values:
`createTime`: Domain name creation time
`certExpireTime`: Certificate expiration time
`certDeployTime`: Certificate deployment time
     */
    public $Key;

    /**
     * @var string Sorting order. Valid values: `asc` and `desc` (default).
     */
    public $Sequence;

    /**
     * @param string $Key Fields that can be sorted. Values:
`createTime`: Domain name creation time
`certExpireTime`: Certificate expiration time
`certDeployTime`: Certificate deployment time
     * @param string $Sequence Sorting order. Valid values: `asc` and `desc` (default).
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

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }
    }
}
