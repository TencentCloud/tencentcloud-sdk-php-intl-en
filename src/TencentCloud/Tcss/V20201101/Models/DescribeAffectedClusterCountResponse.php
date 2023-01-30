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
 * DescribeAffectedClusterCount response structure.
 *
 * @method integer getSeriousRiskClusterCount() Obtain Number of critical clusters
 * @method void setSeriousRiskClusterCount(integer $SeriousRiskClusterCount) Set Number of critical clusters
 * @method integer getHighRiskClusterCount() Obtain Number of high-risk clusters
 * @method void setHighRiskClusterCount(integer $HighRiskClusterCount) Set Number of high-risk clusters
 * @method integer getMiddleRiskClusterCount() Obtain Number of medium-risk clusters
 * @method void setMiddleRiskClusterCount(integer $MiddleRiskClusterCount) Set Number of medium-risk clusters
 * @method integer getHintRiskClusterCount() Obtain Number of low-risk clusters
 * @method void setHintRiskClusterCount(integer $HintRiskClusterCount) Set Number of low-risk clusters
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAffectedClusterCountResponse extends AbstractModel
{
    /**
     * @var integer Number of critical clusters
     */
    public $SeriousRiskClusterCount;

    /**
     * @var integer Number of high-risk clusters
     */
    public $HighRiskClusterCount;

    /**
     * @var integer Number of medium-risk clusters
     */
    public $MiddleRiskClusterCount;

    /**
     * @var integer Number of low-risk clusters
     */
    public $HintRiskClusterCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $SeriousRiskClusterCount Number of critical clusters
     * @param integer $HighRiskClusterCount Number of high-risk clusters
     * @param integer $MiddleRiskClusterCount Number of medium-risk clusters
     * @param integer $HintRiskClusterCount Number of low-risk clusters
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
        if (array_key_exists("SeriousRiskClusterCount",$param) and $param["SeriousRiskClusterCount"] !== null) {
            $this->SeriousRiskClusterCount = $param["SeriousRiskClusterCount"];
        }

        if (array_key_exists("HighRiskClusterCount",$param) and $param["HighRiskClusterCount"] !== null) {
            $this->HighRiskClusterCount = $param["HighRiskClusterCount"];
        }

        if (array_key_exists("MiddleRiskClusterCount",$param) and $param["MiddleRiskClusterCount"] !== null) {
            $this->MiddleRiskClusterCount = $param["MiddleRiskClusterCount"];
        }

        if (array_key_exists("HintRiskClusterCount",$param) and $param["HintRiskClusterCount"] !== null) {
            $this->HintRiskClusterCount = $param["HintRiskClusterCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
