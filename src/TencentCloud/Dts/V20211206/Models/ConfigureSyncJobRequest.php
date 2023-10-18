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
 * ConfigureSyncJob request structure.
 *
 * @method string getJobId() Obtain Sync task instance ID in the format of `sync-werwfs23`, which is used to identify a sync task.
 * @method void setJobId(string $JobId) Set Sync task instance ID in the format of `sync-werwfs23`, which is used to identify a sync task.
 * @method string getSrcAccessType() Obtain Source database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet). Note that the valid values are subject to the current link.
 * @method void setSrcAccessType(string $SrcAccessType) Set Source database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet). Note that the valid values are subject to the current link.
 * @method string getDstAccessType() Obtain Target database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet); `ckafka` (CKafka instance). Note that the valid values are subject to the current link.
 * @method void setDstAccessType(string $DstAccessType) Set Target database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet); `ckafka` (CKafka instance). Note that the valid values are subject to the current link.
 * @method Objects getObjects() Obtain Information of synced database/table objects
 * @method void setObjects(Objects $Objects) Set Information of synced database/table objects
 * @method string getJobName() Obtain Sync task name
 * @method void setJobName(string $JobName) Set Sync task name
 * @method string getJobMode() Obtain Enumerated values: `liteMode`: Lite mode; `fullMode`: Standard mode
 * @method void setJobMode(string $JobMode) Set Enumerated values: `liteMode`: Lite mode; `fullMode`: Standard mode
 * @method string getRunMode() Obtain Running mode. Valid values: `Immediate`, `Timed`. Default value: `Immediate`.
 * @method void setRunMode(string $RunMode) Set Running mode. Valid values: `Immediate`, `Timed`. Default value: `Immediate`.
 * @method string getExpectRunTime() Obtain Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `Timed`.
 * @method void setExpectRunTime(string $ExpectRunTime) Set Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `Timed`.
 * @method Endpoint getSrcInfo() Obtain Source database information. This parameter only applies to single-node databases, and `SrcNodeType` must be `single`.
 * @method void setSrcInfo(Endpoint $SrcInfo) Set Source database information. This parameter only applies to single-node databases, and `SrcNodeType` must be `single`.
 * @method SyncDBEndpointInfos getSrcInfos() Obtain Source database information. This parameter is valid for multi-node databases, and the value of `SrcNodeType` must be `cluster`.
 * @method void setSrcInfos(SyncDBEndpointInfos $SrcInfos) Set Source database information. This parameter is valid for multi-node databases, and the value of `SrcNodeType` must be `cluster`.
 * @method string getSrcNodeType() Obtain Enumerated values: `single` (for single-node source database), `cluster` (for multi-node source database).
 * @method void setSrcNodeType(string $SrcNodeType) Set Enumerated values: `single` (for single-node source database), `cluster` (for multi-node source database).
 * @method Endpoint getDstInfo() Obtain Target database information. This parameter is used by single-node databases.
 * @method void setDstInfo(Endpoint $DstInfo) Set Target database information. This parameter is used by single-node databases.
 * @method SyncDBEndpointInfos getDstInfos() Obtain Target database information. This parameter is valid for multi-node databases, and the value of `DstNodeType` must be `cluster`.
 * @method void setDstInfos(SyncDBEndpointInfos $DstInfos) Set Target database information. This parameter is valid for multi-node databases, and the value of `DstNodeType` must be `cluster`.
 * @method string getDstNodeType() Obtain Enumerated values: `single` (for single-node target database), `cluster` (for multi-node target database).
 * @method void setDstNodeType(string $DstNodeType) Set Enumerated values: `single` (for single-node target database), `cluster` (for multi-node target database).
 * @method Options getOptions() Obtain Sync task options. The `RateLimitOption` option cannot take effect currently. To modify the speed limit settings, use the `ModifySyncRateLimit` API.
 * @method void setOptions(Options $Options) Set Sync task options. The `RateLimitOption` option cannot take effect currently. To modify the speed limit settings, use the `ModifySyncRateLimit` API.
 * @method integer getAutoRetryTimeRangeMinutes() Obtain Automatic retry time, which can be set to 5-720 minutes. 0 indicates that retry is disabled.
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) Set Automatic retry time, which can be set to 5-720 minutes. 0 indicates that retry is disabled.
 */
class ConfigureSyncJobRequest extends AbstractModel
{
    /**
     * @var string Sync task instance ID in the format of `sync-werwfs23`, which is used to identify a sync task.
     */
    public $JobId;

    /**
     * @var string Source database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet). Note that the valid values are subject to the current link.
     */
    public $SrcAccessType;

    /**
     * @var string Target database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet); `ckafka` (CKafka instance). Note that the valid values are subject to the current link.
     */
    public $DstAccessType;

    /**
     * @var Objects Information of synced database/table objects
     */
    public $Objects;

    /**
     * @var string Sync task name
     */
    public $JobName;

    /**
     * @var string Enumerated values: `liteMode`: Lite mode; `fullMode`: Standard mode
     */
    public $JobMode;

    /**
     * @var string Running mode. Valid values: `Immediate`, `Timed`. Default value: `Immediate`.
     */
    public $RunMode;

    /**
     * @var string Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `Timed`.
     */
    public $ExpectRunTime;

    /**
     * @var Endpoint Source database information. This parameter only applies to single-node databases, and `SrcNodeType` must be `single`.
     */
    public $SrcInfo;

    /**
     * @var SyncDBEndpointInfos Source database information. This parameter is valid for multi-node databases, and the value of `SrcNodeType` must be `cluster`.
     */
    public $SrcInfos;

    /**
     * @var string Enumerated values: `single` (for single-node source database), `cluster` (for multi-node source database).
     */
    public $SrcNodeType;

    /**
     * @var Endpoint Target database information. This parameter is used by single-node databases.
     */
    public $DstInfo;

    /**
     * @var SyncDBEndpointInfos Target database information. This parameter is valid for multi-node databases, and the value of `DstNodeType` must be `cluster`.
     */
    public $DstInfos;

    /**
     * @var string Enumerated values: `single` (for single-node target database), `cluster` (for multi-node target database).
     */
    public $DstNodeType;

    /**
     * @var Options Sync task options. The `RateLimitOption` option cannot take effect currently. To modify the speed limit settings, use the `ModifySyncRateLimit` API.
     */
    public $Options;

    /**
     * @var integer Automatic retry time, which can be set to 5-720 minutes. 0 indicates that retry is disabled.
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @param string $JobId Sync task instance ID in the format of `sync-werwfs23`, which is used to identify a sync task.
     * @param string $SrcAccessType Source database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet). Note that the valid values are subject to the current link.
     * @param string $DstAccessType Target database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet); `ckafka` (CKafka instance). Note that the valid values are subject to the current link.
     * @param Objects $Objects Information of synced database/table objects
     * @param string $JobName Sync task name
     * @param string $JobMode Enumerated values: `liteMode`: Lite mode; `fullMode`: Standard mode
     * @param string $RunMode Running mode. Valid values: `Immediate`, `Timed`. Default value: `Immediate`.
     * @param string $ExpectRunTime Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `Timed`.
     * @param Endpoint $SrcInfo Source database information. This parameter only applies to single-node databases, and `SrcNodeType` must be `single`.
     * @param SyncDBEndpointInfos $SrcInfos Source database information. This parameter is valid for multi-node databases, and the value of `SrcNodeType` must be `cluster`.
     * @param string $SrcNodeType Enumerated values: `single` (for single-node source database), `cluster` (for multi-node source database).
     * @param Endpoint $DstInfo Target database information. This parameter is used by single-node databases.
     * @param SyncDBEndpointInfos $DstInfos Target database information. This parameter is valid for multi-node databases, and the value of `DstNodeType` must be `cluster`.
     * @param string $DstNodeType Enumerated values: `single` (for single-node target database), `cluster` (for multi-node target database).
     * @param Options $Options Sync task options. The `RateLimitOption` option cannot take effect currently. To modify the speed limit settings, use the `ModifySyncRateLimit` API.
     * @param integer $AutoRetryTimeRangeMinutes Automatic retry time, which can be set to 5-720 minutes. 0 indicates that retry is disabled.
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

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new Objects();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("JobMode",$param) and $param["JobMode"] !== null) {
            $this->JobMode = $param["JobMode"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("ExpectRunTime",$param) and $param["ExpectRunTime"] !== null) {
            $this->ExpectRunTime = $param["ExpectRunTime"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new Endpoint();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("SrcInfos",$param) and $param["SrcInfos"] !== null) {
            $this->SrcInfos = new SyncDBEndpointInfos();
            $this->SrcInfos->deserialize($param["SrcInfos"]);
        }

        if (array_key_exists("SrcNodeType",$param) and $param["SrcNodeType"] !== null) {
            $this->SrcNodeType = $param["SrcNodeType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new Endpoint();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("DstInfos",$param) and $param["DstInfos"] !== null) {
            $this->DstInfos = new SyncDBEndpointInfos();
            $this->DstInfos->deserialize($param["DstInfos"]);
        }

        if (array_key_exists("DstNodeType",$param) and $param["DstNodeType"] !== null) {
            $this->DstNodeType = $param["DstNodeType"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new Options();
            $this->Options->deserialize($param["Options"]);
        }

        if (array_key_exists("AutoRetryTimeRangeMinutes",$param) and $param["AutoRetryTimeRangeMinutes"] !== null) {
            $this->AutoRetryTimeRangeMinutes = $param["AutoRetryTimeRangeMinutes"];
        }
    }
}
