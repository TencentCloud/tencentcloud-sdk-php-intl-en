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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Certificate information.
 *
 * @method integer getCertId() Obtain Certificate ID.
 * @method void setCertId(integer $CertId) Set Certificate ID.
 * @method string getCertName() Obtain Certificate name.
 * @method void setCertName(string $CertName) Set Certificate name.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method string getCreateTime() Obtain The creation time in UTC format.
Note: Beijing time (UTC+8) is used.
 * @method void setCreateTime(string $CreateTime) Set The creation time in UTC format.
Note: Beijing time (UTC+8) is used.
 * @method string getHttpsCrt() Obtain Certificate content.
 * @method void setHttpsCrt(string $HttpsCrt) Set Certificate content.
 * @method integer getCertType() Obtain Certificate type.
0: user-added certificate
1: Tencent Cloud-hosted certificate
 * @method void setCertType(integer $CertType) Set Certificate type.
0: user-added certificate
1: Tencent Cloud-hosted certificate
 * @method string getCertExpireTime() Obtain The certificate expiration time in UTC format.
Note: Beijing time (UTC+8) is used.
 * @method void setCertExpireTime(string $CertExpireTime) Set The certificate expiration time in UTC format.
Note: Beijing time (UTC+8) is used.
 * @method array getDomainList() Obtain List of domain names that use this certificate.
 * @method void setDomainList(array $DomainList) Set List of domain names that use this certificate.
 */
class CertInfo extends AbstractModel
{
    /**
     * @var integer Certificate ID.
     */
    public $CertId;

    /**
     * @var string Certificate name.
     */
    public $CertName;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var string The creation time in UTC format.
Note: Beijing time (UTC+8) is used.
     */
    public $CreateTime;

    /**
     * @var string Certificate content.
     */
    public $HttpsCrt;

    /**
     * @var integer Certificate type.
0: user-added certificate
1: Tencent Cloud-hosted certificate
     */
    public $CertType;

    /**
     * @var string The certificate expiration time in UTC format.
Note: Beijing time (UTC+8) is used.
     */
    public $CertExpireTime;

    /**
     * @var array List of domain names that use this certificate.
     */
    public $DomainList;

    /**
     * @param integer $CertId Certificate ID.
     * @param string $CertName Certificate name.
     * @param string $Description Description.
     * @param string $CreateTime The creation time in UTC format.
Note: Beijing time (UTC+8) is used.
     * @param string $HttpsCrt Certificate content.
     * @param integer $CertType Certificate type.
0: user-added certificate
1: Tencent Cloud-hosted certificate
     * @param string $CertExpireTime The certificate expiration time in UTC format.
Note: Beijing time (UTC+8) is used.
     * @param array $DomainList List of domain names that use this certificate.
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("HttpsCrt",$param) and $param["HttpsCrt"] !== null) {
            $this->HttpsCrt = $param["HttpsCrt"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("CertExpireTime",$param) and $param["CertExpireTime"] !== null) {
            $this->CertExpireTime = $param["CertExpireTime"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }
    }
}
