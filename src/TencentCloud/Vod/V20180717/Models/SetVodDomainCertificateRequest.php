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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetVodDomainCertificate request structure.
 *
 * @method string getDomain() Obtain 
 * @method void setDomain(string $Domain) Set 
 * @method string getOperation() Obtain 
 * @method void setOperation(string $Operation) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getCertID() Obtain 
 * @method void setCertID(string $CertID) Set 
 */
class SetVodDomainCertificateRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Domain;

    /**
     * @var string 
     */
    public $Operation;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $CertID;

    /**
     * @param string $Domain 
     * @param string $Operation 
     * @param integer $SubAppId 
     * @param string $CertID 
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("CertID",$param) and $param["CertID"] !== null) {
            $this->CertID = $param["CertID"];
        }
    }
}
