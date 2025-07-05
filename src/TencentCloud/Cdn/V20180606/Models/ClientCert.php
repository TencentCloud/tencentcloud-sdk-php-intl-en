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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTPS client certificate configuration
 *
 * @method string getCertificate() Obtain Client certificate
PEM format, requires Base64 encoding.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCertificate(string $Certificate) Set Client certificate
PEM format, requires Base64 encoding.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCertName() Obtain Client certificate name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCertName(string $CertName) Set Client certificate name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getExpireTime() Obtain Certificate expiration time
When this is used as an input parameter, it can be left blank.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Certificate expiration time
When this is used as an input parameter, it can be left blank.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getDeployTime() Obtain Certificate issuance time
When this is used as an input parameter, it can be left blank.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDeployTime(string $DeployTime) Set Certificate issuance time
When this is used as an input parameter, it can be left blank.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ClientCert extends AbstractModel
{
    /**
     * @var string Client certificate
PEM format, requires Base64 encoding.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Certificate;

    /**
     * @var string Client certificate name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CertName;

    /**
     * @var string Certificate expiration time
When this is used as an input parameter, it can be left blank.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Certificate issuance time
When this is used as an input parameter, it can be left blank.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DeployTime;

    /**
     * @param string $Certificate Client certificate
PEM format, requires Base64 encoding.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $CertName Client certificate name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ExpireTime Certificate expiration time
When this is used as an input parameter, it can be left blank.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $DeployTime Certificate issuance time
When this is used as an input parameter, it can be left blank.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = $param["Certificate"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DeployTime",$param) and $param["DeployTime"] !== null) {
            $this->DeployTime = $param["DeployTime"];
        }
    }
}
