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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Duplicate document handling method
 *
 * @method integer getCheckType() Obtain Duplicate document identification method, 1: By document content, i.e., using the cos_hash field to determine whether duplicates exist
 * @method void setCheckType(integer $CheckType) Set Duplicate document identification method, 1: By document content, i.e., using the cos_hash field to determine whether duplicates exist
 * @method integer getHandleType() Obtain Duplicate document handling method, 1: Return an error, 2: Skip and return the business ID of the duplicate document
 * @method void setHandleType(integer $HandleType) Set Duplicate document handling method, 1: Return an error, 2: Skip and return the business ID of the duplicate document
 */
class DuplicateFileHandle extends AbstractModel
{
    /**
     * @var integer Duplicate document identification method, 1: By document content, i.e., using the cos_hash field to determine whether duplicates exist
     */
    public $CheckType;

    /**
     * @var integer Duplicate document handling method, 1: Return an error, 2: Skip and return the business ID of the duplicate document
     */
    public $HandleType;

    /**
     * @param integer $CheckType Duplicate document identification method, 1: By document content, i.e., using the cos_hash field to determine whether duplicates exist
     * @param integer $HandleType Duplicate document handling method, 1: Return an error, 2: Skip and return the business ID of the duplicate document
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
        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("HandleType",$param) and $param["HandleType"] !== null) {
            $this->HandleType = $param["HandleType"];
        }
    }
}
