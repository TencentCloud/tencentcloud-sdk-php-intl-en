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
 * General data type used to describe a time period.
 *
 * @method string getAfter() Obtain <li>After or at this time (start time).</li>
<li>In ISO 8601 format. For more information, please see [ISO Date Format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
 * @method void setAfter(string $After) Set <li>After or at this time (start time).</li>
<li>In ISO 8601 format. For more information, please see [ISO Date Format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
 * @method string getBefore() Obtain <li>Earlier than this time (end time).</li>
<li>In ISO 8601 format. For more information, please see [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
 * @method void setBefore(string $Before) Set <li>Earlier than this time (end time).</li>
<li>In ISO 8601 format. For more information, please see [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
 */
class TimeRange extends AbstractModel
{
    /**
     * @var string <li>After or at this time (start time).</li>
<li>In ISO 8601 format. For more information, please see [ISO Date Format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
     */
    public $After;

    /**
     * @var string <li>Earlier than this time (end time).</li>
<li>In ISO 8601 format. For more information, please see [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
     */
    public $Before;

    /**
     * @param string $After <li>After or at this time (start time).</li>
<li>In ISO 8601 format. For more information, please see [ISO Date Format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
     * @param string $Before <li>Earlier than this time (end time).</li>
<li>In ISO 8601 format. For more information, please see [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).</li>
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
        if (array_key_exists("After",$param) and $param["After"] !== null) {
            $this->After = $param["After"];
        }

        if (array_key_exists("Before",$param) and $param["Before"] !== null) {
            $this->Before = $param["Before"];
        }
    }
}
