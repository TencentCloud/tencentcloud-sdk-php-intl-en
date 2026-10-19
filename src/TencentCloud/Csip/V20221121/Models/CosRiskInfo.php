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
 * cos risk details
 *
 * @method integer getPolicyType() Obtain Policy type code
 * @method void setPolicyType(integer $PolicyType) Set Policy type code
 * @method string getPolicyTypeName() Obtain Policy classification name
 * @method void setPolicyTypeName(string $PolicyTypeName) Set Policy classification name
 * @method integer getPolicyCount() Obtain Total hit policies
 * @method void setPolicyCount(integer $PolicyCount) Set Total hit policies
 */
class CosRiskInfo extends AbstractModel
{
    /**
     * @var integer Policy type code
     */
    public $PolicyType;

    /**
     * @var string Policy classification name
     */
    public $PolicyTypeName;

    /**
     * @var integer Total hit policies
     */
    public $PolicyCount;

    /**
     * @param integer $PolicyType Policy type code
     * @param string $PolicyTypeName Policy classification name
     * @param integer $PolicyCount Total hit policies
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
        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyTypeName",$param) and $param["PolicyTypeName"] !== null) {
            $this->PolicyTypeName = $param["PolicyTypeName"];
        }

        if (array_key_exists("PolicyCount",$param) and $param["PolicyCount"] !== null) {
            $this->PolicyCount = $param["PolicyCount"];
        }
    }
}
