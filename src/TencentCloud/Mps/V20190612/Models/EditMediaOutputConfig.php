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
 * Configuration for output files of video editing
 *
 * @method string getContainer() Obtain Format. Valid values: `mp4` (default), `hls`, `mov`, `flv`, `avi`
 * @method void setContainer(string $Container) Set Format. Valid values: `mp4` (default), `hls`, `mov`, `flv`, `avi`
 * @method string getType() Obtain The editing mode. Valid values are `normal` and `fast`. The default is `normal`, which indicates precise editing.
 * @method void setType(string $Type) Set The editing mode. Valid values are `normal` and `fast`. The default is `normal`, which indicates precise editing.
 */
class EditMediaOutputConfig extends AbstractModel
{
    /**
     * @var string Format. Valid values: `mp4` (default), `hls`, `mov`, `flv`, `avi`
     */
    public $Container;

    /**
     * @var string The editing mode. Valid values are `normal` and `fast`. The default is `normal`, which indicates precise editing.
     */
    public $Type;

    /**
     * @param string $Container Format. Valid values: `mp4` (default), `hls`, `mov`, `flv`, `avi`
     * @param string $Type The editing mode. Valid values are `normal` and `fast`. The default is `normal`, which indicates precise editing.
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
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
