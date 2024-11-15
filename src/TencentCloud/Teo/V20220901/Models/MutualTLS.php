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
 * 
 *
 * @method string getSwitch() Obtain 
 * @method void setSwitch(string $Switch) Set 
 * @method array getCertInfos() Obtain Mutual authentication certificate list.
Note: When using MutualTLS as an input parameter in ModifyHostsCertificate, you only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
 * @method void setCertInfos(array $CertInfos) Set Mutual authentication certificate list.
Note: When using MutualTLS as an input parameter in ModifyHostsCertificate, you only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
 */
class MutualTLS extends AbstractModel
{
    /**
     * @var string 
     */
    public $Switch;

    /**
     * @var array Mutual authentication certificate list.
Note: When using MutualTLS as an input parameter in ModifyHostsCertificate, you only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
     */
    public $CertInfos;

    /**
     * @param string $Switch 
     * @param array $CertInfos Mutual authentication certificate list.
Note: When using MutualTLS as an input parameter in ModifyHostsCertificate, you only need to provide the CertId of the corresponding certificate. You can check the CertId from the [SSL Certificate List](https://console.cloud.tencent.com/ssl).
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("CertInfos",$param) and $param["CertInfos"] !== null) {
            $this->CertInfos = [];
            foreach ($param["CertInfos"] as $key => $value){
                $obj = new CertificateInfo();
                $obj->deserialize($value);
                array_push($this->CertInfos, $obj);
            }
        }
    }
}
