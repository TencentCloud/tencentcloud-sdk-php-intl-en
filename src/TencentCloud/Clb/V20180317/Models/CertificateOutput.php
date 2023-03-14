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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Certificate information
 *
 * @method string getSSLMode() Obtain Authentication type. Value range: UNIDIRECTIONAL (unidirectional authentication), MUTUAL (mutual authentication)
 * @method void setSSLMode(string $SSLMode) Set Authentication type. Value range: UNIDIRECTIONAL (unidirectional authentication), MUTUAL (mutual authentication)
 * @method string getCertId() Obtain Server certificate ID.
 * @method void setCertId(string $CertId) Set Server certificate ID.
 * @method string getCertCaId() Obtain Client certificate ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertCaId(string $CertCaId) Set Client certificate ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getExtCertIds() Obtain IDs of extra server certificates
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setExtCertIds(array $ExtCertIds) Set IDs of extra server certificates
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class CertificateOutput extends AbstractModel
{
    /**
     * @var string Authentication type. Value range: UNIDIRECTIONAL (unidirectional authentication), MUTUAL (mutual authentication)
     */
    public $SSLMode;

    /**
     * @var string Server certificate ID.
     */
    public $CertId;

    /**
     * @var string Client certificate ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CertCaId;

    /**
     * @var array IDs of extra server certificates
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExtCertIds;

    /**
     * @param string $SSLMode Authentication type. Value range: UNIDIRECTIONAL (unidirectional authentication), MUTUAL (mutual authentication)
     * @param string $CertId Server certificate ID.
     * @param string $CertCaId Client certificate ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ExtCertIds IDs of extra server certificates
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }

        if (array_key_exists("ExtCertIds",$param) and $param["ExtCertIds"] !== null) {
            $this->ExtCertIds = $param["ExtCertIds"];
        }
    }
}
