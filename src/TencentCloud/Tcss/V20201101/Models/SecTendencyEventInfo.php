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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trend information of security events at runtime
 *
 * @method array getEventSet() Obtain List of trends
 * @method void setEventSet(array $EventSet) Set List of trends
 * @method string getEventType() Obtain Event type:
ET_ESCAPE: Container escape
ET_REVERSE_SHELL: Reverse shell
ET_RISK_SYSCALL: High-risk system calls
ET_ABNORMAL_PROCESS: Abnormal process
ET_ACCESS_CONTROL: File tampering
ET_VIRUS: Trojan event
ET_MALICIOUS_CONNECTION: Malicious connection event
 * @method void setEventType(string $EventType) Set Event type:
ET_ESCAPE: Container escape
ET_REVERSE_SHELL: Reverse shell
ET_RISK_SYSCALL: High-risk system calls
ET_ABNORMAL_PROCESS: Abnormal process
ET_ACCESS_CONTROL: File tampering
ET_VIRUS: Trojan event
ET_MALICIOUS_CONNECTION: Malicious connection event
 */
class SecTendencyEventInfo extends AbstractModel
{
    /**
     * @var array List of trends
     */
    public $EventSet;

    /**
     * @var string Event type:
ET_ESCAPE: Container escape
ET_REVERSE_SHELL: Reverse shell
ET_RISK_SYSCALL: High-risk system calls
ET_ABNORMAL_PROCESS: Abnormal process
ET_ACCESS_CONTROL: File tampering
ET_VIRUS: Trojan event
ET_MALICIOUS_CONNECTION: Malicious connection event
     */
    public $EventType;

    /**
     * @param array $EventSet List of trends
     * @param string $EventType Event type:
ET_ESCAPE: Container escape
ET_REVERSE_SHELL: Reverse shell
ET_RISK_SYSCALL: High-risk system calls
ET_ABNORMAL_PROCESS: Abnormal process
ET_ACCESS_CONTROL: File tampering
ET_VIRUS: Trojan event
ET_MALICIOUS_CONNECTION: Malicious connection event
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
        if (array_key_exists("EventSet",$param) and $param["EventSet"] !== null) {
            $this->EventSet = [];
            foreach ($param["EventSet"] as $key => $value){
                $obj = new RunTimeTendencyInfo();
                $obj->deserialize($value);
                array_push($this->EventSet, $obj);
            }
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }
    }
}
