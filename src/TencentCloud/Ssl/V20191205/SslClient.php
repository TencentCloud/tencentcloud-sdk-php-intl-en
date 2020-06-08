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

namespace TencentCloud\Ssl\V20191205;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ssl\V20191205\Models as Models;

/**
 * @method Models\ApplyCertificateResponse ApplyCertificate(Models\ApplyCertificateRequest $req) This API is used to apply for a free certificate.
 * @method Models\CancelCertificateOrderResponse CancelCertificateOrder(Models\CancelCertificateOrderRequest $req) This API is used to cancel a certificate order.
 * @method Models\CommitCertificateInformationResponse CommitCertificateInformation(Models\CommitCertificateInformationRequest $req) This API is used to submit a certificate order.
 * @method Models\DeleteCertificateResponse DeleteCertificate(Models\DeleteCertificateRequest $req) This API is used to delete a certificate.
 * @method Models\DescribeCertificateResponse DescribeCertificate(Models\DescribeCertificateRequest $req) This API is used to obtain certificate information.
 * @method Models\DescribeCertificateDetailResponse DescribeCertificateDetail(Models\DescribeCertificateDetailRequest $req) This API is used to obtain certificate details.
 * @method Models\DescribeCertificateOperateLogsResponse DescribeCertificateOperateLogs(Models\DescribeCertificateOperateLogsRequest $req) This API is used to obtain certificate operation logs in the current account.
 * @method Models\DescribeCertificatesResponse DescribeCertificates(Models\DescribeCertificatesRequest $req) This API is used to obtain the certificate list.
 * @method Models\DownloadCertificateResponse DownloadCertificate(Models\DownloadCertificateRequest $req) This API is used to download a certificate.
 * @method Models\ModifyCertificateAliasResponse ModifyCertificateAlias(Models\ModifyCertificateAliasRequest $req) This API is used to modify certificate alias by inputting the certificate ID and new alias.
 * @method Models\ModifyCertificateProjectResponse ModifyCertificateProject(Models\ModifyCertificateProjectRequest $req) This API is used to modify the projects of multiple certificates.
 * @method Models\ReplaceCertificateResponse ReplaceCertificate(Models\ReplaceCertificateRequest $req) This API is used to reissue a certificate. Note that if you have applied for a free certificate, only an RSA-2048 certificate will be reissued, and the certificate can be reissued only once.
 * @method Models\SubmitCertificateInformationResponse SubmitCertificateInformation(Models\SubmitCertificateInformationRequest $req) This API is used to submit certificate information.
 * @method Models\UploadCertificateResponse UploadCertificate(Models\UploadCertificateRequest $req) This API is used to upload a certificate.
 */

class SslClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ssl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-12-05";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("ssl")."\\"."V20191205\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
