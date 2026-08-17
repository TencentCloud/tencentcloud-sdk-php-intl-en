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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent cover information
 *
 * @method string getCoverPath() Obtain Intelligent cover storage path.
 * @method void setCoverPath(string $CoverPath) Set Intelligent cover storage path.
 * @method float getConfidence() Obtain Reliability of the intelligent cover, with a value range from 0 to -100.
 * @method void setConfidence(float $Confidence) Set Reliability of the intelligent cover, with a value range from 0 to -100.
 */
class MediaAiAnalysisCoverItem extends AbstractModel
{
    /**
     * @var string Intelligent cover storage path.
     */
    public $CoverPath;

    /**
     * @var float Reliability of the intelligent cover, with a value range from 0 to -100.
     */
    public $Confidence;

    /**
     * @param string $CoverPath Intelligent cover storage path.
     * @param float $Confidence Reliability of the intelligent cover, with a value range from 0 to -100.
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
        if (array_key_exists("CoverPath",$param) and $param["CoverPath"] !== null) {
            $this->CoverPath = $param["CoverPath"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
