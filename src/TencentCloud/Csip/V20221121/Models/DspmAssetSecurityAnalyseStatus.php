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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dspm asset security analysis status
 *
 * @method integer getAppId() Obtain app id of the asset owner account
 * @method void setAppId(integer $AppId) Set app id of the asset owner account
 * @method string getAssetId() Obtain Asset instance ID.
 * @method void setAssetId(string $AssetId) Set Asset instance ID.
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method integer getIdentifyScanSupported() Obtain Whether sensitive data identification is supported. 0: no support; 1: support
 * @method void setIdentifyScanSupported(integer $IdentifyScanSupported) Set Whether sensitive data identification is supported. 0: no support; 1: support
 * @method integer getLogDeliverySupported() Obtain Whether log shipping is supported. 0: unsupported; 1: supported
 * @method void setLogDeliverySupported(integer $LogDeliverySupported) Set Whether log shipping is supported. 0: unsupported; 1: supported
 * @method integer getSecurityAnalyseStatus() Obtain Security analysis status (0: Off, 1: On, 2: Activating, 3: Disabling)

 * @method void setSecurityAnalyseStatus(integer $SecurityAnalyseStatus) Set Security analysis status (0: Off, 1: On, 2: Activating, 3: Disabling)

 * @method integer getLogDeliveryStatus() Obtain Log delivery status.
0: shipping disabled; 1: shipping enabled; 2: shipping activating; 3: shipping disabling
 * @method void setLogDeliveryStatus(integer $LogDeliveryStatus) Set Log delivery status.
0: shipping disabled; 1: shipping enabled; 2: shipping activating; 3: shipping disabling
 * @method string getLogDeliveryDisableReason() Obtain The causes for the log audit being forbidden to enable. Available values: VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled
 * @method void setLogDeliveryDisableReason(string $LogDeliveryDisableReason) Set The causes for the log audit being forbidden to enable. Available values: VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled
 * @method integer getTotalAuditLogs() Obtain Total number of logs for the current instance.
 * @method void setTotalAuditLogs(integer $TotalAuditLogs) Set Total number of logs for the current instance.
 * @method integer getDataScanDetailRuleCount() Obtain Number of recognized sensitive data items
 * @method void setDataScanDetailRuleCount(integer $DataScanDetailRuleCount) Set Number of recognized sensitive data items
 * @method string getOperationErrorMsg() Obtain Operation error information
 * @method void setOperationErrorMsg(string $OperationErrorMsg) Set Operation error information
 */
class DspmAssetSecurityAnalyseStatus extends AbstractModel
{
    /**
     * @var integer app id of the asset owner account
     */
    public $AppId;

    /**
     * @var string Asset instance ID.
     */
    public $AssetId;

    /**
     * @var string Asset type
     */
    public $AssetType;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var integer Whether sensitive data identification is supported. 0: no support; 1: support
     */
    public $IdentifyScanSupported;

    /**
     * @var integer Whether log shipping is supported. 0: unsupported; 1: supported
     */
    public $LogDeliverySupported;

    /**
     * @var integer Security analysis status (0: Off, 1: On, 2: Activating, 3: Disabling)

     */
    public $SecurityAnalyseStatus;

    /**
     * @var integer Log delivery status.
0: shipping disabled; 1: shipping enabled; 2: shipping activating; 3: shipping disabling
     */
    public $LogDeliveryStatus;

    /**
     * @var string The causes for the log audit being forbidden to enable. Available values: VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled
     */
    public $LogDeliveryDisableReason;

    /**
     * @var integer Total number of logs for the current instance.
     */
    public $TotalAuditLogs;

    /**
     * @var integer Number of recognized sensitive data items
     */
    public $DataScanDetailRuleCount;

    /**
     * @var string Operation error information
     */
    public $OperationErrorMsg;

    /**
     * @param integer $AppId app id of the asset owner account
     * @param string $AssetId Asset instance ID.
     * @param string $AssetType Asset type
     * @param string $Region Region.
     * @param integer $IdentifyScanSupported Whether sensitive data identification is supported. 0: no support; 1: support
     * @param integer $LogDeliverySupported Whether log shipping is supported. 0: unsupported; 1: supported
     * @param integer $SecurityAnalyseStatus Security analysis status (0: Off, 1: On, 2: Activating, 3: Disabling)

     * @param integer $LogDeliveryStatus Log delivery status.
0: shipping disabled; 1: shipping enabled; 2: shipping activating; 3: shipping disabling
     * @param string $LogDeliveryDisableReason The causes for the log audit being forbidden to enable. Available values: VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled
     * @param integer $TotalAuditLogs Total number of logs for the current instance.
     * @param integer $DataScanDetailRuleCount Number of recognized sensitive data items
     * @param string $OperationErrorMsg Operation error information
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("IdentifyScanSupported",$param) and $param["IdentifyScanSupported"] !== null) {
            $this->IdentifyScanSupported = $param["IdentifyScanSupported"];
        }

        if (array_key_exists("LogDeliverySupported",$param) and $param["LogDeliverySupported"] !== null) {
            $this->LogDeliverySupported = $param["LogDeliverySupported"];
        }

        if (array_key_exists("SecurityAnalyseStatus",$param) and $param["SecurityAnalyseStatus"] !== null) {
            $this->SecurityAnalyseStatus = $param["SecurityAnalyseStatus"];
        }

        if (array_key_exists("LogDeliveryStatus",$param) and $param["LogDeliveryStatus"] !== null) {
            $this->LogDeliveryStatus = $param["LogDeliveryStatus"];
        }

        if (array_key_exists("LogDeliveryDisableReason",$param) and $param["LogDeliveryDisableReason"] !== null) {
            $this->LogDeliveryDisableReason = $param["LogDeliveryDisableReason"];
        }

        if (array_key_exists("TotalAuditLogs",$param) and $param["TotalAuditLogs"] !== null) {
            $this->TotalAuditLogs = $param["TotalAuditLogs"];
        }

        if (array_key_exists("DataScanDetailRuleCount",$param) and $param["DataScanDetailRuleCount"] !== null) {
            $this->DataScanDetailRuleCount = $param["DataScanDetailRuleCount"];
        }

        if (array_key_exists("OperationErrorMsg",$param) and $param["OperationErrorMsg"] !== null) {
            $this->OperationErrorMsg = $param["OperationErrorMsg"];
        }
    }
}
