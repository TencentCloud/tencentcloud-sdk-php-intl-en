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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query domain detail data
 *
 * @method string getId() Obtain Domain ID
 * @method void setId(string $Id) Set Domain ID
 * @method string getPlayDomain() Obtain Playback domain
 * @method void setPlayDomain(string $PlayDomain) Set Playback domain
 * @method string getInternalDomain() Obtain CNAME record value
 * @method void setInternalDomain(string $InternalDomain) Set CNAME record value
 * @method integer getHaveCert() Obtain Whether to upload a certificate (0: No, 1: Yes)
 * @method void setHaveCert(integer $HaveCert) Set Whether to upload a certificate (0: No, 1: Yes)
 * @method string getClusterId() Obtain Service node ID
 * @method void setClusterId(string $ClusterId) Set Service node ID
 * @method string getClusterName() Obtain Service node name
 * @method void setClusterName(string $ClusterName) Set Service node name
 * @method integer getAppId() Obtain User ID.
 * @method void setAppId(integer $AppId) Set User ID.
 * @method string getCertId() Obtain Certificate ID
 * @method void setCertId(string $CertId) Set Certificate ID
 * @method integer getDomainType() Obtain Domain type. 0: Pull streaming domain name; 1: Streaming domain
 * @method void setDomainType(integer $DomainType) Set Domain type. 0: Pull streaming domain name; 1: Streaming domain
 */
class DescribeDomainData extends AbstractModel
{
    /**
     * @var string Domain ID
     */
    public $Id;

    /**
     * @var string Playback domain
     */
    public $PlayDomain;

    /**
     * @var string CNAME record value
     */
    public $InternalDomain;

    /**
     * @var integer Whether to upload a certificate (0: No, 1: Yes)
     */
    public $HaveCert;

    /**
     * @var string Service node ID
     */
    public $ClusterId;

    /**
     * @var string Service node name
     */
    public $ClusterName;

    /**
     * @var integer User ID.
     */
    public $AppId;

    /**
     * @var string Certificate ID
     */
    public $CertId;

    /**
     * @var integer Domain type. 0: Pull streaming domain name; 1: Streaming domain
     */
    public $DomainType;

    /**
     * @param string $Id Domain ID
     * @param string $PlayDomain Playback domain
     * @param string $InternalDomain CNAME record value
     * @param integer $HaveCert Whether to upload a certificate (0: No, 1: Yes)
     * @param string $ClusterId Service node ID
     * @param string $ClusterName Service node name
     * @param integer $AppId User ID.
     * @param string $CertId Certificate ID
     * @param integer $DomainType Domain type. 0: Pull streaming domain name; 1: Streaming domain
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

        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("InternalDomain",$param) and $param["InternalDomain"] !== null) {
            $this->InternalDomain = $param["InternalDomain"];
        }

        if (array_key_exists("HaveCert",$param) and $param["HaveCert"] !== null) {
            $this->HaveCert = $param["HaveCert"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }
    }
}
