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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDefaultCertificate request structure.
 *
 * @method string getZoneId() Obtain ID of the site
 * @method void setZoneId(string $ZoneId) Set ID of the site
 * @method string getCertId() Obtain Certificate ID
 * @method void setCertId(string $CertId) Set Certificate ID
 * @method string getStatus() Obtain Certificate status
`deployed`: The certificate is deployed.
`disabled`: The certificate is disabled.
If the deployment fails, you can pass in `Status = deployed` again.
 * @method void setStatus(string $Status) Set Certificate status
`deployed`: The certificate is deployed.
`disabled`: The certificate is disabled.
If the deployment fails, you can pass in `Status = deployed` again.
 */
class ModifyDefaultCertificateRequest extends AbstractModel
{
    /**
     * @var string ID of the site
     */
    public $ZoneId;

    /**
     * @var string Certificate ID
     */
    public $CertId;

    /**
     * @var string Certificate status
`deployed`: The certificate is deployed.
`disabled`: The certificate is disabled.
If the deployment fails, you can pass in `Status = deployed` again.
     */
    public $Status;

    /**
     * @param string $ZoneId ID of the site
     * @param string $CertId Certificate ID
     * @param string $Status Certificate status
`deployed`: The certificate is deployed.
`disabled`: The certificate is disabled.
If the deployment fails, you can pass in `Status = deployed` again.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
