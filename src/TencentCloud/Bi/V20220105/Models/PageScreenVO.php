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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Page screenshot information
 *
 * @method string getContent() Obtain Screenshot Base64 or URL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContent(string $Content) Set Screenshot Base64 or URL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWidgetId() Obtain Component ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWidgetId(string $WidgetId) Set Component ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PageScreenVO extends AbstractModel
{
    /**
     * @var string Screenshot Base64 or URL.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Content;

    /**
     * @var string Component ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WidgetId;

    /**
     * @param string $Content Screenshot Base64 or URL.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WidgetId Component ID.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("WidgetId",$param) and $param["WidgetId"] !== null) {
            $this->WidgetId = $param["WidgetId"];
        }
    }
}
