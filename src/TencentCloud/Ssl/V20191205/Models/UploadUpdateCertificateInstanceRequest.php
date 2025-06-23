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
 * UploadUpdateCertificateInstance request structure.
 *
 * @method string getOldCertificateId() Obtain Old Certificate ID for One-Click Update. Query the tencent cloud resources bound to this certificate ID and use the new certificate to update these resources.
 * @method void setOldCertificateId(string $OldCertificateId) Set Old Certificate ID for One-Click Update. Query the tencent cloud resources bound to this certificate ID and use the new certificate to update these resources.
 * @method array getResourceTypes() Obtain Resource type that needs to be deployed, parameter value (lowercase): clb.
 * @method void setResourceTypes(array $ResourceTypes) Set Resource type that needs to be deployed, parameter value (lowercase): clb.
 * @method string getCertificatePublicKey() Obtain Public key certificate.
 * @method void setCertificatePublicKey(string $CertificatePublicKey) Set Public key certificate.
 * @method string getCertificatePrivateKey() Obtain Private key certificate.
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) Set Private key certificate.
 * @method array getResourceTypesRegions() Obtain The list of regions where cloud resources need to be deployed. The cloud resource type supported in the region is required. Value: clb.
 * @method void setResourceTypesRegions(array $ResourceTypesRegions) Set The list of regions where cloud resources need to be deployed. The cloud resource type supported in the region is required. Value: clb.
 */
class UploadUpdateCertificateInstanceRequest extends AbstractModel
{
    /**
     * @var string Old Certificate ID for One-Click Update. Query the tencent cloud resources bound to this certificate ID and use the new certificate to update these resources.
     */
    public $OldCertificateId;

    /**
     * @var array Resource type that needs to be deployed, parameter value (lowercase): clb.
     */
    public $ResourceTypes;

    /**
     * @var string Public key certificate.
     */
    public $CertificatePublicKey;

    /**
     * @var string Private key certificate.
     */
    public $CertificatePrivateKey;

    /**
     * @var array The list of regions where cloud resources need to be deployed. The cloud resource type supported in the region is required. Value: clb.
     */
    public $ResourceTypesRegions;

    /**
     * @param string $OldCertificateId Old Certificate ID for One-Click Update. Query the tencent cloud resources bound to this certificate ID and use the new certificate to update these resources.
     * @param array $ResourceTypes Resource type that needs to be deployed, parameter value (lowercase): clb.
     * @param string $CertificatePublicKey Public key certificate.
     * @param string $CertificatePrivateKey Private key certificate.
     * @param array $ResourceTypesRegions The list of regions where cloud resources need to be deployed. The cloud resource type supported in the region is required. Value: clb.
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
        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }

        if (array_key_exists("CertificatePublicKey",$param) and $param["CertificatePublicKey"] !== null) {
            $this->CertificatePublicKey = $param["CertificatePublicKey"];
        }

        if (array_key_exists("CertificatePrivateKey",$param) and $param["CertificatePrivateKey"] !== null) {
            $this->CertificatePrivateKey = $param["CertificatePrivateKey"];
        }

        if (array_key_exists("ResourceTypesRegions",$param) and $param["ResourceTypesRegions"] !== null) {
            $this->ResourceTypesRegions = [];
            foreach ($param["ResourceTypesRegions"] as $key => $value){
                $obj = new ResourceTypeRegions();
                $obj->deserialize($value);
                array_push($this->ResourceTypesRegions, $obj);
            }
        }
    }
}
