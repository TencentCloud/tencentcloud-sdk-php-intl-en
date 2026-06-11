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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kafka access protocol
 *
 * @method string getProtocol() Obtain Protocol type. Supported protocol types include plaintext, sasl_plaintext, or sasl_ssl. Recommend using sasl_ssl. Protocol enables encrypted connection and also requires user authentication.

-Protocol is required when IsEncryptionAddr is true.
-Supported protocol types are as follows:
-plaintext: Plaintext without encryption protocol
-sasl_ssl: sasl authentication + ssl encryption
-ssl: Pure ssl/TLS encryption protocol
-sasl_plaintext: SASL authentication + unencrypted tunnel

 * @method void setProtocol(string $Protocol) Set Protocol type. Supported protocol types include plaintext, sasl_plaintext, or sasl_ssl. Recommend using sasl_ssl. Protocol enables encrypted connection and also requires user authentication.

-Protocol is required when IsEncryptionAddr is true.
-Supported protocol types are as follows:
-plaintext: Plaintext without encryption protocol
-sasl_ssl: sasl authentication + ssl encryption
-ssl: Pure ssl/TLS encryption protocol
-sasl_plaintext: SASL authentication + unencrypted tunnel

 * @method string getMechanism() Obtain Encryption type, supports PLAIN, SCRAM-SHA-256, or SCRAM-SHA-512.

-Mechanism is required when Protocol is `sasl_plaintext` or `sasl_ssl`.
-Supported encryption types are as follows.
-PLAIN: plaintext authentication
-SCRAM-SHA-256: Based on challenge-response mechanism, uses PBKDF2-HMAC-SHA256 algorithm.
-SCRAM-SHA-512: Enhanced SCRAM that uses the PBKDF2-HMAC-SHA512 algorithm.
 * @method void setMechanism(string $Mechanism) Set Encryption type, supports PLAIN, SCRAM-SHA-256, or SCRAM-SHA-512.

-Mechanism is required when Protocol is `sasl_plaintext` or `sasl_ssl`.
-Supported encryption types are as follows.
-PLAIN: plaintext authentication
-SCRAM-SHA-256: Based on challenge-response mechanism, uses PBKDF2-HMAC-SHA256 algorithm.
-SCRAM-SHA-512: Enhanced SCRAM that uses the PBKDF2-HMAC-SHA512 algorithm.
 * @method string getUserName() Obtain Username.
Required when Protocol is sasl_plaintext or sasl_ssl
 * @method void setUserName(string $UserName) Set Username.
Required when Protocol is sasl_plaintext or sasl_ssl
 * @method string getPassword() Obtain User password.
Required when Protocol is sasl_plaintext or sasl_ssl
 * @method void setPassword(string $Password) Set User password.
Required when Protocol is sasl_plaintext or sasl_ssl
 */
class KafkaProtocolInfo extends AbstractModel
{
    /**
     * @var string Protocol type. Supported protocol types include plaintext, sasl_plaintext, or sasl_ssl. Recommend using sasl_ssl. Protocol enables encrypted connection and also requires user authentication.

-Protocol is required when IsEncryptionAddr is true.
-Supported protocol types are as follows:
-plaintext: Plaintext without encryption protocol
-sasl_ssl: sasl authentication + ssl encryption
-ssl: Pure ssl/TLS encryption protocol
-sasl_plaintext: SASL authentication + unencrypted tunnel

     */
    public $Protocol;

    /**
     * @var string Encryption type, supports PLAIN, SCRAM-SHA-256, or SCRAM-SHA-512.

-Mechanism is required when Protocol is `sasl_plaintext` or `sasl_ssl`.
-Supported encryption types are as follows.
-PLAIN: plaintext authentication
-SCRAM-SHA-256: Based on challenge-response mechanism, uses PBKDF2-HMAC-SHA256 algorithm.
-SCRAM-SHA-512: Enhanced SCRAM that uses the PBKDF2-HMAC-SHA512 algorithm.
     */
    public $Mechanism;

    /**
     * @var string Username.
Required when Protocol is sasl_plaintext or sasl_ssl
     */
    public $UserName;

    /**
     * @var string User password.
Required when Protocol is sasl_plaintext or sasl_ssl
     */
    public $Password;

    /**
     * @param string $Protocol Protocol type. Supported protocol types include plaintext, sasl_plaintext, or sasl_ssl. Recommend using sasl_ssl. Protocol enables encrypted connection and also requires user authentication.

-Protocol is required when IsEncryptionAddr is true.
-Supported protocol types are as follows:
-plaintext: Plaintext without encryption protocol
-sasl_ssl: sasl authentication + ssl encryption
-ssl: Pure ssl/TLS encryption protocol
-sasl_plaintext: SASL authentication + unencrypted tunnel

     * @param string $Mechanism Encryption type, supports PLAIN, SCRAM-SHA-256, or SCRAM-SHA-512.

-Mechanism is required when Protocol is `sasl_plaintext` or `sasl_ssl`.
-Supported encryption types are as follows.
-PLAIN: plaintext authentication
-SCRAM-SHA-256: Based on challenge-response mechanism, uses PBKDF2-HMAC-SHA256 algorithm.
-SCRAM-SHA-512: Enhanced SCRAM that uses the PBKDF2-HMAC-SHA512 algorithm.
     * @param string $UserName Username.
Required when Protocol is sasl_plaintext or sasl_ssl
     * @param string $Password User password.
Required when Protocol is sasl_plaintext or sasl_ssl
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Mechanism",$param) and $param["Mechanism"] !== null) {
            $this->Mechanism = $param["Mechanism"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
