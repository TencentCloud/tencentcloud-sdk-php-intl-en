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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a TKE secret
 *
 * @method string getName() Obtain The secret name.
 * @method void setName(string $Name) Set The secret name.
 * @method string getCertId() Obtain The certificate ID.
 * @method void setCertId(string $CertId) Set The certificate ID.
 * @method array getIngressList() Obtain The Ingress list.
 * @method void setIngressList(array $IngressList) Set The Ingress list.
 * @method array getNoMatchDomains() Obtain The list of domains that do not match the new certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNoMatchDomains(array $NoMatchDomains) Set The list of domains that do not match the new certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TkeSecretDetail extends AbstractModel
{
    /**
     * @var string The secret name.
     */
    public $Name;

    /**
     * @var string The certificate ID.
     */
    public $CertId;

    /**
     * @var array The Ingress list.
     */
    public $IngressList;

    /**
     * @var array The list of domains that do not match the new certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NoMatchDomains;

    /**
     * @param string $Name The secret name.
     * @param string $CertId The certificate ID.
     * @param array $IngressList The Ingress list.
     * @param array $NoMatchDomains The list of domains that do not match the new certificate.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("IngressList",$param) and $param["IngressList"] !== null) {
            $this->IngressList = [];
            foreach ($param["IngressList"] as $key => $value){
                $obj = new TkeIngressDetail();
                $obj->deserialize($value);
                array_push($this->IngressList, $obj);
            }
        }

        if (array_key_exists("NoMatchDomains",$param) and $param["NoMatchDomains"] !== null) {
            $this->NoMatchDomains = $param["NoMatchDomains"];
        }
    }
}
