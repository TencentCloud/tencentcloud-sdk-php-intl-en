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
 * @method string getPackage() Obtain 
 * @method void setPackage(string $Package) Set 
 * @method string getDrmType() Obtain 
 * @method void setDrmType(string $DrmType) Set 
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 * @method integer getSize() Obtain 
 * @method void setSize(integer $Size) Set 
 * @method string getDigitalWatermarkType() Obtain 
 * @method void setDigitalWatermarkType(string $DigitalWatermarkType) Set 
 * @method array getSubStreamSet() Obtain 
 * @method void setSubStreamSet(array $SubStreamSet) Set 
 * @method string getCopyRightWatermarkText() Obtain 
 * @method void setCopyRightWatermarkText(string $CopyRightWatermarkText) Set 
 * @method integer getBlindWatermarkDefinition() Obtain 
 * @method void setBlindWatermarkDefinition(integer $BlindWatermarkDefinition) Set 
 * @method array getSubtitleSet() Obtain 
 * @method void setSubtitleSet(array $SubtitleSet) Set 
 * @method string getDefaultSubtitleId() Obtain 
 * @method void setDefaultSubtitleId(string $DefaultSubtitleId) Set 
 * @method string getDrmEncryptType() Obtain 
 * @method void setDrmEncryptType(string $DrmEncryptType) Set 
 */
class AdaptiveDynamicStreamingInfoItem extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var string 
     */
    public $Package;

    /**
     * @var string 
     */
    public $DrmType;

    /**
     * @var string 
     */
    public $Url;

    /**
     * @var integer 
     */
    public $Size;

    /**
     * @var string 
     */
    public $DigitalWatermarkType;

    /**
     * @var array 
     */
    public $SubStreamSet;

    /**
     * @var string 
     */
    public $CopyRightWatermarkText;

    /**
     * @var integer 
     */
    public $BlindWatermarkDefinition;

    /**
     * @var array 
     */
    public $SubtitleSet;

    /**
     * @var string 
     */
    public $DefaultSubtitleId;

    /**
     * @var string 
     */
    public $DrmEncryptType;

    /**
     * @param integer $Definition 
     * @param string $Package 
     * @param string $DrmType 
     * @param string $Url 
     * @param integer $Size 
     * @param string $DigitalWatermarkType 
     * @param array $SubStreamSet 
     * @param string $CopyRightWatermarkText 
     * @param integer $BlindWatermarkDefinition 
     * @param array $SubtitleSet 
     * @param string $DefaultSubtitleId 
     * @param string $DrmEncryptType 
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

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = $param["Package"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("DigitalWatermarkType",$param) and $param["DigitalWatermarkType"] !== null) {
            $this->DigitalWatermarkType = $param["DigitalWatermarkType"];
        }

        if (array_key_exists("SubStreamSet",$param) and $param["SubStreamSet"] !== null) {
            $this->SubStreamSet = [];
            foreach ($param["SubStreamSet"] as $key => $value){
                $obj = new MediaSubStreamInfoItem();
                $obj->deserialize($value);
                array_push($this->SubStreamSet, $obj);
            }
        }

        if (array_key_exists("CopyRightWatermarkText",$param) and $param["CopyRightWatermarkText"] !== null) {
            $this->CopyRightWatermarkText = $param["CopyRightWatermarkText"];
        }

        if (array_key_exists("BlindWatermarkDefinition",$param) and $param["BlindWatermarkDefinition"] !== null) {
            $this->BlindWatermarkDefinition = $param["BlindWatermarkDefinition"];
        }

        if (array_key_exists("SubtitleSet",$param) and $param["SubtitleSet"] !== null) {
            $this->SubtitleSet = [];
            foreach ($param["SubtitleSet"] as $key => $value){
                $obj = new MediaSubtitleItem();
                $obj->deserialize($value);
                array_push($this->SubtitleSet, $obj);
            }
        }

        if (array_key_exists("DefaultSubtitleId",$param) and $param["DefaultSubtitleId"] !== null) {
            $this->DefaultSubtitleId = $param["DefaultSubtitleId"];
        }

        if (array_key_exists("DrmEncryptType",$param) and $param["DrmEncryptType"] !== null) {
            $this->DrmEncryptType = $param["DrmEncryptType"];
        }
    }
}
