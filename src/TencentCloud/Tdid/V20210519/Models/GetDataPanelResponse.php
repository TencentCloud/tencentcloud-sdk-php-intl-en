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
 * GetDataPanel response structure.
 *
 * @method integer getBlockNetworkCount() Obtain The number of blockchain networks.
 * @method void setBlockNetworkCount(integer $BlockNetworkCount) Set The number of blockchain networks.
 * @method string getBlockNetworkName() Obtain The blockchain network name.
 * @method void setBlockNetworkName(string $BlockNetworkName) Set The blockchain network name.
 * @method integer getBlockHeight() Obtain The current block height.
 * @method void setBlockHeight(integer $BlockHeight) Set The current block height.
 * @method integer getBlockNetworkType() Obtain The blockchain network type.
 * @method void setBlockNetworkType(integer $BlockNetworkType) Set The blockchain network type.
 * @method integer getDidCount() Obtain The number of DIDs.
 * @method void setDidCount(integer $DidCount) Set The number of DIDs.
 * @method integer getCptCount() Obtain The number of claim protocol types (CPT).
 * @method void setCptCount(integer $CptCount) Set The number of claim protocol types (CPT).
 * @method integer getCertificatedAuthCount() Obtain The number of certified authorities.
 * @method void setCertificatedAuthCount(integer $CertificatedAuthCount) Set The number of certified authorities.
 * @method integer getIssueCptCount() Obtain The number of credentials issued.
 * @method void setIssueCptCount(integer $IssueCptCount) Set The number of credentials issued.
 * @method integer getNewDidCount() Obtain The number of new DIDs in the current week.
 * @method void setNewDidCount(integer $NewDidCount) Set The number of new DIDs in the current week.
 * @method integer getBcosCount() Obtain The number of BCOS networks.
 * @method void setBcosCount(integer $BcosCount) Set The number of BCOS networks.
 * @method integer getFabricCount() Obtain The number of Fabric networks.
 * @method void setFabricCount(integer $FabricCount) Set The number of Fabric networks.
 * @method integer getChainMakerCount() Obtain The number of ChainMaker networks.
 * @method void setChainMakerCount(integer $ChainMakerCount) Set The number of ChainMaker networks.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetDataPanelResponse extends AbstractModel
{
    /**
     * @var integer The number of blockchain networks.
     */
    public $BlockNetworkCount;

    /**
     * @var string The blockchain network name.
     */
    public $BlockNetworkName;

    /**
     * @var integer The current block height.
     */
    public $BlockHeight;

    /**
     * @var integer The blockchain network type.
     */
    public $BlockNetworkType;

    /**
     * @var integer The number of DIDs.
     */
    public $DidCount;

    /**
     * @var integer The number of claim protocol types (CPT).
     */
    public $CptCount;

    /**
     * @var integer The number of certified authorities.
     */
    public $CertificatedAuthCount;

    /**
     * @var integer The number of credentials issued.
     */
    public $IssueCptCount;

    /**
     * @var integer The number of new DIDs in the current week.
     */
    public $NewDidCount;

    /**
     * @var integer The number of BCOS networks.
     */
    public $BcosCount;

    /**
     * @var integer The number of Fabric networks.
     */
    public $FabricCount;

    /**
     * @var integer The number of ChainMaker networks.
     */
    public $ChainMakerCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $BlockNetworkCount The number of blockchain networks.
     * @param string $BlockNetworkName The blockchain network name.
     * @param integer $BlockHeight The current block height.
     * @param integer $BlockNetworkType The blockchain network type.
     * @param integer $DidCount The number of DIDs.
     * @param integer $CptCount The number of claim protocol types (CPT).
     * @param integer $CertificatedAuthCount The number of certified authorities.
     * @param integer $IssueCptCount The number of credentials issued.
     * @param integer $NewDidCount The number of new DIDs in the current week.
     * @param integer $BcosCount The number of BCOS networks.
     * @param integer $FabricCount The number of Fabric networks.
     * @param integer $ChainMakerCount The number of ChainMaker networks.
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
        if (array_key_exists("BlockNetworkCount",$param) and $param["BlockNetworkCount"] !== null) {
            $this->BlockNetworkCount = $param["BlockNetworkCount"];
        }

        if (array_key_exists("BlockNetworkName",$param) and $param["BlockNetworkName"] !== null) {
            $this->BlockNetworkName = $param["BlockNetworkName"];
        }

        if (array_key_exists("BlockHeight",$param) and $param["BlockHeight"] !== null) {
            $this->BlockHeight = $param["BlockHeight"];
        }

        if (array_key_exists("BlockNetworkType",$param) and $param["BlockNetworkType"] !== null) {
            $this->BlockNetworkType = $param["BlockNetworkType"];
        }

        if (array_key_exists("DidCount",$param) and $param["DidCount"] !== null) {
            $this->DidCount = $param["DidCount"];
        }

        if (array_key_exists("CptCount",$param) and $param["CptCount"] !== null) {
            $this->CptCount = $param["CptCount"];
        }

        if (array_key_exists("CertificatedAuthCount",$param) and $param["CertificatedAuthCount"] !== null) {
            $this->CertificatedAuthCount = $param["CertificatedAuthCount"];
        }

        if (array_key_exists("IssueCptCount",$param) and $param["IssueCptCount"] !== null) {
            $this->IssueCptCount = $param["IssueCptCount"];
        }

        if (array_key_exists("NewDidCount",$param) and $param["NewDidCount"] !== null) {
            $this->NewDidCount = $param["NewDidCount"];
        }

        if (array_key_exists("BcosCount",$param) and $param["BcosCount"] !== null) {
            $this->BcosCount = $param["BcosCount"];
        }

        if (array_key_exists("FabricCount",$param) and $param["FabricCount"] !== null) {
            $this->FabricCount = $param["FabricCount"];
        }

        if (array_key_exists("ChainMakerCount",$param) and $param["ChainMakerCount"] !== null) {
            $this->ChainMakerCount = $param["ChainMakerCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
