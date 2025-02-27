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
 * COS instance description.
 *
 * @method string getDomain() Obtain Domain name.
 * @method void setDomain(string $Domain) Set Domain name.
 * @method string getCertId() Obtain Bound certificate id.
 * @method void setCertId(string $CertId) Set Bound certificate id.
 * @method string getStatus() Obtain ENABLED: domain name online status.
DISABLED: domain name offline status.
 * @method void setStatus(string $Status) Set ENABLED: domain name online status.
DISABLED: domain name offline status.
 * @method string getBucket() Obtain bucket name.
 * @method void setBucket(string $Bucket) Set bucket name.
 * @method string getRegion() Obtain bucket region.
 * @method void setRegion(string $Region) Set bucket region.
 */
class CosInstanceDetail extends AbstractModel
{
    /**
     * @var string Domain name.
     */
    public $Domain;

    /**
     * @var string Bound certificate id.
     */
    public $CertId;

    /**
     * @var string ENABLED: domain name online status.
DISABLED: domain name offline status.
     */
    public $Status;

    /**
     * @var string bucket name.
     */
    public $Bucket;

    /**
     * @var string bucket region.
     */
    public $Region;

    /**
     * @param string $Domain Domain name.
     * @param string $CertId Bound certificate id.
     * @param string $Status ENABLED: domain name online status.
DISABLED: domain name offline status.
     * @param string $Bucket bucket name.
     * @param string $Region bucket region.
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

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
