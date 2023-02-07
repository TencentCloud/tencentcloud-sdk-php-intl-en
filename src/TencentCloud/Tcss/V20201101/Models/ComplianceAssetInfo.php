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
 * Asset information
 *
 * @method integer getCustomerAssetId() Obtain Customer asset ID
 * @method void setCustomerAssetId(integer $CustomerAssetId) Set Customer asset ID
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method string getAssetName() Obtain Asset name
 * @method void setAssetName(string $AssetName) Set Asset name
 * @method string getImageTag() Obtain This field is the image tag when the asset is an image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageTag(string $ImageTag) Set This field is the image tag when the asset is an image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostIP() Obtain Server IP of the asset
 * @method void setHostIP(string $HostIP) Set Server IP of the asset
 * @method string getNodeName() Obtain Node name of the asset
 * @method void setNodeName(string $NodeName) Set Node name of the asset
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
 * @method integer getPassedPolicyItemCount() Obtain Number of check items that the asset passed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassedPolicyItemCount(integer $PassedPolicyItemCount) Set Number of check items that the asset passed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFailedPolicyItemCount() Obtain Number of check items that the asset failed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailedPolicyItemCount(integer $FailedPolicyItemCount) Set Number of check items that the asset failed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastCheckTime() Obtain Last check time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastCheckTime(string $LastCheckTime) Set Last check time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCheckResult() Obtain Check result. Valid values:
`RESULT_FAILED`: Failed.
`RESULT_PASSED`: Passed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckResult(string $CheckResult) Set Check result. Valid values:
`RESULT_FAILED`: Failed.
`RESULT_PASSED`: Passed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Node instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Node instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ComplianceAssetInfo extends AbstractModel
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
     * @var string Asset name
     */
    public $AssetName;

    /**
     * @var string This field is the image tag when the asset is an image.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageTag;

    /**
     * @var string Server IP of the asset
     */
    public $HostIP;

    /**
     * @var string Node name of the asset
     */
    public $NodeName;

    /**
     * @var string Check status

`CHECK_INIT`: To be checked.

`CHECK_RUNNING`: Checking.

`CHECK_FINISHED`: Checked.

`CHECK_FAILED`: Check failed.
     */
    public $CheckStatus;

    /**
     * @var integer Number of check items that the asset passed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PassedPolicyItemCount;

    /**
     * @var integer Number of check items that the asset failed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailedPolicyItemCount;

    /**
     * @var string Last check time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastCheckTime;

    /**
     * @var string Check result. Valid values:
`RESULT_FAILED`: Failed.
`RESULT_PASSED`: Passed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckResult;

    /**
     * @var string Node instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @param integer $CustomerAssetId Customer asset ID
     * @param string $AssetType Asset type
     * @param string $AssetName Asset name
     * @param string $ImageTag This field is the image tag when the asset is an image.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostIP Server IP of the asset
     * @param string $NodeName Node name of the asset
     * @param string $CheckStatus Check status

`CHECK_INIT`: To be checked.

`CHECK_RUNNING`: Checking.

`CHECK_FINISHED`: Checked.

`CHECK_FAILED`: Check failed.
     * @param integer $PassedPolicyItemCount Number of check items that the asset passed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FailedPolicyItemCount Number of check items that the asset failed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastCheckTime Last check time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CheckResult Check result. Valid values:
`RESULT_FAILED`: Failed.
`RESULT_PASSED`: Passed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Node instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("PassedPolicyItemCount",$param) and $param["PassedPolicyItemCount"] !== null) {
            $this->PassedPolicyItemCount = $param["PassedPolicyItemCount"];
        }

        if (array_key_exists("FailedPolicyItemCount",$param) and $param["FailedPolicyItemCount"] !== null) {
            $this->FailedPolicyItemCount = $param["FailedPolicyItemCount"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
