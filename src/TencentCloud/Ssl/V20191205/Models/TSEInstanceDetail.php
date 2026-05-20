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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TSE instance details
 *
 * @method string getGatewayId() Obtain Gateway ID
 * @method void setGatewayId(string $GatewayId) Set Gateway ID
 * @method string getGatewayName() Obtain gateway name
 * @method void setGatewayName(string $GatewayName) Set gateway name
 * @method array getCertificateList() Obtain Gateway certificate list
 * @method void setCertificateList(array $CertificateList) Set Gateway certificate list
 */
class TSEInstanceDetail extends AbstractModel
{
    /**
     * @var string Gateway ID
     */
    public $GatewayId;

    /**
     * @var string gateway name
     */
    public $GatewayName;

    /**
     * @var array Gateway certificate list
     */
    public $CertificateList;

    /**
     * @param string $GatewayId Gateway ID
     * @param string $GatewayName gateway name
     * @param array $CertificateList Gateway certificate list
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("CertificateList",$param) and $param["CertificateList"] !== null) {
            $this->CertificateList = [];
            foreach ($param["CertificateList"] as $key => $value){
                $obj = new GatewayCertificate();
                $obj->deserialize($value);
                array_push($this->CertificateList, $obj);
            }
        }
    }
}
