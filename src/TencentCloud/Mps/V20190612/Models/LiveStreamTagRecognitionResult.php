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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getId() Obtain 
 * @method void setId(string $Id) Set 
 * @method float getStartPtsTime() Obtain 
 * @method void setStartPtsTime(float $StartPtsTime) Set 
 * @method float getEndPtsTime() Obtain 
 * @method void setEndPtsTime(float $EndPtsTime) Set 
 * @method float getConfidence() Obtain 
 * @method void setConfidence(float $Confidence) Set 
 */
class LiveStreamTagRecognitionResult extends AbstractModel
{
    /**
     * @var string 
     */
    public $Id;

    /**
     * @var float 
     */
    public $StartPtsTime;

    /**
     * @var float 
     */
    public $EndPtsTime;

    /**
     * @var float 
     */
    public $Confidence;

    /**
     * @param string $Id 
     * @param float $StartPtsTime 
     * @param float $EndPtsTime 
     * @param float $Confidence 
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartPtsTime",$param) and $param["StartPtsTime"] !== null) {
            $this->StartPtsTime = $param["StartPtsTime"];
        }

        if (array_key_exists("EndPtsTime",$param) and $param["EndPtsTime"] !== null) {
            $this->EndPtsTime = $param["EndPtsTime"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
