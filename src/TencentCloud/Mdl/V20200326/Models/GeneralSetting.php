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
 * Common configuration.
 *
 * @method StaticImageSettings getStaticImageSettings() Obtain Static image overlay configuration.
 * @method void setStaticImageSettings(StaticImageSettings $StaticImageSettings) Set Static image overlay configuration.
 * @method MotionGraphicsSetting getMotionGraphicsSettings() Obtain Real-time graphic overlay configuration.
 * @method void setMotionGraphicsSettings(MotionGraphicsSetting $MotionGraphicsSettings) Set Real-time graphic overlay configuration.
 * @method ThumbnailSettings getThumbnailSettings() Obtain Thumbnail configuration
 * @method void setThumbnailSettings(ThumbnailSettings $ThumbnailSettings) Set Thumbnail configuration
 */
class GeneralSetting extends AbstractModel
{
    /**
     * @var StaticImageSettings Static image overlay configuration.
     */
    public $StaticImageSettings;

    /**
     * @var MotionGraphicsSetting Real-time graphic overlay configuration.
     */
    public $MotionGraphicsSettings;

    /**
     * @var ThumbnailSettings Thumbnail configuration
     */
    public $ThumbnailSettings;

    /**
     * @param StaticImageSettings $StaticImageSettings Static image overlay configuration.
     * @param MotionGraphicsSetting $MotionGraphicsSettings Real-time graphic overlay configuration.
     * @param ThumbnailSettings $ThumbnailSettings Thumbnail configuration
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
