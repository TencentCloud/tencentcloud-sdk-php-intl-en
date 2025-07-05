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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRiskAssessment request structure.
 *
 * @method InputBizCryptoData getBizCryptoData() Obtain Business parameters
 * @method void setBizCryptoData(InputBizCryptoData $BizCryptoData) Set Business parameters
 */
class DescribeRiskAssessmentRequest extends AbstractModel
{
    /**
     * @var InputBizCryptoData Business parameters
     */
    public $BizCryptoData;

    /**
     * @param InputBizCryptoData $BizCryptoData Business parameters
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
        if (array_key_exists("BizCryptoData",$param) and $param["BizCryptoData"] !== null) {
            $this->BizCryptoData = new InputBizCryptoData();
            $this->BizCryptoData->deserialize($param["BizCryptoData"]);
        }
    }
}
