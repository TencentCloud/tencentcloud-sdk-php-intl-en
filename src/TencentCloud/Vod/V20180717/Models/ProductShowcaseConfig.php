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
 * Parameter configuration for AI-generated 360-degree product showcase videos
 *
 * @method string getCameraMovement() Obtain Lens movement method. Supported values: AutoMatch, ZoomIn, ZoomOut, GlideRight, GlideLeft, CraneDown.
 * @method void setCameraMovement(string $CameraMovement) Set Lens movement method. Supported values: AutoMatch, ZoomIn, ZoomOut, GlideRight, GlideLeft, CraneDown.
 */
class ProductShowcaseConfig extends AbstractModel
{
    /**
     * @var string Lens movement method. Supported values: AutoMatch, ZoomIn, ZoomOut, GlideRight, GlideLeft, CraneDown.
     */
    public $CameraMovement;

    /**
     * @param string $CameraMovement Lens movement method. Supported values: AutoMatch, ZoomIn, ZoomOut, GlideRight, GlideLeft, CraneDown.
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
        if (array_key_exists("CameraMovement",$param) and $param["CameraMovement"] !== null) {
            $this->CameraMovement = $param["CameraMovement"];
        }
    }
}
