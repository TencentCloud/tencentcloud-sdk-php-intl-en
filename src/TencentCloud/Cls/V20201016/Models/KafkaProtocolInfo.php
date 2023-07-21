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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kafka access protocol
 *
 * @method string getProtocol() Obtain Protocol type. Valid values: `plaintext`, `sasl_plaintext`, and `sasl_ssl`. `sasl_ssl` is recommended. Using this protocol will encrypt the connection and implement user authentication.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Protocol type. Valid values: `plaintext`, `sasl_plaintext`, and `sasl_ssl`. `sasl_ssl` is recommended. Using this protocol will encrypt the connection and implement user authentication.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMechanism() Obtain Encryption type. Valid values: `PLAIN`, `SCRAM-SHA-256`, and SCRAM-SHA-512`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMechanism(string $Mechanism) Set Encryption type. Valid values: `PLAIN`, `SCRAM-SHA-256`, and SCRAM-SHA-512`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassword() Obtain User password
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassword(string $Password) Set User password
Note: This field may return null, indicating that no valid values can be obtained.
 */
class KafkaProtocolInfo extends AbstractModel
{
    /**
     * @var string Protocol type. Valid values: `plaintext`, `sasl_plaintext`, and `sasl_ssl`. `sasl_ssl` is recommended. Using this protocol will encrypt the connection and implement user authentication.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string Encryption type. Valid values: `PLAIN`, `SCRAM-SHA-256`, and SCRAM-SHA-512`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mechanism;

    /**
     * @var string Username
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string User password
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Password;

    /**
     * @param string $Protocol Protocol type. Valid values: `plaintext`, `sasl_plaintext`, and `sasl_ssl`. `sasl_ssl` is recommended. Using this protocol will encrypt the connection and implement user authentication.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Mechanism Encryption type. Valid values: `PLAIN`, `SCRAM-SHA-256`, and SCRAM-SHA-512`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Username
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Password User password
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
