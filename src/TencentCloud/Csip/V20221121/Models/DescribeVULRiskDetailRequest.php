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
 * DescribeVULRiskDetail request structure.
 *
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method string getRiskId() Obtain Risk id.
 * @method void setRiskId(string $RiskId) Set Risk id.
 * @method string getPCMGRId() Obtain pcMgrId
 * @method void setPCMGRId(string $PCMGRId) Set pcMgrId
 */
class DescribeVULRiskDetailRequest extends AbstractModel
{
    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var string Risk id.
     */
    public $RiskId;

    /**
     * @var string pcMgrId
     */
    public $PCMGRId;

    /**
     * @param array $MemberId Group Account Member ID
     * @param string $RiskId Risk id.
     * @param string $PCMGRId pcMgrId
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

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("PCMGRId",$param) and $param["PCMGRId"] !== null) {
            $this->PCMGRId = $param["PCMGRId"];
        }
    }
}
