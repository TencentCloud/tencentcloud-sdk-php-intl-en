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
 * @method string getSwitch() Obtain 
 * @method void setSwitch(string $Switch) Set 
 * @method string getSrcLanguage() Obtain 
 * @method void setSrcLanguage(string $SrcLanguage) Set 
 * @method string getDstLanguage() Obtain 
 * @method void setDstLanguage(string $DstLanguage) Set 
 * @method array getSubtitleFormats() Obtain 
 * @method void setSubtitleFormats(array $SubtitleFormats) Set 
 * @method string getSubtitleName() Obtain 
 * @method void setSubtitleName(string $SubtitleName) Set 
 */
class AsrTranslateConfigureInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Switch;

    /**
     * @var string 
     */
    public $SrcLanguage;

    /**
     * @var string 
     */
    public $DstLanguage;

    /**
     * @var array 
     */
    public $SubtitleFormats;

    /**
     * @var string 
     */
    public $SubtitleName;

    /**
     * @param string $Switch 
     * @param string $SrcLanguage 
     * @param string $DstLanguage 
     * @param array $SubtitleFormats 
     * @param string $SubtitleName 
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("SrcLanguage",$param) and $param["SrcLanguage"] !== null) {
            $this->SrcLanguage = $param["SrcLanguage"];
        }

        if (array_key_exists("DstLanguage",$param) and $param["DstLanguage"] !== null) {
            $this->DstLanguage = $param["DstLanguage"];
        }

        if (array_key_exists("SubtitleFormats",$param) and $param["SubtitleFormats"] !== null) {
            $this->SubtitleFormats = $param["SubtitleFormats"];
        }

        if (array_key_exists("SubtitleName",$param) and $param["SubtitleName"] !== null) {
            $this->SubtitleName = $param["SubtitleName"];
        }
    }
}
