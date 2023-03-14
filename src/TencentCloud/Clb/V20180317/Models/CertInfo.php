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
 * @method string getCertId() Obtain ID of the certificate. If it's not specified, `CertContent` and `CertKey` are required. For a server certificate, you also need to specify `CertName`. 
 * @method void setCertId(string $CertId) Set ID of the certificate. If it's not specified, `CertContent` and `CertKey` are required. For a server certificate, you also need to specify `CertName`. 
 * @method string getCertName() Obtain Name of the uploaded certificate. It's required if `CertId` is not specified.
 * @method void setCertName(string $CertName) Set Name of the uploaded certificate. It's required if `CertId` is not specified.
 * @method string getCertContent() Obtain Public key of the uploaded certificate. This is required if `CertId` is not specified.
 * @method void setCertContent(string $CertContent) Set Public key of the uploaded certificate. This is required if `CertId` is not specified.
 * @method string getCertKey() Obtain Private key of the uploaded server certificate. This is required if `CertId` is not specified.
 * @method void setCertKey(string $CertKey) Set Private key of the uploaded server certificate. This is required if `CertId` is not specified.
 */
class CertInfo extends AbstractModel
{
    /**
     * @var string ID of the certificate. If it's not specified, `CertContent` and `CertKey` are required. For a server certificate, you also need to specify `CertName`. 
     */
    public $CertId;

    /**
     * @var string Name of the uploaded certificate. It's required if `CertId` is not specified.
     */
    public $CertName;

    /**
     * @var string Public key of the uploaded certificate. This is required if `CertId` is not specified.
     */
    public $CertContent;

    /**
     * @var string Private key of the uploaded server certificate. This is required if `CertId` is not specified.
     */
    public $CertKey;

    /**
     * @param string $CertId ID of the certificate. If it's not specified, `CertContent` and `CertKey` are required. For a server certificate, you also need to specify `CertName`. 
     * @param string $CertName Name of the uploaded certificate. It's required if `CertId` is not specified.
     * @param string $CertContent Public key of the uploaded certificate. This is required if `CertId` is not specified.
     * @param string $CertKey Private key of the uploaded server certificate. This is required if `CertId` is not specified.
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertContent",$param) and $param["CertContent"] !== null) {
            $this->CertContent = $param["CertContent"];
        }

        if (array_key_exists("CertKey",$param) and $param["CertKey"] !== null) {
            $this->CertKey = $param["CertKey"];
        }
    }
}
