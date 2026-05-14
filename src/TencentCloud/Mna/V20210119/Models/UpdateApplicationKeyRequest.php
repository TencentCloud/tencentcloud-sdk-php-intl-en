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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateApplicationKey request structure.
 *
 * @method string getMpApplicationKey() Obtain base64 key string of the application
 * @method void setMpApplicationKey(string $MpApplicationKey) Set base64 key string of the application
 * @method string getMpApplicationId() Obtain Application ID
 * @method void setMpApplicationId(string $MpApplicationId) Set Application ID
 */
class UpdateApplicationKeyRequest extends AbstractModel
{
    /**
     * @var string base64 key string of the application
     */
    public $MpApplicationKey;

    /**
     * @var string Application ID
     */
    public $MpApplicationId;

    /**
     * @param string $MpApplicationKey base64 key string of the application
     * @param string $MpApplicationId Application ID
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
        if (array_key_exists("MpApplicationKey",$param) and $param["MpApplicationKey"] !== null) {
            $this->MpApplicationKey = $param["MpApplicationKey"];
        }

        if (array_key_exists("MpApplicationId",$param) and $param["MpApplicationId"] !== null) {
            $this->MpApplicationId = $param["MpApplicationId"];
        }
    }
}
