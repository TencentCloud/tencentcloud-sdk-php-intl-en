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
 * Output audio information of the AIGC audio generation task.
 *
 * @method string getUrl() Obtain <p>Audio URL.</p>
 * @method void setUrl(string $Url) Set <p>Audio URL.</p>
 * @method integer getDuration() Obtain <p>Audio duration.</p>
 * @method void setDuration(integer $Duration) Set <p>Audio duration.</p>
 */
class AigcAudioOutputAudioInfo extends AbstractModel
{
    /**
     * @var string <p>Audio URL.</p>
     */
    public $Url;

    /**
     * @var integer <p>Audio duration.</p>
     */
    public $Duration;

    /**
     * @param string $Url <p>Audio URL.</p>
     * @param integer $Duration <p>Audio duration.</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
