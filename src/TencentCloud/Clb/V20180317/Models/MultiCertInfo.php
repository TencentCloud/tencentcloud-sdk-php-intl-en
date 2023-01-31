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
 * Information of multiple certificates bound with the load balancer listener or rule.
 *
 * @method string getSSLMode() Obtain Authentication type. Values: `UNIDIRECTIONAL` (one-way authentication), `MUTUAL` (two-way authentication)
 * @method void setSSLMode(string $SSLMode) Set Authentication type. Values: `UNIDIRECTIONAL` (one-way authentication), `MUTUAL` (two-way authentication)
 * @method array getCertList() Obtain List of listener or rule certificates. One-way and two-way authentication are supported. Only one certificate can be specified for one algorithm. If `SSLMode` is `MUTUAL` (two-way authentication), at least one CA certificate is required. 
 * @method void setCertList(array $CertList) Set List of listener or rule certificates. One-way and two-way authentication are supported. Only one certificate can be specified for one algorithm. If `SSLMode` is `MUTUAL` (two-way authentication), at least one CA certificate is required. 
 */
class MultiCertInfo extends AbstractModel
{
    /**
     * @var string Authentication type. Values: `UNIDIRECTIONAL` (one-way authentication), `MUTUAL` (two-way authentication)
     */
    public $SSLMode;

    /**
     * @var array List of listener or rule certificates. One-way and two-way authentication are supported. Only one certificate can be specified for one algorithm. If `SSLMode` is `MUTUAL` (two-way authentication), at least one CA certificate is required. 
     */
    public $CertList;

    /**
     * @param string $SSLMode Authentication type. Values: `UNIDIRECTIONAL` (one-way authentication), `MUTUAL` (two-way authentication)
     * @param array $CertList List of listener or rule certificates. One-way and two-way authentication are supported. Only one certificate can be specified for one algorithm. If `SSLMode` is `MUTUAL` (two-way authentication), at least one CA certificate is required. 
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

        if (array_key_exists("CertList",$param) and $param["CertList"] !== null) {
            $this->CertList = [];
            foreach ($param["CertList"] as $key => $value){
                $obj = new CertInfo();
                $obj->deserialize($value);
                array_push($this->CertList, $obj);
            }
        }
    }
}
