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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The credential signature.
 *
 * @method integer getCreated() Obtain The creation time.
 * @method void setCreated(integer $Created) Set The creation time.
 * @method string getCreator() Obtain The DID of the creator.
 * @method void setCreator(string $Creator) Set The DID of the creator.
 * @method string getSaltJson() Obtain The salt value.
 * @method void setSaltJson(string $SaltJson) Set The salt value.
 * @method string getSignatureValue() Obtain The signature.
 * @method void setSignatureValue(string $SignatureValue) Set The signature.
 * @method string getType() Obtain The type.
 * @method void setType(string $Type) Set The type.
 */
class Proof extends AbstractModel
{
    /**
     * @var integer The creation time.
     */
    public $Created;

    /**
     * @var string The DID of the creator.
     */
    public $Creator;

    /**
     * @var string The salt value.
     */
    public $SaltJson;

    /**
     * @var string The signature.
     */
    public $SignatureValue;

    /**
     * @var string The type.
     */
    public $Type;

    /**
     * @param integer $Created The creation time.
     * @param string $Creator The DID of the creator.
     * @param string $SaltJson The salt value.
     * @param string $SignatureValue The signature.
     * @param string $Type The type.
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
        if (array_key_exists("Created",$param) and $param["Created"] !== null) {
            $this->Created = $param["Created"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("SaltJson",$param) and $param["SaltJson"] !== null) {
            $this->SaltJson = $param["SaltJson"];
        }

        if (array_key_exists("SignatureValue",$param) and $param["SignatureValue"] !== null) {
            $this->SignatureValue = $param["SignatureValue"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
