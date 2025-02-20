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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SSL/TLS Security configuration parameters.
 *
 * @method array getVersion() Obtain TLS version. at least one must be specified. if multiple versions are specified, they must be consecutive, e.g., enable tls1, 1.1, 1.2, and 1.3. it is not allowed to enable only 1 and 1.2 while disabling 1.1. valid values: <li>`tlsv1`: tlsv1 version;</li><li>`tlsv1.1`: tlsv1.1 version;</li><li>`tlsv1.2`: tlsv1.2 version;</li><li>`tlsv1.3`: tlsv1.3 version.</li>.
 * @method void setVersion(array $Version) Set TLS version. at least one must be specified. if multiple versions are specified, they must be consecutive, e.g., enable tls1, 1.1, 1.2, and 1.3. it is not allowed to enable only 1 and 1.2 while disabling 1.1. valid values: <li>`tlsv1`: tlsv1 version;</li><li>`tlsv1.1`: tlsv1.1 version;</li><li>`tlsv1.2`: tlsv1.2 version;</li><li>`tlsv1.3`: tlsv1.3 version.</li>.
 * @method string getCipherSuite() Obtain Cipher suite. for detailed information, please refer to [tls versions and cipher suites description](https://intl.cloud.tencent.com/document/product/1552/86545?from_cn_redirect=1). valid values: <li>`loose-v2023`: loose-v2023 cipher suite;</li><li>`general-v2023`: general-v2023 cipher suite;</li><li>`strict-v2023`: strict-v2023 cipher suite.</li>.
 * @method void setCipherSuite(string $CipherSuite) Set Cipher suite. for detailed information, please refer to [tls versions and cipher suites description](https://intl.cloud.tencent.com/document/product/1552/86545?from_cn_redirect=1). valid values: <li>`loose-v2023`: loose-v2023 cipher suite;</li><li>`general-v2023`: general-v2023 cipher suite;</li><li>`strict-v2023`: strict-v2023 cipher suite.</li>.
 */
class TLSConfigParameters extends AbstractModel
{
    /**
     * @var array TLS version. at least one must be specified. if multiple versions are specified, they must be consecutive, e.g., enable tls1, 1.1, 1.2, and 1.3. it is not allowed to enable only 1 and 1.2 while disabling 1.1. valid values: <li>`tlsv1`: tlsv1 version;</li><li>`tlsv1.1`: tlsv1.1 version;</li><li>`tlsv1.2`: tlsv1.2 version;</li><li>`tlsv1.3`: tlsv1.3 version.</li>.
     */
    public $Version;

    /**
     * @var string Cipher suite. for detailed information, please refer to [tls versions and cipher suites description](https://intl.cloud.tencent.com/document/product/1552/86545?from_cn_redirect=1). valid values: <li>`loose-v2023`: loose-v2023 cipher suite;</li><li>`general-v2023`: general-v2023 cipher suite;</li><li>`strict-v2023`: strict-v2023 cipher suite.</li>.
     */
    public $CipherSuite;

    /**
     * @param array $Version TLS version. at least one must be specified. if multiple versions are specified, they must be consecutive, e.g., enable tls1, 1.1, 1.2, and 1.3. it is not allowed to enable only 1 and 1.2 while disabling 1.1. valid values: <li>`tlsv1`: tlsv1 version;</li><li>`tlsv1.1`: tlsv1.1 version;</li><li>`tlsv1.2`: tlsv1.2 version;</li><li>`tlsv1.3`: tlsv1.3 version.</li>.
     * @param string $CipherSuite Cipher suite. for detailed information, please refer to [tls versions and cipher suites description](https://intl.cloud.tencent.com/document/product/1552/86545?from_cn_redirect=1). valid values: <li>`loose-v2023`: loose-v2023 cipher suite;</li><li>`general-v2023`: general-v2023 cipher suite;</li><li>`strict-v2023`: strict-v2023 cipher suite.</li>.
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("CipherSuite",$param) and $param["CipherSuite"] !== null) {
            $this->CipherSuite = $param["CipherSuite"];
        }
    }
}
