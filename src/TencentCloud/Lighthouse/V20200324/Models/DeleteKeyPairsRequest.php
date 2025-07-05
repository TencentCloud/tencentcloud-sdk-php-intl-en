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
 * DeleteKeyPairs request structure.
 *
 * @method array getKeyIds() Obtain Key pair ID list. Each request can contain up to 10 key pairs.
 * @method void setKeyIds(array $KeyIds) Set Key pair ID list. Each request can contain up to 10 key pairs.
 */
class DeleteKeyPairsRequest extends AbstractModel
{
    /**
     * @var array Key pair ID list. Each request can contain up to 10 key pairs.
     */
    public $KeyIds;

    /**
     * @param array $KeyIds Key pair ID list. Each request can contain up to 10 key pairs.
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
