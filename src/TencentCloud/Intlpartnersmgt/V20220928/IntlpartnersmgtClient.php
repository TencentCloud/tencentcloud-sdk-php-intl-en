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
Callable roles: Distributor
 * @method Models\AllocateCustomerCreditResponse AllocateCustomerCredit(Models\AllocateCustomerCreditRequest $req) This API is used for a partner to set credit for a customer, such as increasing or lowering the credit and setting it to 0.
1. The credit is valid permanently and will not be zeroed regularly.
2. The customer's service will be suspended when its available credit is set to 0, so caution should be exercised with this operation.
3. To prevent the customer from making new purchases without affecting their use of previously purchased products, the partner can set their available credit to 0 after obtaining the non-stop feature privilege from the channel manager.
4. The set credit is an increment of the current available credit and cannot exceed the remaining allocable credit. Setting the credit to a negative value indicates that it will be repossessed. The available credit can be set to 0 at the minimum.

Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\ApproveClientApplyResponse ApproveClientApply(Models\ApproveClientApplyRequest $req) Description: This API is used by resellers to review applications to become sub-customers. Note: This API is used to apply for the allowlist. If needed, please contact your business representative.

Callable roles: Reseller, Distributer, Second-level reseller
 * @method Models\ApproveSubAgentApplyResponse ApproveSubAgentApply(Models\ApproveSubAgentApplyRequest $req) This API is used to approve applications for second-level resellers.
Invocation Role: Distributor.
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) This API is used to create Tencent Cloud customer accounts for distributor/second-level resellers.After the account is created, it will be automatically bound to the partner account.Note:
1. Create a Tencent Cloud account. The entered email address and mobile phone number need to be verified by the partner for validity.
2. Customers need to add personal information when logging in for the first time.
3. This interface needs to be applied for allowlist usage. Please contact the channel manager to initiate the application process.

Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\CreateAndSendClientInvitationMailResponse CreateAndSendClientInvitationMail(Models\CreateAndSendClientInvitationMailRequest $req) This API is used to perform operations. Application for allowlist is required before usage. If needed, contact your business representative to request allowlisting. The specific usage process is as follows;.
This API is used to create an invitation link. You can send the invitation link to your designated email address.
2. Customers need to click the invitation link in the mailbox, fill in and submit relevant information.
3. After customer submission, you can view the application of this sub-customer on the customer management page and review it.

This API is used to handle cases where if the designated mailbox does not receive the invitation link, you can send the invitation link returned by the API to the customer manually.
Invocation roles: resellers, distributors, second-level reseller.
 * @method Models\DescribeBillDetailResponse DescribeBillDetail(Models\DescribeBillDetailRequest $req) Description: End-customer queries its own bill details.
Callable role: End-customer.
 * @method Models\DescribeBillDownloadUrlResponse DescribeBillDownloadUrl(Models\DescribeBillDownloadUrlRequest $req) Description: This API is used to download billing files and return billing file URLs for sub-customers.
Callable role: Enb-customer.
 * @method Models\DescribeBillSummaryResponse DescribeBillSummary(Models\DescribeBillSummaryRequest $req) Description: External API for L1 billing of Sub-customer billing center.
Callable role: End-customer.
 * @method Models\DescribeBillSummaryByPayModeResponse DescribeBillSummaryByPayMode(Models\DescribeBillSummaryByPayModeRequest $req) This API is used to obtain the total amount of customer bills by payment mode.
Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\DescribeBillSummaryByProductResponse DescribeBillSummaryByProduct(Models\DescribeBillSummaryByProductRequest $req) Description: Obtain the summarized value of sub - account bills by product dimension.
Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\DescribeBillSummaryByRegionResponse DescribeBillSummaryByRegion(Models\DescribeBillSummaryByRegionRequest $req) Description: Obtain the summarized value of sub - account bills by region through API.
Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\DescribeCustomerBillDetailResponse DescribeCustomerBillDetail(Models\DescribeCustomerBillDetailRequest $req) This API is used to query the customer bill details by resellers.
Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\DescribeCustomerBillDownloadUrlResponse DescribeCustomerBillDownloadUrl(Models\DescribeCustomerBillDownloadUrlRequest $req) This API is used to get the URL for downloading the customer bill file by reseller. The download conditions are as follows:
1. Detailed bills (billDetail and billDetailPack) can be downloaded starting from June 2022; resource bills (billResource and billResourcePack) can be downloaded starting from November 2023.
2. Bill packages (billDetailPack and billResourcePack) can only be downloaded after billing.
 * @method Models\DescribeCustomerBillSummaryResponse DescribeCustomerBillSummary(Models\DescribeCustomerBillSummaryRequest $req) This API is used to query the total amount of customer bills.
Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\DescribeCustomerInfoResponse DescribeCustomerInfo(Models\DescribeCustomerInfoRequest $req) This API is used to query sub-customer information.
Invocation roles: reseller, first-level distributor.
 * @method Models\DescribeCustomerUinResponse DescribeCustomerUin(Models\DescribeCustomerUinRequest $req) This API is used to query the list of customer UINs.
 * @method Models\DescribeRebateDownloadUrlResponse DescribeRebateDownloadUrl(Models\DescribeRebateDownloadUrlRequest $req) This API is used to download the commission bill file by resellers/agents. The file URL is returned.
Resellers/Agents can call this API.
 * @method Models\ForceQNResponse ForceQN(Models\ForceQNRequest $req) Forced Service Suspension settings and cancellation can be used only after the reseller is whitelisted.

Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\GetCountryCodesResponse GetCountryCodes(Models\GetCountryCodesRequest $req) This API is used to obtain country/region codes.
 * @method Models\GetTradeConfigListResponse GetTradeConfigList(Models\GetTradeConfigListRequest $req) This API is used to query industry information, including layer-1 industry and layer-2 industry.

Callable roles: Distributor, Second-level reseller, Reseller,End-customer
 * @method Models\ModifyClientRemarkResponse ModifyClientRemark(Models\ModifyClientRemarkRequest $req) This API is used to modify customer remarks.

Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\QueryAccountVerificationStatusResponse QueryAccountVerificationStatus(Models\QueryAccountVerificationStatusRequest $req) This API is used to query the account verification status.
Callable roles: Distributor, Reseller
 * @method Models\QueryCreditAllocationHistoryResponse QueryCreditAllocationHistory(Models\QueryCreditAllocationHistoryRequest $req) This API is used to query all the credit allocation records of a single customer.
Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\QueryCreditByUinListResponse QueryCreditByUinList(Models\QueryCreditByUinListRequest $req) This API is used to query the credit of users in the list.
Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\QueryCustomerBillingQuotaResponse QueryCustomerBillingQuota(Models\QueryCustomerBillingQuotaRequest $req) Description: This API is used for a sub-customer to real-time query its own total credit and remaining credit in USD.

Callable roles: Sub-customer
 * @method Models\QueryCustomersCreditResponse QueryCustomersCredit(Models\QueryCustomersCreditRequest $req) This API is used for a partner to the credits and basic information of cutomers.

Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\QueryDirectCustomersCreditResponse QueryDirectCustomersCredit(Models\QueryDirectCustomersCreditRequest $req) This API is used to query the credits of direct customers.
Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\QueryInvitationInfoResponse QueryInvitationInfo(Models\QueryInvitationInfoRequest $req) Query usage information of invitation link. Once created, the data will only be retained for 60 days, and the system will automatically delete the invitation link after 60 days.
Invokable role types: Distributor, Second-level reseller, Reseller.
 * @method Models\QueryPartnerCreditResponse QueryPartnerCredit(Models\QueryPartnerCreditRequest $req) This API is used for a partner to query its own total credit, available credit, and used credit in USD.

Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\QueryPendingClientsV2Response QueryPendingClientsV2(Models\QueryPendingClientsV2Request $req) Description: This API is used by resellers to query the list of sub-customers pending review. Note: This API is used to apply for the allowlist. If needed, please contact your business representative.

Callable roles: Reseller, Distributer, Second-level reseller
 * @method Models\QueryPendingSubAgentsV2Response QueryPendingSubAgentsV2(Models\QueryPendingSubAgentsV2Request $req) This API is used to query information of second-level resellers in application.
Invocation Role: Distributor.
 * @method Models\QueryPolicyProductListByCodeResponse QueryPolicyProductListByCode(Models\QueryPolicyProductListByCodeRequest $req) This API is used to query the product list information within the specified policy range. To call this API, contact your business manager to apply for adding it to the allowlist.
Callable roles: Distributor, Second-level reseller, Reseller
 * @method Models\QuerySubAgentsDetailV2Response QuerySubAgentsDetailV2(Models\QuerySubAgentsDetailV2Request $req) This API is used to query information of second-level resellers.
Invocation Role:Distributor.
 * @method Models\QueryT1IndirectCustomersDetailResponse QueryT1IndirectCustomersDetail(Models\QueryT1IndirectCustomersDetailRequest $req) This API is used to query the indirect sub-customers of a distributor.
Invokable role type: Distributor
 * @method Models\QueryVoucherAmountByUinResponse QueryVoucherAmountByUin(Models\QueryVoucherAmountByUinRequest $req) This API is used by primary/secondary resellers to query the voucher quota based on the customer UIN.
Callable roles: Reseller, Distributor, Second-level reseller
 * @method Models\QueryVoucherListByUinResponse QueryVoucherListByUin(Models\QueryVoucherListByUinRequest $req) This API is used by primary/secondary resellers to query the voucher list based on the customer UIN.
Callable roles: Reseller, Distributor, Second-level reseller
 * @method Models\QueryVoucherPoolResponse QueryVoucherPool(Models\QueryVoucherPoolRequest $req) This API is used by primary/secondary resellers to query the voucher quota pool.
Callable roles: Distributor, First-level reseller, Second-level reseller
 * @method Models\SendVerifyCodeResponse SendVerifyCode(Models\SendVerifyCodeRequest $req) This API is used to send a verification code for account registration.

Callable roles: Distributor, Second-level reseller, Reseller,End-customer
 */

class IntlpartnersmgtClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "intlpartnersmgt.intl.tencentcloudapi.com";

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
