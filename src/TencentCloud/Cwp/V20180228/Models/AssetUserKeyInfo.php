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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the asset management account key
 *
 * @method string getValue() Obtain Public key value
 * @method void setValue(string $Value) Set Public key value
 * @method string getComment() Obtain Public key remarks
 * @method void setComment(string $Comment) Set Public key remarks
 * @method string getEncryptType() Obtain Encryption method
 * @method void setEncryptType(string $EncryptType) Set Encryption method
 */
class AssetUserKeyInfo extends AbstractModel
{
    /**
     * @var string Public key value
     */
    public $Value;

    /**
     * @var string Public key remarks
     */
    public $Comment;

    /**
     * @var string Encryption method
     */
    public $EncryptType;

    /**
     * @param string $Value Public key value
     * @param string $Comment Public key remarks
     * @param string $EncryptType Encryption method
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }
    }
}
