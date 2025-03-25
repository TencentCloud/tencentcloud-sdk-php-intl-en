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
 * @method Models\BatchDeleteCSRResponse BatchDeleteCSR(Models\BatchDeleteCSRRequest $req) This API is used to batch delete CSRs.
 * @method Models\CancelAuditCertificateResponse CancelAuditCertificate(Models\CancelAuditCertificateRequest $req) This API is used to cancel certificate review.
 * @method Models\CancelCertificateOrderResponse CancelCertificateOrder(Models\CancelCertificateOrderRequest $req) This API is used to cancel a certificate order.
 * @method Models\CommitCertificateInformationResponse CommitCertificateInformation(Models\CommitCertificateInformationRequest $req) Submit payment certificate orders; This API does not maintain new features, and you can use the new API to submit orders. [CertificateOrderSubmit](https://intl.cloud.tencent.com/document/product/400/116032?from_cn_redirect=1).
 * @method Models\CreateCSRResponse CreateCSR(Models\CreateCSRRequest $req) This API is used to create a CSR.
 * @method Models\CreateCertificateResponse CreateCertificate(Models\CreateCertificateRequest $req) This API is used to purchase a certificate.
 * @method Models\CreateCertificateBindResourceSyncTaskResponse CreateCertificateBindResourceSyncTask(Models\CreateCertificateBindResourceSyncTaskRequest $req) This API is used to create an async task for querying the cloud resources associated with a certificate. If such a task already exists under the certificate ID, the ID of this task is returned as the result. The following types of cloud resources are supported: CLB, CDN, WAF, LIVE, VOD, DDOS, TKE, APIGATEWAY, TCB, and TEO (EDGEONE). You can query the result of this task using the `DescribeCertificateBindResourceTaskResult` API.
 * @method Models\DeleteCertificateResponse DeleteCertificate(Models\DeleteCertificateRequest $req) This API is used to delete a certificate.
 * @method Models\DescribeCSRResponse DescribeCSR(Models\DescribeCSRRequest $req) This API is used to query the details of a CSR.
 * @method Models\DescribeCSRSetResponse DescribeCSRSet(Models\DescribeCSRSetRequest $req) This API is used to query the CSR list.
 * @method Models\DescribeCertificateResponse DescribeCertificate(Models\DescribeCertificateRequest $req) This API is used to get certificate information.
 * @method Models\DescribeCertificateBindResourceTaskDetailResponse DescribeCertificateBindResourceTaskDetail(Models\DescribeCertificateBindResourceTaskDetailRequest $req) This API is used to query the task result of CreateCertificateBindResourceSyncTask, returning the asynchronous task result of the certificate associated with cloud resources, supporting the following cloud resources: clb, cdn, waf, live, vod, ddos, tke, apigateway, tcb, teo (edgeOne), cos.
 * @method Models\DescribeCertificateBindResourceTaskResultResponse DescribeCertificateBindResourceTaskResult(Models\DescribeCertificateBindResourceTaskResultRequest $req) This API is used to query the result of an async task created with `CreateCertificateBindResourceSyncTask` to query cloud resources associated with a certificate. The following types of cloud resources are supported: CLB, CDN, WAF, LIVE, VOD, DDOS, TKE, APIGATEWAY, TCB, and TEO (EDGEONE).
 * @method Models\DescribeCertificateDetailResponse DescribeCertificateDetail(Models\DescribeCertificateDetailRequest $req) This API is used to get certificate details.
 * @method Models\DescribeCertificateOperateLogsResponse DescribeCertificateOperateLogs(Models\DescribeCertificateOperateLogsRequest $req) This API is used to get certificate operation logs in the current account.
 * @method Models\DescribeCertificatesResponse DescribeCertificates(Models\DescribeCertificatesRequest $req) This API is used to get the certificate list.
 * @method Models\DescribeHostTeoInstanceListResponse DescribeHostTeoInstanceList(Models\DescribeHostTeoInstanceListRequest $req) This API is used to query the list of EdgeOne instances to which a certificate can be deployed.
 * @method Models\DescribeHostUpdateRecordResponse DescribeHostUpdateRecord(Models\DescribeHostUpdateRecordRequest $req) Query certificate cloud resource update record list
 * @method Models\DescribeHostUpdateRecordDetailResponse DescribeHostUpdateRecordDetail(Models\DescribeHostUpdateRecordDetailRequest $req) This API is used to query the update record details of certificate cloud resources.
 * @method Models\DownloadCertificateResponse DownloadCertificate(Models\DownloadCertificateRequest $req) This API is used to download a certificate.
 * @method Models\ModifyCSRResponse ModifyCSR(Models\ModifyCSRRequest $req) This API is used to modify the information of a CSR.
 * @method Models\ModifyCertificateAliasResponse ModifyCertificateAlias(Models\ModifyCertificateAliasRequest $req) This API is used to modify a certificate alias by passing in the certificate ID and new alias.
 * @method Models\ModifyCertificateProjectResponse ModifyCertificateProject(Models\ModifyCertificateProjectRequest $req) This API is used to modify the projects of multiple certificates.
 * @method Models\ModifyCertificateResubmitResponse ModifyCertificateResubmit(Models\ModifyCertificateResubmitRequest $req) This API is used to re-submit a review application for a paid certificate whose review failed or was canceled.
 * @method Models\ReplaceCertificateResponse ReplaceCertificate(Models\ReplaceCertificateRequest $req) This API is used to reissue a certificate. Note that if you have applied for a free certificate, only an RSA-2048 certificate will be reissued, and the certificate can be reissued only once.
 * @method Models\SubmitCertificateInformationResponse SubmitCertificateInformation(Models\SubmitCertificateInformationRequest $req) Submit documentation for paid certificates; This API does not maintain new features, and you can use the new API to submit documentation. [CertificateInfoSubmit](https://intl.cloud.tencent.com/document/product/400/116033?from_cn_redirect=1).
 * @method Models\UpdateCertificateInstanceResponse UpdateCertificateInstance(Models\UpdateCertificateInstanceRequest $req) This API is used to one-click update old certificate resources. This API is asynchronous. After calling it, if DeployRecordId is 0, it means the task is in progress. Repeat the request to this API. When the returned DeployRecordId is greater than 0, it means the task creation is successful. If it is not created successfully, an exception will be thrown.
 * @method Models\UpdateCertificateRecordRetryResponse UpdateCertificateRecordRetry(Models\UpdateCertificateRecordRetryRequest $req) Cloud resource update deployment retry record
 * @method Models\UpdateCertificateRecordRollbackResponse UpdateCertificateRecordRollback(Models\UpdateCertificateRecordRollbackRequest $req) Cloud resource update one-click rollback
 * @method Models\UploadCertificateResponse UploadCertificate(Models\UploadCertificateRequest $req) This API is used to upload a certificate.
 * @method Models\UploadConfirmLetterResponse UploadConfirmLetter(Models\UploadConfirmLetterRequest $req) This API is used to upload the confirmation letter for a certificate.
 */

class SslClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ssl.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ssl";

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
