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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateKeyDescription request structure.
 *
 * @method string getDescription() Obtain New description of up to 1,024 bytes in length
 * @method void setDescription(string $Description) Set New description of up to 1,024 bytes in length
 * @method string getKeyId() Obtain ID of the CMK for which to modify the description
 * @method void setKeyId(string $KeyId) Set ID of the CMK for which to modify the description
 */
class UpdateKeyDescriptionRequest extends AbstractModel
{
    /**
     * @var string New description of up to 1,024 bytes in length
     */
    public $Description;

    /**
     * @var string ID of the CMK for which to modify the description
     */
    public $KeyId;

    /**
     * @param string $Description New description of up to 1,024 bytes in length
     * @param string $KeyId ID of the CMK for which to modify the description
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }
    }
}
