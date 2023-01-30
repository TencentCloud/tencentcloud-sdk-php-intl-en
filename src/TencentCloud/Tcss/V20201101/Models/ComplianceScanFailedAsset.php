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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the asset that failed the check
 *
 * @method integer getCustomerAssetId() Obtain Customer asset ID
 * @method void setCustomerAssetId(integer $CustomerAssetId) Set Customer asset ID
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method string getCheckStatus() Obtain Check status
`CHECK_INIT`: To be checked.
`CHECK_RUNNING`: Checking.
`CHECK_FINISHED`: Checked.
`CHECK_FAILED`: Check failed.
 * @method void setCheckStatus(string $CheckStatus) Set Check status
`CHECK_INIT`: To be checked.
`CHECK_RUNNING`: Checking.
`CHECK_FINISHED`: Checked.
`CHECK_FAILED`: Check failed.
 * @method string getAssetName() Obtain Asset name
 * @method void setAssetName(string $AssetName) Set Asset name
 * @method string getFailureReason() Obtain Cause of the asset check failure
 * @method void setFailureReason(string $FailureReason) Set Cause of the asset check failure
 * @method string getSuggestion() Obtain Suggestion for handling the check failure
 * @method void setSuggestion(string $Suggestion) Set Suggestion for handling the check failure
 * @method string getCheckTime() Obtain Check time
 * @method void setCheckTime(string $CheckTime) Set Check time
 */
class ComplianceScanFailedAsset extends AbstractModel
{
    /**
     * @var integer Customer asset ID
     */
    public $CustomerAssetId;

    /**
     * @var string Asset type
     */
    public $AssetType;

    /**
     * @var string Check status
`CHECK_INIT`: To be checked.
`CHECK_RUNNING`: Checking.
`CHECK_FINISHED`: Checked.
`CHECK_FAILED`: Check failed.
     */
    public $CheckStatus;

    /**
     * @var string Asset name
     */
    public $AssetName;

    /**
     * @var string Cause of the asset check failure
     */
    public $FailureReason;

    /**
     * @var string Suggestion for handling the check failure
     */
    public $Suggestion;

    /**
     * @var string Check time
     */
    public $CheckTime;

    /**
     * @param integer $CustomerAssetId Customer asset ID
     * @param string $AssetType Asset type
     * @param string $CheckStatus Check status
`CHECK_INIT`: To be checked.
`CHECK_RUNNING`: Checking.
`CHECK_FINISHED`: Checked.
`CHECK_FAILED`: Check failed.
     * @param string $AssetName Asset name
     * @param string $FailureReason Cause of the asset check failure
     * @param string $Suggestion Suggestion for handling the check failure
     * @param string $CheckTime Check time
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
        if (array_key_exists("CustomerAssetId",$param) and $param["CustomerAssetId"] !== null) {
            $this->CustomerAssetId = $param["CustomerAssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("CheckTime",$param) and $param["CheckTime"] !== null) {
            $this->CheckTime = $param["CheckTime"];
        }
    }
}
