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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The results of AssessEnvironmentRisk
 *
 * @method DataScore getScore() Obtain <p>The risk score information of the IP environment</p>
 * @method void setScore(DataScore $Score) Set <p>The risk score information of the IP environment</p>
 * @method Environment getEnvironment() Obtain <p>The basic information of the IP environment</p>
 * @method void setEnvironment(Environment $Environment) Set <p>The basic information of the IP environment</p>
 */
class AssessEnvironmentRiskRsp extends AbstractModel
{
    /**
     * @var DataScore <p>The risk score information of the IP environment</p>
     */
    public $Score;

    /**
     * @var Environment <p>The basic information of the IP environment</p>
     */
    public $Environment;

    /**
     * @param DataScore $Score <p>The risk score information of the IP environment</p>
     * @param Environment $Environment <p>The basic information of the IP environment</p>
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
        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = new DataScore();
            $this->Score->deserialize($param["Score"]);
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new Environment();
            $this->Environment->deserialize($param["Environment"]);
        }
    }
}
