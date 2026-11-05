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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Document parsing configuration
 *
 * @method ContentFilter getContentFilter() Obtain <p>Content filtering configuration</p>
 * @method void setContentFilter(ContentFilter $ContentFilter) Set <p>Content filtering configuration</p>
 * @method string getSplitRule() Obtain <p>Split rule</p>
 * @method void setSplitRule(string $SplitRule) Set <p>Split rule</p>
 */
class DocParseConfig extends AbstractModel
{
    /**
     * @var ContentFilter <p>Content filtering configuration</p>
     */
    public $ContentFilter;

    /**
     * @var string <p>Split rule</p>
     */
    public $SplitRule;

    /**
     * @param ContentFilter $ContentFilter <p>Content filtering configuration</p>
     * @param string $SplitRule <p>Split rule</p>
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
        if (array_key_exists("ContentFilter",$param) and $param["ContentFilter"] !== null) {
            $this->ContentFilter = new ContentFilter();
            $this->ContentFilter->deserialize($param["ContentFilter"]);
        }

        if (array_key_exists("SplitRule",$param) and $param["SplitRule"] !== null) {
            $this->SplitRule = $param["SplitRule"];
        }
    }
}
