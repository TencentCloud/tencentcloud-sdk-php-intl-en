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
 * EnableKeyRotation request structure.
 *
 * @method string getKeyId() Obtain Unique CMK ID
 * @method void setKeyId(string $KeyId) Set Unique CMK ID
 * @method integer getRotateDays() Obtain The interval between each key rotation in days. Value range: 7 - 365 (default).
 * @method void setRotateDays(integer $RotateDays) Set The interval between each key rotation in days. Value range: 7 - 365 (default).
 */
class EnableKeyRotationRequest extends AbstractModel
{
    /**
     * @var string Unique CMK ID
     */
    public $KeyId;

    /**
     * @var integer The interval between each key rotation in days. Value range: 7 - 365 (default).
     */
    public $RotateDays;

    /**
     * @param string $KeyId Unique CMK ID
     * @param integer $RotateDays The interval between each key rotation in days. Value range: 7 - 365 (default).
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("RotateDays",$param) and $param["RotateDays"] !== null) {
            $this->RotateDays = $param["RotateDays"];
        }
    }
}
