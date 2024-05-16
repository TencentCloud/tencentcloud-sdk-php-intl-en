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

namespace TencentCloud\Billing\V20180709;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Billing\V20180709\Models as Models;

/**
 * @method Models\CreateAllocationTagResponse CreateAllocationTag(Models\CreateAllocationTagRequest $req) This API is used to batch set cost allocation tags.
 * @method Models\DeleteAllocationTagResponse DeleteAllocationTag(Models\DeleteAllocationTagRequest $req) u200cThis API is used to batch cancel cost allocation tags.
 * @method Models\DescribeAccountBalanceResponse DescribeAccountBalance(Models\DescribeAccountBalanceRequest $req) This API is used to check the Tencent Cloud account balance.
 * @method Models\DescribeBillDetailResponse DescribeBillDetail(Models\DescribeBillDetailRequest $req) u200cThis API is used to get bill details.
Note:
1. The API request may fail due to network instability or other exceptions. In this case, we recommend you manually retry the request when the API request fails.
2.If the volume of your bill data is high (for example, if over 200 thousand bill entries are generated for a month), bill data query via APIs may be slow. We recommend you enable bill storage so that you can obtain bill files from COS buckets for analysis. For details, see [Saving Bills to COS](https://intl.cloud.tencent.com/document/product/555/61275?from_cn_redirect=1).
 * @method Models\DescribeBillDetailForOrganizationResponse DescribeBillDetailForOrganization(Models\DescribeBillDetailForOrganizationRequest $req) This API is used to get pay-on-behalf bills of the admin account (bill details).
Note: The API request may fail due to network instability or other exceptions. In this case, we recommend you manually retry the request when the API request fails.
 * @method Models\DescribeBillDownloadUrlResponse DescribeBillDownloadUrl(Models\DescribeBillDownloadUrlRequest $req) This API is used to get bill download URLs for L0, L1, L2, and L3 bills and bill packs.
 * @method Models\DescribeBillResourceSummaryResponse DescribeBillResourceSummary(Models\DescribeBillResourceSummaryRequest $req) This API is used to get the bill summarized by instance.
 * @method Models\DescribeBillResourceSummaryForOrganizationResponse DescribeBillResourceSummaryForOrganization(Models\DescribeBillResourceSummaryForOrganizationRequest $req) This API is used to get pay-on-behalf bills of the admin account (bills by instance).
 * @method Models\DescribeBillSummaryResponse DescribeBillSummary(Models\DescribeBillSummaryRequest $req) This API is used to get bill details by product, project, region, billing mode, and tag by passing in parameters.
 * @method Models\DescribeBillSummaryByPayModeResponse DescribeBillSummaryByPayMode(Models\DescribeBillSummaryByPayModeRequest $req) This API is used to get the bill summarized by billing mode.
 * @method Models\DescribeBillSummaryByProductResponse DescribeBillSummaryByProduct(Models\DescribeBillSummaryByProductRequest $req) Gets the bill summarized according to product
 * @method Models\DescribeBillSummaryByProjectResponse DescribeBillSummaryByProject(Models\DescribeBillSummaryByProjectRequest $req) Gets the bill summarized according to project
 * @method Models\DescribeBillSummaryByRegionResponse DescribeBillSummaryByRegion(Models\DescribeBillSummaryByRegionRequest $req) Gets the bill summarized according to region
 * @method Models\DescribeBillSummaryByTagResponse DescribeBillSummaryByTag(Models\DescribeBillSummaryByTagRequest $req) This API is used to get the cost distribution over different tags.
 * @method Models\DescribeBillSummaryForOrganizationResponse DescribeBillSummaryForOrganization(Models\DescribeBillSummaryForOrganizationRequest $req) This API is used to get bills summarized by product, project, region, billing mode, and tag by passing in parameters.
 * @method Models\DescribeCostExplorerSummaryResponse DescribeCostExplorerSummary(Models\DescribeCostExplorerSummaryRequest $req) This API is used to view cost analysis details.
 * @method Models\DescribeDosageCosDetailByDateResponse DescribeDosageCosDetailByDate(Models\DescribeDosageCosDetailByDateRequest $req) This API is used to query COS usage details.
 * @method Models\DescribeTagListResponse DescribeTagList(Models\DescribeTagListRequest $req) This API is used to get cost allocation tags.
 * @method Models\DescribeVoucherInfoResponse DescribeVoucherInfo(Models\DescribeVoucherInfoRequest $req) This API is used to query vouchers.
 * @method Models\DescribeVoucherUsageDetailsResponse DescribeVoucherUsageDetails(Models\DescribeVoucherUsageDetailsRequest $req) This API is used to query voucher usage details.
 */

class BillingClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "billing.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "billing";

    /**
     * @var string
     */
    protected $version = "2018-07-09";

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
        $respClass = "TencentCloud"."\\".ucfirst("billing")."\\"."V20180709\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
