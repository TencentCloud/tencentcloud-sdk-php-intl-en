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
 * @method string getEraseType() Obtain 
 * @method void setEraseType(string $EraseType) Set 
 * @method MPSSmartEraseSubtitleConfig getEraseSubtitleConfig() Obtain 
 * @method void setEraseSubtitleConfig(MPSSmartEraseSubtitleConfig $EraseSubtitleConfig) Set 
 * @method MPSSmartEraseWatermarkConfig getEraseWatermarkConfig() Obtain 
 * @method void setEraseWatermarkConfig(MPSSmartEraseWatermarkConfig $EraseWatermarkConfig) Set 
 * @method MPSSmartErasePrivacyConfig getErasePrivacyConfig() Obtain 
 * @method void setErasePrivacyConfig(MPSSmartErasePrivacyConfig $ErasePrivacyConfig) Set 
 * @method integer getSubtitleEmbedId() Obtain 
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) Set 
 * @method integer getUseOriginalPos() Obtain 
 * @method void setUseOriginalPos(integer $UseOriginalPos) Set 
 * @method integer getUseOriginalSize() Obtain 
 * @method void setUseOriginalSize(integer $UseOriginalSize) Set 
 */
class MPSRawSmartEraseParameter extends AbstractModel
{
    /**
     * @var string 
     */
    public $EraseType;

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
    public $SubtitleEmbedId;

    /**
     * @var integer 
     */
    public $UseOriginalPos;

    /**
     * @var integer 
     */
    public $UseOriginalSize;

    /**
     * @param string $EraseType 
     * @param MPSSmartEraseSubtitleConfig $EraseSubtitleConfig 
     * @param MPSSmartEraseWatermarkConfig $EraseWatermarkConfig 
     * @param MPSSmartErasePrivacyConfig $ErasePrivacyConfig 
     * @param integer $SubtitleEmbedId 
     * @param integer $UseOriginalPos 
     * @param integer $UseOriginalSize 
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
        if (array_key_exists("EraseType",$param) and $param["EraseType"] !== null) {
            $this->EraseType = $param["EraseType"];
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

        if (array_key_exists("SubtitleEmbedId",$param) and $param["SubtitleEmbedId"] !== null) {
            $this->SubtitleEmbedId = $param["SubtitleEmbedId"];
        }

        if (array_key_exists("UseOriginalPos",$param) and $param["UseOriginalPos"] !== null) {
            $this->UseOriginalPos = $param["UseOriginalPos"];
        }

        if (array_key_exists("UseOriginalSize",$param) and $param["UseOriginalSize"] !== null) {
            $this->UseOriginalSize = $param["UseOriginalSize"];
        }
    }
}
