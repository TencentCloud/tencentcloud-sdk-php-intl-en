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
 * @method string getKeyId() Obtain 
 * @method void setKeyId(string $KeyId) Set 
 * @method string getKeySpec() Obtain Specifies the encryption algorithm and size of the `DataKey`. Valid values: AES_128, AES_256. Either `KeySpec` or `NumberOfBytes` must be specified.
 * @method void setKeySpec(string $KeySpec) Set Specifies the encryption algorithm and size of the `DataKey`. Valid values: AES_128, AES_256. Either `KeySpec` or `NumberOfBytes` must be specified.
 * @method integer getNumberOfBytes() Obtain Length of the `DataKey`. If both `NumberOfBytes` and `KeySpec` are specified, `NumberOfBytes` will prevail. Minimum value: 1; maximum value: 1024. Either `KeySpec` or `NumberOfBytes` must be specified.
 * @method void setNumberOfBytes(integer $NumberOfBytes) Set Length of the `DataKey`. If both `NumberOfBytes` and `KeySpec` are specified, `NumberOfBytes` will prevail. Minimum value: 1; maximum value: 1024. Either `KeySpec` or `NumberOfBytes` must be specified.
 * @method string getEncryptionContext() Obtain 
 * @method void setEncryptionContext(string $EncryptionContext) Set 
 */

/**
 *GenerateDataKey request structure.
 */
class GenerateDataKeyRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $KeyId;

    /**
     * @var string Specifies the encryption algorithm and size of the `DataKey`. Valid values: AES_128, AES_256. Either `KeySpec` or `NumberOfBytes` must be specified.
     */
    public $KeySpec;

    /**
     * @var integer Length of the `DataKey`. If both `NumberOfBytes` and `KeySpec` are specified, `NumberOfBytes` will prevail. Minimum value: 1; maximum value: 1024. Either `KeySpec` or `NumberOfBytes` must be specified.
     */
    public $NumberOfBytes;

    /**
     * @var string 
     */
    public $EncryptionContext;
    /**
     * @param string $KeyId 
     * @param string $KeySpec Specifies the encryption algorithm and size of the `DataKey`. Valid values: AES_128, AES_256. Either `KeySpec` or `NumberOfBytes` must be specified.
     * @param integer $NumberOfBytes Length of the `DataKey`. If both `NumberOfBytes` and `KeySpec` are specified, `NumberOfBytes` will prevail. Minimum value: 1; maximum value: 1024. Either `KeySpec` or `NumberOfBytes` must be specified.
     * @param string $EncryptionContext 
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

        if (array_key_exists("KeySpec",$param) and $param["KeySpec"] !== null) {
            $this->KeySpec = $param["KeySpec"];
        }

        if (array_key_exists("NumberOfBytes",$param) and $param["NumberOfBytes"] !== null) {
            $this->NumberOfBytes = $param["NumberOfBytes"];
        }

        if (array_key_exists("EncryptionContext",$param) and $param["EncryptionContext"] !== null) {
            $this->EncryptionContext = $param["EncryptionContext"];
        }
    }
}
