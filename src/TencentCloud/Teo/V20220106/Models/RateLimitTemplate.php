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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rate limit template
 *
 * @method string getMode() Obtain Template name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMode(string $Mode) Set Template name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method RateLimitTemplateDetail getDetail() Obtain Template details
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDetail(RateLimitTemplateDetail $Detail) Set Template details
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class RateLimitTemplate extends AbstractModel
{
    /**
     * @var string Template name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Mode;

    /**
     * @var RateLimitTemplateDetail Template details
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Detail;

    /**
     * @param string $Mode Template name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param RateLimitTemplateDetail $Detail Template details
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new RateLimitTemplateDetail();
            $this->Detail->deserialize($param["Detail"]);
        }
    }
}
