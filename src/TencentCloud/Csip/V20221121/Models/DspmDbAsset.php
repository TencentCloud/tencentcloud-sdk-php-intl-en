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
 * Database assets
 *
 * @method string getAssetId() Obtain <p>Asset instance Id</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset instance Id</p>
 * @method string getAssetType() Obtain <p>Asset type</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p>
 * @method string getName() Obtain <p>Asset name</p>
 * @method void setName(string $Name) Set <p>Asset name</p>
 * @method integer getAccountCount() Obtain <p>Account number</p>
 * @method void setAccountCount(integer $AccountCount) Set <p>Account number</p>
 * @method string getPublicIp() Obtain <p>Public network access address. If there are multiple, separate them with ';'.</p>
 * @method void setPublicIp(string $PublicIp) Set <p>Public network access address. If there are multiple, separate them with ';'.</p>
 * @method string getPrivateIp() Obtain <p>Intranet access address. If there are multiple, separate them with ';'</p>
 * @method void setPrivateIp(string $PrivateIp) Set <p>Intranet access address. If there are multiple, separate them with ';'</p>
 * @method string getWanDomain() Obtain <p>WAN domain address. If there are multiple, separate them with ';'</p>
 * @method void setWanDomain(string $WanDomain) Set <p>WAN domain address. If there are multiple, separate them with ';'</p>
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method string getVpcId() Obtain <p>vpc ID of the vpc where the asset is located</p>
 * @method void setVpcId(string $VpcId) Set <p>vpc ID of the vpc where the asset is located</p>
 * @method string getVpcName() Obtain <p>Name of the vpc where the asset is located</p>
 * @method void setVpcName(string $VpcName) Set <p>Name of the vpc where the asset is located</p>
 * @method string getSubnetId() Obtain <p>Subnet ID of the vpc subnet where the asset is located</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID of the vpc subnet where the asset is located</p>
 * @method string getSubnetName() Obtain <p>Subnet name of the vpc where the asset is located</p>
 * @method void setSubnetName(string $SubnetName) Set <p>Subnet name of the vpc where the asset is located</p>
 * @method integer getStatus() Obtain <p>Instance status</p>
 * @method void setStatus(integer $Status) Set <p>Instance status</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method array getManager() Obtain <p>Admin info.</p>
 * @method void setManager(array $Manager) Set <p>Admin info.</p>
 * @method integer getBindIdentify() Obtain <p>Is the identity bound. 0: not bound; 1: bound</p>
 * @method void setBindIdentify(integer $BindIdentify) Set <p>Is the identity bound. 0: not bound; 1: bound</p>
 * @method integer getIsManager() Obtain <p>Admin or not</p>
 * @method void setIsManager(integer $IsManager) Set <p>Admin or not</p>
 * @method DspmRiskCount getRiskCount() Obtain <p>Risk statistics</p>
 * @method void setRiskCount(DspmRiskCount $RiskCount) Set <p>Risk statistics</p>
 * @method string getSafetyAdvice() Obtain <p>Security recommendation.<br>Resolve immediate problem-solving<br>Reinforcement<br>None no abnormality detected</p>
 * @method void setSafetyAdvice(string $SafetyAdvice) Set <p>Security recommendation.<br>Resolve immediate problem-solving<br>Reinforcement<br>None no abnormality detected</p>
 * @method integer getLogDeliveryStatus() Obtain <p>Log delivery status.<br>0 - Delivery off. 1 - Delivery on. 2 - Delivery activating. 3 - Delivery closing.</p>
 * @method void setLogDeliveryStatus(integer $LogDeliveryStatus) Set <p>Log delivery status.<br>0 - Delivery off. 1 - Delivery on. 2 - Delivery activating. 3 - Delivery closing.</p>
 * @method integer getLogDeliverySupported() Obtain <p>Whether log shipping is supported. 0: no support; 1: support</p>
 * @method void setLogDeliverySupported(integer $LogDeliverySupported) Set <p>Whether log shipping is supported. 0: no support; 1: support</p>
 * @method DspmAssetDataScanDetail getDataScanInfo() Obtain <p>Data scanning info</p>
 * @method void setDataScanInfo(DspmAssetDataScanDetail $DataScanInfo) Set <p>Data scanning info</p>
 * @method integer getAppId() Obtain <p>app id of the account to which the asset belongs</p>
 * @method void setAppId(integer $AppId) Set <p>app id of the account to which the asset belongs</p>
 * @method string getNickName() Obtain <p>Account nickname</p>
 * @method void setNickName(string $NickName) Set <p>Account nickname</p>
 * @method string getUin() Obtain <p>Account uin of asset ownership</p>
 * @method void setUin(string $Uin) Set <p>Account uin of asset ownership</p>
 * @method integer getSecurityAnalyseStatus() Obtain <p>Security analysis status (0-off, 1-on, 2-activating, 3-disabling)</p>
 * @method void setSecurityAnalyseStatus(integer $SecurityAnalyseStatus) Set <p>Security analysis status (0-off, 1-on, 2-activating, 3-disabling)</p>
 * @method integer getTotalAuditLogs() Obtain <p>Total number of logs for the current instance.</p>
 * @method void setTotalAuditLogs(integer $TotalAuditLogs) Set <p>Total number of logs for the current instance.</p>
 * @method string getLogDeliveryDisableReason() Obtain <p>Reasons why log audit is forbidden. Available values: VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled, AssetNotExists</p>
 * @method void setLogDeliveryDisableReason(string $LogDeliveryDisableReason) Set <p>Reasons why log audit is forbidden. Available values: VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled, AssetNotExists</p>
 * @method integer getOldestOnlineLogTimestamp() Obtain <p>Start timestamp of online log, accurate to second</p>
 * @method void setOldestOnlineLogTimestamp(integer $OldestOnlineLogTimestamp) Set <p>Start timestamp of online log, accurate to second</p>
 * @method integer getNewestOnlineLogTimestamp() Obtain <p>Latest timestamp of the online log, accurate to the second</p>
 * @method void setNewestOnlineLogTimestamp(integer $NewestOnlineLogTimestamp) Set <p>Latest timestamp of the online log, accurate to the second</p>
 * @method string getOperationErrorMsg() Obtain <p>Operation error information</p>
 * @method void setOperationErrorMsg(string $OperationErrorMsg) Set <p>Operation error information</p>
 * @method integer getAccountOptSupported() Obtain <p>Whether account operations are supported. 0: not supported; 1: supported</p>
 * @method void setAccountOptSupported(integer $AccountOptSupported) Set <p>Whether account operations are supported. 0: not supported; 1: supported</p>
 * @method integer getInstanceType() Obtain <p>Instance type</p>
 * @method void setInstanceType(integer $InstanceType) Set <p>Instance type</p>
 * @method integer getClusterType() Obtain <p>Cluster type (MongoDB), consistent with ClusterType in the cloud API DescribeDBInstances: 0-replica set, 1-sharding; fixed as 0 for non-MongoDB assets</p>
 * @method void setClusterType(integer $ClusterType) Set <p>Cluster type (MongoDB), consistent with ClusterType in the cloud API DescribeDBInstances: 0-replica set, 1-sharding; fixed as 0 for non-MongoDB assets</p>
 * @method integer getIdentifyScanSupported() Obtain <p>Whether sensitive data identification is supported. 0: not supported; 1: supported</p>
 * @method void setIdentifyScanSupported(integer $IdentifyScanSupported) Set <p>Whether sensitive data identification is supported. 0: not supported; 1: supported</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 */
class DspmDbAsset extends AbstractModel
{
    /**
     * @var string <p>Asset instance Id</p>
     */
    public $AssetId;

    /**
     * @var string <p>Asset type</p>
     */
    public $AssetType;

    /**
     * @var string <p>Asset name</p>
     */
    public $Name;

    /**
     * @var integer <p>Account number</p>
     */
    public $AccountCount;

    /**
     * @var string <p>Public network access address. If there are multiple, separate them with ';'.</p>
     */
    public $PublicIp;

    /**
     * @var string <p>Intranet access address. If there are multiple, separate them with ';'</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>WAN domain address. If there are multiple, separate them with ';'</p>
     */
    public $WanDomain;

    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var string <p>vpc ID of the vpc where the asset is located</p>
     */
    public $VpcId;

    /**
     * @var string <p>Name of the vpc where the asset is located</p>
     */
    public $VpcName;

    /**
     * @var string <p>Subnet ID of the vpc subnet where the asset is located</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Subnet name of the vpc where the asset is located</p>
     */
    public $SubnetName;

    /**
     * @var integer <p>Instance status</p>
     */
    public $Status;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var array <p>Admin info.</p>
     */
    public $Manager;

    /**
     * @var integer <p>Is the identity bound. 0: not bound; 1: bound</p>
     */
    public $BindIdentify;

    /**
     * @var integer <p>Admin or not</p>
     */
    public $IsManager;

    /**
     * @var DspmRiskCount <p>Risk statistics</p>
     */
    public $RiskCount;

    /**
     * @var string <p>Security recommendation.<br>Resolve immediate problem-solving<br>Reinforcement<br>None no abnormality detected</p>
     */
    public $SafetyAdvice;

    /**
     * @var integer <p>Log delivery status.<br>0 - Delivery off. 1 - Delivery on. 2 - Delivery activating. 3 - Delivery closing.</p>
     */
    public $LogDeliveryStatus;

    /**
     * @var integer <p>Whether log shipping is supported. 0: no support; 1: support</p>
     */
    public $LogDeliverySupported;

    /**
     * @var DspmAssetDataScanDetail <p>Data scanning info</p>
     */
    public $DataScanInfo;

    /**
     * @var integer <p>app id of the account to which the asset belongs</p>
     */
    public $AppId;

    /**
     * @var string <p>Account nickname</p>
     */
    public $NickName;

    /**
     * @var string <p>Account uin of asset ownership</p>
     */
    public $Uin;

    /**
     * @var integer <p>Security analysis status (0-off, 1-on, 2-activating, 3-disabling)</p>
     */
    public $SecurityAnalyseStatus;

    /**
     * @var integer <p>Total number of logs for the current instance.</p>
     */
    public $TotalAuditLogs;

    /**
     * @var string <p>Reasons why log audit is forbidden. Available values: VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled, AssetNotExists</p>
     */
    public $LogDeliveryDisableReason;

    /**
     * @var integer <p>Start timestamp of online log, accurate to second</p>
     */
    public $OldestOnlineLogTimestamp;

    /**
     * @var integer <p>Latest timestamp of the online log, accurate to the second</p>
     */
    public $NewestOnlineLogTimestamp;

    /**
     * @var string <p>Operation error information</p>
     */
    public $OperationErrorMsg;

    /**
     * @var integer <p>Whether account operations are supported. 0: not supported; 1: supported</p>
     */
    public $AccountOptSupported;

    /**
     * @var integer <p>Instance type</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>Cluster type (MongoDB), consistent with ClusterType in the cloud API DescribeDBInstances: 0-replica set, 1-sharding; fixed as 0 for non-MongoDB assets</p>
     */
    public $ClusterType;

    /**
     * @var integer <p>Whether sensitive data identification is supported. 0: not supported; 1: supported</p>
     */
    public $IdentifyScanSupported;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @param string $AssetId <p>Asset instance Id</p>
     * @param string $AssetType <p>Asset type</p>
     * @param string $Name <p>Asset name</p>
     * @param integer $AccountCount <p>Account number</p>
     * @param string $PublicIp <p>Public network access address. If there are multiple, separate them with ';'.</p>
     * @param string $PrivateIp <p>Intranet access address. If there are multiple, separate them with ';'</p>
     * @param string $WanDomain <p>WAN domain address. If there are multiple, separate them with ';'</p>
     * @param string $Region <p>Region.</p>
     * @param string $VpcId <p>vpc ID of the vpc where the asset is located</p>
     * @param string $VpcName <p>Name of the vpc where the asset is located</p>
     * @param string $SubnetId <p>Subnet ID of the vpc subnet where the asset is located</p>
     * @param string $SubnetName <p>Subnet name of the vpc where the asset is located</p>
     * @param integer $Status <p>Instance status</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param array $Manager <p>Admin info.</p>
     * @param integer $BindIdentify <p>Is the identity bound. 0: not bound; 1: bound</p>
     * @param integer $IsManager <p>Admin or not</p>
     * @param DspmRiskCount $RiskCount <p>Risk statistics</p>
     * @param string $SafetyAdvice <p>Security recommendation.<br>Resolve immediate problem-solving<br>Reinforcement<br>None no abnormality detected</p>
     * @param integer $LogDeliveryStatus <p>Log delivery status.<br>0 - Delivery off. 1 - Delivery on. 2 - Delivery activating. 3 - Delivery closing.</p>
     * @param integer $LogDeliverySupported <p>Whether log shipping is supported. 0: no support; 1: support</p>
     * @param DspmAssetDataScanDetail $DataScanInfo <p>Data scanning info</p>
     * @param integer $AppId <p>app id of the account to which the asset belongs</p>
     * @param string $NickName <p>Account nickname</p>
     * @param string $Uin <p>Account uin of asset ownership</p>
     * @param integer $SecurityAnalyseStatus <p>Security analysis status (0-off, 1-on, 2-activating, 3-disabling)</p>
     * @param integer $TotalAuditLogs <p>Total number of logs for the current instance.</p>
     * @param string $LogDeliveryDisableReason <p>Reasons why log audit is forbidden. Available values: VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled, AssetNotExists</p>
     * @param integer $OldestOnlineLogTimestamp <p>Start timestamp of online log, accurate to second</p>
     * @param integer $NewestOnlineLogTimestamp <p>Latest timestamp of the online log, accurate to the second</p>
     * @param string $OperationErrorMsg <p>Operation error information</p>
     * @param integer $AccountOptSupported <p>Whether account operations are supported. 0: not supported; 1: supported</p>
     * @param integer $InstanceType <p>Instance type</p>
     * @param integer $ClusterType <p>Cluster type (MongoDB), consistent with ClusterType in the cloud API DescribeDBInstances: 0-replica set, 1-sharding; fixed as 0 for non-MongoDB assets</p>
     * @param integer $IdentifyScanSupported <p>Whether sensitive data identification is supported. 0: not supported; 1: supported</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Manager",$param) and $param["Manager"] !== null) {
            $this->Manager = [];
            foreach ($param["Manager"] as $key => $value){
                $obj = new DspmUinUser();
                $obj->deserialize($value);
                array_push($this->Manager, $obj);
            }
        }

        if (array_key_exists("BindIdentify",$param) and $param["BindIdentify"] !== null) {
            $this->BindIdentify = $param["BindIdentify"];
        }

        if (array_key_exists("IsManager",$param) and $param["IsManager"] !== null) {
            $this->IsManager = $param["IsManager"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = new DspmRiskCount();
            $this->RiskCount->deserialize($param["RiskCount"]);
        }

        if (array_key_exists("SafetyAdvice",$param) and $param["SafetyAdvice"] !== null) {
            $this->SafetyAdvice = $param["SafetyAdvice"];
        }

        if (array_key_exists("LogDeliveryStatus",$param) and $param["LogDeliveryStatus"] !== null) {
            $this->LogDeliveryStatus = $param["LogDeliveryStatus"];
        }

        if (array_key_exists("LogDeliverySupported",$param) and $param["LogDeliverySupported"] !== null) {
            $this->LogDeliverySupported = $param["LogDeliverySupported"];
        }

        if (array_key_exists("DataScanInfo",$param) and $param["DataScanInfo"] !== null) {
            $this->DataScanInfo = new DspmAssetDataScanDetail();
            $this->DataScanInfo->deserialize($param["DataScanInfo"]);
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SecurityAnalyseStatus",$param) and $param["SecurityAnalyseStatus"] !== null) {
            $this->SecurityAnalyseStatus = $param["SecurityAnalyseStatus"];
        }

        if (array_key_exists("TotalAuditLogs",$param) and $param["TotalAuditLogs"] !== null) {
            $this->TotalAuditLogs = $param["TotalAuditLogs"];
        }

        if (array_key_exists("LogDeliveryDisableReason",$param) and $param["LogDeliveryDisableReason"] !== null) {
            $this->LogDeliveryDisableReason = $param["LogDeliveryDisableReason"];
        }

        if (array_key_exists("OldestOnlineLogTimestamp",$param) and $param["OldestOnlineLogTimestamp"] !== null) {
            $this->OldestOnlineLogTimestamp = $param["OldestOnlineLogTimestamp"];
        }

        if (array_key_exists("NewestOnlineLogTimestamp",$param) and $param["NewestOnlineLogTimestamp"] !== null) {
            $this->NewestOnlineLogTimestamp = $param["NewestOnlineLogTimestamp"];
        }

        if (array_key_exists("OperationErrorMsg",$param) and $param["OperationErrorMsg"] !== null) {
            $this->OperationErrorMsg = $param["OperationErrorMsg"];
        }

        if (array_key_exists("AccountOptSupported",$param) and $param["AccountOptSupported"] !== null) {
            $this->AccountOptSupported = $param["AccountOptSupported"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("IdentifyScanSupported",$param) and $param["IdentifyScanSupported"] !== null) {
            $this->IdentifyScanSupported = $param["IdentifyScanSupported"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
