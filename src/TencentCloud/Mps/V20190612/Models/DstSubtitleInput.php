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
 * AI Dubbing external translation subtitle information
 *
 * @method MediaInputInfo getDstSubtitleInfo() Obtain <p>External translation subtitle information.</p>
 * @method void setDstSubtitleInfo(MediaInputInfo $DstSubtitleInfo) Set <p>External translation subtitle information.</p>
 */
class DstSubtitleInput extends AbstractModel
{
    /**
     * @var MediaInputInfo <p>External translation subtitle information.</p>
     */
    public $DstSubtitleInfo;

    /**
     * @param MediaInputInfo $DstSubtitleInfo <p>External translation subtitle information.</p>
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
        if (array_key_exists("DstSubtitleInfo",$param) and $param["DstSubtitleInfo"] !== null) {
            $this->DstSubtitleInfo = new MediaInputInfo();
            $this->DstSubtitleInfo->deserialize($param["DstSubtitleInfo"]);
        }
    }
}
