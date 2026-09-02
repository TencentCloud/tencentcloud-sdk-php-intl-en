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
 * ModifyAgentRunMode request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 * @method CustomAgentRunModePolicy getCustomPolicy() Obtain <p>Custom mode configuration</p>
 * @method void setCustomPolicy(CustomAgentRunModePolicy $CustomPolicy) Set <p>Custom mode configuration</p>
 * @method array getAdvanceModeQuuids() Obtain <p>List of quuids in high protection mode</p>
 * @method void setAdvanceModeQuuids(array $AdvanceModeQuuids) Set <p>List of quuids in high protection mode</p>
 * @method array getCustomModeQuuids() Obtain <p>Custom mode quuid list</p>
 * @method void setCustomModeQuuids(array $CustomModeQuuids) Set <p>Custom mode quuid list</p>
 * @method integer getEnhanceLogMode() Obtain <p>Log enhancement switch. 0: off, 1: on</p>
 * @method void setEnhanceLogMode(integer $EnhanceLogMode) Set <p>Log enhancement switch. 0: off, 1: on</p>
 * @method integer getMalwarePocMode() Obtain <p>Malicious file scan automatic poc mode switch. 0: off, 1: on</p>
 * @method void setMalwarePocMode(integer $MalwarePocMode) Set <p>Malicious file scan automatic poc mode switch. 0: off, 1: on</p>
 * @method integer getReportSourcePort() Obtain <p>Whether the quintuple reports the source port. 0: not reported; 1: reported</p>
 * @method void setReportSourcePort(integer $ReportSourcePort) Set <p>Whether the quintuple reports the source port. 0: not reported; 1: reported</p>
 * @method array getLogCollectSettings() Obtain <p>Log gathering settings, collect TCP source port tcp_src_port, TCP ingress log tcp_ingress, HTTP egress connection log http_egress, HTTP ingress connection log http_ingress, and application access log app_access</p>
 * @method void setLogCollectSettings(array $LogCollectSettings) Set <p>Log gathering settings, collect TCP source port tcp_src_port, TCP ingress log tcp_ingress, HTTP egress connection log http_egress, HTTP ingress connection log http_ingress, and application access log app_access</p>
 */
class ModifyAgentRunModeRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @var CustomAgentRunModePolicy <p>Custom mode configuration</p>
     */
    public $CustomPolicy;

    /**
     * @var array <p>List of quuids in high protection mode</p>
     */
    public $AdvanceModeQuuids;

    /**
     * @var array <p>Custom mode quuid list</p>
     */
    public $CustomModeQuuids;

    /**
     * @var integer <p>Log enhancement switch. 0: off, 1: on</p>
     */
    public $EnhanceLogMode;

    /**
     * @var integer <p>Malicious file scan automatic poc mode switch. 0: off, 1: on</p>
     */
    public $MalwarePocMode;

    /**
     * @var integer <p>Whether the quintuple reports the source port. 0: not reported; 1: reported</p>
     */
    public $ReportSourcePort;

    /**
     * @var array <p>Log gathering settings, collect TCP source port tcp_src_port, TCP ingress log tcp_ingress, HTTP egress connection log http_egress, HTTP ingress connection log http_ingress, and application access log app_access</p>
     */
    public $LogCollectSettings;

    /**
     * @param array $MemberId <p>Group account member id.</p>
     * @param CustomAgentRunModePolicy $CustomPolicy <p>Custom mode configuration</p>
     * @param array $AdvanceModeQuuids <p>List of quuids in high protection mode</p>
     * @param array $CustomModeQuuids <p>Custom mode quuid list</p>
     * @param integer $EnhanceLogMode <p>Log enhancement switch. 0: off, 1: on</p>
     * @param integer $MalwarePocMode <p>Malicious file scan automatic poc mode switch. 0: off, 1: on</p>
     * @param integer $ReportSourcePort <p>Whether the quintuple reports the source port. 0: not reported; 1: reported</p>
     * @param array $LogCollectSettings <p>Log gathering settings, collect TCP source port tcp_src_port, TCP ingress log tcp_ingress, HTTP egress connection log http_egress, HTTP ingress connection log http_ingress, and application access log app_access</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("CustomPolicy",$param) and $param["CustomPolicy"] !== null) {
            $this->CustomPolicy = new CustomAgentRunModePolicy();
            $this->CustomPolicy->deserialize($param["CustomPolicy"]);
        }

        if (array_key_exists("AdvanceModeQuuids",$param) and $param["AdvanceModeQuuids"] !== null) {
            $this->AdvanceModeQuuids = $param["AdvanceModeQuuids"];
        }

        if (array_key_exists("CustomModeQuuids",$param) and $param["CustomModeQuuids"] !== null) {
            $this->CustomModeQuuids = $param["CustomModeQuuids"];
        }

        if (array_key_exists("EnhanceLogMode",$param) and $param["EnhanceLogMode"] !== null) {
            $this->EnhanceLogMode = $param["EnhanceLogMode"];
        }

        if (array_key_exists("MalwarePocMode",$param) and $param["MalwarePocMode"] !== null) {
            $this->MalwarePocMode = $param["MalwarePocMode"];
        }

        if (array_key_exists("ReportSourcePort",$param) and $param["ReportSourcePort"] !== null) {
            $this->ReportSourcePort = $param["ReportSourcePort"];
        }

        if (array_key_exists("LogCollectSettings",$param) and $param["LogCollectSettings"] !== null) {
            $this->LogCollectSettings = $param["LogCollectSettings"];
        }
    }
}
