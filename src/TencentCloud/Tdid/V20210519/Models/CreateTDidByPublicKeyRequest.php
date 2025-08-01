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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTDidByPublicKey request structure.
 *
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method string getPublicKey() Obtain The public key.
 * @method void setPublicKey(string $PublicKey) Set The public key.
 * @method string getEncryptPubKey() Obtain The encrypted public key.
 * @method void setEncryptPubKey(string $EncryptPubKey) Set The encrypted public key.
 */
class CreateTDidByPublicKeyRequest extends AbstractModel
{
    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var string The public key.
     */
    public $PublicKey;

    /**
     * @var string The encrypted public key.
     */
    public $EncryptPubKey;

    /**
     * @param string $ClusterId The network ID.
     * @param integer $GroupId The group ID.
     * @param string $PublicKey The public key.
     * @param string $EncryptPubKey The encrypted public key.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("EncryptPubKey",$param) and $param["EncryptPubKey"] !== null) {
            $this->EncryptPubKey = $param["EncryptPubKey"];
        }
    }
}
