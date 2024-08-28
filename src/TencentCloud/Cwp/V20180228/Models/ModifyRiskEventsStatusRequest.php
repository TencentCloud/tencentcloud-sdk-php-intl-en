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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRiskEventsStatus request structure.
 *
 * @method integer getOperate() Obtain Operations - 0: Mark as Handled, 1: Ignore, 2: Delete Record, 3: Trojan Isolation, 4: Isolated Trojan Resumption, 5: Trojan Trust, 6: Trojan Untrust, 7: Kill Exceptional Process.
 * @method void setOperate(integer $Operate) Set Operations - 0: Mark as Handled, 1: Ignore, 2: Delete Record, 3: Trojan Isolation, 4: Isolated Trojan Resumption, 5: Trojan Trust, 6: Trojan Untrust, 7: Kill Exceptional Process.
 * @method string getRiskType() Obtain Operation event types, file scan: MALWARE, exceptional login: HOST_LOGIN, password brute attack: BRUTE_ATTACK, malicious request: MALICIOUS_REQUEST, high-risk command: BASH_EVENT, local privilege escalation: PRIVILEGE_EVENT, reverse shell: REVERSE_SHELL, exceptional process: PROCESS.
 * @method void setRiskType(string $RiskType) Set Operation event types, file scan: MALWARE, exceptional login: HOST_LOGIN, password brute attack: BRUTE_ATTACK, malicious request: MALICIOUS_REQUEST, high-risk command: BASH_EVENT, local privilege escalation: PRIVILEGE_EVENT, reverse shell: REVERSE_SHELL, exceptional process: PROCESS.
 * @method array getIds() Obtain An array of event IDs that need to be modified, and batch operation is supported.
 * @method void setIds(array $Ids) Set An array of event IDs that need to be modified, and batch operation is supported.
 * @method boolean getUpdateAll() Obtain Whether to update all, i.e. whether to operate on all events; this parameter is invalid when IDs are not left blank.
 * @method void setUpdateAll(boolean $UpdateAll) Set Whether to update all, i.e. whether to operate on all events; this parameter is invalid when IDs are not left blank.
 * @method array getExcludeId() Obtain Excluded event ID: When operating on all events, this ID needs to be excluded.
 * @method void setExcludeId(array $ExcludeId) Set Excluded event ID: When operating on all events, this ID needs to be excluded.
 * @method boolean getKillProcess() Obtain When Operate is Trojan isolation, it indicates whether to kill the process, other operations are invalid
 * @method void setKillProcess(boolean $KillProcess) Set When Operate is Trojan isolation, it indicates whether to kill the process, other operations are invalid
 * @method array getIp() Obtain When RiskType is cross-region log-in and IDs are left blank, you can modify the status of events from all source IPs.
 * @method void setIp(array $Ip) Set When RiskType is cross-region log-in and IDs are left blank, you can modify the status of events from all source IPs.
 * @method array getFilters() Obtain Filtering criteria. When RiskType is MALWARE.
1. When RiskType is MALWARE:
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>FilePath - String - required: no - filter by path</li>
<li>VirusName - String - required: no - filter by description</li>
<li>CreateBeginTime - String - required: no - filter by creation time - start time</li>
<li>CreateEndTime - String - required: no - filter by creation time - end time</li>
<li>Status - String - required: no - filter by status: 4 - pending; 5 -- trusted; 6 - isolated; 10 - isolation in progress; 11 - recovering from isolation</li>
When RiskType is PROCESS:
Filter criteria
<li>IpOrName - String - required: no - host IP or host name</li>
<li>VirusName - String - required: no - virus name</li>
<li>BeginTime - String - required: no - process startup time - begin</li>
<li>BeginTime - String - required: no - process startup time - end</li>
<li>Status - String - required: no - filter by status: 0 - pending; 1 - under detection; 2 - detected; 3 - exited; 4 - trusted</li>
 * @method void setFilters(array $Filters) Set Filtering criteria. When RiskType is MALWARE.
1. When RiskType is MALWARE:
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>FilePath - String - required: no - filter by path</li>
<li>VirusName - String - required: no - filter by description</li>
<li>CreateBeginTime - String - required: no - filter by creation time - start time</li>
<li>CreateEndTime - String - required: no - filter by creation time - end time</li>
<li>Status - String - required: no - filter by status: 4 - pending; 5 -- trusted; 6 - isolated; 10 - isolation in progress; 11 - recovering from isolation</li>
When RiskType is PROCESS:
Filter criteria
<li>IpOrName - String - required: no - host IP or host name</li>
<li>VirusName - String - required: no - virus name</li>
<li>BeginTime - String - required: no - process startup time - begin</li>
<li>BeginTime - String - required: no - process startup time - end</li>
<li>Status - String - required: no - filter by status: 0 - pending; 1 - under detection; 2 - detected; 3 - exited; 4 - trusted</li>
 */
class ModifyRiskEventsStatusRequest extends AbstractModel
{
    /**
     * @var integer Operations - 0: Mark as Handled, 1: Ignore, 2: Delete Record, 3: Trojan Isolation, 4: Isolated Trojan Resumption, 5: Trojan Trust, 6: Trojan Untrust, 7: Kill Exceptional Process.
     */
    public $Operate;

    /**
     * @var string Operation event types, file scan: MALWARE, exceptional login: HOST_LOGIN, password brute attack: BRUTE_ATTACK, malicious request: MALICIOUS_REQUEST, high-risk command: BASH_EVENT, local privilege escalation: PRIVILEGE_EVENT, reverse shell: REVERSE_SHELL, exceptional process: PROCESS.
     */
    public $RiskType;

    /**
     * @var array An array of event IDs that need to be modified, and batch operation is supported.
     */
    public $Ids;

    /**
     * @var boolean Whether to update all, i.e. whether to operate on all events; this parameter is invalid when IDs are not left blank.
     */
    public $UpdateAll;

    /**
     * @var array Excluded event ID: When operating on all events, this ID needs to be excluded.
     */
    public $ExcludeId;

    /**
     * @var boolean When Operate is Trojan isolation, it indicates whether to kill the process, other operations are invalid
     */
    public $KillProcess;

    /**
     * @var array When RiskType is cross-region log-in and IDs are left blank, you can modify the status of events from all source IPs.
     */
    public $Ip;

    /**
     * @var array Filtering criteria. When RiskType is MALWARE.
1. When RiskType is MALWARE:
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>FilePath - String - required: no - filter by path</li>
<li>VirusName - String - required: no - filter by description</li>
<li>CreateBeginTime - String - required: no - filter by creation time - start time</li>
<li>CreateEndTime - String - required: no - filter by creation time - end time</li>
<li>Status - String - required: no - filter by status: 4 - pending; 5 -- trusted; 6 - isolated; 10 - isolation in progress; 11 - recovering from isolation</li>
When RiskType is PROCESS:
Filter criteria
<li>IpOrName - String - required: no - host IP or host name</li>
<li>VirusName - String - required: no - virus name</li>
<li>BeginTime - String - required: no - process startup time - begin</li>
<li>BeginTime - String - required: no - process startup time - end</li>
<li>Status - String - required: no - filter by status: 0 - pending; 1 - under detection; 2 - detected; 3 - exited; 4 - trusted</li>
     */
    public $Filters;

    /**
     * @param integer $Operate Operations - 0: Mark as Handled, 1: Ignore, 2: Delete Record, 3: Trojan Isolation, 4: Isolated Trojan Resumption, 5: Trojan Trust, 6: Trojan Untrust, 7: Kill Exceptional Process.
     * @param string $RiskType Operation event types, file scan: MALWARE, exceptional login: HOST_LOGIN, password brute attack: BRUTE_ATTACK, malicious request: MALICIOUS_REQUEST, high-risk command: BASH_EVENT, local privilege escalation: PRIVILEGE_EVENT, reverse shell: REVERSE_SHELL, exceptional process: PROCESS.
     * @param array $Ids An array of event IDs that need to be modified, and batch operation is supported.
     * @param boolean $UpdateAll Whether to update all, i.e. whether to operate on all events; this parameter is invalid when IDs are not left blank.
     * @param array $ExcludeId Excluded event ID: When operating on all events, this ID needs to be excluded.
     * @param boolean $KillProcess When Operate is Trojan isolation, it indicates whether to kill the process, other operations are invalid
     * @param array $Ip When RiskType is cross-region log-in and IDs are left blank, you can modify the status of events from all source IPs.
     * @param array $Filters Filtering criteria. When RiskType is MALWARE.
1. When RiskType is MALWARE:
<li>IpOrAlias - String - required: no - filter by host IP or alias</li>
<li>FilePath - String - required: no - filter by path</li>
<li>VirusName - String - required: no - filter by description</li>
<li>CreateBeginTime - String - required: no - filter by creation time - start time</li>
<li>CreateEndTime - String - required: no - filter by creation time - end time</li>
<li>Status - String - required: no - filter by status: 4 - pending; 5 -- trusted; 6 - isolated; 10 - isolation in progress; 11 - recovering from isolation</li>
When RiskType is PROCESS:
Filter criteria
<li>IpOrName - String - required: no - host IP or host name</li>
<li>VirusName - String - required: no - virus name</li>
<li>BeginTime - String - required: no - process startup time - begin</li>
<li>BeginTime - String - required: no - process startup time - end</li>
<li>Status - String - required: no - filter by status: 0 - pending; 1 - under detection; 2 - detected; 3 - exited; 4 - trusted</li>
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
        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("UpdateAll",$param) and $param["UpdateAll"] !== null) {
            $this->UpdateAll = $param["UpdateAll"];
        }

        if (array_key_exists("ExcludeId",$param) and $param["ExcludeId"] !== null) {
            $this->ExcludeId = $param["ExcludeId"];
        }

        if (array_key_exists("KillProcess",$param) and $param["KillProcess"] !== null) {
            $this->KillProcess = $param["KillProcess"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
