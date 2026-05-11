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
 * The output of digital watermark extraction.
 *
 * @method string getUv() Obtain Player's ID, represented in hexadecimal, 6 digits in total.
 * @method void setUv(string $Uv) Set Player's ID, represented in hexadecimal, 6 digits in total.
 * @method string getUid() Obtain This parameter has been deprecated.
 * @method void setUid(string $Uid) Set This parameter has been deprecated.
 */
class ExtractTraceWatermarkTaskOutput extends AbstractModel
{
    /**
     * @var string Player's ID, represented in hexadecimal, 6 digits in total.
     */
    public $Uv;

    /**
     * @var string This parameter has been deprecated.
     * @deprecated
     */
    public $Uid;

    /**
     * @param string $Uv Player's ID, represented in hexadecimal, 6 digits in total.
     * @param string $Uid This parameter has been deprecated.
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
        if (array_key_exists("Uv",$param) and $param["Uv"] !== null) {
            $this->Uv = $param["Uv"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }
    }
}
