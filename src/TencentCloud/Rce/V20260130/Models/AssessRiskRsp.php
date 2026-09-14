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
 * The results of AssessRisk
 *
 * @method Decision getDecision() Obtain <p>Decision information</p>
 * @method void setDecision(Decision $Decision) Set <p>Decision information</p>
 * @method Score getScore() Obtain <p>Risk score, a scoring result calculated based on the product services you have enabled</p>
 * @method void setScore(Score $Score) Set <p>Risk score, a scoring result calculated based on the product services you have enabled</p>
 * @method array getExtraInfo() Obtain <p>Extended information</p>
 * @method void setExtraInfo(array $ExtraInfo) Set <p>Extended information</p>
 */
class AssessRiskRsp extends AbstractModel
{
    /**
     * @var Decision <p>Decision information</p>
     */
    public $Decision;

    /**
     * @var Score <p>Risk score, a scoring result calculated based on the product services you have enabled</p>
     */
    public $Score;

    /**
     * @var array <p>Extended information</p>
     */
    public $ExtraInfo;

    /**
     * @param Decision $Decision <p>Decision information</p>
     * @param Score $Score <p>Risk score, a scoring result calculated based on the product services you have enabled</p>
     * @param array $ExtraInfo <p>Extended information</p>
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
        if (array_key_exists("Decision",$param) and $param["Decision"] !== null) {
            $this->Decision = new Decision();
            $this->Decision->deserialize($param["Decision"]);
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = new Score();
            $this->Score->deserialize($param["Score"]);
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = [];
            foreach ($param["ExtraInfo"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->ExtraInfo, $obj);
            }
        }
    }
}
