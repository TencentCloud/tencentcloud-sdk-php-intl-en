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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key pair information.
 *
 * @method string getKeyId() Obtain Key pair ID, which is the unique identifier of a key pair.
 * @method void setKeyId(string $KeyId) Set Key pair ID, which is the unique identifier of a key pair.
 * @method string getKeyName() Obtain Key pair name.
 * @method void setKeyName(string $KeyName) Set Key pair name.
 * @method string getPublicKey() Obtain Public key (in plain text) of key pair.
 * @method void setPublicKey(string $PublicKey) Set Public key (in plain text) of key pair.
 * @method array getAssociatedInstanceIds() Obtain List of IDs of instances associated with the key pair.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAssociatedInstanceIds(array $AssociatedInstanceIds) Set List of IDs of instances associated with the key pair.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPrivateKey() Obtain Private key of key pair.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateKey(string $PrivateKey) Set Private key of key pair.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class KeyPair extends AbstractModel
{
    /**
     * @var string Key pair ID, which is the unique identifier of a key pair.
     */
    public $KeyId;

    /**
     * @var string Key pair name.
     */
    public $KeyName;

    /**
     * @var string Public key (in plain text) of key pair.
     */
    public $PublicKey;

    /**
     * @var array List of IDs of instances associated with the key pair.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AssociatedInstanceIds;

    /**
     * @var string Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var string Private key of key pair.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateKey;

    /**
     * @param string $KeyId Key pair ID, which is the unique identifier of a key pair.
     * @param string $KeyName Key pair name.
     * @param string $PublicKey Public key (in plain text) of key pair.
     * @param array $AssociatedInstanceIds List of IDs of instances associated with the key pair.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PrivateKey Private key of key pair.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("AssociatedInstanceIds",$param) and $param["AssociatedInstanceIds"] !== null) {
            $this->AssociatedInstanceIds = $param["AssociatedInstanceIds"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }
    }
}
