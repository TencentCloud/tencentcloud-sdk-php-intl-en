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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getInputTokens() Obtain 
 * @method void setInputTokens(integer $InputTokens) Set 
 * @method integer getThoughtTokens() Obtain 
 * @method void setThoughtTokens(integer $ThoughtTokens) Set 
 * @method integer getInputImageCount() Obtain 
 * @method void setInputImageCount(integer $InputImageCount) Set 
 * @method integer getInputSeconds() Obtain 
 * @method void setInputSeconds(integer $InputSeconds) Set 
 * @method integer getOutputSeconds() Obtain 
 * @method void setOutputSeconds(integer $OutputSeconds) Set 
 * @method integer getTotalSeconds() Obtain 
 * @method void setTotalSeconds(integer $TotalSeconds) Set 
 */
class AigcVideoTaskUsage extends AbstractModel
{
    /**
     * @var integer 
     */
    public $InputTokens;

    /**
     * @var integer 
     */
    public $ThoughtTokens;

    /**
     * @var integer 
     */
    public $InputImageCount;

    /**
     * @var integer 
     */
    public $InputSeconds;

    /**
     * @var integer 
     */
    public $OutputSeconds;

    /**
     * @var integer 
     */
    public $TotalSeconds;

    /**
     * @param integer $InputTokens 
     * @param integer $ThoughtTokens 
     * @param integer $InputImageCount 
     * @param integer $InputSeconds 
     * @param integer $OutputSeconds 
     * @param integer $TotalSeconds 
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
        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("ThoughtTokens",$param) and $param["ThoughtTokens"] !== null) {
            $this->ThoughtTokens = $param["ThoughtTokens"];
        }

        if (array_key_exists("InputImageCount",$param) and $param["InputImageCount"] !== null) {
            $this->InputImageCount = $param["InputImageCount"];
        }

        if (array_key_exists("InputSeconds",$param) and $param["InputSeconds"] !== null) {
            $this->InputSeconds = $param["InputSeconds"];
        }

        if (array_key_exists("OutputSeconds",$param) and $param["OutputSeconds"] !== null) {
            $this->OutputSeconds = $param["OutputSeconds"];
        }

        if (array_key_exists("TotalSeconds",$param) and $param["TotalSeconds"] !== null) {
            $this->TotalSeconds = $param["TotalSeconds"];
        }
    }
}
