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
 * AssociateListenerAdditionalCertificates request structure.
 *
 * @method array getCertificateIds() Obtain List of extended certificate IDs.
 * @method void setCertificateIds(array $CertificateIds) Set List of extended certificate IDs.
 * @method string getListenerId() Obtain Listener ID, in the format of lst- followed by 8 alphanumeric characters.
 * @method void setListenerId(string $ListenerId) Set Listener ID, in the format of lst- followed by 8 alphanumeric characters.
 * @method string getLoadBalancerId() Obtain CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
 * @method string getClientToken() Obtain Client token, used to ensure the idempotency of requests. Generate a parameter value from your client to ensure the uniqueness of the value for different requests. ClientToken supports only ASCII characters.
If not specified, the system automatically uses the RequestId of the API request as the ClientToken ID. The RequestId of each API request may not be the same.
 * @method void setClientToken(string $ClientToken) Set Client token, used to ensure the idempotency of requests. Generate a parameter value from your client to ensure the uniqueness of the value for different requests. ClientToken supports only ASCII characters.
If not specified, the system automatically uses the RequestId of the API request as the ClientToken ID. The RequestId of each API request may not be the same.
 * @method string getDryRun() Obtain Whether to only precheck this request. Parameter Value:
true: send a check request. It will not add extension certs for HTTPS and QUIC listeners. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code DryRunOperation.
false (default value): Send a normal request, return HTTP 2xx status code after check, and directly perform the operation.
 * @method void setDryRun(string $DryRun) Set Whether to only precheck this request. Parameter Value:
true: send a check request. It will not add extension certs for HTTPS and QUIC listeners. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code DryRunOperation.
false (default value): Send a normal request, return HTTP 2xx status code after check, and directly perform the operation.
 */
class AssociateListenerAdditionalCertificatesRequest extends AbstractModel
{
    /**
     * @var array List of extended certificate IDs.
     */
    public $CertificateIds;

    /**
     * @var string Listener ID, in the format of lst- followed by 8 alphanumeric characters.
     */
    public $ListenerId;

    /**
     * @var string CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var string Client token, used to ensure the idempotency of requests. Generate a parameter value from your client to ensure the uniqueness of the value for different requests. ClientToken supports only ASCII characters.
If not specified, the system automatically uses the RequestId of the API request as the ClientToken ID. The RequestId of each API request may not be the same.
     */
    public $ClientToken;

    /**
     * @var string Whether to only precheck this request. Parameter Value:
true: send a check request. It will not add extension certs for HTTPS and QUIC listeners. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code DryRunOperation.
false (default value): Send a normal request, return HTTP 2xx status code after check, and directly perform the operation.
     */
    public $DryRun;

    /**
     * @param array $CertificateIds List of extended certificate IDs.
     * @param string $ListenerId Listener ID, in the format of lst- followed by 8 alphanumeric characters.
     * @param string $LoadBalancerId CLB instance ID. The format is alb- followed by 8 alphanumeric characters.
     * @param string $ClientToken Client token, used to ensure the idempotency of requests. Generate a parameter value from your client to ensure the uniqueness of the value for different requests. ClientToken supports only ASCII characters.
If not specified, the system automatically uses the RequestId of the API request as the ClientToken ID. The RequestId of each API request may not be the same.
     * @param string $DryRun Whether to only precheck this request. Parameter Value:
true: send a check request. It will not add extension certs for HTTPS and QUIC listeners. Check items include whether required parameters are filled in, request format, and service limits. If the check fails, return the corresponding error. If the check passes, return the error code DryRunOperation.
false (default value): Send a normal request, return HTTP 2xx status code after check, and directly perform the operation.
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
        if (array_key_exists("CertificateIds",$param) and $param["CertificateIds"] !== null) {
            $this->CertificateIds = $param["CertificateIds"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
