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
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getEraseType() Obtain 
 * @method void setEraseType(string $EraseType) Set 
 * @method string getComment() Obtain 
 * @method void setComment(string $Comment) Set 
 * @method MPSSmartEraseSubtitleConfig getEraseSubtitleConfig() Obtain 
 * @method void setEraseSubtitleConfig(MPSSmartEraseSubtitleConfig $EraseSubtitleConfig) Set 
 * @method MPSSmartEraseWatermarkConfig getEraseWatermarkConfig() Obtain 
 * @method void setEraseWatermarkConfig(MPSSmartEraseWatermarkConfig $EraseWatermarkConfig) Set 
 * @method MPSSmartErasePrivacyConfig getErasePrivacyConfig() Obtain 
 * @method void setErasePrivacyConfig(MPSSmartErasePrivacyConfig $ErasePrivacyConfig) Set 
 * @method integer getSampleWidth() Obtain 
 * @method void setSampleWidth(integer $SampleWidth) Set 
 * @method integer getSampleHeight() Obtain 
 * @method void setSampleHeight(integer $SampleHeight) Set 
 */
class MPSSmartEraseTemplateForUpdate extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $EraseType;

    /**
     * @var string 
     */
    public $Comment;

    /**
     * @var MPSSmartEraseSubtitleConfig 
     */
    public $EraseSubtitleConfig;

    /**
     * @var MPSSmartEraseWatermarkConfig 
     */
    public $EraseWatermarkConfig;

    /**
     * @var MPSSmartErasePrivacyConfig 
     */
    public $ErasePrivacyConfig;

    /**
     * @var integer 
     */
    public $SampleWidth;

    /**
     * @var integer 
     */
    public $SampleHeight;

    /**
     * @param integer $Definition 
     * @param string $Name 
     * @param string $EraseType 
     * @param string $Comment 
     * @param MPSSmartEraseSubtitleConfig $EraseSubtitleConfig 
     * @param MPSSmartEraseWatermarkConfig $EraseWatermarkConfig 
     * @param MPSSmartErasePrivacyConfig $ErasePrivacyConfig 
     * @param integer $SampleWidth 
     * @param integer $SampleHeight 
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EraseType",$param) and $param["EraseType"] !== null) {
            $this->EraseType = $param["EraseType"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("EraseSubtitleConfig",$param) and $param["EraseSubtitleConfig"] !== null) {
            $this->EraseSubtitleConfig = new MPSSmartEraseSubtitleConfig();
            $this->EraseSubtitleConfig->deserialize($param["EraseSubtitleConfig"]);
        }

        if (array_key_exists("EraseWatermarkConfig",$param) and $param["EraseWatermarkConfig"] !== null) {
            $this->EraseWatermarkConfig = new MPSSmartEraseWatermarkConfig();
            $this->EraseWatermarkConfig->deserialize($param["EraseWatermarkConfig"]);
        }

        if (array_key_exists("ErasePrivacyConfig",$param) and $param["ErasePrivacyConfig"] !== null) {
            $this->ErasePrivacyConfig = new MPSSmartErasePrivacyConfig();
            $this->ErasePrivacyConfig->deserialize($param["ErasePrivacyConfig"]);
        }

        if (array_key_exists("SampleWidth",$param) and $param["SampleWidth"] !== null) {
            $this->SampleWidth = $param["SampleWidth"];
        }

        if (array_key_exists("SampleHeight",$param) and $param["SampleHeight"] !== null) {
            $this->SampleHeight = $param["SampleHeight"];
        }
    }
}
