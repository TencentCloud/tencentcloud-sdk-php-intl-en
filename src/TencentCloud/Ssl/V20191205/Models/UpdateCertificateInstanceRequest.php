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
 * UpdateCertificateInstance request structure.
 *
 * @method string getOldCertificateId() Obtain One-click update old certificate ID
 * @method void setOldCertificateId(string $OldCertificateId) Set One-click update old certificate ID
 * @method array getResourceTypes() Obtain Type of the resource that needs to be deployed. The following parameter values are optional: clb, cdn, waf, live, ddos, teo, apigateway, vod, tke, and tcb.
 * @method void setResourceTypes(array $ResourceTypes) Set Type of the resource that needs to be deployed. The following parameter values are optional: clb, cdn, waf, live, ddos, teo, apigateway, vod, tke, and tcb.
 * @method string getCertificateId() Obtain One-click update new certificate ID
 * @method void setCertificateId(string $CertificateId) Set One-click update new certificate ID
 * @method array getRegions() Obtain List of regions that need to be deployed (deprecated)
 * @method void setRegions(array $Regions) Set List of regions that need to be deployed (deprecated)
 * @method array getResourceTypesRegions() Obtain List of regions for which cloud resources need to be deployed
 * @method void setResourceTypesRegions(array $ResourceTypesRegions) Set List of regions for which cloud resources need to be deployed
 * @method string getCertificatePublicKey() Obtain Public key of the certificate. If the public key of the certificate is uploaded, CertificateId does not need to be uploaded.
 * @method void setCertificatePublicKey(string $CertificatePublicKey) Set Public key of the certificate. If the public key of the certificate is uploaded, CertificateId does not need to be uploaded.
 * @method string getCertificatePrivateKey() Obtain Private key of the certificate. If the public key of the certificate is uploaded, the private key of the certificate is required.
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) Set Private key of the certificate. If the public key of the certificate is uploaded, the private key of the certificate is required.
 * @method integer getExpiringNotificationSwitch() Obtain Whether an expiration reminder is ignored for the old certificate. 0: The notification is not ignored. 1: The notification is ignored.
 * @method void setExpiringNotificationSwitch(integer $ExpiringNotificationSwitch) Set Whether an expiration reminder is ignored for the old certificate. 0: The notification is not ignored. 1: The notification is ignored.
 * @method boolean getRepeatable() Obtain Whether repeated uploading of the same certificate is allowed. If the public key of the certificate is uploaded, this parameter can be configured.
 * @method void setRepeatable(boolean $Repeatable) Set Whether repeated uploading of the same certificate is allowed. If the public key of the certificate is uploaded, this parameter can be configured.
 * @method boolean getAllowDownload() Obtain Whether downloading is allowed. If the public key of the certificate is uploaded, this parameter can be configured.
 * @method void setAllowDownload(boolean $AllowDownload) Set Whether downloading is allowed. If the public key of the certificate is uploaded, this parameter can be configured.
 * @method array getTags() Obtain Tag list. If the public key of the certificate is uploaded, this parameter can be configured.
 * @method void setTags(array $Tags) Set Tag list. If the public key of the certificate is uploaded, this parameter can be configured.
 * @method integer getProjectId() Obtain Project ID. If the public key of the certificate is uploaded, this parameter can be configured.
 * @method void setProjectId(integer $ProjectId) Set Project ID. If the public key of the certificate is uploaded, this parameter can be configured.
 */
class UpdateCertificateInstanceRequest extends AbstractModel
{
    /**
     * @var string One-click update old certificate ID
     */
    public $OldCertificateId;

    /**
     * @var array Type of the resource that needs to be deployed. The following parameter values are optional: clb, cdn, waf, live, ddos, teo, apigateway, vod, tke, and tcb.
     */
    public $ResourceTypes;

    /**
     * @var string One-click update new certificate ID
     */
    public $CertificateId;

    /**
     * @var array List of regions that need to be deployed (deprecated)
     * @deprecated
     */
    public $Regions;

    /**
     * @var array List of regions for which cloud resources need to be deployed
     */
    public $ResourceTypesRegions;

    /**
     * @var string Public key of the certificate. If the public key of the certificate is uploaded, CertificateId does not need to be uploaded.
     */
    public $CertificatePublicKey;

    /**
     * @var string Private key of the certificate. If the public key of the certificate is uploaded, the private key of the certificate is required.
     */
    public $CertificatePrivateKey;

    /**
     * @var integer Whether an expiration reminder is ignored for the old certificate. 0: The notification is not ignored. 1: The notification is ignored.
     */
    public $ExpiringNotificationSwitch;

    /**
     * @var boolean Whether repeated uploading of the same certificate is allowed. If the public key of the certificate is uploaded, this parameter can be configured.
     */
    public $Repeatable;

    /**
     * @var boolean Whether downloading is allowed. If the public key of the certificate is uploaded, this parameter can be configured.
     */
    public $AllowDownload;

    /**
     * @var array Tag list. If the public key of the certificate is uploaded, this parameter can be configured.
     */
    public $Tags;

    /**
     * @var integer Project ID. If the public key of the certificate is uploaded, this parameter can be configured.
     */
    public $ProjectId;

    /**
     * @param string $OldCertificateId One-click update old certificate ID
     * @param array $ResourceTypes Type of the resource that needs to be deployed. The following parameter values are optional: clb, cdn, waf, live, ddos, teo, apigateway, vod, tke, and tcb.
     * @param string $CertificateId One-click update new certificate ID
     * @param array $Regions List of regions that need to be deployed (deprecated)
     * @param array $ResourceTypesRegions List of regions for which cloud resources need to be deployed
     * @param string $CertificatePublicKey Public key of the certificate. If the public key of the certificate is uploaded, CertificateId does not need to be uploaded.
     * @param string $CertificatePrivateKey Private key of the certificate. If the public key of the certificate is uploaded, the private key of the certificate is required.
     * @param integer $ExpiringNotificationSwitch Whether an expiration reminder is ignored for the old certificate. 0: The notification is not ignored. 1: The notification is ignored.
     * @param boolean $Repeatable Whether repeated uploading of the same certificate is allowed. If the public key of the certificate is uploaded, this parameter can be configured.
     * @param boolean $AllowDownload Whether downloading is allowed. If the public key of the certificate is uploaded, this parameter can be configured.
     * @param array $Tags Tag list. If the public key of the certificate is uploaded, this parameter can be configured.
     * @param integer $ProjectId Project ID. If the public key of the certificate is uploaded, this parameter can be configured.
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

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }

        if (array_key_exists("ResourceTypesRegions",$param) and $param["ResourceTypesRegions"] !== null) {
            $this->ResourceTypesRegions = [];
            foreach ($param["ResourceTypesRegions"] as $key => $value){
                $obj = new ResourceTypeRegions();
                $obj->deserialize($value);
                array_push($this->ResourceTypesRegions, $obj);
            }
        }

        if (array_key_exists("CertificatePublicKey",$param) and $param["CertificatePublicKey"] !== null) {
            $this->CertificatePublicKey = $param["CertificatePublicKey"];
        }

        if (array_key_exists("CertificatePrivateKey",$param) and $param["CertificatePrivateKey"] !== null) {
            $this->CertificatePrivateKey = $param["CertificatePrivateKey"];
        }

        if (array_key_exists("ExpiringNotificationSwitch",$param) and $param["ExpiringNotificationSwitch"] !== null) {
            $this->ExpiringNotificationSwitch = $param["ExpiringNotificationSwitch"];
        }

        if (array_key_exists("Repeatable",$param) and $param["Repeatable"] !== null) {
            $this->Repeatable = $param["Repeatable"];
        }

        if (array_key_exists("AllowDownload",$param) and $param["AllowDownload"] !== null) {
            $this->AllowDownload = $param["AllowDownload"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
