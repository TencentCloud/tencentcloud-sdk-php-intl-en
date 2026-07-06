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
 * DetectVideoWatermark request structure.
 *
 * @method MediaInputInfo getInputInfo() Obtain <p>Input information, which supports only URL and COS.</p>
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set <p>Input information, which supports only URL and COS.</p>
 * @method string getUserExtPara() Obtain <p>Extended parameter. This is left empty by default.</p>
 * @method void setUserExtPara(string $UserExtPara) Set <p>Extended parameter. This is left empty by default.</p>
 */
class DetectVideoWatermarkRequest extends AbstractModel
{
    /**
     * @var MediaInputInfo <p>Input information, which supports only URL and COS.</p>
     */
    public $InputInfo;

    /**
     * @var string <p>Extended parameter. This is left empty by default.</p>
     */
    public $UserExtPara;

    /**
     * @param MediaInputInfo $InputInfo <p>Input information, which supports only URL and COS.</p>
     * @param string $UserExtPara <p>Extended parameter. This is left empty by default.</p>
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("UserExtPara",$param) and $param["UserExtPara"] !== null) {
            $this->UserExtPara = $param["UserExtPara"];
        }
    }
}
