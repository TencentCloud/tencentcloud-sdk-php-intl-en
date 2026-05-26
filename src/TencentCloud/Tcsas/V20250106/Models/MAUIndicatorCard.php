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
 * MAU metric comparison response data.
 *
 * @method string getComparisonRatio() Obtain Growth rate, calculated as (targetData - sourceData) / sourceData. Returns 0 when SourceMAUNum is 0.
 * @method void setComparisonRatio(string $ComparisonRatio) Set Growth rate, calculated as (targetData - sourceData) / sourceData. Returns 0 when SourceMAUNum is 0.
 * @method integer getComparisonResult() Obtain Comparison result. Valid values: 1: Increase; 2: Decrease. Returns 0 when SourceMAUNum is 0.
 * @method void setComparisonResult(integer $ComparisonResult) Set Comparison result. Valid values: 1: Increase; 2: Decrease. Returns 0 when SourceMAUNum is 0.
 * @method integer getSourceMAUNum() Obtain Previous month MAU. 
 * @method void setSourceMAUNum(integer $SourceMAUNum) Set Previous month MAU. 
 * @method integer getTargetMAUNum() Obtain Current month MAU.
 * @method void setTargetMAUNum(integer $TargetMAUNum) Set Current month MAU.
 * @method integer getFlushTime() Obtain Data timestamp.
 * @method void setFlushTime(integer $FlushTime) Set Data timestamp.
 */
class MAUIndicatorCard extends AbstractModel
{
    /**
     * @var string Growth rate, calculated as (targetData - sourceData) / sourceData. Returns 0 when SourceMAUNum is 0.
     */
    public $ComparisonRatio;

    /**
     * @var integer Comparison result. Valid values: 1: Increase; 2: Decrease. Returns 0 when SourceMAUNum is 0.
     */
    public $ComparisonResult;

    /**
     * @var integer Previous month MAU. 
     */
    public $SourceMAUNum;

    /**
     * @var integer Current month MAU.
     */
    public $TargetMAUNum;

    /**
     * @var integer Data timestamp.
     */
    public $FlushTime;

    /**
     * @param string $ComparisonRatio Growth rate, calculated as (targetData - sourceData) / sourceData. Returns 0 when SourceMAUNum is 0.
     * @param integer $ComparisonResult Comparison result. Valid values: 1: Increase; 2: Decrease. Returns 0 when SourceMAUNum is 0.
     * @param integer $SourceMAUNum Previous month MAU. 
     * @param integer $TargetMAUNum Current month MAU.
     * @param integer $FlushTime Data timestamp.
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
