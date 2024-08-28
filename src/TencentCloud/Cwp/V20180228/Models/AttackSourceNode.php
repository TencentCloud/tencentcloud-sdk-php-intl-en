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
 * Attack backtracking node
 *
 * @method integer getEventId() Obtain Event ID. If this parameter is left blank, no corresponding event exists.
 * @method void setEventId(integer $EventId) Set Event ID. If this parameter is left blank, no corresponding event exists.
 * @method string getEventType() Obtain BRUTEFORCE: password cracking; MALWARE: Trojan; BASH: high-risk command; RISK_DNS: malicious request; LOGIN: cross-region log-in; HOST: host node; TIME_ORDER: general node.
 * @method void setEventType(string $EventType) Set BRUTEFORCE: password cracking; MALWARE: Trojan; BASH: high-risk command; RISK_DNS: malicious request; LOGIN: cross-region log-in; HOST: host node; TIME_ORDER: general node.
 * @method string getIp() Obtain Node IP address. When the node is HOST, the value is the IP address of this node.
 * @method void setIp(string $Ip) Set Node IP address. When the node is HOST, the value is the IP address of this node.
 * @method integer getLevel() Obtain Level. 0: prompt; 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
 * @method void setLevel(integer $Level) Set Level. 0: prompt; 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
 * @method string getNodeId() Obtain Node ID
 * @method void setNodeId(string $NodeId) Set Node ID
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getNodeDesc() Obtain General node description
 * @method void setNodeDesc(string $NodeDesc) Set General node description
 * @method integer getTimeLineNum() Obtain Timeline number. Nodes with the same number belong to the same timeline.
 * @method void setTimeLineNum(integer $TimeLineNum) Set Timeline number. Nodes with the same number belong to the same timeline.
 * @method string getNodeDetail() Obtain Node details
 * @method void setNodeDetail(string $NodeDetail) Set Node details
 */
class AttackSourceNode extends AbstractModel
{
    /**
     * @var integer Event ID. If this parameter is left blank, no corresponding event exists.
     */
    public $EventId;

    /**
     * @var string BRUTEFORCE: password cracking; MALWARE: Trojan; BASH: high-risk command; RISK_DNS: malicious request; LOGIN: cross-region log-in; HOST: host node; TIME_ORDER: general node.
     */
    public $EventType;

    /**
     * @var string Node IP address. When the node is HOST, the value is the IP address of this node.
     */
    public $Ip;

    /**
     * @var integer Level. 0: prompt; 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
     */
    public $Level;

    /**
     * @var string Node ID
     */
    public $NodeId;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string General node description
     */
    public $NodeDesc;

    /**
     * @var integer Timeline number. Nodes with the same number belong to the same timeline.
     */
    public $TimeLineNum;

    /**
     * @var string Node details
     */
    public $NodeDetail;

    /**
     * @param integer $EventId Event ID. If this parameter is left blank, no corresponding event exists.
     * @param string $EventType BRUTEFORCE: password cracking; MALWARE: Trojan; BASH: high-risk command; RISK_DNS: malicious request; LOGIN: cross-region log-in; HOST: host node; TIME_ORDER: general node.
     * @param string $Ip Node IP address. When the node is HOST, the value is the IP address of this node.
     * @param integer $Level Level. 0: prompt; 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
     * @param string $NodeId Node ID
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param string $NodeDesc General node description
     * @param integer $TimeLineNum Timeline number. Nodes with the same number belong to the same timeline.
     * @param string $NodeDetail Node details
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NodeDesc",$param) and $param["NodeDesc"] !== null) {
            $this->NodeDesc = $param["NodeDesc"];
        }

        if (array_key_exists("TimeLineNum",$param) and $param["TimeLineNum"] !== null) {
            $this->TimeLineNum = $param["TimeLineNum"];
        }

        if (array_key_exists("NodeDetail",$param) and $param["NodeDetail"] !== null) {
            $this->NodeDetail = $param["NodeDetail"];
        }
    }
}
