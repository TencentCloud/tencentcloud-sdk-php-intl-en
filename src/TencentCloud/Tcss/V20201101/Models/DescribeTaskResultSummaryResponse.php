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
 * DescribeTaskResultSummary response structure.
 *
 * @method array getSeriousRiskNodeCount() Obtain Number of nodes affected by critical risks in the last seven days
 * @method void setSeriousRiskNodeCount(array $SeriousRiskNodeCount) Set Number of nodes affected by critical risks in the last seven days
 * @method array getHighRiskNodeCount() Obtain Number of nodes affected by high risks in the last seven days
 * @method void setHighRiskNodeCount(array $HighRiskNodeCount) Set Number of nodes affected by high risks in the last seven days
 * @method array getMiddleRiskNodeCount() Obtain Number of nodes affected by medium risks in the last seven days
 * @method void setMiddleRiskNodeCount(array $MiddleRiskNodeCount) Set Number of nodes affected by medium risks in the last seven days
 * @method array getHintRiskNodeCount() Obtain Number of nodes affected by prompt risks in the last seven days
 * @method void setHintRiskNodeCount(array $HintRiskNodeCount) Set Number of nodes affected by prompt risks in the last seven days
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTaskResultSummaryResponse extends AbstractModel
{
    /**
     * @var array Number of nodes affected by critical risks in the last seven days
     */
    public $SeriousRiskNodeCount;

    /**
     * @var array Number of nodes affected by high risks in the last seven days
     */
    public $HighRiskNodeCount;

    /**
     * @var array Number of nodes affected by medium risks in the last seven days
     */
    public $MiddleRiskNodeCount;

    /**
     * @var array Number of nodes affected by prompt risks in the last seven days
     */
    public $HintRiskNodeCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $SeriousRiskNodeCount Number of nodes affected by critical risks in the last seven days
     * @param array $HighRiskNodeCount Number of nodes affected by high risks in the last seven days
     * @param array $MiddleRiskNodeCount Number of nodes affected by medium risks in the last seven days
     * @param array $HintRiskNodeCount Number of nodes affected by prompt risks in the last seven days
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
        if (array_key_exists("SeriousRiskNodeCount",$param) and $param["SeriousRiskNodeCount"] !== null) {
            $this->SeriousRiskNodeCount = $param["SeriousRiskNodeCount"];
        }

        if (array_key_exists("HighRiskNodeCount",$param) and $param["HighRiskNodeCount"] !== null) {
            $this->HighRiskNodeCount = $param["HighRiskNodeCount"];
        }

        if (array_key_exists("MiddleRiskNodeCount",$param) and $param["MiddleRiskNodeCount"] !== null) {
            $this->MiddleRiskNodeCount = $param["MiddleRiskNodeCount"];
        }

        if (array_key_exists("HintRiskNodeCount",$param) and $param["HintRiskNodeCount"] !== null) {
            $this->HintRiskNodeCount = $param["HintRiskNodeCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
