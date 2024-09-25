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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Return result configurations
 *
 * @method string getResolution() Obtain Generated image resolution.

Images with the following resolutions can be generated: origin (The resolution is the same as the input image resolution, with the edge resolution of up to 2000. The image will be zoomed out proportionally if the resolution is exceeded.), 768:768 (1:1), 768:1024 (3:4), and 1024:768 (4:3). If the resolution is not specified, origin is used by default. The generated image may be cropped if the aspect ratio of the generated image is too different from that of the input image.
 * @method void setResolution(string $Resolution) Set Generated image resolution.

Images with the following resolutions can be generated: origin (The resolution is the same as the input image resolution, with the edge resolution of up to 2000. The image will be zoomed out proportionally if the resolution is exceeded.), 768:768 (1:1), 768:1024 (3:4), and 1024:768 (4:3). If the resolution is not specified, origin is used by default. The generated image may be cropped if the aspect ratio of the generated image is too different from that of the input image.
 */
class ResultConfig extends AbstractModel
{
    /**
     * @var string Generated image resolution.

Images with the following resolutions can be generated: origin (The resolution is the same as the input image resolution, with the edge resolution of up to 2000. The image will be zoomed out proportionally if the resolution is exceeded.), 768:768 (1:1), 768:1024 (3:4), and 1024:768 (4:3). If the resolution is not specified, origin is used by default. The generated image may be cropped if the aspect ratio of the generated image is too different from that of the input image.
     */
    public $Resolution;

    /**
     * @param string $Resolution Generated image resolution.

Images with the following resolutions can be generated: origin (The resolution is the same as the input image resolution, with the edge resolution of up to 2000. The image will be zoomed out proportionally if the resolution is exceeded.), 768:768 (1:1), 768:1024 (3:4), and 1024:768 (4:3). If the resolution is not specified, origin is used by default. The generated image may be cropped if the aspect ratio of the generated image is too different from that of the input image.
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
        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
