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

namespace TencentCloud\Tdid\V20210519;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tdid\V20210519\Models as Models;

/**
 * @method Models\AddLabelResponse AddLabel(Models\AddLabelRequest $req) This API is used to add a label to a DID.

 * @method Models\CancelAuthorityIssuerResponse CancelAuthorityIssuer(Models\CancelAuthorityIssuerRequest $req) This API is used to revoke the certification of an issuing authority.
 * @method Models\CheckChainResponse CheckChain(Models\CheckChainRequest $req) This API is used to get blockchain information.
 * @method Models\CheckDidDeployResponse CheckDidDeploy(Models\CheckDidDeployRequest $req) This API is used to query a deployment task.
 * @method Models\CreateCredentialResponse CreateCredential(Models\CreateCredentialRequest $req) This API is used to create a credential.
 * @method Models\CreateDidServiceResponse CreateDidService(Models\CreateDidServiceRequest $req) This API is used to create a DID service.
 * @method Models\CreateLabelResponse CreateLabel(Models\CreateLabelRequest $req) This API is used to create a label.
 * @method Models\CreateSelectiveCredentialResponse CreateSelectiveCredential(Models\CreateSelectiveCredentialRequest $req) This API is used to create a selective disclosure credential.
 * @method Models\CreateTDidResponse CreateTDid(Models\CreateTDidRequest $req) This API is used to create an organization DID.
 * @method Models\CreateTDidByPrivateKeyResponse CreateTDidByPrivateKey(Models\CreateTDidByPrivateKeyRequest $req) This API is used to generate a TDID by private key.
 * @method Models\CreateTDidByPublicKeyResponse CreateTDidByPublicKey(Models\CreateTDidByPublicKeyRequest $req)  This API is used to generate a TDID by public key.
 * @method Models\DeployByNameResponse DeployByName(Models\DeployByNameRequest $req) This API is used to deploy a TDID contract by name.
 * @method Models\DownCptResponse DownCpt(Models\DownCptRequest $req) This API is used to download a claim protocol type (CPT).
 * @method Models\EnableHashResponse EnableHash(Models\EnableHashRequest $req) This API is used to enable a contract.
 * @method Models\GetAgencyTDidResponse GetAgencyTDid(Models\GetAgencyTDidRequest $req) 该接口已废弃

This API is used to get the DID details of the current organization.
 * @method Models\GetAuthoritiesListResponse GetAuthoritiesList(Models\GetAuthoritiesListRequest $req) This API is used to query authorities.
 * @method Models\GetAuthorityIssuerResponse GetAuthorityIssuer(Models\GetAuthorityIssuerRequest $req) This API is used to get the information of an issuing authority.
 * @method Models\GetConsortiumClusterListResponse GetConsortiumClusterList(Models\GetConsortiumClusterListRequest $req) This API is used to query the BCOS networks of a consortium.
 * @method Models\GetConsortiumListResponse GetConsortiumList(Models\GetConsortiumListRequest $req) This API is used to query consortiums.
 * @method Models\GetCptInfoResponse GetCptInfo(Models\GetCptInfoRequest $req) This API is used to get the information of a claim protocol type (CPT).
 * @method Models\GetCptListResponse GetCptList(Models\GetCptListRequest $req) This API is used to query claim protocol types (CPT).
 * @method Models\GetCredentialCptRankResponse GetCredentialCptRank(Models\GetCredentialCptRankRequest $req) This API is used to get the rankings of claim protocol types (CPT).
 * @method Models\GetCredentialIssueRankResponse GetCredentialIssueRank(Models\GetCredentialIssueRankRequest $req) This API is used to get the rankings of issuers.
 * @method Models\GetCredentialIssueTrendResponse GetCredentialIssueTrend(Models\GetCredentialIssueTrendRequest $req) This API is used to query credential issuing trends.
 * @method Models\GetCredentialStatusResponse GetCredentialStatus(Models\GetCredentialStatusRequest $req) This API is used to query the on-chain status of a credential.
 * @method Models\GetDataPanelResponse GetDataPanel(Models\GetDataPanelRequest $req) This API is used to query the overall statistics of a network.

 * @method Models\GetDeployInfoResponse GetDeployInfo(Models\GetDeployInfoRequest $req) This API is used to query the deployment information of a contract.

 * @method Models\GetDeployListResponse GetDeployList(Models\GetDeployListRequest $req) This API is used to query deployed contracts.
 * @method Models\GetDidClusterDetailResponse GetDidClusterDetail(Models\GetDidClusterDetailRequest $req) This API is used to get the information of a DID blockchain network.
 * @method Models\GetDidClusterListResponse GetDidClusterList(Models\GetDidClusterListRequest $req) This API is used to query your DID networks.
 * @method Models\GetDidDetailResponse GetDidDetail(Models\GetDidDetailRequest $req) This API is used to get the information of a DID.
 * @method Models\GetDidDocumentResponse GetDidDocument(Models\GetDidDocumentRequest $req) This API is used to get the document of a DID.

 * @method Models\GetDidListResponse GetDidList(Models\GetDidListRequest $req) This API is used to query DIDs.
 * @method Models\GetDidRegisterTrendResponse GetDidRegisterTrend(Models\GetDidRegisterTrendRequest $req) This API is used to query DID registration trends.
 * @method Models\GetDidServiceDetailResponse GetDidServiceDetail(Models\GetDidServiceDetailRequest $req) This API is used to get the information of a DID service.
 * @method Models\GetDidServiceListResponse GetDidServiceList(Models\GetDidServiceListRequest $req) This API is used to query DID services.
 * @method Models\GetGroupListResponse GetGroupList(Models\GetGroupListRequest $req) This API is used to query main groups.
 * @method Models\GetLabelListResponse GetLabelList(Models\GetLabelListRequest $req) This API is used to query labels.
 * @method Models\GetPolicyListResponse GetPolicyList(Models\GetPolicyListRequest $req) This API is used to query disclosure policies.
 * @method Models\GetPublicKeyResponse GetPublicKey(Models\GetPublicKeyRequest $req) This API is used to get the public key of a DID.
 * @method Models\QueryPolicyResponse QueryPolicy(Models\QueryPolicyRequest $req) This API is used to get the information of a disclosure policy.
 * @method Models\RecognizeAuthorityIssuerResponse RecognizeAuthorityIssuer(Models\RecognizeAuthorityIssuerRequest $req) This API is used to certify an issuing authority.
 * @method Models\RegisterClaimPolicyResponse RegisterClaimPolicy(Models\RegisterClaimPolicyRequest $req) This API is used to register a disclosure policy.
 * @method Models\RegisterCptResponse RegisterCpt(Models\RegisterCptRequest $req) This API is used to create a claim protocol type (CPT).
 * @method Models\RegisterIssuerResponse RegisterIssuer(Models\RegisterIssuerRequest $req) This API is used to register an issuing authority.
 * @method Models\RemoveHashResponse RemoveHash(Models\RemoveHashRequest $req) This API is used to delete a contract.
 * @method Models\SetCredentialStatusResponse SetCredentialStatus(Models\SetCredentialStatusRequest $req) This API is used to change the on-chain status of a credential.
 * @method Models\VerifyCredentialResponse VerifyCredential(Models\VerifyCredentialRequest $req) This API is used to verify a credential.
 */

class TdidClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tdid.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tdid";

    /**
     * @var string
     */
    protected $version = "2021-05-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("tdid")."\\"."V20210519\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
