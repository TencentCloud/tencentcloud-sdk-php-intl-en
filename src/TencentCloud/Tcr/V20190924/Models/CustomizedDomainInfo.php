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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom domain name information
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getCertId() Obtain Certificate ID
 * @method void setCertId(string $CertId) Set Certificate ID
 * @method string getDomainName() Obtain Domain name
 * @method void setDomainName(string $DomainName) Set Domain name
 * @method string getStatus() Obtain Domain name creation status. Valid values: SUCCESS, FAILURE, CREATING, DELETING.
 * @method void setStatus(string $Status) Set Domain name creation status. Valid values: SUCCESS, FAILURE, CREATING, DELETING.
 */
class CustomizedDomainInfo extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Certificate ID
     */
    public $CertId;

    /**
     * @var string Domain name
     */
    public $DomainName;

    /**
     * @var string Domain name creation status. Valid values: SUCCESS, FAILURE, CREATING, DELETING.
     */
    public $Status;

    /**
     * @param string $RegistryId Instance ID
     * @param string $CertId Certificate ID
     * @param string $DomainName Domain name
     * @param string $Status Domain name creation status. Valid values: SUCCESS, FAILURE, CREATING, DELETING.
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
