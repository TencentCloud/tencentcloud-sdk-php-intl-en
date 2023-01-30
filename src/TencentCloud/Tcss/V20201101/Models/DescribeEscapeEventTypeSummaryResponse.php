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
 * DescribeEscapeEventTypeSummary response structure.
 *
 * @method integer getContainerEscapeEventCount() Obtain Number of container escape events
 * @method void setContainerEscapeEventCount(integer $ContainerEscapeEventCount) Set Number of container escape events
 * @method integer getProcessPrivilegeEventCount() Obtain Number of program privilege escalation events
 * @method void setProcessPrivilegeEventCount(integer $ProcessPrivilegeEventCount) Set Number of program privilege escalation events
 * @method integer getRiskContainerEventCount() Obtain Number of risky container events
 * @method void setRiskContainerEventCount(integer $RiskContainerEventCount) Set Number of risky container events
 * @method integer getPendingEscapeEventCount() Obtain Number of pending escape events
 * @method void setPendingEscapeEventCount(integer $PendingEscapeEventCount) Set Number of pending escape events
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeEscapeEventTypeSummaryResponse extends AbstractModel
{
    /**
     * @var integer Number of container escape events
     */
    public $ContainerEscapeEventCount;

    /**
     * @var integer Number of program privilege escalation events
     */
    public $ProcessPrivilegeEventCount;

    /**
     * @var integer Number of risky container events
     */
    public $RiskContainerEventCount;

    /**
     * @var integer Number of pending escape events
     */
    public $PendingEscapeEventCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ContainerEscapeEventCount Number of container escape events
     * @param integer $ProcessPrivilegeEventCount Number of program privilege escalation events
     * @param integer $RiskContainerEventCount Number of risky container events
     * @param integer $PendingEscapeEventCount Number of pending escape events
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ContainerEscapeEventCount",$param) and $param["ContainerEscapeEventCount"] !== null) {
            $this->ContainerEscapeEventCount = $param["ContainerEscapeEventCount"];
        }

        if (array_key_exists("ProcessPrivilegeEventCount",$param) and $param["ProcessPrivilegeEventCount"] !== null) {
            $this->ProcessPrivilegeEventCount = $param["ProcessPrivilegeEventCount"];
        }

        if (array_key_exists("RiskContainerEventCount",$param) and $param["RiskContainerEventCount"] !== null) {
            $this->RiskContainerEventCount = $param["RiskContainerEventCount"];
        }

        if (array_key_exists("PendingEscapeEventCount",$param) and $param["PendingEscapeEventCount"] !== null) {
            $this->PendingEscapeEventCount = $param["PendingEscapeEventCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
