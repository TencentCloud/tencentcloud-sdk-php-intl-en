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
 * Trend of pending escape events
 *
 * @method integer getRiskContainerEventCount() Obtain Total number of pending containers at risk
 * @method void setRiskContainerEventCount(integer $RiskContainerEventCount) Set Total number of pending containers at risk
 * @method integer getProcessPrivilegeEventCount() Obtain Total number of pending program privilege escalation events
 * @method void setProcessPrivilegeEventCount(integer $ProcessPrivilegeEventCount) Set Total number of pending program privilege escalation events
 * @method integer getContainerEscapeEventCount() Obtain Total number of pending container escape events
 * @method void setContainerEscapeEventCount(integer $ContainerEscapeEventCount) Set Total number of pending container escape events
 * @method string getDate() Obtain Date
 * @method void setDate(string $Date) Set Date
 */
class EscapeEventTendencyInfo extends AbstractModel
{
    /**
     * @var integer Total number of pending containers at risk
     */
    public $RiskContainerEventCount;

    /**
     * @var integer Total number of pending program privilege escalation events
     */
    public $ProcessPrivilegeEventCount;

    /**
     * @var integer Total number of pending container escape events
     */
    public $ContainerEscapeEventCount;

    /**
     * @var string Date
     */
    public $Date;

    /**
     * @param integer $RiskContainerEventCount Total number of pending containers at risk
     * @param integer $ProcessPrivilegeEventCount Total number of pending program privilege escalation events
     * @param integer $ContainerEscapeEventCount Total number of pending container escape events
     * @param string $Date Date
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
        if (array_key_exists("RiskContainerEventCount",$param) and $param["RiskContainerEventCount"] !== null) {
            $this->RiskContainerEventCount = $param["RiskContainerEventCount"];
        }

        if (array_key_exists("ProcessPrivilegeEventCount",$param) and $param["ProcessPrivilegeEventCount"] !== null) {
            $this->ProcessPrivilegeEventCount = $param["ProcessPrivilegeEventCount"];
        }

        if (array_key_exists("ContainerEscapeEventCount",$param) and $param["ContainerEscapeEventCount"] !== null) {
            $this->ContainerEscapeEventCount = $param["ContainerEscapeEventCount"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
