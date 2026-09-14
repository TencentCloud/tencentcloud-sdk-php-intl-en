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
 * DescribeMediaMetaData request structure.
 *
 * @method MediaInputInfo getInputInfo() Obtain <p>Input information of the file that needs to get meta information.</p>
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set <p>Input information of the file that needs to get meta information.</p>
 * @method string getMode() Obtain <p>When set to slow, expand the API timeout duration</p><p>Enumeration values:</p><ul><li>slow: expand the API timeout duration</li></ul>
 * @method void setMode(string $Mode) Set <p>When set to slow, expand the API timeout duration</p><p>Enumeration values:</p><ul><li>slow: expand the API timeout duration</li></ul>
 */
class DescribeMediaMetaDataRequest extends AbstractModel
{
    /**
     * @var MediaInputInfo <p>Input information of the file that needs to get meta information.</p>
     */
    public $InputInfo;

    /**
     * @var string <p>When set to slow, expand the API timeout duration</p><p>Enumeration values:</p><ul><li>slow: expand the API timeout duration</li></ul>
     */
    public $Mode;

    /**
     * @param MediaInputInfo $InputInfo <p>Input information of the file that needs to get meta information.</p>
     * @param string $Mode <p>When set to slow, expand the API timeout duration</p><p>Enumeration values:</p><ul><li>slow: expand the API timeout duration</li></ul>
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
