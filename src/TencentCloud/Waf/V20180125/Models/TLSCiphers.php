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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TLS encryption suite
 *
 * @method integer getVersionId() Obtain TLS version ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersionId(integer $VersionId) Set TLS version ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCipherId() Obtain Encryption Suite ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCipherId(integer $CipherId) Set Encryption Suite ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCipherName() Obtain Cipher suite
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCipherName(string $CipherName) Set Cipher suite
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TLSCiphers extends AbstractModel
{
    /**
     * @var integer TLS version ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VersionId;

    /**
     * @var integer Encryption Suite ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CipherId;

    /**
     * @var string Cipher suite
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CipherName;

    /**
     * @param integer $VersionId TLS version ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CipherId Encryption Suite ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CipherName Cipher suite
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("CipherId",$param) and $param["CipherId"] !== null) {
            $this->CipherId = $param["CipherId"];
        }

        if (array_key_exists("CipherName",$param) and $param["CipherName"] !== null) {
            $this->CipherName = $param["CipherName"];
        }
    }
}
