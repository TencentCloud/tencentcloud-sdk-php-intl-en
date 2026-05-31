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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getAudioSelection() Obtain 
 * @method void setAudioSelection(string $AudioSelection) Set 
 * @method SourceLayout getLiveSourceLayout() Obtain 
 * @method void setLiveSourceLayout(SourceLayout $LiveSourceLayout) Set 
 * @method SourceLayout getAdSourceLayout() Obtain 
 * @method void setAdSourceLayout(SourceLayout $AdSourceLayout) Set 
 * @method string getBackgroundImgUrl() Obtain 
 * @method void setBackgroundImgUrl(string $BackgroundImgUrl) Set 
 * @method string getAdSourceUrl() Obtain 
 * @method void setAdSourceUrl(string $AdSourceUrl) Set 
 */
class PipSetting extends AbstractModel
{
    /**
     * @var string 
     */
    public $AudioSelection;

    /**
     * @var SourceLayout 
     */
    public $LiveSourceLayout;

    /**
     * @var SourceLayout 
     */
    public $AdSourceLayout;

    /**
     * @var string 
     */
    public $BackgroundImgUrl;

    /**
     * @var string 
     */
    public $AdSourceUrl;

    /**
     * @param string $AudioSelection 
     * @param SourceLayout $LiveSourceLayout 
     * @param SourceLayout $AdSourceLayout 
     * @param string $BackgroundImgUrl 
     * @param string $AdSourceUrl 
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
        if (array_key_exists("AudioSelection",$param) and $param["AudioSelection"] !== null) {
            $this->AudioSelection = $param["AudioSelection"];
        }

        if (array_key_exists("LiveSourceLayout",$param) and $param["LiveSourceLayout"] !== null) {
            $this->LiveSourceLayout = new SourceLayout();
            $this->LiveSourceLayout->deserialize($param["LiveSourceLayout"]);
        }

        if (array_key_exists("AdSourceLayout",$param) and $param["AdSourceLayout"] !== null) {
            $this->AdSourceLayout = new SourceLayout();
            $this->AdSourceLayout->deserialize($param["AdSourceLayout"]);
        }

        if (array_key_exists("BackgroundImgUrl",$param) and $param["BackgroundImgUrl"] !== null) {
            $this->BackgroundImgUrl = $param["BackgroundImgUrl"];
        }

        if (array_key_exists("AdSourceUrl",$param) and $param["AdSourceUrl"] !== null) {
            $this->AdSourceUrl = $param["AdSourceUrl"];
        }
    }
}
