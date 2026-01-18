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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MAU metric comparison response data
 *
 * @method string getComparisonRatio() Obtain Growth rate (targetData - sourceData) / sourceData, returns 0 when SourceMAUNum is 0
 * @method void setComparisonRatio(string $ComparisonRatio) Set Growth rate (targetData - sourceData) / sourceData, returns 0 when SourceMAUNum is 0
 * @method integer getComparisonResult() Obtain 1 Increase
2 Decrease
Returns 0 when SourceMAUNum is 0
 * @method void setComparisonResult(integer $ComparisonResult) Set 1 Increase
2 Decrease
Returns 0 when SourceMAUNum is 0
 * @method integer getSourceMAUNum() Obtain Last month's MAU data
 * @method void setSourceMAUNum(integer $SourceMAUNum) Set Last month's MAU data
 * @method integer getTargetMAUNum() Obtain This month's MAU data
 * @method void setTargetMAUNum(integer $TargetMAUNum) Set This month's MAU data
 * @method integer getFlushTime() Obtain Data timestamp
 * @method void setFlushTime(integer $FlushTime) Set Data timestamp
 */
class MAUIndicatorCard extends AbstractModel
{
    /**
     * @var string Growth rate (targetData - sourceData) / sourceData, returns 0 when SourceMAUNum is 0
     */
    public $ComparisonRatio;

    /**
     * @var integer 1 Increase
2 Decrease
Returns 0 when SourceMAUNum is 0
     */
    public $ComparisonResult;

    /**
     * @var integer Last month's MAU data
     */
    public $SourceMAUNum;

    /**
     * @var integer This month's MAU data
     */
    public $TargetMAUNum;

    /**
     * @var integer Data timestamp
     */
    public $FlushTime;

    /**
     * @param string $ComparisonRatio Growth rate (targetData - sourceData) / sourceData, returns 0 when SourceMAUNum is 0
     * @param integer $ComparisonResult 1 Increase
2 Decrease
Returns 0 when SourceMAUNum is 0
     * @param integer $SourceMAUNum Last month's MAU data
     * @param integer $TargetMAUNum This month's MAU data
     * @param integer $FlushTime Data timestamp
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
        if (array_key_exists("ComparisonRatio",$param) and $param["ComparisonRatio"] !== null) {
            $this->ComparisonRatio = $param["ComparisonRatio"];
        }

        if (array_key_exists("ComparisonResult",$param) and $param["ComparisonResult"] !== null) {
            $this->ComparisonResult = $param["ComparisonResult"];
        }

        if (array_key_exists("SourceMAUNum",$param) and $param["SourceMAUNum"] !== null) {
            $this->SourceMAUNum = $param["SourceMAUNum"];
        }

        if (array_key_exists("TargetMAUNum",$param) and $param["TargetMAUNum"] !== null) {
            $this->TargetMAUNum = $param["TargetMAUNum"];
        }

        if (array_key_exists("FlushTime",$param) and $param["FlushTime"] !== null) {
            $this->FlushTime = $param["FlushTime"];
        }
    }
}
