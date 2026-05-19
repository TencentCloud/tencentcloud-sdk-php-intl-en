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
 * Output message of the AIGC sound effect task.
 *
 * @method array getAudioInfos() Obtain <p>Output audio content</p>
 * @method void setAudioInfos(array $AudioInfos) Set <p>Output audio content</p>
 * @method array getVideoInfos() Obtain <p>Output video information.</p>
 * @method void setVideoInfos(array $VideoInfos) Set <p>Output video information.</p>
 */
class AigcAudioTaskOutput extends AbstractModel
{
    /**
     * @var array <p>Output audio content</p>
     */
    public $AudioInfos;

    /**
     * @var array <p>Output video information.</p>
     */
    public $VideoInfos;

    /**
     * @param array $AudioInfos <p>Output audio content</p>
     * @param array $VideoInfos <p>Output video information.</p>
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
        if (array_key_exists("AudioInfos",$param) and $param["AudioInfos"] !== null) {
            $this->AudioInfos = [];
            foreach ($param["AudioInfos"] as $key => $value){
                $obj = new AigcAudioTaskOutputFileInfo();
                $obj->deserialize($value);
                array_push($this->AudioInfos, $obj);
            }
        }

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new AigcAudioTaskOutputFileInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
            }
        }
    }
}
