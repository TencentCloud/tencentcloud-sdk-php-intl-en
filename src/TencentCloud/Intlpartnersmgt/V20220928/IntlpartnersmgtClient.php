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

namespace TencentCloud\Intlpartnersmgt\V20220928;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Intlpartnersmgt\V20220928\Models as Models;

/**
 * @method Models\AllocateCreditPoolResponse AllocateCreditPool(Models\AllocateCreditPoolRequest $req) This API is used to allocate credit pools to second-level resellers by distributors.
 * @method Models\AllocateCustomerCreditResponse AllocateCustomerCredit(Models\AllocateCustomerCreditRequest $req) This API is used for a partner to set credit for a customer, such as increasing or lowering the credit and setting it to 0.
1. The credit is valid permanently and will not be zeroed regularly.
2. The customer's service will be suspended when its available credit is set to 0, so caution should be exercised with this operation.
3. To prevent the customer from making new purchases without affecting their use of previously purchased products, the partner can set their available credit to 0 after obtaining the non-stop feature privilege from the channel manager.
4. The set credit is an increment of the current available credit and cannot exceed the remaining allocable credit. Setting the credit to a negative value indicates that it will be repossessed. The available credit can be set to 0 at the minimum.
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) This API is used to create Tencent Cloud customer accounts for first-level resellers/second-level resellers. After the account is created, it will be automatically bound to the partner account.Note:1. Create a Tencent Cloud account. The entered email address and mobile phone number need to be verified by the partner for validity.2. Customers need to add personal information when logging in for the first time.3. This interface needs to be applied for allowlist usage. Please contact the channel manager to initiate the application process.
 * @method Models\DescribeBillDetailResponse DescribeBillDetail(Models\DescribeBillDetailRequest $req) This API is used to query bill details by customers.
 * @method Models\DescribeBillDownloadUrlResponse DescribeBillDownloadUrl(Models\DescribeBillDownloadUrlRequest $req) This API is used to download billing files and return billing file URLs by customers.
 * @method Models\DescribeBillSummaryResponse DescribeBillSummary(Models\DescribeBillSummaryRequest $req) External API for the L1 billing of the customer billing center
 * @method Models\DescribeBillSummaryByPayModeResponse DescribeBillSummaryByPayMode(Models\DescribeBillSummaryByPayModeRequest $req) This API is used to obtain the total amount of customer bills by payment mode.
 * @method Models\DescribeBillSummaryByProductResponse DescribeBillSummaryByProduct(Models\DescribeBillSummaryByProductRequest $req) This API is used to obtain the total amount of customer bills by product.
 * @method Models\DescribeBillSummaryByRegionResponse DescribeBillSummaryByRegion(Models\DescribeBillSummaryByRegionRequest $req) This API is used to obtain the total amount of customer bills by region.
 * @method Models\DescribeCustomerBillDetailResponse DescribeCustomerBillDetail(Models\DescribeCustomerBillDetailRequest $req) This API is used to query the customer bill details by resellers.
 * @method Models\DescribeCustomerBillSummaryResponse DescribeCustomerBillSummary(Models\DescribeCustomerBillSummaryRequest $req) This API is used to query the total amount of customer bills.
 * @method Models\DescribeCustomerInfoResponse DescribeCustomerInfo(Models\DescribeCustomerInfoRequest $req) This API is used to query the customer information.
 * @method Models\DescribeCustomerUinResponse DescribeCustomerUin(Models\DescribeCustomerUinRequest $req) This API is used to query the list of customer UINs.
 * @method Models\GetCountryCodesResponse GetCountryCodes(Models\GetCountryCodesRequest $req) This API is used to obtain country/region codes.
 * @method Models\ModifyClientRemarkResponse ModifyClientRemark(Models\ModifyClientRemarkRequest $req) This API is used to modify customer remarks.
 * @method Models\QueryAccountVerificationStatusResponse QueryAccountVerificationStatus(Models\QueryAccountVerificationStatusRequest $req) This API is used to query the account verification status.
 * @method Models\QueryCreditAllocationHistoryResponse QueryCreditAllocationHistory(Models\QueryCreditAllocationHistoryRequest $req) This API is used to query all the credit allocation records of a single customer.
 * @method Models\QueryCreditByUinListResponse QueryCreditByUinList(Models\QueryCreditByUinListRequest $req) This API is used to query the credit of users in the list.
 * @method Models\QueryCreditQuotaResponse QueryCreditQuota(Models\QueryCreditQuotaRequest $req) This API is used to query customer credits.
 * @method Models\QueryCustomersCreditResponse QueryCustomersCredit(Models\QueryCustomersCreditRequest $req) This API is used for a partner to the credits and basic information of cutomers.
 * @method Models\QueryDirectCustomersCreditResponse QueryDirectCustomersCredit(Models\QueryDirectCustomersCreditRequest $req) This API is used to query the credits of direct customers.
 * @method Models\QueryPartnerCreditResponse QueryPartnerCredit(Models\QueryPartnerCreditRequest $req) This API is used for a partner to query its own total credit, available credit, and used credit in USD.
 * @method Models\QueryVoucherAmountByUinResponse QueryVoucherAmountByUin(Models\QueryVoucherAmountByUinRequest $req) This API is used to query the voucher quota based on the customer UIN.
 * @method Models\QueryVoucherListByUinResponse QueryVoucherListByUin(Models\QueryVoucherListByUinRequest $req) This API is used to query the voucher list based on the customer UIN.
 * @method Models\QueryVoucherPoolResponse QueryVoucherPool(Models\QueryVoucherPoolRequest $req) This API is used to query the voucher quota pool.
 */

class IntlpartnersmgtClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "intlpartnersmgt.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "intlpartnersmgt";

    /**
     * @var string
     */
    protected $version = "2022-09-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("intlpartnersmgt")."\\"."V20220928\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
