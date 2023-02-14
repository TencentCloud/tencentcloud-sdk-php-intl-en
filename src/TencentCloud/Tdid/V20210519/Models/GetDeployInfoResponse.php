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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDeployInfo response structure.
 *
 * @method string getHash() Obtain The CNS address of the contract.
 * @method void setHash(string $Hash) Set The CNS address of the contract.
 * @method string getGroupId() Obtain The main group ID of the contract.
 * @method void setGroupId(string $GroupId) Set The main group ID of the contract.
 * @method string getDeployDid() Obtain The DID of the organization that deployed the contract.
 * @method void setDeployDid(string $DeployDid) Set The DID of the organization that deployed the contract.
 * @method string getSdkVersion() Obtain The TDID SDK version.
 * @method void setSdkVersion(string $SdkVersion) Set The TDID SDK version.
 * @method string getContractVersion() Obtain The TDID contract version.
 * @method void setContractVersion(string $ContractVersion) Set The TDID contract version.
 * @method string getBlockVersion() Obtain The blockchain node version.
 * @method void setBlockVersion(string $BlockVersion) Set The blockchain node version.
 * @method string getBlockIp() Obtain The IP address of the blockchain node.
 * @method void setBlockIp(string $BlockIp) Set The IP address of the blockchain node.
 * @method string getDidAddress() Obtain The address of the DID contract.
 * @method void setDidAddress(string $DidAddress) Set The address of the DID contract.
 * @method string getCptAddress() Obtain The address of the claim protocol type (CPT) contract.
 * @method void setCptAddress(string $CptAddress) Set The address of the claim protocol type (CPT) contract.
 * @method string getAuthorityAddress() Obtain The address of the authority.
 * @method void setAuthorityAddress(string $AuthorityAddress) Set The address of the authority.
 * @method string getEvidenceAddress() Obtain The evidence contract address.
 * @method void setEvidenceAddress(string $EvidenceAddress) Set The evidence contract address.
 * @method string getSpecificAddress() Obtain The contract address of the specific issuer.
 * @method void setSpecificAddress(string $SpecificAddress) Set The contract address of the specific issuer.
 * @method string getChainId() Obtain The chain ID.
 * @method void setChainId(string $ChainId) Set The chain ID.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetDeployInfoResponse extends AbstractModel
{
    /**
     * @var string The CNS address of the contract.
     */
    public $Hash;

    /**
     * @var string The main group ID of the contract.
     */
    public $GroupId;

    /**
     * @var string The DID of the organization that deployed the contract.
     */
    public $DeployDid;

    /**
     * @var string The TDID SDK version.
     */
    public $SdkVersion;

    /**
     * @var string The TDID contract version.
     */
    public $ContractVersion;

    /**
     * @var string The blockchain node version.
     */
    public $BlockVersion;

    /**
     * @var string The IP address of the blockchain node.
     */
    public $BlockIp;

    /**
     * @var string The address of the DID contract.
     */
    public $DidAddress;

    /**
     * @var string The address of the claim protocol type (CPT) contract.
     */
    public $CptAddress;

    /**
     * @var string The address of the authority.
     */
    public $AuthorityAddress;

    /**
     * @var string The evidence contract address.
     */
    public $EvidenceAddress;

    /**
     * @var string The contract address of the specific issuer.
     */
    public $SpecificAddress;

    /**
     * @var string The chain ID.
     */
    public $ChainId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Hash The CNS address of the contract.
     * @param string $GroupId The main group ID of the contract.
     * @param string $DeployDid The DID of the organization that deployed the contract.
     * @param string $SdkVersion The TDID SDK version.
     * @param string $ContractVersion The TDID contract version.
     * @param string $BlockVersion The blockchain node version.
     * @param string $BlockIp The IP address of the blockchain node.
     * @param string $DidAddress The address of the DID contract.
     * @param string $CptAddress The address of the claim protocol type (CPT) contract.
     * @param string $AuthorityAddress The address of the authority.
     * @param string $EvidenceAddress The evidence contract address.
     * @param string $SpecificAddress The contract address of the specific issuer.
     * @param string $ChainId The chain ID.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Hash",$param) and $param["Hash"] !== null) {
            $this->Hash = $param["Hash"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("DeployDid",$param) and $param["DeployDid"] !== null) {
            $this->DeployDid = $param["DeployDid"];
        }

        if (array_key_exists("SdkVersion",$param) and $param["SdkVersion"] !== null) {
            $this->SdkVersion = $param["SdkVersion"];
        }

        if (array_key_exists("ContractVersion",$param) and $param["ContractVersion"] !== null) {
            $this->ContractVersion = $param["ContractVersion"];
        }

        if (array_key_exists("BlockVersion",$param) and $param["BlockVersion"] !== null) {
            $this->BlockVersion = $param["BlockVersion"];
        }

        if (array_key_exists("BlockIp",$param) and $param["BlockIp"] !== null) {
            $this->BlockIp = $param["BlockIp"];
        }

        if (array_key_exists("DidAddress",$param) and $param["DidAddress"] !== null) {
            $this->DidAddress = $param["DidAddress"];
        }

        if (array_key_exists("CptAddress",$param) and $param["CptAddress"] !== null) {
            $this->CptAddress = $param["CptAddress"];
        }

        if (array_key_exists("AuthorityAddress",$param) and $param["AuthorityAddress"] !== null) {
            $this->AuthorityAddress = $param["AuthorityAddress"];
        }

        if (array_key_exists("EvidenceAddress",$param) and $param["EvidenceAddress"] !== null) {
            $this->EvidenceAddress = $param["EvidenceAddress"];
        }

        if (array_key_exists("SpecificAddress",$param) and $param["SpecificAddress"] !== null) {
            $this->SpecificAddress = $param["SpecificAddress"];
        }

        if (array_key_exists("ChainId",$param) and $param["ChainId"] !== null) {
            $this->ChainId = $param["ChainId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
