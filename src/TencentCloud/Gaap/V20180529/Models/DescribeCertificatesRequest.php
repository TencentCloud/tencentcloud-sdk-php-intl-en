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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificates request structure.
 *
 * @method integer getCertificateType() Obtain Certificate type. Where:
0: basic authentication configuration;
1: client CA certificate;
2: server SSL certificate;
3: origin server CA certificate;
4: connection SSL certificate.
-1: all types.
The default value is -1.
 * @method void setCertificateType(integer $CertificateType) Set Certificate type. Where:
0: basic authentication configuration;
1: client CA certificate;
2: server SSL certificate;
3: origin server CA certificate;
4: connection SSL certificate.
-1: all types.
The default value is -1.
 * @method integer getOffset() Obtain Offset. The default value is 0.
 * @method void setOffset(integer $Offset) Set Offset. The default value is 0.
 * @method integer getLimit() Obtain Quantity limit. The default value is 20.
 * @method void setLimit(integer $Limit) Set Quantity limit. The default value is 20.
 */
class DescribeCertificatesRequest extends AbstractModel
{
    /**
     * @var integer Certificate type. Where:
0: basic authentication configuration;
1: client CA certificate;
2: server SSL certificate;
3: origin server CA certificate;
4: connection SSL certificate.
-1: all types.
The default value is -1.
     */
    public $CertificateType;

    /**
     * @var integer Offset. The default value is 0.
     */
    public $Offset;

    /**
     * @var integer Quantity limit. The default value is 20.
     */
    public $Limit;

    /**
     * @param integer $CertificateType Certificate type. Where:
0: basic authentication configuration;
1: client CA certificate;
2: server SSL certificate;
3: origin server CA certificate;
4: connection SSL certificate.
-1: all types.
The default value is -1.
     * @param integer $Offset Offset. The default value is 0.
     * @param integer $Limit Quantity limit. The default value is 20.
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
        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
