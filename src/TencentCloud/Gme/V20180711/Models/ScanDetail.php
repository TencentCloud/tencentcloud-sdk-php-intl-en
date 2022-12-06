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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Voice detection details
 *
 * @method string getLabel() Obtain Violation scenario. For more information, please see the definition of <a href="https://intl.cloud.tencent.com/document/product/607/37622?from_cn_redirect=1#Label_Value">Label</a>.
 * @method void setLabel(string $Label) Set Violation scenario. For more information, please see the definition of <a href="https://intl.cloud.tencent.com/document/product/607/37622?from_cn_redirect=1#Label_Value">Label</a>.
 * @method string getRate() Obtain Confidence score in scenario. Value range: [0.00,100.00]. The higher the score, the more likely the content is non-compliant.
 * @method void setRate(string $Rate) Set Confidence score in scenario. Value range: [0.00,100.00]. The higher the score, the more likely the content is non-compliant.
 * @method string getKeyWord() Obtain Non-compliant keyword
 * @method void setKeyWord(string $KeyWord) Set Non-compliant keyword
 * @method integer getStartTime() Obtain Start time offset of keyword from 0 in audio (in milliseconds)
 * @method void setStartTime(integer $StartTime) Set Start time offset of keyword from 0 in audio (in milliseconds)
 * @method integer getEndTime() Obtain End time offset of keyword from 0 in audio (in milliseconds)
 * @method void setEndTime(integer $EndTime) Set End time offset of keyword from 0 in audio (in milliseconds)
 */
class ScanDetail extends AbstractModel
{
    /**
     * @var string Violation scenario. For more information, please see the definition of <a href="https://intl.cloud.tencent.com/document/product/607/37622?from_cn_redirect=1#Label_Value">Label</a>.
     */
    public $Label;

    /**
     * @var string Confidence score in scenario. Value range: [0.00,100.00]. The higher the score, the more likely the content is non-compliant.
     */
    public $Rate;

    /**
     * @var string Non-compliant keyword
     */
    public $KeyWord;

    /**
     * @var integer Start time offset of keyword from 0 in audio (in milliseconds)
     */
    public $StartTime;

    /**
     * @var integer End time offset of keyword from 0 in audio (in milliseconds)
     */
    public $EndTime;

    /**
     * @param string $Label Violation scenario. For more information, please see the definition of <a href="https://intl.cloud.tencent.com/document/product/607/37622?from_cn_redirect=1#Label_Value">Label</a>.
     * @param string $Rate Confidence score in scenario. Value range: [0.00,100.00]. The higher the score, the more likely the content is non-compliant.
     * @param string $KeyWord Non-compliant keyword
     * @param integer $StartTime Start time offset of keyword from 0 in audio (in milliseconds)
     * @param integer $EndTime End time offset of keyword from 0 in audio (in milliseconds)
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
