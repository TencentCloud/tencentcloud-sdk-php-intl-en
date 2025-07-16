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
 * DisableDataKey request structure.
 *
 * @method string getDataKeyId() Obtain Specifies the unique identifier of the data key.
 * @method void setDataKeyId(string $DataKeyId) Set Specifies the unique identifier of the data key.
 */
class DisableDataKeyRequest extends AbstractModel
{
    /**
     * @var string Specifies the unique identifier of the data key.
     */
    public $DataKeyId;

    /**
     * @param string $DataKeyId Specifies the unique identifier of the data key.
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
        if (array_key_exists("DataKeyId",$param) and $param["DataKeyId"] !== null) {
            $this->DataKeyId = $param["DataKeyId"];
        }
    }
}
