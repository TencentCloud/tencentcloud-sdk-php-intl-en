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
 * DescribeTranscodeTemplates request structure.
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method array getDefinitions() Obtain 
 * @method void setDefinitions(array $Definitions) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getContainerType() Obtain 
 * @method void setContainerType(string $ContainerType) Set 
 * @method string getTEHDType() Obtain 
 * @method void setTEHDType(string $TEHDType) Set 
 * @method integer getOffset() Obtain 
 * @method void setOffset(integer $Offset) Set 
 * @method integer getLimit() Obtain 
 * @method void setLimit(integer $Limit) Set 
 * @method string getEnhanceType() Obtain 
 * @method void setEnhanceType(string $EnhanceType) Set 
 * @method string getEnhanceScenarioType() Obtain 
 * @method void setEnhanceScenarioType(string $EnhanceScenarioType) Set 
 */
class DescribeTranscodeTemplatesRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var array 
     */
    public $Definitions;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $ContainerType;

    /**
     * @var string 
     */
    public $TEHDType;

    /**
     * @var integer 
     */
    public $Offset;

    /**
     * @var integer 
     */
    public $Limit;

    /**
     * @var string 
     */
    public $EnhanceType;

    /**
     * @var string 
     */
    public $EnhanceScenarioType;

    /**
     * @param integer $SubAppId 
     * @param array $Definitions 
     * @param string $Type 
     * @param string $ContainerType 
     * @param string $TEHDType 
     * @param integer $Offset 
     * @param integer $Limit 
     * @param string $EnhanceType 
     * @param string $EnhanceScenarioType 
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Definitions",$param) and $param["Definitions"] !== null) {
            $this->Definitions = $param["Definitions"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ContainerType",$param) and $param["ContainerType"] !== null) {
            $this->ContainerType = $param["ContainerType"];
        }

        if (array_key_exists("TEHDType",$param) and $param["TEHDType"] !== null) {
            $this->TEHDType = $param["TEHDType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("EnhanceType",$param) and $param["EnhanceType"] !== null) {
            $this->EnhanceType = $param["EnhanceType"];
        }

        if (array_key_exists("EnhanceScenarioType",$param) and $param["EnhanceScenarioType"] !== null) {
            $this->EnhanceScenarioType = $param["EnhanceScenarioType"];
        }
    }
}
