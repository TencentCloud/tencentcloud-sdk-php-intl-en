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
 * DescribeEdrAlertCountForAsset request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getInstanceIds() Obtain <p>List of host instance_id. If empty, return summarize for the appid corresponding to MemberId within range. If not empty, return statistics by each instance_id granularity.</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>List of host instance_id. If empty, return summarize for the appid corresponding to MemberId within range. If not empty, return statistics by each instance_id granularity.</p>
 * @method array getFilters() Obtain <p>Filter criteria list, consistent with DescribeEdrAlertList. Supported Name Values and corresponding Values enumeration: Status - string - Required: No - Alarm Status. Values: PENDING, WHITELISTED, PROCESSED, IGNORED. Level - string - Required: No - Alarm Level. Values: CRITICAL, HIGH, MEDIUM, LOW, INFO. DetectMode - string - Required: No - Detection mode. Values: PRECISE, BALANCED, DEEP. AlertCategory - string - Required: No - Major category of alarm. Values: VIRUS_TROJAN, ABNORMAL_LOGIN, HOST_BEHAVIOR, NETWORK_BEHAVIOR, AI_LINK_ENGINE. AlertSubType - string - Required: No - Alarm sub-type. Values: MALWARE_FILE, MALWARE_PROCESS, RISK_LOGIN, BRUTE_FORCE, DNS, BASH, PRIV_ESCALATION, REVERSE_SHELL, NET_ATTACK, VUL_DEFENCE, MEMORY_SHELL_INJECT, MEMORY_SHELL_SCAN, MULTI_BEHAVIOR_ATTACK. AttackStage - string - Required: No - ATT&CK ATTACK stage. Values: TA0001-TA0011, TA0040, TA0042, TA0043. Empty string means unclassified. AlertSource - string - Required: No - Alarm source. Values: HOST. StartTime - string - Required: No - Start time in YYYY-MM-DD HH:MM:SS format. Defaults to the last 180 days if not passed. EndTime - string - Required: No - End time in YYYY-MM-DD HH:MM:SS format. Defaults to the current time if not passed.</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria list, consistent with DescribeEdrAlertList. Supported Name Values and corresponding Values enumeration: Status - string - Required: No - Alarm Status. Values: PENDING, WHITELISTED, PROCESSED, IGNORED. Level - string - Required: No - Alarm Level. Values: CRITICAL, HIGH, MEDIUM, LOW, INFO. DetectMode - string - Required: No - Detection mode. Values: PRECISE, BALANCED, DEEP. AlertCategory - string - Required: No - Major category of alarm. Values: VIRUS_TROJAN, ABNORMAL_LOGIN, HOST_BEHAVIOR, NETWORK_BEHAVIOR, AI_LINK_ENGINE. AlertSubType - string - Required: No - Alarm sub-type. Values: MALWARE_FILE, MALWARE_PROCESS, RISK_LOGIN, BRUTE_FORCE, DNS, BASH, PRIV_ESCALATION, REVERSE_SHELL, NET_ATTACK, VUL_DEFENCE, MEMORY_SHELL_INJECT, MEMORY_SHELL_SCAN, MULTI_BEHAVIOR_ATTACK. AttackStage - string - Required: No - ATT&CK ATTACK stage. Values: TA0001-TA0011, TA0040, TA0042, TA0043. Empty string means unclassified. AlertSource - string - Required: No - Alarm source. Values: HOST. StartTime - string - Required: No - Start time in YYYY-MM-DD HH:MM:SS format. Defaults to the last 180 days if not passed. EndTime - string - Required: No - End time in YYYY-MM-DD HH:MM:SS format. Defaults to the current time if not passed.</p>
 */
class DescribeEdrAlertCountForAssetRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>List of host instance_id. If empty, return summarize for the appid corresponding to MemberId within range. If not empty, return statistics by each instance_id granularity.</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>Filter criteria list, consistent with DescribeEdrAlertList. Supported Name Values and corresponding Values enumeration: Status - string - Required: No - Alarm Status. Values: PENDING, WHITELISTED, PROCESSED, IGNORED. Level - string - Required: No - Alarm Level. Values: CRITICAL, HIGH, MEDIUM, LOW, INFO. DetectMode - string - Required: No - Detection mode. Values: PRECISE, BALANCED, DEEP. AlertCategory - string - Required: No - Major category of alarm. Values: VIRUS_TROJAN, ABNORMAL_LOGIN, HOST_BEHAVIOR, NETWORK_BEHAVIOR, AI_LINK_ENGINE. AlertSubType - string - Required: No - Alarm sub-type. Values: MALWARE_FILE, MALWARE_PROCESS, RISK_LOGIN, BRUTE_FORCE, DNS, BASH, PRIV_ESCALATION, REVERSE_SHELL, NET_ATTACK, VUL_DEFENCE, MEMORY_SHELL_INJECT, MEMORY_SHELL_SCAN, MULTI_BEHAVIOR_ATTACK. AttackStage - string - Required: No - ATT&CK ATTACK stage. Values: TA0001-TA0011, TA0040, TA0042, TA0043. Empty string means unclassified. AlertSource - string - Required: No - Alarm source. Values: HOST. StartTime - string - Required: No - Start time in YYYY-MM-DD HH:MM:SS format. Defaults to the last 180 days if not passed. EndTime - string - Required: No - End time in YYYY-MM-DD HH:MM:SS format. Defaults to the current time if not passed.</p>
     */
    public $Filters;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $InstanceIds <p>List of host instance_id. If empty, return summarize for the appid corresponding to MemberId within range. If not empty, return statistics by each instance_id granularity.</p>
     * @param array $Filters <p>Filter criteria list, consistent with DescribeEdrAlertList. Supported Name Values and corresponding Values enumeration: Status - string - Required: No - Alarm Status. Values: PENDING, WHITELISTED, PROCESSED, IGNORED. Level - string - Required: No - Alarm Level. Values: CRITICAL, HIGH, MEDIUM, LOW, INFO. DetectMode - string - Required: No - Detection mode. Values: PRECISE, BALANCED, DEEP. AlertCategory - string - Required: No - Major category of alarm. Values: VIRUS_TROJAN, ABNORMAL_LOGIN, HOST_BEHAVIOR, NETWORK_BEHAVIOR, AI_LINK_ENGINE. AlertSubType - string - Required: No - Alarm sub-type. Values: MALWARE_FILE, MALWARE_PROCESS, RISK_LOGIN, BRUTE_FORCE, DNS, BASH, PRIV_ESCALATION, REVERSE_SHELL, NET_ATTACK, VUL_DEFENCE, MEMORY_SHELL_INJECT, MEMORY_SHELL_SCAN, MULTI_BEHAVIOR_ATTACK. AttackStage - string - Required: No - ATT&CK ATTACK stage. Values: TA0001-TA0011, TA0040, TA0042, TA0043. Empty string means unclassified. AlertSource - string - Required: No - Alarm source. Values: HOST. StartTime - string - Required: No - Start time in YYYY-MM-DD HH:MM:SS format. Defaults to the last 180 days if not passed. EndTime - string - Required: No - End time in YYYY-MM-DD HH:MM:SS format. Defaults to the current time if not passed.</p>
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
