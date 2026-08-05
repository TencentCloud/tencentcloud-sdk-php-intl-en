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
 * AI‑generated comic input
 *
 * @method string getScript() Obtain <p>AI comic playbook.</p><p>Parameter format: None</p><p>Input parameter limitation: None</p>
 * @method void setScript(string $Script) Set <p>AI comic playbook.</p><p>Parameter format: None</p><p>Input parameter limitation: None</p>
 * @method string getStyle() Obtain <p>AI comic style</p><p>Enumeration values: </p><ul><li>chinese_ink_wash: Chinese ink‑wash</li><li>fantasy_cyberpunk: fantasy cyberpunk</li><li>japanese_anime_2d: Japanese anime 2D</li></ul><p>Default value: chinese_ink_wash</p><p>Enumeration values: </p><ul><li>realistic_live_action: realistic live action</li><li>chinese_ink_wash: Chinese ink-wash</li><li>fantasy_cyberpunk: fantasy cyberpunk</li><li>japanese_anime_2d: Japanese anime 2D</li></ul><p>Default value: chinese_ink_wash</p>
 * @method void setStyle(string $Style) Set <p>AI comic style</p><p>Enumeration values: </p><ul><li>chinese_ink_wash: Chinese ink‑wash</li><li>fantasy_cyberpunk: fantasy cyberpunk</li><li>japanese_anime_2d: Japanese anime 2D</li></ul><p>Default value: chinese_ink_wash</p><p>Enumeration values: </p><ul><li>realistic_live_action: realistic live action</li><li>chinese_ink_wash: Chinese ink-wash</li><li>fantasy_cyberpunk: fantasy cyberpunk</li><li>japanese_anime_2d: Japanese anime 2D</li></ul><p>Default value: chinese_ink_wash</p>
 * @method string getRatio() Obtain <p>Aspect ratio</p><p>Enumeration values: </p><ul><li>16:9: 16:9</li><li>9:16: 9:16</li></ul><p>Default value: 16:9</p>
 * @method void setRatio(string $Ratio) Set <p>Aspect ratio</p><p>Enumeration values: </p><ul><li>16:9: 16:9</li><li>9:16: 9:16</li></ul><p>Default value: 16:9</p>
 * @method string getResolution() Obtain <p>Output video resolution</p><p>Enumeration values: </p><ul><li>720p: 720p</li><li>1080p: 1080p</li></ul><p>Default value: 720p</p>
 * @method void setResolution(string $Resolution) Set <p>Output video resolution</p><p>Enumeration values: </p><ul><li>720p: 720p</li><li>1080p: 1080p</li></ul><p>Default value: 720p</p>
 */
class AiDramaInput extends AbstractModel
{
    /**
     * @var string <p>AI comic playbook.</p><p>Parameter format: None</p><p>Input parameter limitation: None</p>
     */
    public $Script;

    /**
     * @var string <p>AI comic style</p><p>Enumeration values: </p><ul><li>chinese_ink_wash: Chinese ink‑wash</li><li>fantasy_cyberpunk: fantasy cyberpunk</li><li>japanese_anime_2d: Japanese anime 2D</li></ul><p>Default value: chinese_ink_wash</p><p>Enumeration values: </p><ul><li>realistic_live_action: realistic live action</li><li>chinese_ink_wash: Chinese ink-wash</li><li>fantasy_cyberpunk: fantasy cyberpunk</li><li>japanese_anime_2d: Japanese anime 2D</li></ul><p>Default value: chinese_ink_wash</p>
     */
    public $Style;

    /**
     * @var string <p>Aspect ratio</p><p>Enumeration values: </p><ul><li>16:9: 16:9</li><li>9:16: 9:16</li></ul><p>Default value: 16:9</p>
     */
    public $Ratio;

    /**
     * @var string <p>Output video resolution</p><p>Enumeration values: </p><ul><li>720p: 720p</li><li>1080p: 1080p</li></ul><p>Default value: 720p</p>
     */
    public $Resolution;

    /**
     * @param string $Script <p>AI comic playbook.</p><p>Parameter format: None</p><p>Input parameter limitation: None</p>
     * @param string $Style <p>AI comic style</p><p>Enumeration values: </p><ul><li>chinese_ink_wash: Chinese ink‑wash</li><li>fantasy_cyberpunk: fantasy cyberpunk</li><li>japanese_anime_2d: Japanese anime 2D</li></ul><p>Default value: chinese_ink_wash</p><p>Enumeration values: </p><ul><li>realistic_live_action: realistic live action</li><li>chinese_ink_wash: Chinese ink-wash</li><li>fantasy_cyberpunk: fantasy cyberpunk</li><li>japanese_anime_2d: Japanese anime 2D</li></ul><p>Default value: chinese_ink_wash</p>
     * @param string $Ratio <p>Aspect ratio</p><p>Enumeration values: </p><ul><li>16:9: 16:9</li><li>9:16: 9:16</li></ul><p>Default value: 16:9</p>
     * @param string $Resolution <p>Output video resolution</p><p>Enumeration values: </p><ul><li>720p: 720p</li><li>1080p: 1080p</li></ul><p>Default value: 720p</p>
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
        if (array_key_exists("Script",$param) and $param["Script"] !== null) {
            $this->Script = $param["Script"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
