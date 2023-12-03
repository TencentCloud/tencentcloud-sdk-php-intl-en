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
 * Cloud-native gateway certificate information
 *
 * @method string getId() Obtain Gateway certificate ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(string $Id) Set Gateway certificate ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getName() Obtain Gateway certificate information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Gateway certificate information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getBindDomains() Obtain Bound domain name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBindDomains(array $BindDomains) Set Bound domain name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCertSource() Obtain Certificate source
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCertSource(string $CertSource) Set Certificate source
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCertId() Obtain SSL certificate ID that is currently bound
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCertId(string $CertId) Set SSL certificate ID that is currently bound
Note: This field may return null, indicating that no valid value can be obtained.
 */
class GatewayCertificate extends AbstractModel
{
    /**
     * @var string Gateway certificate ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

    /**
     * @var string Gateway certificate information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var array Bound domain name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BindDomains;

    /**
     * @var string Certificate source
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CertSource;

    /**
     * @var string SSL certificate ID that is currently bound
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CertId;

    /**
     * @param string $Id Gateway certificate ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Name Gateway certificate information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $BindDomains Bound domain name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CertSource Certificate source
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CertId SSL certificate ID that is currently bound
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = $param["BindDomains"];
        }

        if (array_key_exists("CertSource",$param) and $param["CertSource"] !== null) {
            $this->CertSource = $param["CertSource"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }
    }
}
