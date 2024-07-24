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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sync task information
 *
 * @method string getJobId() Obtain Sync task ID, such as `sync-btso140`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobId(string $JobId) Set Sync task ID, such as `sync-btso140`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJobName() Obtain Sync task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJobName(string $JobName) Set Sync task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayMode() Obtain Billing mode. Valid values: `PostPay` (pay-as-you-go); `PrePay` (monthly subscription).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(string $PayMode) Set Billing mode. Valid values: `PostPay` (pay-as-you-go); `PrePay` (monthly subscription).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRunMode() Obtain Running mode. Valid values: `Immediate`, `Timed`. Default value: `Immediate`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRunMode(string $RunMode) Set Running mode. Valid values: `Immediate`, `Timed`. Default value: `Immediate`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpectRunTime() Obtain Expected execution time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpectRunTime(string $ExpectRunTime) Set Expected execution time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAllActions() Obtain All supported operations
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllActions(array $AllActions) Set All supported operations
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getActions() Obtain Operations that can be performed under the current status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActions(array $Actions) Set Operations that can be performed under the current status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Options getOptions() Obtain Sync options
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOptions(Options $Options) Set Sync options
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Objects getObjects() Obtain Sync database/table objects
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjects(Objects $Objects) Set Sync database/table objects
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSpecification() Obtain Task specification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecification(string $Specification) Set Task specification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expiration time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSrcRegion() Obtain Source database region, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcRegion(string $SrcRegion) Set Source database region, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSrcDatabaseType() Obtain Source database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, and `tdsqlmysql`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcDatabaseType(string $SrcDatabaseType) Set Source database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, and `tdsqlmysql`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSrcAccessType() Obtain Source database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcAccessType(string $SrcAccessType) Set Source database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Endpoint getSrcInfo() Obtain Source database information. This parameter is used by single-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcInfo(Endpoint $SrcInfo) Set Source database information. This parameter is used by single-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSrcNodeType() Obtain Valid values: `cluster`, `single`. `single`: For single-node source databases; `cluster`: For multi-node source databases.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcNodeType(string $SrcNodeType) Set Valid values: `cluster`, `single`. `single`: For single-node source databases; `cluster`: For multi-node source databases.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SyncDBEndpointInfos getSrcInfos() Obtain Source database information. This parameter is used for multi-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcInfos(SyncDBEndpointInfos $SrcInfos) Set Source database information. This parameter is used for multi-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDstRegion() Obtain Target database region, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstRegion(string $DstRegion) Set Target database region, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDstDatabaseType() Obtain Target database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, and `tdsqlmysql`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstDatabaseType(string $DstDatabaseType) Set Target database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, and `tdsqlmysql`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDstAccessType() Obtain Target database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstAccessType(string $DstAccessType) Set Target database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method Endpoint getDstInfo() Obtain Target database information. This parameter is used by single-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstInfo(Endpoint $DstInfo) Set Target database information. This parameter is used by single-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDstNodeType() Obtain Valid values: `cluster`, `single`. `single`: For single-node target databases; `cluster`: For multi-node target databases.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstNodeType(string $DstNodeType) Set Valid values: `cluster`, `single`. `single`: For single-node target databases; `cluster`: For multi-node target databases.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SyncDBEndpointInfos getDstInfos() Obtain Target database information. This parameter is used for multi-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstInfos(SyncDBEndpointInfos $DstInfos) Set Target database information. This parameter is used for multi-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Start time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Task status. Valid values: `UnInitialized`, `Initialized`, `Checking`, `CheckPass`, `CheckNotPass`, `ReadyRunning`, `Running`, `Pausing`, `Paused`, `Stopping`, `Stopped`, `ResumableErr`, `Resuming`, `Failed`, `Released`, `Resetting`, `Unknown`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Task status. Valid values: `UnInitialized`, `Initialized`, `Checking`, `CheckPass`, `CheckNotPass`, `ReadyRunning`, `Running`, `Pausing`, `Paused`, `Stopping`, `Stopped`, `ResumableErr`, `Resuming`, `Failed`, `Released`, `Resetting`, `Unknown`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain End time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SyncDetailInfo getDetail() Obtain Step information of the sync task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetail(SyncDetailInfo $Detail) Set Step information of the sync task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTradeStatus() Obtain Billing status. Valid values: `Normal`, `Resizing`, `Renewing`, `Isolating`, `Isolated`, `Offlining`, `Offlined`, `NotBilled`, `Recovering`, `PostPay2Prepaying`, `PrePay2Postpaying`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTradeStatus(string $TradeStatus) Set Billing status. Valid values: `Normal`, `Resizing`, `Renewing`, `Isolating`, `Isolated`, `Offlining`, `Offlined`, `NotBilled`, `Recovering`, `PostPay2Prepaying`, `PrePay2Postpaying`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceClass() Obtain Sync link specification, such as `micro`, `small`, `medium`, and `large`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceClass(string $InstanceClass) Set Sync link specification, such as `micro`, `small`, `medium`, and `large`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAutoRenew() Obtain Auto-renewal flag, which takes effect if `PayMode` is `PrePay`. Valid values: `1` (auto-renewal enabled); `0` (auto-renewal disabled).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoRenew(integer $AutoRenew) Set Auto-renewal flag, which takes effect if `PayMode` is `PrePay`. Valid values: `1` (auto-renewal enabled); `0` (auto-renewal disabled).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOfflineTime() Obtain Deletion time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOfflineTime(string $OfflineTime) Set Deletion time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAutoRetryTimeRangeMinutes() Obtain Settings of automatic retry time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) Set Settings of automatic retry time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDumperResumeCtrl() Obtain Whether the task can be reentered in the full export stage. Valid values: `yes`, `no`. `yes`: The current task can be reentered. `no`: The current task is in the full export stage which cannot be reentered. If the value of this parameter is `no`, the checkpoint restart is not supported when the task is restarted in the export stage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDumperResumeCtrl(string $DumperResumeCtrl) Set Whether the task can be reentered in the full export stage. Valid values: `yes`, `no`. `yes`: The current task can be reentered. `no`: The current task is in the full export stage which cannot be reentered. If the value of this parameter is `no`, the checkpoint restart is not supported when the task is restarted in the export stage.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SyncJobInfo extends AbstractModel
{
    /**
     * @var string Sync task ID, such as `sync-btso140`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobId;

    /**
     * @var string Sync task name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JobName;

    /**
     * @var string Billing mode. Valid values: `PostPay` (pay-as-you-go); `PrePay` (monthly subscription).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var string Running mode. Valid values: `Immediate`, `Timed`. Default value: `Immediate`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RunMode;

    /**
     * @var string Expected execution time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpectRunTime;

    /**
     * @var array All supported operations
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllActions;

    /**
     * @var array Operations that can be performed under the current status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Actions;

    /**
     * @var Options Sync options
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Options;

    /**
     * @var Objects Sync database/table objects
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Objects;

    /**
     * @var string Task specification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Specification;

    /**
     * @var string Expiration time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Source database region, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcRegion;

    /**
     * @var string Source database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, and `tdsqlmysql`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcDatabaseType;

    /**
     * @var string Source database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcAccessType;

    /**
     * @var Endpoint Source database information. This parameter is used by single-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcInfo;

    /**
     * @var string Valid values: `cluster`, `single`. `single`: For single-node source databases; `cluster`: For multi-node source databases.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcNodeType;

    /**
     * @var SyncDBEndpointInfos Source database information. This parameter is used for multi-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcInfos;

    /**
     * @var string Target database region, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstRegion;

    /**
     * @var string Target database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, and `tdsqlmysql`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstDatabaseType;

    /**
     * @var string Target database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstAccessType;

    /**
     * @var Endpoint Target database information. This parameter is used by single-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstInfo;

    /**
     * @var string Valid values: `cluster`, `single`. `single`: For single-node target databases; `cluster`: For multi-node target databases.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstNodeType;

    /**
     * @var SyncDBEndpointInfos Target database information. This parameter is used for multi-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstInfos;

    /**
     * @var string Creation time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Start time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Task status. Valid values: `UnInitialized`, `Initialized`, `Checking`, `CheckPass`, `CheckNotPass`, `ReadyRunning`, `Running`, `Pausing`, `Paused`, `Stopping`, `Stopped`, `ResumableErr`, `Resuming`, `Failed`, `Released`, `Resetting`, `Unknown`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string End time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var array Tag information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var SyncDetailInfo Step information of the sync task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Detail;

    /**
     * @var string Billing status. Valid values: `Normal`, `Resizing`, `Renewing`, `Isolating`, `Isolated`, `Offlining`, `Offlined`, `NotBilled`, `Recovering`, `PostPay2Prepaying`, `PrePay2Postpaying`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TradeStatus;

    /**
     * @var string Sync link specification, such as `micro`, `small`, `medium`, and `large`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceClass;

    /**
     * @var integer Auto-renewal flag, which takes effect if `PayMode` is `PrePay`. Valid values: `1` (auto-renewal enabled); `0` (auto-renewal disabled).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoRenew;

    /**
     * @var string Deletion time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OfflineTime;

    /**
     * @var integer Settings of automatic retry time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @var string Whether the task can be reentered in the full export stage. Valid values: `yes`, `no`. `yes`: The current task can be reentered. `no`: The current task is in the full export stage which cannot be reentered. If the value of this parameter is `no`, the checkpoint restart is not supported when the task is restarted in the export stage.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DumperResumeCtrl;

    /**
     * @param string $JobId Sync task ID, such as `sync-btso140`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JobName Sync task name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayMode Billing mode. Valid values: `PostPay` (pay-as-you-go); `PrePay` (monthly subscription).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RunMode Running mode. Valid values: `Immediate`, `Timed`. Default value: `Immediate`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpectRunTime Expected execution time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AllActions All supported operations
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Actions Operations that can be performed under the current status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Options $Options Sync options
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Objects $Objects Sync database/table objects
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Specification Task specification
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SrcRegion Source database region, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SrcDatabaseType Source database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, and `tdsqlmysql`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SrcAccessType Source database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Endpoint $SrcInfo Source database information. This parameter is used by single-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SrcNodeType Valid values: `cluster`, `single`. `single`: For single-node source databases; `cluster`: For multi-node source databases.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SyncDBEndpointInfos $SrcInfos Source database information. This parameter is used for multi-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DstRegion Target database region, such as `ap-guangzhou`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DstDatabaseType Target database type, such as `mysql`, `cynosdbmysql`, `tdapg`, `tdpg`, and `tdsqlmysql`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DstAccessType Target database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param Endpoint $DstInfo Target database information. This parameter is used by single-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DstNodeType Valid values: `cluster`, `single`. `single`: For single-node target databases; `cluster`: For multi-node target databases.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SyncDBEndpointInfos $DstInfos Target database information. This parameter is used for multi-node databases.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Start time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Task status. Valid values: `UnInitialized`, `Initialized`, `Checking`, `CheckPass`, `CheckNotPass`, `ReadyRunning`, `Running`, `Pausing`, `Paused`, `Stopping`, `Stopped`, `ResumableErr`, `Resuming`, `Failed`, `Released`, `Resetting`, `Unknown`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime End time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SyncDetailInfo $Detail Step information of the sync task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TradeStatus Billing status. Valid values: `Normal`, `Resizing`, `Renewing`, `Isolating`, `Isolated`, `Offlining`, `Offlined`, `NotBilled`, `Recovering`, `PostPay2Prepaying`, `PrePay2Postpaying`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceClass Sync link specification, such as `micro`, `small`, `medium`, and `large`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AutoRenew Auto-renewal flag, which takes effect if `PayMode` is `PrePay`. Valid values: `1` (auto-renewal enabled); `0` (auto-renewal disabled).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OfflineTime Deletion time in the format of `yyyy-mm-dd hh:mm:ss`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AutoRetryTimeRangeMinutes Settings of automatic retry time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DumperResumeCtrl Whether the task can be reentered in the full export stage. Valid values: `yes`, `no`. `yes`: The current task can be reentered. `no`: The current task is in the full export stage which cannot be reentered. If the value of this parameter is `no`, the checkpoint restart is not supported when the task is restarted in the export stage.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("ExpectRunTime",$param) and $param["ExpectRunTime"] !== null) {
            $this->ExpectRunTime = $param["ExpectRunTime"];
        }

        if (array_key_exists("AllActions",$param) and $param["AllActions"] !== null) {
            $this->AllActions = $param["AllActions"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = $param["Actions"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new Options();
            $this->Options->deserialize($param["Options"]);
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new Objects();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new Endpoint();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("SrcNodeType",$param) and $param["SrcNodeType"] !== null) {
            $this->SrcNodeType = $param["SrcNodeType"];
        }

        if (array_key_exists("SrcInfos",$param) and $param["SrcInfos"] !== null) {
            $this->SrcInfos = new SyncDBEndpointInfos();
            $this->SrcInfos->deserialize($param["SrcInfos"]);
        }

        if (array_key_exists("DstRegion",$param) and $param["DstRegion"] !== null) {
            $this->DstRegion = $param["DstRegion"];
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new Endpoint();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("DstNodeType",$param) and $param["DstNodeType"] !== null) {
            $this->DstNodeType = $param["DstNodeType"];
        }

        if (array_key_exists("DstInfos",$param) and $param["DstInfos"] !== null) {
            $this->DstInfos = new SyncDBEndpointInfos();
            $this->DstInfos->deserialize($param["DstInfos"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new SyncDetailInfo();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("TradeStatus",$param) and $param["TradeStatus"] !== null) {
            $this->TradeStatus = $param["TradeStatus"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("AutoRetryTimeRangeMinutes",$param) and $param["AutoRetryTimeRangeMinutes"] !== null) {
            $this->AutoRetryTimeRangeMinutes = $param["AutoRetryTimeRangeMinutes"];
        }

        if (array_key_exists("DumperResumeCtrl",$param) and $param["DumperResumeCtrl"] !== null) {
            $this->DumperResumeCtrl = $param["DumperResumeCtrl"];
        }
    }
}
