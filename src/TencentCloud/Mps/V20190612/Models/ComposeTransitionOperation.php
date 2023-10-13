<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * The transition information of a video editing/compositing task.
 *
 * @method string getType() Obtain The transition type.

The image transition, which connects two video segments.
<li>`ImageFadeInFadeOut` </li>
u200c<li>`BowTieHorizontal` </li>
u200c<li>`BowTieVertical` </li>
u200c<li>`ButterflyWaveScrawler` </li>
<li>`Cannabisleaf` </li>
<li>`Circle` </li>
<li>`CircleCrop` </li>
u200c<li>`Circleopen` </li>
<li>`Crosswarp` </li>
<li>`Cube` </li>
<li>`DoomScreenTransition` </li>
<li>`Doorway` </li>
<li>`Dreamy` </li>
<li>`DreamyZoom` </li>
<li>`FilmBurn` </li>
<li>`GlitchMemories` </li>
<li>`Heart` </li>
<li>`InvertedPageCurl` </li>
<li>`Luma` </li>
<li>`Mosaic` </li>
<li>`Pinwheel` </li>
<li>`PolarFunction` </li>
<li>`PolkaDotsCurtain` </li>
<li>`Radial` </li>
<li>`RotateScaleFade` </li>
<li>`Squeeze` </li>
<li>`Swap` </li>
<li>`Swirl` </li>
<li>`UndulatingBurnOutSwirl` </li>
<li>`Windowblinds` </li>
<li>`WipeDown` </li>
<li>`WipeLeft` </li>
<li>`WipeRight` </li>
<li>`WipeUp` </li>
<li>`ZoomInCircles` </li> 
The audio transition, which connects two audio segments.
<li>`AudioFadeInFadeOut` </li>
 * @method void setType(string $Type) Set The transition type.

The image transition, which connects two video segments.
<li>`ImageFadeInFadeOut` </li>
u200c<li>`BowTieHorizontal` </li>
u200c<li>`BowTieVertical` </li>
u200c<li>`ButterflyWaveScrawler` </li>
<li>`Cannabisleaf` </li>
<li>`Circle` </li>
<li>`CircleCrop` </li>
u200c<li>`Circleopen` </li>
<li>`Crosswarp` </li>
<li>`Cube` </li>
<li>`DoomScreenTransition` </li>
<li>`Doorway` </li>
<li>`Dreamy` </li>
<li>`DreamyZoom` </li>
<li>`FilmBurn` </li>
<li>`GlitchMemories` </li>
<li>`Heart` </li>
<li>`InvertedPageCurl` </li>
<li>`Luma` </li>
<li>`Mosaic` </li>
<li>`Pinwheel` </li>
<li>`PolarFunction` </li>
<li>`PolkaDotsCurtain` </li>
<li>`Radial` </li>
<li>`RotateScaleFade` </li>
<li>`Squeeze` </li>
<li>`Swap` </li>
<li>`Swirl` </li>
<li>`UndulatingBurnOutSwirl` </li>
<li>`Windowblinds` </li>
<li>`WipeDown` </li>
<li>`WipeLeft` </li>
<li>`WipeRight` </li>
<li>`WipeUp` </li>
<li>`ZoomInCircles` </li> 
The audio transition, which connects two audio segments.
<li>`AudioFadeInFadeOut` </li>
 */
class ComposeTransitionOperation extends AbstractModel
{
    /**
     * @var string The transition type.

The image transition, which connects two video segments.
<li>`ImageFadeInFadeOut` </li>
u200c<li>`BowTieHorizontal` </li>
u200c<li>`BowTieVertical` </li>
u200c<li>`ButterflyWaveScrawler` </li>
<li>`Cannabisleaf` </li>
<li>`Circle` </li>
<li>`CircleCrop` </li>
u200c<li>`Circleopen` </li>
<li>`Crosswarp` </li>
<li>`Cube` </li>
<li>`DoomScreenTransition` </li>
<li>`Doorway` </li>
<li>`Dreamy` </li>
<li>`DreamyZoom` </li>
<li>`FilmBurn` </li>
<li>`GlitchMemories` </li>
<li>`Heart` </li>
<li>`InvertedPageCurl` </li>
<li>`Luma` </li>
<li>`Mosaic` </li>
<li>`Pinwheel` </li>
<li>`PolarFunction` </li>
<li>`PolkaDotsCurtain` </li>
<li>`Radial` </li>
<li>`RotateScaleFade` </li>
<li>`Squeeze` </li>
<li>`Swap` </li>
<li>`Swirl` </li>
<li>`UndulatingBurnOutSwirl` </li>
<li>`Windowblinds` </li>
<li>`WipeDown` </li>
<li>`WipeLeft` </li>
<li>`WipeRight` </li>
<li>`WipeUp` </li>
<li>`ZoomInCircles` </li> 
The audio transition, which connects two audio segments.
<li>`AudioFadeInFadeOut` </li>
     */
    public $Type;

    /**
     * @param string $Type The transition type.

The image transition, which connects two video segments.
<li>`ImageFadeInFadeOut` </li>
u200c<li>`BowTieHorizontal` </li>
u200c<li>`BowTieVertical` </li>
u200c<li>`ButterflyWaveScrawler` </li>
<li>`Cannabisleaf` </li>
<li>`Circle` </li>
<li>`CircleCrop` </li>
u200c<li>`Circleopen` </li>
<li>`Crosswarp` </li>
<li>`Cube` </li>
<li>`DoomScreenTransition` </li>
<li>`Doorway` </li>
<li>`Dreamy` </li>
<li>`DreamyZoom` </li>
<li>`FilmBurn` </li>
<li>`GlitchMemories` </li>
<li>`Heart` </li>
<li>`InvertedPageCurl` </li>
<li>`Luma` </li>
<li>`Mosaic` </li>
<li>`Pinwheel` </li>
<li>`PolarFunction` </li>
<li>`PolkaDotsCurtain` </li>
<li>`Radial` </li>
<li>`RotateScaleFade` </li>
<li>`Squeeze` </li>
<li>`Swap` </li>
<li>`Swirl` </li>
<li>`UndulatingBurnOutSwirl` </li>
<li>`Windowblinds` </li>
<li>`WipeDown` </li>
<li>`WipeLeft` </li>
<li>`WipeRight` </li>
<li>`WipeUp` </li>
<li>`ZoomInCircles` </li> 
The audio transition, which connects two audio segments.
<li>`AudioFadeInFadeOut` </li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
