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
 * Information of the asset affected by the check item
 *
 * @method integer getCustomerAssetId() Obtain Unique ID of the customer asset
 * @method void setCustomerAssetId(integer $CustomerAssetId) Set Unique ID of the customer asset
 * @method string getAssetName() Obtain Asset name
 * @method void setAssetName(string $AssetName) Set Asset name
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
 * @method string getNodeName() Obtain Node name
 * @method void setNodeName(string $NodeName) Set Node name
 * @method string getLastCheckTime() Obtain Last check time in the format of "YYYY-MM-DD HH:m::SS"

It is "0000-00-00 00:00:00" if no check has been performed.
 * @method void setLastCheckTime(string $LastCheckTime) Set Last check time in the format of "YYYY-MM-DD HH:m::SS"

It is "0000-00-00 00:00:00" if no check has been performed.
 * @method string getCheckResult() Obtain Check result. Valid values:

`RESULT_FAILED`: Failed.

`RESULT_PASSED`: Passed.
 * @method void setCheckResult(string $CheckResult) Set Check result. Valid values:

`RESULT_FAILED`: Failed.

`RESULT_PASSED`: Passed.
 * @method string getHostIP() Obtain Server IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostIP(string $HostIP) Set Server IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageTag() Obtain Image tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageTag(string $ImageTag) Set Image tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVerifyInfo() Obtain Verification information of the check item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVerifyInfo(string $VerifyInfo) Set Verification information of the check item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ComplianceAffectedAsset extends AbstractModel
{
    /**
     * @var integer Unique ID of the customer asset
     */
    public $CustomerAssetId;

    /**
     * @var string Asset name
     */
    public $AssetName;

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
     * @var string Node name
     */
    public $NodeName;

    /**
     * @var string Last check time in the format of "YYYY-MM-DD HH:m::SS"

It is "0000-00-00 00:00:00" if no check has been performed.
     */
    public $LastCheckTime;

    /**
     * @var string Check result. Valid values:

`RESULT_FAILED`: Failed.

`RESULT_PASSED`: Passed.
     */
    public $CheckResult;

    /**
     * @var string Server IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostIP;

    /**
     * @var string Image tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageTag;

    /**
     * @var string Verification information of the check item
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VerifyInfo;

    /**
     * @var string Instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @param integer $CustomerAssetId Unique ID of the customer asset
     * @param string $AssetName Asset name
     * @param string $AssetType Asset type
     * @param string $CheckStatus Check status

`CHECK_INIT`: To be checked.

`CHECK_RUNNING`: Checking.

`CHECK_FINISHED`: Checked.

`CHECK_FAILED`: Check failed.
     * @param string $NodeName Node name
     * @param string $LastCheckTime Last check time in the format of "YYYY-MM-DD HH:m::SS"

It is "0000-00-00 00:00:00" if no check has been performed.
     * @param string $CheckResult Check result. Valid values:

`RESULT_FAILED`: Failed.

`RESULT_PASSED`: Passed.
     * @param string $HostIP Server IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageTag Image tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VerifyInfo Verification information of the check item
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID
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

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("VerifyInfo",$param) and $param["VerifyInfo"] !== null) {
            $this->VerifyInfo = $param["VerifyInfo"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
