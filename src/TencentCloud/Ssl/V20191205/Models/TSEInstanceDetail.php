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
 * TSE instance details
 *
 * @method string getGatewayId() Obtain Gateway ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setGatewayId(string $GatewayId) Set Gateway ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getGatewayName() Obtain Gateway name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setGatewayName(string $GatewayName) Set Gateway name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getCertificateList() Obtain Gateway certificate list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCertificateList(array $CertificateList) Set Gateway certificate list
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TSEInstanceDetail extends AbstractModel
{
    /**
     * @var string Gateway ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $GatewayId;

    /**
     * @var string Gateway name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $GatewayName;

    /**
     * @var array Gateway certificate list
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CertificateList;

    /**
     * @param string $GatewayId Gateway ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $GatewayName Gateway name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $CertificateList Gateway certificate list
Note: This field may return null, indicating that no valid value can be obtained.
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
