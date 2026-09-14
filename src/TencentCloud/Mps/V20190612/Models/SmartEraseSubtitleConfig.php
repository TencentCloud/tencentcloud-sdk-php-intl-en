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
 * 
 *
 * @method string getSubtitleEraseMethod() Obtain 
 * @method void setSubtitleEraseMethod(string $SubtitleEraseMethod) Set 
 * @method string getSubtitleModel() Obtain 
 * @method void setSubtitleModel(string $SubtitleModel) Set 
 * @method string getOcrSwitch() Obtain 
 * @method void setOcrSwitch(string $OcrSwitch) Set 
 * @method string getSubtitleLang() Obtain 
 * @method void setSubtitleLang(string $SubtitleLang) Set 
 * @method string getSubtitleFormat() Obtain 
 * @method void setSubtitleFormat(string $SubtitleFormat) Set 
 * @method string getTransSwitch() Obtain 
 * @method void setTransSwitch(string $TransSwitch) Set 
 * @method string getTransDstLang() Obtain 
 * @method void setTransDstLang(string $TransDstLang) Set 
 * @method array getAutoAreas() Obtain 
 * @method void setAutoAreas(array $AutoAreas) Set 
 * @method array getCustomAreas() Obtain 
 * @method void setCustomAreas(array $CustomAreas) Set 
 * @method integer getSubtitleEmbedId() Obtain 
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) Set 
 * @method integer getUseOriginalPos() Obtain 
 * @method void setUseOriginalPos(integer $UseOriginalPos) Set 
 * @method integer getUseOriginalSize() Obtain 
 * @method void setUseOriginalSize(integer $UseOriginalSize) Set 
 */
class SmartEraseSubtitleConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $SubtitleEraseMethod;

    /**
     * @var string 
     */
    public $SubtitleModel;

    /**
     * @var string 
     */
    public $OcrSwitch;

    /**
     * @var string 
     */
    public $SubtitleLang;

    /**
     * @var string 
     */
    public $SubtitleFormat;

    /**
     * @var string 
     */
    public $TransSwitch;

    /**
     * @var string 
     */
    public $TransDstLang;

    /**
     * @var array 
     */
    public $AutoAreas;

    /**
     * @var array 
     */
    public $CustomAreas;

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
     * @param string $SubtitleEraseMethod 
     * @param string $SubtitleModel 
     * @param string $OcrSwitch 
     * @param string $SubtitleLang 
     * @param string $SubtitleFormat 
     * @param string $TransSwitch 
     * @param string $TransDstLang 
     * @param array $AutoAreas 
     * @param array $CustomAreas 
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
        if (array_key_exists("SubtitleEraseMethod",$param) and $param["SubtitleEraseMethod"] !== null) {
            $this->SubtitleEraseMethod = $param["SubtitleEraseMethod"];
        }

        if (array_key_exists("SubtitleModel",$param) and $param["SubtitleModel"] !== null) {
            $this->SubtitleModel = $param["SubtitleModel"];
        }

        if (array_key_exists("OcrSwitch",$param) and $param["OcrSwitch"] !== null) {
            $this->OcrSwitch = $param["OcrSwitch"];
        }

        if (array_key_exists("SubtitleLang",$param) and $param["SubtitleLang"] !== null) {
            $this->SubtitleLang = $param["SubtitleLang"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }

        if (array_key_exists("TransSwitch",$param) and $param["TransSwitch"] !== null) {
            $this->TransSwitch = $param["TransSwitch"];
        }

        if (array_key_exists("TransDstLang",$param) and $param["TransDstLang"] !== null) {
            $this->TransDstLang = $param["TransDstLang"];
        }

        if (array_key_exists("AutoAreas",$param) and $param["AutoAreas"] !== null) {
            $this->AutoAreas = [];
            foreach ($param["AutoAreas"] as $key => $value){
                $obj = new EraseArea();
                $obj->deserialize($value);
                array_push($this->AutoAreas, $obj);
            }
        }

        if (array_key_exists("CustomAreas",$param) and $param["CustomAreas"] !== null) {
            $this->CustomAreas = [];
            foreach ($param["CustomAreas"] as $key => $value){
                $obj = new EraseTimeArea();
                $obj->deserialize($value);
                array_push($this->CustomAreas, $obj);
            }
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
