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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sorting criteria for query results.
 *
 * @method string getKey() Obtain Sort by field. Valid values:
createTime: domain name creation time
certExpireTime: certificate expiration time
 * @method void setKey(string $Key) Set Sort by field. Valid values:
createTime: domain name creation time
certExpireTime: certificate expiration time
 * @method string getSequence() Obtain asc/desc. Default value: desc.
 * @method void setSequence(string $Sequence) Set asc/desc. Default value: desc.
 */
class Sort extends AbstractModel
{
    /**
     * @var string Sort by field. Valid values:
createTime: domain name creation time
certExpireTime: certificate expiration time
     */
    public $Key;

    /**
     * @var string asc/desc. Default value: desc.
     */
    public $Sequence;

    /**
     * @param string $Key Sort by field. Valid values:
createTime: domain name creation time
certExpireTime: certificate expiration time
     * @param string $Sequence asc/desc. Default value: desc.
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
