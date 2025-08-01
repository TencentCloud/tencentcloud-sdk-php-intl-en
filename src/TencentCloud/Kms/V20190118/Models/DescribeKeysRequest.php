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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKeys request structure.
 *
 * @method array getKeyIds() Obtain List of IDs of the CMKs to be queried in batches. Up to 100 `KeyId` values are supported in one query.
 * @method void setKeyIds(array $KeyIds) Set List of IDs of the CMKs to be queried in batches. Up to 100 `KeyId` values are supported in one query.
 */
class DescribeKeysRequest extends AbstractModel
{
    /**
     * @var array List of IDs of the CMKs to be queried in batches. Up to 100 `KeyId` values are supported in one query.
     */
    public $KeyIds;

    /**
     * @param array $KeyIds List of IDs of the CMKs to be queried in batches. Up to 100 `KeyId` values are supported in one query.
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
