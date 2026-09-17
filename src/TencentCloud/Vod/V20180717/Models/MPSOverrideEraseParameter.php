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
 * @method MPSUpdateSmartEraseSubtitleConfig getEraseSubtitleConfig() Obtain 
 * @method void setEraseSubtitleConfig(MPSUpdateSmartEraseSubtitleConfig $EraseSubtitleConfig) Set 
 * @method MPSUpdateSmartEraseWatermarkConfig getEraseWatermarkConfig() Obtain 
 * @method void setEraseWatermarkConfig(MPSUpdateSmartEraseWatermarkConfig $EraseWatermarkConfig) Set 
 * @method MPSSmartErasePrivacyConfig getErasePrivacyConfig() Obtain 
 * @method void setErasePrivacyConfig(MPSSmartErasePrivacyConfig $ErasePrivacyConfig) Set 
 * @method integer getSubtitleEmbedId() Obtain 
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) Set 
 */
class MPSOverrideEraseParameter extends AbstractModel
{
    /**
     * @var string 
     */
    public $EraseType;

    /**
     * @var MPSUpdateSmartEraseSubtitleConfig 
     */
    public $EraseSubtitleConfig;

    /**
     * @var MPSUpdateSmartEraseWatermarkConfig 
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
     * @param string $EraseType 
     * @param MPSUpdateSmartEraseSubtitleConfig $EraseSubtitleConfig 
     * @param MPSUpdateSmartEraseWatermarkConfig $EraseWatermarkConfig 
     * @param MPSSmartErasePrivacyConfig $ErasePrivacyConfig 
     * @param integer $SubtitleEmbedId 
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
            $this->EraseSubtitleConfig = new MPSUpdateSmartEraseSubtitleConfig();
            $this->EraseSubtitleConfig->deserialize($param["EraseSubtitleConfig"]);
        }

        if (array_key_exists("EraseWatermarkConfig",$param) and $param["EraseWatermarkConfig"] !== null) {
            $this->EraseWatermarkConfig = new MPSUpdateSmartEraseWatermarkConfig();
            $this->EraseWatermarkConfig->deserialize($param["EraseWatermarkConfig"]);
        }

        if (array_key_exists("ErasePrivacyConfig",$param) and $param["ErasePrivacyConfig"] !== null) {
            $this->ErasePrivacyConfig = new MPSSmartErasePrivacyConfig();
            $this->ErasePrivacyConfig->deserialize($param["ErasePrivacyConfig"]);
        }

        if (array_key_exists("SubtitleEmbedId",$param) and $param["SubtitleEmbedId"] !== null) {
            $this->SubtitleEmbedId = $param["SubtitleEmbedId"];
        }
    }
}
