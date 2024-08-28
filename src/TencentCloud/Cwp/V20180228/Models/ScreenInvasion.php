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
 * Details of large screen intrusion event
 *
 * @method string getCreatedTime() Obtain Intrusion time
 * @method void setCreatedTime(string $CreatedTime) Set Intrusion time
 * @method integer getEventType() Obtain Event type. 0: virus scanning; 1: abnormal log-in; 2: password cracking; 3: malicious request; 4: high-risk command; 5: local privilege escalation; 6: reverse shell.
 * @method void setEventType(integer $EventType) Set Event type. 0: virus scanning; 1: abnormal log-in; 2: password cracking; 3: malicious request; 4: high-risk command; 5: local privilege escalation; 6: reverse shell.
 * @method string getContent() Obtain JSON file of the event data, which varies by event.
[Virus scanning] Virus name: VirusName, file name: FileName, file path: FilePath, file size: FileSize, file MD5: MD5, first detection time: CreateTime, last detection time: LatestScanTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[Abnormal log-in] Source IP: SrcIp, location: Location, log-in username: UserName, log-in time: LoginTime
[Password cracking]Source IP: SrcIp, location: City and Country, protocol: Protocol, log-in username: UserName, port: Port, attempt count: Count, first attack time: CreateTime, last attack time: ModifyTime
[Malicious request] Malicious request domain name: Url, process: ProcessName, MD5: ProcessMd5, PID: Pid, request count: AccessCount, last request time: MergeTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[High-risk command] Hit rule name: RuleName, rule category: RuleCategory, command content: BashCmd, data source: DetectBy, Log-in user: User, PID: Pid, occurrence time: CreateTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[Local privilege escalation] Privilege escalation user: UserName, parent process: ParentProcName, user of parent process: ParentProcGroup, Detection time: CreateTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[Reverse shell] Connected process: ProcessName, executed command: CmdLine, parent process: ParentProcName, target host: DstIp, target port: DstPort, detection time: CreateTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
 * @method void setContent(string $Content) Set JSON file of the event data, which varies by event.
[Virus scanning] Virus name: VirusName, file name: FileName, file path: FilePath, file size: FileSize, file MD5: MD5, first detection time: CreateTime, last detection time: LatestScanTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[Abnormal log-in] Source IP: SrcIp, location: Location, log-in username: UserName, log-in time: LoginTime
[Password cracking]Source IP: SrcIp, location: City and Country, protocol: Protocol, log-in username: UserName, port: Port, attempt count: Count, first attack time: CreateTime, last attack time: ModifyTime
[Malicious request] Malicious request domain name: Url, process: ProcessName, MD5: ProcessMd5, PID: Pid, request count: AccessCount, last request time: MergeTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[High-risk command] Hit rule name: RuleName, rule category: RuleCategory, command content: BashCmd, data source: DetectBy, Log-in user: User, PID: Pid, occurrence time: CreateTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[Local privilege escalation] Privilege escalation user: UserName, parent process: ParentProcName, user of parent process: ParentProcGroup, Detection time: CreateTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[Reverse shell] Connected process: ProcessName, executed command: CmdLine, parent process: ParentProcName, target host: DstIp, target port: DstPort, detection time: CreateTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
 * @method integer getLevel() Obtain Unified event risk level. 0: prompt; 1: low; 2: medium; 3: high; 4: critical.
 * @method void setLevel(integer $Level) Set Unified event risk level. 0: prompt; 1: low; 2: medium; 3: high; 4: critical.
 * @method string getLevelZh() Obtain Level in Chinese
 * @method void setLevelZh(string $LevelZh) Set Level in Chinese
 * @method integer getId() Obtain Event ID
 * @method void setId(integer $Id) Set Event ID
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 */
class ScreenInvasion extends AbstractModel
{
    /**
     * @var string Intrusion time
     */
    public $CreatedTime;

    /**
     * @var integer Event type. 0: virus scanning; 1: abnormal log-in; 2: password cracking; 3: malicious request; 4: high-risk command; 5: local privilege escalation; 6: reverse shell.
     */
    public $EventType;

    /**
     * @var string JSON file of the event data, which varies by event.
[Virus scanning] Virus name: VirusName, file name: FileName, file path: FilePath, file size: FileSize, file MD5: MD5, first detection time: CreateTime, last detection time: LatestScanTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[Abnormal log-in] Source IP: SrcIp, location: Location, log-in username: UserName, log-in time: LoginTime
[Password cracking]Source IP: SrcIp, location: City and Country, protocol: Protocol, log-in username: UserName, port: Port, attempt count: Count, first attack time: CreateTime, last attack time: ModifyTime
[Malicious request] Malicious request domain name: Url, process: ProcessName, MD5: ProcessMd5, PID: Pid, request count: AccessCount, last request time: MergeTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[High-risk command] Hit rule name: RuleName, rule category: RuleCategory, command content: BashCmd, data source: DetectBy, Log-in user: User, PID: Pid, occurrence time: CreateTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[Local privilege escalation] Privilege escalation user: UserName, parent process: ParentProcName, user of parent process: ParentProcGroup, Detection time: CreateTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[Reverse shell] Connected process: ProcessName, executed command: CmdLine, parent process: ParentProcName, target host: DstIp, target port: DstPort, detection time: CreateTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
     */
    public $Content;

    /**
     * @var integer Unified event risk level. 0: prompt; 1: low; 2: medium; 3: high; 4: critical.
     */
    public $Level;

    /**
     * @var string Level in Chinese
     */
    public $LevelZh;

    /**
     * @var integer Event ID
     */
    public $Id;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @param string $CreatedTime Intrusion time
     * @param integer $EventType Event type. 0: virus scanning; 1: abnormal log-in; 2: password cracking; 3: malicious request; 4: high-risk command; 5: local privilege escalation; 6: reverse shell.
     * @param string $Content JSON file of the event data, which varies by event.
[Virus scanning] Virus name: VirusName, file name: FileName, file path: FilePath, file size: FileSize, file MD5: MD5, first detection time: CreateTime, last detection time: LatestScanTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[Abnormal log-in] Source IP: SrcIp, location: Location, log-in username: UserName, log-in time: LoginTime
[Password cracking]Source IP: SrcIp, location: City and Country, protocol: Protocol, log-in username: UserName, port: Port, attempt count: Count, first attack time: CreateTime, last attack time: ModifyTime
[Malicious request] Malicious request domain name: Url, process: ProcessName, MD5: ProcessMd5, PID: Pid, request count: AccessCount, last request time: MergeTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[High-risk command] Hit rule name: RuleName, rule category: RuleCategory, command content: BashCmd, data source: DetectBy, Log-in user: User, PID: Pid, occurrence time: CreateTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[Local privilege escalation] Privilege escalation user: UserName, parent process: ParentProcName, user of parent process: ParentProcGroup, Detection time: CreateTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
[Reverse shell] Connected process: ProcessName, executed command: CmdLine, parent process: ParentProcName, target host: DstIp, target port: DstPort, detection time: CreateTime, severity description: HarmDescribe, fixing suggestion: SuggestScheme
     * @param integer $Level Unified event risk level. 0: prompt; 1: low; 2: medium; 3: high; 4: critical.
     * @param string $LevelZh Level in Chinese
     * @param integer $Id Event ID
     * @param string $Uuid Host UUID
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
        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("LevelZh",$param) and $param["LevelZh"] !== null) {
            $this->LevelZh = $param["LevelZh"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
