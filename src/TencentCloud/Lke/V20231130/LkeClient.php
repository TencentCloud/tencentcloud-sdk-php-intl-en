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

namespace TencentCloud\Lke\V20231130;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Lke\V20231130\Models as Models;

/**
 * @method Models\CheckAttributeLabelExistResponse CheckAttributeLabelExist(Models\CheckAttributeLabelExistRequest $req) This API is used to check if the label name under an attribute exist.
 * @method Models\CheckAttributeLabelReferResponse CheckAttributeLabelRefer(Models\CheckAttributeLabelReferRequest $req) This API is used to check attribute label references.
 * @method Models\CreateAppResponse CreateApp(Models\CreateAppRequest $req) This API is used to create knowledge engine applications.
 * @method Models\CreateAttributeLabelResponse CreateAttributeLabel(Models\CreateAttributeLabelRequest $req) This API is used to create attributes.
 * @method Models\CreateCorpResponse CreateCorp(Models\CreateCorpRequest $req) This API is used to create enterprises.
 * @method Models\CreateDocCateResponse CreateDocCate(Models\CreateDocCateRequest $req) This API is used to create doc categories.
 * @method Models\CreateQAResponse CreateQA(Models\CreateQARequest $req) This API is used to enter Q&As.
 * @method Models\CreateQACateResponse CreateQACate(Models\CreateQACateRequest $req) This API is used to create Q&A categories.
 * @method Models\CreateReconstructDocumentFlowResponse CreateReconstructDocumentFlow(Models\CreateReconstructDocumentFlowRequest $req) This API is used to initiate requests for this asynchronous API, for initiating document parsing tasks.
Document parsing supports converting images or PDF files into Markdown format files, and can parse content elements including tables, formulas, images, headings, paragraphs, headers, and footers, and intelligently convert the content into reading order.
During the trial period, the QPS limit for a single account is only 1. If you need to access officially, please contact our R&D team.
 * @method Models\CreateRejectedQuestionResponse CreateRejectedQuestion(Models\CreateRejectedQuestionRequest $req) This API is used to create rejected questions.
 * @method Models\CreateReleaseResponse CreateRelease(Models\CreateReleaseRequest $req) This API is used to create a release.
 * @method Models\DeleteAppResponse DeleteApp(Models\DeleteAppRequest $req) This API is used to delete applications.
 * @method Models\DeleteAttributeLabelResponse DeleteAttributeLabel(Models\DeleteAttributeLabelRequest $req) This API is used to delete attribute labels.
 * @method Models\DeleteDocResponse DeleteDoc(Models\DeleteDocRequest $req) This API is used to delete documents.
 * @method Models\DeleteDocCateResponse DeleteDocCate(Models\DeleteDocCateRequest $req) This API is used to delete Doc categories.
 * @method Models\DeleteQAResponse DeleteQA(Models\DeleteQARequest $req) This API is used to delete Q&As.
 * @method Models\DeleteQACateResponse DeleteQACate(Models\DeleteQACateRequest $req) This API is used to delete categories.
 * @method Models\DeleteRejectedQuestionResponse DeleteRejectedQuestion(Models\DeleteRejectedQuestionRequest $req) This API is used to delete rejected questions.
 * @method Models\DescribeAppResponse DescribeApp(Models\DescribeAppRequest $req) This API is used to obtain application details under the corporate.
 * @method Models\DescribeAttributeLabelResponse DescribeAttributeLabel(Models\DescribeAttributeLabelRequest $req) This API is used to query attribute label details.
 * @method Models\DescribeCallStatsGraphResponse DescribeCallStatsGraph(Models\DescribeCallStatsGraphRequest $req) This API is used to show line chart of API calls.
 * @method Models\DescribeConcurrencyUsageResponse DescribeConcurrencyUsage(Models\DescribeConcurrencyUsageRequest $req) This API is used to response to concurrent calls.
 * @method Models\DescribeConcurrencyUsageGraphResponse DescribeConcurrencyUsageGraph(Models\DescribeConcurrencyUsageGraphRequest $req) This API is used to show line chart of concurrent calls.
 * @method Models\DescribeCorpResponse DescribeCorp(Models\DescribeCorpRequest $req) This API is used to query corporate details.
 * @method Models\DescribeDocResponse DescribeDoc(Models\DescribeDocRequest $req) This API is used to query document details.
 * @method Models\DescribeKnowledgeUsageResponse DescribeKnowledgeUsage(Models\DescribeKnowledgeUsageRequest $req) This API is used to query the knowledge library usage.
 * @method Models\DescribeKnowledgeUsagePieGraphResponse DescribeKnowledgeUsagePieGraph(Models\DescribeKnowledgeUsagePieGraphRequest $req) This API is used to query pie chart of the enterprise knowledge base capacity .
 * @method Models\DescribeQAResponse DescribeQA(Models\DescribeQARequest $req) This API is used to query Q&A details.
 * @method Models\DescribeReferResponse DescribeRefer(Models\DescribeReferRequest $req) This API is used to get the reference source details list.
 * @method Models\DescribeReleaseResponse DescribeRelease(Models\DescribeReleaseRequest $req) This API is used to query release details.
 * @method Models\DescribeReleaseInfoResponse DescribeReleaseInfo(Models\DescribeReleaseInfoRequest $req) This API is used to pull the release button status and last release time.
 * @method Models\DescribeRobotBizIDByAppKeyResponse DescribeRobotBizIDByAppKey(Models\DescribeRobotBizIDByAppKeyRequest $req) This API is used to get application business ID through appKey.
 * @method Models\DescribeSearchStatsGraphResponse DescribeSearchStatsGraph(Models\DescribeSearchStatsGraphRequest $req) This API is used to query line chart of search service calls.
 * @method Models\DescribeSegmentsResponse DescribeSegments(Models\DescribeSegmentsRequest $req) This API is used to get fragment details.
 * @method Models\DescribeStorageCredentialResponse DescribeStorageCredential(Models\DescribeStorageCredentialRequest $req) This API is used to get the temporary key for file upload.
 * @method Models\DescribeTokenUsageResponse DescribeTokenUsage(Models\DescribeTokenUsageRequest $req) This API is used to query API call token details.
 * @method Models\DescribeTokenUsageGraphResponse DescribeTokenUsageGraph(Models\DescribeTokenUsageGraphRequest $req) This API is used to show API call token line chart.
 * @method Models\DescribeUnsatisfiedReplyContextResponse DescribeUnsatisfiedReplyContext(Models\DescribeUnsatisfiedReplyContextRequest $req) This API is used to get the context of dissatisfied responses.
 * @method Models\ExportAttributeLabelResponse ExportAttributeLabel(Models\ExportAttributeLabelRequest $req) This API is used to export attribute labels.
 * @method Models\ExportQAListResponse ExportQAList(Models\ExportQAListRequest $req) This API is used to export Q&A list.
 * @method Models\ExportUnsatisfiedReplyResponse ExportUnsatisfiedReply(Models\ExportUnsatisfiedReplyRequest $req) This API is used to export dissatisfied responses.
 * @method Models\GenerateQAResponse GenerateQA(Models\GenerateQARequest $req) This API is used to generate Q%A from document.
 * @method Models\GetAnswerTypeDataCountResponse GetAnswerTypeDataCount(Models\GetAnswerTypeDataCountRequest $req) This API is used to get response type data statistics.
 * @method Models\GetAppKnowledgeCountResponse GetAppKnowledgeCount(Models\GetAppKnowledgeCountRequest $req) This API is used to get a model list.
 * @method Models\GetAppSecretResponse GetAppSecret(Models\GetAppSecretRequest $req) This API is used to get application secret keys.
 * @method Models\GetDocPreviewResponse GetDocPreview(Models\GetDocPreviewRequest $req) This API is used to get document preview information.
 * @method Models\GetLikeDataCountResponse GetLikeDataCount(Models\GetLikeDataCountRequest $req) This API is used to get likes and dislikes data statistics.
 * @method Models\GetMsgRecordResponse GetMsgRecord(Models\GetMsgRecordRequest $req) This API is used to obtain chat history based on the session ID (only historical session data within the past 180 days will be retained).
 * @method Models\GetReconstructDocumentResultResponse GetReconstructDocumentResult(Models\GetReconstructDocumentResultRequest $req) This is an asynchronous APIs, used to get document parsing task results.
 * @method Models\GetTaskStatusResponse GetTaskStatus(Models\GetTaskStatusRequest $req) This API is used to get the task status.
 * @method Models\GetWsTokenResponse GetWsToken(Models\GetWsTokenRequest $req) This API is used to get ws token.
 * @method Models\GroupDocResponse GroupDoc(Models\GroupDocRequest $req) DocGroup.
 * @method Models\GroupQAResponse GroupQA(Models\GroupQARequest $req) Q&A Group.
 * @method Models\IgnoreUnsatisfiedReplyResponse IgnoreUnsatisfiedReply(Models\IgnoreUnsatisfiedReplyRequest $req) This API is used to ignore dissatisfied responses.
 * @method Models\ListAppResponse ListApp(Models\ListAppRequest $req) This API is used to get the application list under the corporate.
 * @method Models\ListAppCategoryResponse ListAppCategory(Models\ListAppCategoryRequest $req) This API is used to get list of application types.
 * @method Models\ListAppKnowledgeDetailResponse ListAppKnowledgeDetail(Models\ListAppKnowledgeDetailRequest $req) This API is used to query the knowledge base capacity details in a list.
 * @method Models\ListAttributeLabelResponse ListAttributeLabel(Models\ListAttributeLabelRequest $req) This API is used to query attribute label lists.
 * @method Models\ListDocResponse ListDoc(Models\ListDocRequest $req) This API is used to get document list.
 * @method Models\ListDocCateResponse ListDocCate(Models\ListDocCateRequest $req) This API is used to get document category.
 * @method Models\ListModelResponse ListModel(Models\ListModelRequest $req) This API is used to get the model list.
 * @method Models\ListQAResponse ListQA(Models\ListQARequest $req) This API is used to query Q&A lists.
 * @method Models\ListQACateResponse ListQACate(Models\ListQACateRequest $req) This API is used to get Q&A categories.
 * @method Models\ListRejectedQuestionResponse ListRejectedQuestion(Models\ListRejectedQuestionRequest $req) This API is used to get rejected questions.
 * @method Models\ListRejectedQuestionPreviewResponse ListRejectedQuestionPreview(Models\ListRejectedQuestionPreviewRequest $req) This API is used to release a preview of rejected questions.
 * @method Models\ListReleaseResponse ListRelease(Models\ListReleaseRequest $req) This API is used to get the release list.
 * @method Models\ListReleaseConfigPreviewResponse ListReleaseConfigPreview(Models\ListReleaseConfigPreviewRequest $req) This API is used to preview the release configuration items.
 * @method Models\ListReleaseDocPreviewResponse ListReleaseDocPreview(Models\ListReleaseDocPreviewRequest $req) This API is used to preview released documents.
 * @method Models\ListReleaseQAPreviewResponse ListReleaseQAPreview(Models\ListReleaseQAPreviewRequest $req) List of documents.
 * @method Models\ListSelectDocResponse ListSelectDoc(Models\ListSelectDocRequest $req) This API is used to get account information.
 * @method Models\ListUnsatisfiedReplyResponse ListUnsatisfiedReply(Models\ListUnsatisfiedReplyRequest $req) This API is used to query a list of dissatisfied responses.
 * @method Models\ListUsageCallDetailResponse ListUsageCallDetail(Models\ListUsageCallDetailRequest $req) This API is used to query single call details in a list.
 * @method Models\ModifyAppResponse ModifyApp(Models\ModifyAppRequest $req) This API is used to modify application request structure.
 * @method Models\ModifyAttributeLabelResponse ModifyAttributeLabel(Models\ModifyAttributeLabelRequest $req) This API is used to edit attribute labels.
 * @method Models\ModifyDocResponse ModifyDoc(Models\ModifyDocRequest $req) This API is used to modify documents.
 * @method Models\ModifyDocAttrRangeResponse ModifyDocAttrRange(Models\ModifyDocAttrRangeRequest $req) This API is used to modify applicable scope of the document in batches.
 * @method Models\ModifyDocCateResponse ModifyDocCate(Models\ModifyDocCateRequest $req) This API is used to modify Doc categories.
 * @method Models\ModifyQAResponse ModifyQA(Models\ModifyQARequest $req) This API is used to update Q&As.
 * @method Models\ModifyQAAttrRangeResponse ModifyQAAttrRange(Models\ModifyQAAttrRangeRequest $req) This API is used to modify Q&A applicable scope in batches.
 * @method Models\ModifyQACateResponse ModifyQACate(Models\ModifyQACateRequest $req) This API is used to modify Q&A categories.
 * @method Models\ModifyRejectedQuestionResponse ModifyRejectedQuestion(Models\ModifyRejectedQuestionRequest $req) This API is used to modify rejected questions.
 * @method Models\RateMsgRecordResponse RateMsgRecord(Models\RateMsgRecordRequest $req) This API is used to show messages for likes and dislikes.
 * @method Models\RenameDocResponse RenameDoc(Models\RenameDocRequest $req) This API is used to rename a document.
 * @method Models\RetryDocAuditResponse RetryDocAudit(Models\RetryDocAuditRequest $req) This API is used to retry document parsing.
 * @method Models\RetryDocParseResponse RetryDocParse(Models\RetryDocParseRequest $req) This API is used to retry document parsing.
 * @method Models\RetryReleaseResponse RetryRelease(Models\RetryReleaseRequest $req) This API is used to retry after release suspension.
 * @method Models\SaveDocResponse SaveDoc(Models\SaveDocRequest $req) This API is used to save a knowledge base document Q&As.
Three steps to store a file in the knowledge library of the application: 
1. Obtain a temporary key. For more information, see [API Documentation](https://cloud.tencent.com/document/product/1759/105050). Different parameter combinations of the temporary key have different permissions. For more information, see [Tencent Cloud Agent Development Platform/TCADP COS Guide](https://cloud.tencent.com/document/product/1759/116238). 
2. Call the COS storage API provided by Tencent Cloud to store the file in the COS of TCADP. For details, see [COS SDK Overview](https://cloud.tencent.com/document/product/436/6474). Note that the temporary key method is used to operate COS. 
3. Call this API to store the basic information of the file in TCADP. 
For the above steps, see [Documentation](https://cloud.tencent.com/document/product/1759/108903). At the end of the documentation, there is a [code demo](https://cloud.tencent.com/document/product/1759/108903#demo), which can be used as a reference.
 * @method Models\StopDocParseResponse StopDocParse(Models\StopDocParseRequest $req) This API is used to terminate document parsing.
 * @method Models\UploadAttributeLabelResponse UploadAttributeLabel(Models\UploadAttributeLabelRequest $req) This API is used to upload and import attribute labels.
 * @method Models\VerifyQAResponse VerifyQA(Models\VerifyQARequest $req) This API is used to verify Q&A.
 */

class LkeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "lke.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "lke";

    /**
     * @var string
     */
    protected $version = "2023-11-30";

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
        $respClass = "TencentCloud"."\\".ucfirst("lke")."\\"."V20231130\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
