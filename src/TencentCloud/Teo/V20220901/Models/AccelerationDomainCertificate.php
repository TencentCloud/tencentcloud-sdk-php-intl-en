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
 * Information of the acceleration domain name certificate.
 *
 * @method string getMode() Obtain Certificate configuration mode. Values: <li>`disable`: Do not configure the certificate;</li><li>`eofreecert`: Use a free certificate provided by EdgeOne; </li><li>`sslcert`: Configure an SSL certificate.</li>
 * @method void setMode(string $Mode) Set Certificate configuration mode. Values: <li>`disable`: Do not configure the certificate;</li><li>`eofreecert`: Use a free certificate provided by EdgeOne; </li><li>`sslcert`: Configure an SSL certificate.</li>
 * @method array getList() Obtain List of certificates
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setList(array $List) Set List of certificates
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class AccelerationDomainCertificate extends AbstractModel
{
    /**
     * @var string Certificate configuration mode. Values: <li>`disable`: Do not configure the certificate;</li><li>`eofreecert`: Use a free certificate provided by EdgeOne; </li><li>`sslcert`: Configure an SSL certificate.</li>
     */
    public $Mode;

    /**
     * @var array List of certificates
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $List;

    /**
     * @param string $Mode Certificate configuration mode. Values: <li>`disable`: Do not configure the certificate;</li><li>`eofreecert`: Use a free certificate provided by EdgeOne; </li><li>`sslcert`: Configure an SSL certificate.</li>
     * @param array $List List of certificates
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new CertificateInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
