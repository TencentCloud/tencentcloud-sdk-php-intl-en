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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shipping content
 *
 * @method boolean getEnableTag() Obtain Whether to ship tag information
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEnableTag(boolean $EnableTag) Set Whether to ship tag information
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getMetaFields() Obtain List of metadata to ship. Only \_\_SOURCE\_\_, \_\_FILENAME\_\_, and \_\_TIMESTAMP\_\_ are supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetaFields(array $MetaFields) Set List of metadata to ship. Only \_\_SOURCE\_\_, \_\_FILENAME\_\_, and \_\_TIMESTAMP\_\_ are supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getTagJsonNotTiled() Obtain This parameter is required if `EnableTag` is `true`, and is used to specify whether the tag information is JSON tiled. Valid values: `true` (not tiled); `false` (tiled)
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTagJsonNotTiled(boolean $TagJsonNotTiled) Set This parameter is required if `EnableTag` is `true`, and is used to specify whether the tag information is JSON tiled. Valid values: `true` (not tiled); `false` (tiled)
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getTimestampAccuracy() Obtain Shipping timestamp precision in seconds (default) or milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimestampAccuracy(integer $TimestampAccuracy) Set Shipping timestamp precision in seconds (default) or milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ConsumerContent extends AbstractModel
{
    /**
     * @var boolean Whether to ship tag information
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EnableTag;

    /**
     * @var array List of metadata to ship. Only \_\_SOURCE\_\_, \_\_FILENAME\_\_, and \_\_TIMESTAMP\_\_ are supported.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetaFields;

    /**
     * @var boolean This parameter is required if `EnableTag` is `true`, and is used to specify whether the tag information is JSON tiled. Valid values: `true` (not tiled); `false` (tiled)
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TagJsonNotTiled;

    /**
     * @var integer Shipping timestamp precision in seconds (default) or milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimestampAccuracy;

    /**
     * @param boolean $EnableTag Whether to ship tag information
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $MetaFields List of metadata to ship. Only \_\_SOURCE\_\_, \_\_FILENAME\_\_, and \_\_TIMESTAMP\_\_ are supported.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $TagJsonNotTiled This parameter is required if `EnableTag` is `true`, and is used to specify whether the tag information is JSON tiled. Valid values: `true` (not tiled); `false` (tiled)
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $TimestampAccuracy Shipping timestamp precision in seconds (default) or milliseconds
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
        if (array_key_exists("EnableTag",$param) and $param["EnableTag"] !== null) {
            $this->EnableTag = $param["EnableTag"];
        }

        if (array_key_exists("MetaFields",$param) and $param["MetaFields"] !== null) {
            $this->MetaFields = $param["MetaFields"];
        }

        if (array_key_exists("TagJsonNotTiled",$param) and $param["TagJsonNotTiled"] !== null) {
            $this->TagJsonNotTiled = $param["TagJsonNotTiled"];
        }

        if (array_key_exists("TimestampAccuracy",$param) and $param["TimestampAccuracy"] !== null) {
            $this->TimestampAccuracy = $param["TimestampAccuracy"];
        }
    }
}
