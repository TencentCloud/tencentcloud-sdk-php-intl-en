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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSecurityLastUsed request structure.
 *
 * @method array getSecretIdList() Obtain Key ID list query. Up to 10 key IDs can be queried.
 * @method void setSecretIdList(array $SecretIdList) Set Key ID list query. Up to 10 key IDs can be queried.
 */
class GetSecurityLastUsedRequest extends AbstractModel
{
    /**
     * @var array Key ID list query. Up to 10 key IDs can be queried.
     */
    public $SecretIdList;

    /**
     * @param array $SecretIdList Key ID list query. Up to 10 key IDs can be queried.
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
        if (array_key_exists("SecretIdList",$param) and $param["SecretIdList"] !== null) {
            $this->SecretIdList = $param["SecretIdList"];
        }
    }
}
