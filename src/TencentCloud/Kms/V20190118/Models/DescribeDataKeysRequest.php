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
 * DescribeDataKeys request structure.
 *
 * @method array getDataKeyIds() Obtain Specifies the ID list of datakeys to query. supports up to 100 DataKey ids in a batch query.
 * @method void setDataKeyIds(array $DataKeyIds) Set Specifies the ID list of datakeys to query. supports up to 100 DataKey ids in a batch query.
 */
class DescribeDataKeysRequest extends AbstractModel
{
    /**
     * @var array Specifies the ID list of datakeys to query. supports up to 100 DataKey ids in a batch query.
     */
    public $DataKeyIds;

    /**
     * @param array $DataKeyIds Specifies the ID list of datakeys to query. supports up to 100 DataKey ids in a batch query.
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
        if (array_key_exists("DataKeyIds",$param) and $param["DataKeyIds"] !== null) {
            $this->DataKeyIds = $param["DataKeyIds"];
        }
    }
}
