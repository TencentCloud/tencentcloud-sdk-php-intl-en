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
 * TDMQ - Rabbit instance details
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getInstanceStatus() Obtain Instance status
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance status
 * @method string getCertId() Obtain Server certificate ID.
 * @method void setCertId(string $CertId) Set Server certificate ID.
 * @method string getCaCertId() Obtain CA certificate ID
 * @method void setCaCertId(string $CaCertId) Set CA certificate ID
 * @method array getNoMatchDomains() Obtain Mismatched domain name list
 * @method void setNoMatchDomains(array $NoMatchDomains) Set Mismatched domain name list
 */
class TDMQInstanceDetail extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Instance status
     */
    public $InstanceStatus;

    /**
     * @var string Server certificate ID.
     */
    public $CertId;

    /**
     * @var string CA certificate ID
     */
    public $CaCertId;

    /**
     * @var array Mismatched domain name list
     */
    public $NoMatchDomains;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $InstanceStatus Instance status
     * @param string $CertId Server certificate ID.
     * @param string $CaCertId CA certificate ID
     * @param array $NoMatchDomains Mismatched domain name list
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CaCertId",$param) and $param["CaCertId"] !== null) {
            $this->CaCertId = $param["CaCertId"];
        }

        if (array_key_exists("NoMatchDomains",$param) and $param["NoMatchDomains"] !== null) {
            $this->NoMatchDomains = $param["NoMatchDomains"];
        }
    }
}
