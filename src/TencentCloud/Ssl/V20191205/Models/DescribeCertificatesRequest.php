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
 * DescribeCertificates request structure.
 *
 * @method integer getOffset() Obtain Pagination offset, starting from 0.
 * @method void setOffset(integer $Offset) Set Pagination offset, starting from 0.
 * @method integer getLimit() Obtain Number of certificates on each page. The default value is 20.
 * @method void setLimit(integer $Limit) Set Number of certificates on each page. The default value is 20.
 * @method string getSearchKey() Obtain Keyword for search, which can be a certificate ID, alias, or domain name. For example, a8xHcaIs.
 * @method void setSearchKey(string $SearchKey) Set Keyword for search, which can be a certificate ID, alias, or domain name. For example, a8xHcaIs.
 * @method string getCertificateType() Obtain Certificate type. CA: client certificate; SVR: server certificate.
 * @method void setCertificateType(string $CertificateType) Set Certificate type. CA: client certificate; SVR: server certificate.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method string getExpirationSort() Obtain Sorting by expiration time. DESC: descending; ASC: ascending.
 * @method void setExpirationSort(string $ExpirationSort) Set Sorting by expiration time. DESC: descending; ASC: ascending.
 * @method array getCertificateStatus() Obtain Certificate status.
 * @method void setCertificateStatus(array $CertificateStatus) Set Certificate status.
 * @method integer getDeployable() Obtain Whether the certificate can be deployed. 1: yes; 0: no.
 * @method void setDeployable(integer $Deployable) Set Whether the certificate can be deployed. 1: yes; 0: no.
 */
class DescribeCertificatesRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset, starting from 0.
     */
    public $Offset;

    /**
     * @var integer Number of certificates on each page. The default value is 20.
     */
    public $Limit;

    /**
     * @var string Keyword for search, which can be a certificate ID, alias, or domain name. For example, a8xHcaIs.
     */
    public $SearchKey;

    /**
     * @var string Certificate type. CA: client certificate; SVR: server certificate.
     */
    public $CertificateType;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var string Sorting by expiration time. DESC: descending; ASC: ascending.
     */
    public $ExpirationSort;

    /**
     * @var array Certificate status.
     */
    public $CertificateStatus;

    /**
     * @var integer Whether the certificate can be deployed. 1: yes; 0: no.
     */
    public $Deployable;

    /**
     * @param integer $Offset Pagination offset, starting from 0.
     * @param integer $Limit Number of certificates on each page. The default value is 20.
     * @param string $SearchKey Keyword for search, which can be a certificate ID, alias, or domain name. For example, a8xHcaIs.
     * @param string $CertificateType Certificate type. CA: client certificate; SVR: server certificate.
     * @param integer $ProjectId Project ID.
     * @param string $ExpirationSort Sorting by expiration time. DESC: descending; ASC: ascending.
     * @param array $CertificateStatus Certificate status.
     * @param integer $Deployable Whether the certificate can be deployed. 1: yes; 0: no.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ExpirationSort",$param) and $param["ExpirationSort"] !== null) {
            $this->ExpirationSort = $param["ExpirationSort"];
        }

        if (array_key_exists("CertificateStatus",$param) and $param["CertificateStatus"] !== null) {
            $this->CertificateStatus = $param["CertificateStatus"];
        }

        if (array_key_exists("Deployable",$param) and $param["Deployable"] !== null) {
            $this->Deployable = $param["Deployable"];
        }
    }
}
