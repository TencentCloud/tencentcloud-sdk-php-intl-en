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
 * Subtitle translation output result.
 *
 * @method string getStatus() Obtain Translation marker.
- Success
- Error
 * @method void setStatus(string $Status) Set Translation marker.
- Success
- Error
 * @method string getTransSrc() Obtain Source language (such as "en").
 * @method void setTransSrc(string $TransSrc) Set Source language (such as "en").
 * @method string getTransDst() Obtain Target language (such as "zh").
 * @method void setTransDst(string $TransDst) Set Target language (such as "zh").
 * @method string getPath() Obtain Subtitle file URL.
 * @method void setPath(string $Path) Set Subtitle file URL.
 */
class SubtitleTransResultItem extends AbstractModel
{
    /**
     * @var string Translation marker.
- Success
- Error
     */
    public $Status;

    /**
     * @var string Source language (such as "en").
     */
    public $TransSrc;

    /**
     * @var string Target language (such as "zh").
     */
    public $TransDst;

    /**
     * @var string Subtitle file URL.
     */
    public $Path;

    /**
     * @param string $Status Translation marker.
- Success
- Error
     * @param string $TransSrc Source language (such as "en").
     * @param string $TransDst Target language (such as "zh").
     * @param string $Path Subtitle file URL.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TransSrc",$param) and $param["TransSrc"] !== null) {
            $this->TransSrc = $param["TransSrc"];
        }

        if (array_key_exists("TransDst",$param) and $param["TransDst"] !== null) {
            $this->TransDst = $param["TransDst"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
