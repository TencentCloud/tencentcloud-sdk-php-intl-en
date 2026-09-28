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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListenerCertificates request structure.
 *
 * @method string getCertificateType() Obtain Certificate type. Value: CA or SVR (server certificate).
 * @method void setCertificateType(string $CertificateType) Set Certificate type. Value: CA or SVR (server certificate).
 * @method string getListenerId() Obtain Listener ID, in the format of lst- followed by 8 alphanumeric characters.
 * @method void setListenerId(string $ListenerId) Set Listener ID, in the format of lst- followed by 8 alphanumeric characters.
 * @method string getLoadBalancerId() Obtain CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method integer getMaxResults() Obtain Maximum number of data records to read this time. Value range: 1-100. Default value: 20.
 * @method void setMaxResults(integer $MaxResults) Set Maximum number of data records to read this time. Value range: 1-100. Default value: 20.
 * @method string getNextToken() Obtain Token for the next query. Value:
Not required for the first query or when there is no next query.
If there is a next query, the value is the NextToken value returned from the last API call.
 * @method void setNextToken(string $NextToken) Set Token for the next query. Value:
Not required for the first query or when there is no next query.
If there is a next query, the value is the NextToken value returned from the last API call.
 */
class DescribeListenerCertificatesRequest extends AbstractModel
{
    /**
     * @var string Certificate type. Value: CA or SVR (server certificate).
     */
    public $CertificateType;

    /**
     * @var string Listener ID, in the format of lst- followed by 8 alphanumeric characters.
     */
    public $ListenerId;

    /**
     * @var string CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var integer Maximum number of data records to read this time. Value range: 1-100. Default value: 20.
     */
    public $MaxResults;

    /**
     * @var string Token for the next query. Value:
Not required for the first query or when there is no next query.
If there is a next query, the value is the NextToken value returned from the last API call.
     */
    public $NextToken;

    /**
     * @param string $CertificateType Certificate type. Value: CA or SVR (server certificate).
     * @param string $ListenerId Listener ID, in the format of lst- followed by 8 alphanumeric characters.
     * @param string $LoadBalancerId CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     * @param integer $MaxResults Maximum number of data records to read this time. Value range: 1-100. Default value: 20.
     * @param string $NextToken Token for the next query. Value:
Not required for the first query or when there is no next query.
If there is a next query, the value is the NextToken value returned from the last API call.
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
        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
