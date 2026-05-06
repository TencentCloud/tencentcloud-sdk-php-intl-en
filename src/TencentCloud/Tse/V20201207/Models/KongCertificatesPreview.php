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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud-native gateway certificate preview information
 *
 * @method string getName() Obtain certificate name
 * @method void setName(string $Name) Set certificate name
 * @method string getId() Obtain Id
 * @method void setId(string $Id) Set Id
 * @method array getBindDomains() Obtain Bound domain name
 * @method void setBindDomains(array $BindDomains) Set Bound domain name
 * @method string getStatus() Obtain Certificate status: expired.
active
 * @method void setStatus(string $Status) Set Certificate status: expired.
active
 * @method string getCrt() Obtain Certificate in pem format
 * @method void setCrt(string $Crt) Set Certificate in pem format
 * @method string getKey() Obtain Certificate Private Key
 * @method void setKey(string $Key) Set Certificate Private Key
 * @method string getExpireTime() Obtain certificate expiration time
 * @method void setExpireTime(string $ExpireTime) Set certificate expiration time
 * @method string getCreateTime() Obtain Certificate upload time
 * @method void setCreateTime(string $CreateTime) Set Certificate upload time
 * @method string getIssueTime() Obtain Certificate issuance time
 * @method void setIssueTime(string $IssueTime) Set Certificate issuance time
 * @method string getCertSource() Obtain Certificate source: native (kong custom certificate)
ssl (platform cert)
 * @method void setCertSource(string $CertSource) Set Certificate source: native (kong custom certificate)
ssl (platform cert)
 * @method string getCertId() Obtain ssl Platform Certificate Id
 * @method void setCertId(string $CertId) Set ssl Platform Certificate Id
 */
class KongCertificatesPreview extends AbstractModel
{
    /**
     * @var string certificate name
     */
    public $Name;

    /**
     * @var string Id
     */
    public $Id;

    /**
     * @var array Bound domain name
     */
    public $BindDomains;

    /**
     * @var string Certificate status: expired.
active
     */
    public $Status;

    /**
     * @var string Certificate in pem format
     */
    public $Crt;

    /**
     * @var string Certificate Private Key
     */
    public $Key;

    /**
     * @var string certificate expiration time
     */
    public $ExpireTime;

    /**
     * @var string Certificate upload time
     */
    public $CreateTime;

    /**
     * @var string Certificate issuance time
     */
    public $IssueTime;

    /**
     * @var string Certificate source: native (kong custom certificate)
ssl (platform cert)
     */
    public $CertSource;

    /**
     * @var string ssl Platform Certificate Id
     */
    public $CertId;

    /**
     * @param string $Name certificate name
     * @param string $Id Id
     * @param array $BindDomains Bound domain name
     * @param string $Status Certificate status: expired.
active
     * @param string $Crt Certificate in pem format
     * @param string $Key Certificate Private Key
     * @param string $ExpireTime certificate expiration time
     * @param string $CreateTime Certificate upload time
     * @param string $IssueTime Certificate issuance time
     * @param string $CertSource Certificate source: native (kong custom certificate)
ssl (platform cert)
     * @param string $CertId ssl Platform Certificate Id
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = $param["BindDomains"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Crt",$param) and $param["Crt"] !== null) {
            $this->Crt = $param["Crt"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IssueTime",$param) and $param["IssueTime"] !== null) {
            $this->IssueTime = $param["IssueTime"];
        }

        if (array_key_exists("CertSource",$param) and $param["CertSource"] !== null) {
            $this->CertSource = $param["CertSource"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }
    }
}
