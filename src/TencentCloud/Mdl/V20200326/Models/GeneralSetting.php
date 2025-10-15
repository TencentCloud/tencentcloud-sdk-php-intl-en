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
 * General setting.
 *
 * @method StaticImageSettings getStaticImageSettings() Obtain Static graphic overlay configuration.
 * @method void setStaticImageSettings(StaticImageSettings $StaticImageSettings) Set Static graphic overlay configuration.
 * @method MotionGraphicsSetting getMotionGraphicsSettings() Obtain Dynamic graphic overlay configuration.
 * @method void setMotionGraphicsSettings(MotionGraphicsSetting $MotionGraphicsSettings) Set Dynamic graphic overlay configuration.
 * @method ThumbnailSettings getThumbnailSettings() Obtain Thumbnail Configuration.
 * @method void setThumbnailSettings(ThumbnailSettings $ThumbnailSettings) Set Thumbnail Configuration.
 */
class GeneralSetting extends AbstractModel
{
    /**
     * @var StaticImageSettings Static graphic overlay configuration.
     */
    public $StaticImageSettings;

    /**
     * @var MotionGraphicsSetting Dynamic graphic overlay configuration.
     */
    public $MotionGraphicsSettings;

    /**
     * @var ThumbnailSettings Thumbnail Configuration.
     */
    public $ThumbnailSettings;

    /**
     * @param StaticImageSettings $StaticImageSettings Static graphic overlay configuration.
     * @param MotionGraphicsSetting $MotionGraphicsSettings Dynamic graphic overlay configuration.
     * @param ThumbnailSettings $ThumbnailSettings Thumbnail Configuration.
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
        if (array_key_exists("StaticImageSettings",$param) and $param["StaticImageSettings"] !== null) {
            $this->StaticImageSettings = new StaticImageSettings();
            $this->StaticImageSettings->deserialize($param["StaticImageSettings"]);
        }

        if (array_key_exists("MotionGraphicsSettings",$param) and $param["MotionGraphicsSettings"] !== null) {
            $this->MotionGraphicsSettings = new MotionGraphicsSetting();
            $this->MotionGraphicsSettings->deserialize($param["MotionGraphicsSettings"]);
        }

        if (array_key_exists("ThumbnailSettings",$param) and $param["ThumbnailSettings"] !== null) {
            $this->ThumbnailSettings = new ThumbnailSettings();
            $this->ThumbnailSettings->deserialize($param["ThumbnailSettings"]);
        }
    }
}
