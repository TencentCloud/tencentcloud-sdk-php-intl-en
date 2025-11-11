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

namespace TencentCloud\Lkeap\V20240522;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Lkeap\V20240522\Models as Models;

/**
 * @method Models\CreateReconstructDocumentFlowResponse CreateReconstructDocumentFlow(Models\CreateReconstructDocumentFlowRequest $req) This API is used to initiate requests for this asynchronous API, for initiating document parsing tasks.
Document parsing supports converting images or PDF files into Markdown format files, and can parse content elements including tables, formulas, images, headings, paragraphs, headers, and footers, and intelligently convert the content into reading order. Please refer to the input parameter list below for specific supported file types.
During the trial period, the QPS limit for a single account is only 1. If you need to access officially, please contact our R&D team.
 * @method Models\CreateSplitDocumentFlowResponse CreateSplitDocumentFlow(Models\CreateSplitDocumentFlowRequest $req) This API is used to create document segmentation tasks, support various file types, possess mllm capacity, and can analyze and deeply understand the information in charts.
 * @method Models\GetReconstructDocumentResultResponse GetReconstructDocumentResult(Models\GetReconstructDocumentResultRequest $req) This is an asynchronous API for querying results, which is used to obtain the result of document parsing.
 * @method Models\GetSplitDocumentResultResponse GetSplitDocumentResult(Models\GetSplitDocumentResultRequest $req) This API is used to query the results of document splitting tasks.
 * @method Models\QueryRewriteResponse QueryRewrite(Models\QueryRewriteRequest $req) QueryRewrite is mainly used in multi-round conversations for reference resolution and ellipsis completion. Using this API, you don't need to input prompt descriptions. A more accurate user query can be generated based on the conversation history. In terms of application scenarios, this API can be applied to various scenarios such as intelligent Q&A and conversational search.
There is a call limit for single-account for this API. If you need to increase the concurrency limit, please contact us (https://cloud.tencent.com/act/event/Online_service).
 * @method Models\ReconstructDocumentSSEResponse ReconstructDocumentSSE(Models\ReconstructDocumentSSERequest $req) This API is used for quasi-real-time document parsing, using HTTP SSE protocol for communication.
 * @method Models\RunRerankResponse RunRerank(Models\RunRerankRequest $req) This API is used to reorder the results of multi-channel recall based on the rerank model of knowledge engine fine-tuning model technology, sort the segments according to the relevance between the query and the segment content from high to low score, and output the corresponding scoring results.
 */

class LkeapClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "lkeap.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "lkeap";

    /**
     * @var string
     */
    protected $version = "2024-05-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("lkeap")."\\"."V20240522\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
