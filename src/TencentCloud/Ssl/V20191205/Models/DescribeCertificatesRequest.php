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
 * @method integer getOffset() Obtain Pagination offset, starting from 0
 * @method void setOffset(integer $Offset) Set Pagination offset, starting from 0
 * @method integer getLimit() Obtain Number of entries per page. Default value: `20`. Maximum value: `1000`.
 * @method void setLimit(integer $Limit) Set Number of entries per page. Default value: `20`. Maximum value: `1000`.
 * @method string getSearchKey() Obtain Keyword for search, which can be a certificate ID, alias, or domain name, for example, a8xHcaIs
 * @method void setSearchKey(string $SearchKey) Set Keyword for search, which can be a certificate ID, alias, or domain name, for example, a8xHcaIs
 * @method string getCertificateType() Obtain Certificate type. `CA`: client certificate; `SVR`: server certificate
 * @method void setCertificateType(string $CertificateType) Set Certificate type. `CA`: client certificate; `SVR`: server certificate
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getExpirationSort() Obtain Sorting by expiration time. `DESC`: descending; `ASC`: ascending
 * @method void setExpirationSort(string $ExpirationSort) Set Sorting by expiration time. `DESC`: descending; `ASC`: ascending
 * @method array getCertificateStatus() Obtain Certificate status. `0`: Reviewing; `1`: Approved; `2`: Unapproved; `3`: Expired; `4`: DNS record added; `5`: Enterprise-grade certificate, pending submission; `6`: Canceling order; `7`: Canceled; `8`: Information submitted, pending confirmation letter upload; `9`: Revoking certificate; `10`: Revoked; `11`: Reissuing; `12`: Pending revocation confirmation letter upload; `13`: Pending information submission for the free certificate.
 * @method void setCertificateStatus(array $CertificateStatus) Set Certificate status. `0`: Reviewing; `1`: Approved; `2`: Unapproved; `3`: Expired; `4`: DNS record added; `5`: Enterprise-grade certificate, pending submission; `6`: Canceling order; `7`: Canceled; `8`: Information submitted, pending confirmation letter upload; `9`: Revoking certificate; `10`: Revoked; `11`: Reissuing; `12`: Pending revocation confirmation letter upload; `13`: Pending information submission for the free certificate.
 * @method integer getDeployable() Obtain Whether the certificate can be deployed. `1`: yes; `0`: no
 * @method void setDeployable(integer $Deployable) Set Whether the certificate can be deployed. `1`: yes; `0`: no
 * @method integer getUpload() Obtain Whether to filter uploaded hosted certificates. `1`: Yes; `0`: No.
 * @method void setUpload(integer $Upload) Set Whether to filter uploaded hosted certificates. `1`: Yes; `0`: No.
 * @method integer getRenew() Obtain Whether to filter renewable certificates. `1`: Yes; `0`: No.
 * @method void setRenew(integer $Renew) Set Whether to filter renewable certificates. `1`: Yes; `0`: No.
 * @method string getFilterSource() Obtain Filter by source. `upload`: Uploaded certificate; `buy`: Tencent Cloud certificate. If this parameter is left empty, all certificates will be queried.
 * @method void setFilterSource(string $FilterSource) Set Filter by source. `upload`: Uploaded certificate; `buy`: Tencent Cloud certificate. If this parameter is left empty, all certificates will be queried.
 * @method integer getIsSM() Obtain Whether to filter Chinese SM certificates. `1`: Yes; `0`: No.
 * @method void setIsSM(integer $IsSM) Set Whether to filter Chinese SM certificates. `1`: Yes; `0`: No.
 * @method integer getFilterExpiring() Obtain Whether to filter expiring certificates. `1`: Yes; `0`: No.
 * @method void setFilterExpiring(integer $FilterExpiring) Set Whether to filter expiring certificates. `1`: Yes; `0`: No.
 */
class DescribeCertificatesRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset, starting from 0
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Default value: `20`. Maximum value: `1000`.
     */
    public $Limit;

    /**
     * @var string Keyword for search, which can be a certificate ID, alias, or domain name, for example, a8xHcaIs
     */
    public $SearchKey;

    /**
     * @var string Certificate type. `CA`: client certificate; `SVR`: server certificate
     */
    public $CertificateType;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Sorting by expiration time. `DESC`: descending; `ASC`: ascending
     */
    public $ExpirationSort;

    /**
     * @var array Certificate status. `0`: Reviewing; `1`: Approved; `2`: Unapproved; `3`: Expired; `4`: DNS record added; `5`: Enterprise-grade certificate, pending submission; `6`: Canceling order; `7`: Canceled; `8`: Information submitted, pending confirmation letter upload; `9`: Revoking certificate; `10`: Revoked; `11`: Reissuing; `12`: Pending revocation confirmation letter upload; `13`: Pending information submission for the free certificate.
     */
    public $CertificateStatus;

    /**
     * @var integer Whether the certificate can be deployed. `1`: yes; `0`: no
     */
    public $Deployable;

    /**
     * @var integer Whether to filter uploaded hosted certificates. `1`: Yes; `0`: No.
     */
    public $Upload;

    /**
     * @var integer Whether to filter renewable certificates. `1`: Yes; `0`: No.
     */
    public $Renew;

    /**
     * @var string Filter by source. `upload`: Uploaded certificate; `buy`: Tencent Cloud certificate. If this parameter is left empty, all certificates will be queried.
     */
    public $FilterSource;

    /**
     * @var integer Whether to filter Chinese SM certificates. `1`: Yes; `0`: No.
     */
    public $IsSM;

    /**
     * @var integer Whether to filter expiring certificates. `1`: Yes; `0`: No.
     */
    public $FilterExpiring;

    /**
     * @param integer $Offset Pagination offset, starting from 0
     * @param integer $Limit Number of entries per page. Default value: `20`. Maximum value: `1000`.
     * @param string $SearchKey Keyword for search, which can be a certificate ID, alias, or domain name, for example, a8xHcaIs
     * @param string $CertificateType Certificate type. `CA`: client certificate; `SVR`: server certificate
     * @param integer $ProjectId Project ID
     * @param string $ExpirationSort Sorting by expiration time. `DESC`: descending; `ASC`: ascending
     * @param array $CertificateStatus Certificate status. `0`: Reviewing; `1`: Approved; `2`: Unapproved; `3`: Expired; `4`: DNS record added; `5`: Enterprise-grade certificate, pending submission; `6`: Canceling order; `7`: Canceled; `8`: Information submitted, pending confirmation letter upload; `9`: Revoking certificate; `10`: Revoked; `11`: Reissuing; `12`: Pending revocation confirmation letter upload; `13`: Pending information submission for the free certificate.
     * @param integer $Deployable Whether the certificate can be deployed. `1`: yes; `0`: no
     * @param integer $Upload Whether to filter uploaded hosted certificates. `1`: Yes; `0`: No.
     * @param integer $Renew Whether to filter renewable certificates. `1`: Yes; `0`: No.
     * @param string $FilterSource Filter by source. `upload`: Uploaded certificate; `buy`: Tencent Cloud certificate. If this parameter is left empty, all certificates will be queried.
     * @param integer $IsSM Whether to filter Chinese SM certificates. `1`: Yes; `0`: No.
     * @param integer $FilterExpiring Whether to filter expiring certificates. `1`: Yes; `0`: No.
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

        if (array_key_exists("Upload",$param) and $param["Upload"] !== null) {
            $this->Upload = $param["Upload"];
        }

        if (array_key_exists("Renew",$param) and $param["Renew"] !== null) {
            $this->Renew = $param["Renew"];
        }

        if (array_key_exists("FilterSource",$param) and $param["FilterSource"] !== null) {
            $this->FilterSource = $param["FilterSource"];
        }

        if (array_key_exists("IsSM",$param) and $param["IsSM"] !== null) {
            $this->IsSM = $param["IsSM"];
        }

        if (array_key_exists("FilterExpiring",$param) and $param["FilterExpiring"] !== null) {
            $this->FilterExpiring = $param["FilterExpiring"];
        }
    }
}
