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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EditMediaT TSC Transcoding Config.
 *
 * @method string getType() Obtain TSC Transcoding type, optional values: <li>TEHD-100 means TSC Transcoding-definition-100;</li> <li>OFF means turning off TSC Transcoding-definition. </li>Leave it blank to indicate OFF.
 * @method void setType(string $Type) Set TSC Transcoding type, optional values: <li>TEHD-100 means TSC Transcoding-definition-100;</li> <li>OFF means turning off TSC Transcoding-definition. </li>Leave it blank to indicate OFF.
 */
class EditMediaTEHDConfig extends AbstractModel
{
    /**
     * @var string TSC Transcoding type, optional values: <li>TEHD-100 means TSC Transcoding-definition-100;</li> <li>OFF means turning off TSC Transcoding-definition. </li>Leave it blank to indicate OFF.
     */
    public $Type;

    /**
     * @param string $Type TSC Transcoding type, optional values: <li>TEHD-100 means TSC Transcoding-definition-100;</li> <li>OFF means turning off TSC Transcoding-definition. </li>Leave it blank to indicate OFF.
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
