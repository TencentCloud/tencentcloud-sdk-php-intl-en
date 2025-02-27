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
 * @method string getOldCertificateId() Obtain The old certificate id for one-click update. by querying the cloud resources bound to this certificate id, and then updating these cloud resources with the new certificate.
 * @method void setOldCertificateId(string $OldCertificateId) Set The old certificate id for one-click update. by querying the cloud resources bound to this certificate id, and then updating these cloud resources with the new certificate.
 * @method array getResourceTypes() Obtain Resource types that need to be deployed, with optional parameter values (lowercase): clb, cdn, waf, live, ddos, teo, apigateway, vod, tke, tcb, tse, cos.
 * @method void setResourceTypes(array $ResourceTypes) Set Resource types that need to be deployed, with optional parameter values (lowercase): clb, cdn, waf, live, ddos, teo, apigateway, vod, tke, tcb, tse, cos.
 * @method string getCertificateId() Obtain New certificate id for one-click update. if this parameter is not provided, the public key certificate and private key certificate must be provided.
 * @method void setCertificateId(string $CertificateId) Set New certificate id for one-click update. if this parameter is not provided, the public key certificate and private key certificate must be provided.
 * @method array getRegions() Obtain List of regions that need to be deployed (deprecated)
 * @method void setRegions(array $Regions) Set List of regions that need to be deployed (deprecated)
 * @method array getResourceTypesRegions() Obtain List of regions where cloud resources need to be deployed. the cloud resource type of the supported region must be passed. valid values: clb, tke, apigateway, waf, tcb, tse, cos.
 * @method void setResourceTypesRegions(array $ResourceTypesRegions) Set List of regions where cloud resources need to be deployed. the cloud resource type of the supported region must be passed. valid values: clb, tke, apigateway, waf, tcb, tse, cos.
 * @method string getCertificatePublicKey() Obtain If a public key certificate is uploaded, the private key certificate must also be uploaded, and the CertificateId does not need to be transmitted.
 * @method void setCertificatePublicKey(string $CertificatePublicKey) Set If a public key certificate is uploaded, the private key certificate must also be uploaded, and the CertificateId does not need to be transmitted.
 * @method string getCertificatePrivateKey() Obtain If a private key certificate is uploaded, then a public key certificate must be uploaded; CertificateId is not required.
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) Set If a private key certificate is uploaded, then a public key certificate must be uploaded; CertificateId is not required.
 * @method integer getExpiringNotificationSwitch() Obtain Whether to ignore expiration reminder for old certificate  0: do not ignore the notification. 1: ignore the notification, ignore the expiration reminder of OldCertificateId.
 * @method void setExpiringNotificationSwitch(integer $ExpiringNotificationSwitch) Set Whether to ignore expiration reminder for old certificate  0: do not ignore the notification. 1: ignore the notification, ignore the expiration reminder of OldCertificateId.
 * @method boolean getRepeatable() Obtain It specifies whether the same certificate is allowed to be uploaded repeatedly. If the public key and private key certificates are selected for upload, this parameter can be configured. If there are duplicate certificates, the update task will fail.
 * @method void setRepeatable(boolean $Repeatable) Set It specifies whether the same certificate is allowed to be uploaded repeatedly. If the public key and private key certificates are selected for upload, this parameter can be configured. If there are duplicate certificates, the update task will fail.
 * @method boolean getAllowDownload() Obtain Whether to allow downloading. If you choose to upload a public/private key certificate, this parameter can be configured.
 * @method void setAllowDownload(boolean $AllowDownload) Set Whether to allow downloading. If you choose to upload a public/private key certificate, this parameter can be configured.
 * @method array getTags() Obtain Tag list. If you choose to upload a public/private key certificate, you can configure this parameter.
 * @method void setTags(array $Tags) Set Tag list. If you choose to upload a public/private key certificate, you can configure this parameter.
 * @method integer getProjectId() Obtain Project id. If you choose to upload a public/private key certificate, you can configure this parameter.
 * @method void setProjectId(integer $ProjectId) Set Project id. If you choose to upload a public/private key certificate, you can configure this parameter.
 */
class UpdateCertificateInstanceRequest extends AbstractModel
{
    /**
     * @var string The old certificate id for one-click update. by querying the cloud resources bound to this certificate id, and then updating these cloud resources with the new certificate.
     */
    public $OldCertificateId;

    /**
     * @var array Resource types that need to be deployed, with optional parameter values (lowercase): clb, cdn, waf, live, ddos, teo, apigateway, vod, tke, tcb, tse, cos.
     */
    public $ResourceTypes;

    /**
     * @var string New certificate id for one-click update. if this parameter is not provided, the public key certificate and private key certificate must be provided.
     */
    public $CertificateId;

    /**
     * @var array List of regions that need to be deployed (deprecated)
     * @deprecated
     */
    public $Regions;

    /**
     * @var array List of regions where cloud resources need to be deployed. the cloud resource type of the supported region must be passed. valid values: clb, tke, apigateway, waf, tcb, tse, cos.
     */
    public $ResourceTypesRegions;

    /**
     * @var string If a public key certificate is uploaded, the private key certificate must also be uploaded, and the CertificateId does not need to be transmitted.
     */
    public $CertificatePublicKey;

    /**
     * @var string If a private key certificate is uploaded, then a public key certificate must be uploaded; CertificateId is not required.
     */
    public $CertificatePrivateKey;

    /**
     * @var integer Whether to ignore expiration reminder for old certificate  0: do not ignore the notification. 1: ignore the notification, ignore the expiration reminder of OldCertificateId.
     */
    public $ExpiringNotificationSwitch;

    /**
     * @var boolean It specifies whether the same certificate is allowed to be uploaded repeatedly. If the public key and private key certificates are selected for upload, this parameter can be configured. If there are duplicate certificates, the update task will fail.
     */
    public $Repeatable;

    /**
     * @var boolean Whether to allow downloading. If you choose to upload a public/private key certificate, this parameter can be configured.
     */
    public $AllowDownload;

    /**
     * @var array Tag list. If you choose to upload a public/private key certificate, you can configure this parameter.
     */
    public $Tags;

    /**
     * @var integer Project id. If you choose to upload a public/private key certificate, you can configure this parameter.
     */
    public $ProjectId;

    /**
     * @param string $OldCertificateId The old certificate id for one-click update. by querying the cloud resources bound to this certificate id, and then updating these cloud resources with the new certificate.
     * @param array $ResourceTypes Resource types that need to be deployed, with optional parameter values (lowercase): clb, cdn, waf, live, ddos, teo, apigateway, vod, tke, tcb, tse, cos.
     * @param string $CertificateId New certificate id for one-click update. if this parameter is not provided, the public key certificate and private key certificate must be provided.
     * @param array $Regions List of regions that need to be deployed (deprecated)
     * @param array $ResourceTypesRegions List of regions where cloud resources need to be deployed. the cloud resource type of the supported region must be passed. valid values: clb, tke, apigateway, waf, tcb, tse, cos.
     * @param string $CertificatePublicKey If a public key certificate is uploaded, the private key certificate must also be uploaded, and the CertificateId does not need to be transmitted.
     * @param string $CertificatePrivateKey If a private key certificate is uploaded, then a public key certificate must be uploaded; CertificateId is not required.
     * @param integer $ExpiringNotificationSwitch Whether to ignore expiration reminder for old certificate  0: do not ignore the notification. 1: ignore the notification, ignore the expiration reminder of OldCertificateId.
     * @param boolean $Repeatable It specifies whether the same certificate is allowed to be uploaded repeatedly. If the public key and private key certificates are selected for upload, this parameter can be configured. If there are duplicate certificates, the update task will fail.
     * @param boolean $AllowDownload Whether to allow downloading. If you choose to upload a public/private key certificate, this parameter can be configured.
     * @param array $Tags Tag list. If you choose to upload a public/private key certificate, you can configure this parameter.
     * @param integer $ProjectId Project id. If you choose to upload a public/private key certificate, you can configure this parameter.
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
