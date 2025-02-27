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
 * DescribeHostTeoInstanceList request structure.
 *
 * @method string getCertificateId() Obtain The ID of the certificate to be deployed.
 * @method void setCertificateId(string $CertificateId) Set The ID of the certificate to be deployed.
 * @method string getResourceType() Obtain The type of resource for certificate deployment.
 * @method void setResourceType(string $ResourceType) Set The type of resource for certificate deployment.
 * @method integer getIsCache() Obtain Whether to query the cached results. Valid values: `1` (yes) and `0` (no). By default, the cached results within 30 minutes are queried.
 * @method void setIsCache(integer $IsCache) Set Whether to query the cached results. Valid values: `1` (yes) and `0` (no). By default, the cached results within 30 minutes are queried.
 * @method array getFilters() Obtain The list of filter parameters. FilterKey: domainMatch (query the list of instances with matching or non-matching domains). FilterValue: `1` (default; query the list of instances with matching domains) or `0` (query the list of instances with non-matching domains).
 * @method void setFilters(array $Filters) Set The list of filter parameters. FilterKey: domainMatch (query the list of instances with matching or non-matching domains). FilterValue: `1` (default; query the list of instances with matching domains) or `0` (query the list of instances with non-matching domains).
 * @method string getOldCertificateId() Obtain The ID of the deployed certificate.
 * @method void setOldCertificateId(string $OldCertificateId) Set The ID of the deployed certificate.
 * @method integer getOffset() Obtain Paging offset. default value: 0.
 * @method void setOffset(integer $Offset) Set Paging offset. default value: 0.
 * @method integer getLimit() Obtain Number of items per page. default: 10. maximum value: 200.	
 * @method void setLimit(integer $Limit) Set Number of items per page. default: 10. maximum value: 200.	
 * @method integer getAsyncCache() Obtain Asynchronous or not. 1 means yes, 0 means no. default: 0.
 * @method void setAsyncCache(integer $AsyncCache) Set Asynchronous or not. 1 means yes, 0 means no. default: 0.
 */
class DescribeHostTeoInstanceListRequest extends AbstractModel
{
    /**
     * @var string The ID of the certificate to be deployed.
     */
    public $CertificateId;

    /**
     * @var string The type of resource for certificate deployment.
     * @deprecated
     */
    public $ResourceType;

    /**
     * @var integer Whether to query the cached results. Valid values: `1` (yes) and `0` (no). By default, the cached results within 30 minutes are queried.
     */
    public $IsCache;

    /**
     * @var array The list of filter parameters. FilterKey: domainMatch (query the list of instances with matching or non-matching domains). FilterValue: `1` (default; query the list of instances with matching domains) or `0` (query the list of instances with non-matching domains).
     */
    public $Filters;

    /**
     * @var string The ID of the deployed certificate.
     */
    public $OldCertificateId;

    /**
     * @var integer Paging offset. default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of items per page. default: 10. maximum value: 200.	
     */
    public $Limit;

    /**
     * @var integer Asynchronous or not. 1 means yes, 0 means no. default: 0.
     */
    public $AsyncCache;

    /**
     * @param string $CertificateId The ID of the certificate to be deployed.
     * @param string $ResourceType The type of resource for certificate deployment.
     * @param integer $IsCache Whether to query the cached results. Valid values: `1` (yes) and `0` (no). By default, the cached results within 30 minutes are queried.
     * @param array $Filters The list of filter parameters. FilterKey: domainMatch (query the list of instances with matching or non-matching domains). FilterValue: `1` (default; query the list of instances with matching domains) or `0` (query the list of instances with non-matching domains).
     * @param string $OldCertificateId The ID of the deployed certificate.
     * @param integer $Offset Paging offset. default value: 0.
     * @param integer $Limit Number of items per page. default: 10. maximum value: 200.	
     * @param integer $AsyncCache Asynchronous or not. 1 means yes, 0 means no. default: 0.
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("IsCache",$param) and $param["IsCache"] !== null) {
            $this->IsCache = $param["IsCache"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AsyncCache",$param) and $param["AsyncCache"] !== null) {
            $this->AsyncCache = $param["AsyncCache"];
        }
    }
}
