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
 * @method string getSrcAccessType() Obtain Source database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet); `noProxy`. Note that the valid values are subject to the current link.
 * @method void setSrcAccessType(string $SrcAccessType) Set Source database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet); `noProxy`. Note that the valid values are subject to the current link.
 * @method Endpoint getSrcInfo() Obtain Source database information
 * @method void setSrcInfo(Endpoint $SrcInfo) Set Source database information
 * @method string getDstAccessType() Obtain Target database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet); `noProxy`. Note that the valid values are subject to the current link.
 * @method void setDstAccessType(string $DstAccessType) Set Target database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet); `noProxy`. Note that the valid values are subject to the current link.
 * @method Endpoint getDstInfo() Obtain Target database information
 * @method void setDstInfo(Endpoint $DstInfo) Set Target database information
 * @method Options getOptions() Obtain Sync task options
 * @method void setOptions(Options $Options) Set Sync task options
 * @method Objects getObjects() Obtain Information of synced database/table objects
 * @method void setObjects(Objects $Objects) Set Information of synced database/table objects
 * @method string getJobName() Obtain Sync task name
 * @method void setJobName(string $JobName) Set Sync task name
 * @method string getRunMode() Obtain Running mode. Valid values: `Immediate`, `Timed`. Default value: `Immediate`.
 * @method void setRunMode(string $RunMode) Set Running mode. Valid values: `Immediate`, `Timed`. Default value: `Immediate`.
 * @method string getExpectRunTime() Obtain Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `Timed`.
 * @method void setExpectRunTime(string $ExpectRunTime) Set Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `Timed`.
 */
class ConfigureSyncJobRequest extends AbstractModel
{
    /**
     * @var string Sync task instance ID in the format of `sync-werwfs23`, which is used to identify a sync task.
     */
    public $JobId;

    /**
     * @var string Source database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet); `noProxy`. Note that the valid values are subject to the current link.
     */
    public $SrcAccessType;

    /**
     * @var Endpoint Source database information
     */
    public $SrcInfo;

    /**
     * @var string Target database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet); `noProxy`. Note that the valid values are subject to the current link.
     */
    public $DstAccessType;

    /**
     * @var Endpoint Target database information
     */
    public $DstInfo;

    /**
     * @var Options Sync task options
     */
    public $Options;

    /**
     * @var Objects Information of synced database/table objects
     */
    public $Objects;

    /**
     * @var string Sync task name
     */
    public $JobName;

    /**
     * @var string Running mode. Valid values: `Immediate`, `Timed`. Default value: `Immediate`.
     */
    public $RunMode;

    /**
     * @var string Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `Timed`.
     */
    public $ExpectRunTime;

    /**
     * @param string $JobId Sync task instance ID in the format of `sync-werwfs23`, which is used to identify a sync task.
     * @param string $SrcAccessType Source database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet); `noProxy`. Note that the valid values are subject to the current link.
     * @param Endpoint $SrcInfo Source database information
     * @param string $DstAccessType Target database access type. Valid values: `cdb` (database); `cvm` (self-build on CVM); `vpc` (VPC); `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `intranet` (intranet); `noProxy`. Note that the valid values are subject to the current link.
     * @param Endpoint $DstInfo Target database information
     * @param Options $Options Sync task options
     * @param Objects $Objects Information of synced database/table objects
     * @param string $JobName Sync task name
     * @param string $RunMode Running mode. Valid values: `Immediate`, `Timed`. Default value: `Immediate`.
     * @param string $ExpectRunTime Expected start time in the format of "2006-01-02 15:04:05", which is required if `RunMode` is `Timed`.
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

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new Endpoint();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new Endpoint();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new Options();
            $this->Options->deserialize($param["Options"]);
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new Objects();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("ExpectRunTime",$param) and $param["ExpectRunTime"] !== null) {
            $this->ExpectRunTime = $param["ExpectRunTime"];
        }
    }
}
