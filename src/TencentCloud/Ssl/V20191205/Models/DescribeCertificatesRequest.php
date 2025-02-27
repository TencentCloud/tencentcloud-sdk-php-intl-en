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
 * @method integer getOffset() Obtain Pagination offset, starting from 0. default is 0.
 * @method void setOffset(integer $Offset) Set Pagination offset, starting from 0. default is 0.
 * @method integer getLimit() Obtain Number of items per page. default is 10. maximum value is 1000; values exceeding 1000 will be treated as 1000.
 * @method void setLimit(integer $Limit) Set Number of items per page. default is 10. maximum value is 1000; values exceeding 1000 will be treated as 1000.
 * @method string getSearchKey() Obtain Search keywords, supporting fuzzy match by certificate id, remark name, and certificate domain name.
 * @method void setSearchKey(string $SearchKey) Set Search keywords, supporting fuzzy match by certificate id, remark name, and certificate domain name.
 * @method string getCertificateType() Obtain Certificate type. `CA`: client certificate; `SVR`: server certificate
 * @method void setCertificateType(string $CertificateType) Set Certificate type. `CA`: client certificate; `SVR`: server certificate
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getExpirationSort() Obtain Default sorting is by certificate application time in descending order. Sort by expiration date if the following values are passed: DESC for descending order of certificate expiration time, ASC for ascending order.
 * @method void setExpirationSort(string $ExpirationSort) Set Default sorting is by certificate application time in descending order. Sort by expiration date if the following values are passed: DESC for descending order of certificate expiration time, ASC for ascending order.
 * @method array getCertificateStatus() Obtain Certificate status: 0=under review, 1=approved, 2=review failed, 3=expired, 4=dns record added, 5=enterprise certificate, pending submission, 6=order cancellation in progress, 7=canceled, 8=documents submitted, pending upload of confirmation letter, 9=certificate revocation in progress, 10=revoked, 11=reissue in progress, 12=pending upload of revocation confirmation letter, 13=free certificate pending document submission, 14=refunded, 15=certificate migration in progress.
 * @method void setCertificateStatus(array $CertificateStatus) Set Certificate status: 0=under review, 1=approved, 2=review failed, 3=expired, 4=dns record added, 5=enterprise certificate, pending submission, 6=order cancellation in progress, 7=canceled, 8=documents submitted, pending upload of confirmation letter, 9=certificate revocation in progress, 10=revoked, 11=reissue in progress, 12=pending upload of revocation confirmation letter, 13=free certificate pending document submission, 14=refunded, 15=certificate migration in progress.
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
 * @method integer getHostable() Obtain Whether the certificate can be hosted. Valid values: `1` for yes and `0` for no.
 * @method void setHostable(integer $Hostable) Set Whether the certificate can be hosted. Valid values: `1` for yes and `0` for no.
 * @method array getTags() Obtain Filter certificates with specified tags.
 * @method void setTags(array $Tags) Set Filter certificates with specified tags.
 * @method integer getIsPendingIssue() Obtain Whether to filter certificates pending issue: 1 for filtering, 0 and null for no filtering.
 * @method void setIsPendingIssue(integer $IsPendingIssue) Set Whether to filter certificates pending issue: 1 for filtering, 0 and null for no filtering.
 * @method array getCertIds() Obtain Filter certificates by the specified certificate id, only supports certificate ids with permission.
 * @method void setCertIds(array $CertIds) Set Filter certificates by the specified certificate id, only supports certificate ids with permission.
 */
class DescribeCertificatesRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset, starting from 0. default is 0.
     */
    public $Offset;

    /**
     * @var integer Number of items per page. default is 10. maximum value is 1000; values exceeding 1000 will be treated as 1000.
     */
    public $Limit;

    /**
     * @var string Search keywords, supporting fuzzy match by certificate id, remark name, and certificate domain name.
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
     * @var string Default sorting is by certificate application time in descending order. Sort by expiration date if the following values are passed: DESC for descending order of certificate expiration time, ASC for ascending order.
     */
    public $ExpirationSort;

    /**
     * @var array Certificate status: 0=under review, 1=approved, 2=review failed, 3=expired, 4=dns record added, 5=enterprise certificate, pending submission, 6=order cancellation in progress, 7=canceled, 8=documents submitted, pending upload of confirmation letter, 9=certificate revocation in progress, 10=revoked, 11=reissue in progress, 12=pending upload of revocation confirmation letter, 13=free certificate pending document submission, 14=refunded, 15=certificate migration in progress.
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
     * @var integer Whether the certificate can be hosted. Valid values: `1` for yes and `0` for no.
     */
    public $Hostable;

    /**
     * @var array Filter certificates with specified tags.
     */
    public $Tags;

    /**
     * @var integer Whether to filter certificates pending issue: 1 for filtering, 0 and null for no filtering.
     */
    public $IsPendingIssue;

    /**
     * @var array Filter certificates by the specified certificate id, only supports certificate ids with permission.
     */
    public $CertIds;

    /**
     * @param integer $Offset Pagination offset, starting from 0. default is 0.
     * @param integer $Limit Number of items per page. default is 10. maximum value is 1000; values exceeding 1000 will be treated as 1000.
     * @param string $SearchKey Search keywords, supporting fuzzy match by certificate id, remark name, and certificate domain name.
     * @param string $CertificateType Certificate type. `CA`: client certificate; `SVR`: server certificate
     * @param integer $ProjectId Project ID
     * @param string $ExpirationSort Default sorting is by certificate application time in descending order. Sort by expiration date if the following values are passed: DESC for descending order of certificate expiration time, ASC for ascending order.
     * @param array $CertificateStatus Certificate status: 0=under review, 1=approved, 2=review failed, 3=expired, 4=dns record added, 5=enterprise certificate, pending submission, 6=order cancellation in progress, 7=canceled, 8=documents submitted, pending upload of confirmation letter, 9=certificate revocation in progress, 10=revoked, 11=reissue in progress, 12=pending upload of revocation confirmation letter, 13=free certificate pending document submission, 14=refunded, 15=certificate migration in progress.
     * @param integer $Deployable Whether the certificate can be deployed. `1`: yes; `0`: no
     * @param integer $Upload Whether to filter uploaded hosted certificates. `1`: Yes; `0`: No.
     * @param integer $Renew Whether to filter renewable certificates. `1`: Yes; `0`: No.
     * @param string $FilterSource Filter by source. `upload`: Uploaded certificate; `buy`: Tencent Cloud certificate. If this parameter is left empty, all certificates will be queried.
     * @param integer $IsSM Whether to filter Chinese SM certificates. `1`: Yes; `0`: No.
     * @param integer $FilterExpiring Whether to filter expiring certificates. `1`: Yes; `0`: No.
     * @param integer $Hostable Whether the certificate can be hosted. Valid values: `1` for yes and `0` for no.
     * @param array $Tags Filter certificates with specified tags.
     * @param integer $IsPendingIssue Whether to filter certificates pending issue: 1 for filtering, 0 and null for no filtering.
     * @param array $CertIds Filter certificates by the specified certificate id, only supports certificate ids with permission.
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

        if (array_key_exists("Hostable",$param) and $param["Hostable"] !== null) {
            $this->Hostable = $param["Hostable"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IsPendingIssue",$param) and $param["IsPendingIssue"] !== null) {
            $this->IsPendingIssue = $param["IsPendingIssue"];
        }

        if (array_key_exists("CertIds",$param) and $param["CertIds"] !== null) {
            $this->CertIds = $param["CertIds"];
        }
    }
}
