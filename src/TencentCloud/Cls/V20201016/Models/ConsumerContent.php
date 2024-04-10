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
 * @method boolean getEnableTag() Obtain Whether to deliver TAG information.
When EnableTag is true, it indicates the delivery of TAG metadata.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableTag(boolean $EnableTag) Set Whether to deliver TAG information.
When EnableTag is true, it indicates the delivery of TAG metadata.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMetaFields() Obtain List of metadata to ship. Supported metadata types: \_\_SOURCE\_\_, \_\_FILENAME\_\_, \_\_TIMESTAMP\_\_, \_\_HOSTNAME\_\_, and \_\_PKGID\_\_.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetaFields(array $MetaFields) Set List of metadata to ship. Supported metadata types: \_\_SOURCE\_\_, \_\_FILENAME\_\_, \_\_TIMESTAMP\_\_, \_\_HOSTNAME\_\_, and \_\_PKGID\_\_.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getTagJsonNotTiled() Obtain When EnableTag is true, the TagJsonNotTiled field must be filled.TagJsonNotTiled is used to indicate whether tag information is JSON flattened.When TagJsonNotTiled is true, it is not flattened. Example:TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
Untiled: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`When TagJsonNotTiled is false, the data is tiled. Example:TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`Tiled: `{"__TAG__.fieldA":200,"__TAG__.fieldB":"text"}`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagJsonNotTiled(boolean $TagJsonNotTiled) Set When EnableTag is true, the TagJsonNotTiled field must be filled.TagJsonNotTiled is used to indicate whether tag information is JSON flattened.When TagJsonNotTiled is true, it is not flattened. Example:TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
Untiled: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`When TagJsonNotTiled is false, the data is tiled. Example:TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`Tiled: `{"__TAG__.fieldA":200,"__TAG__.fieldB":"text"}`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTimestampAccuracy() Obtain Delivery timestamp precision, optional [1: second; 2: millisecond], default is 1.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimestampAccuracy(integer $TimestampAccuracy) Set Delivery timestamp precision, optional [1: second; 2: millisecond], default is 1.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getJsonType() Obtain Deliver in JSON format.JsonType is 0: Consistent with the original log, no escape. Example:
Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`Deliver to CKafka: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`JsonType is 1: Escaped. Example:Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`Delivered to CKafka: `{"a":"aa","b":"{\"b1\":\"b1b1\", \"c1\":\"c1c1\"}"}`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJsonType(integer $JsonType) Set Deliver in JSON format.JsonType is 0: Consistent with the original log, no escape. Example:
Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`Deliver to CKafka: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`JsonType is 1: Escaped. Example:Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`Delivered to CKafka: `{"a":"aa","b":"{\"b1\":\"b1b1\", \"c1\":\"c1c1\"}"}`
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ConsumerContent extends AbstractModel
{
    /**
     * @var boolean Whether to deliver TAG information.
When EnableTag is true, it indicates the delivery of TAG metadata.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableTag;

    /**
     * @var array List of metadata to ship. Supported metadata types: \_\_SOURCE\_\_, \_\_FILENAME\_\_, \_\_TIMESTAMP\_\_, \_\_HOSTNAME\_\_, and \_\_PKGID\_\_.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetaFields;

    /**
     * @var boolean When EnableTag is true, the TagJsonNotTiled field must be filled.TagJsonNotTiled is used to indicate whether tag information is JSON flattened.When TagJsonNotTiled is true, it is not flattened. Example:TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
Untiled: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`When TagJsonNotTiled is false, the data is tiled. Example:TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`Tiled: `{"__TAG__.fieldA":200,"__TAG__.fieldB":"text"}`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagJsonNotTiled;

    /**
     * @var integer Delivery timestamp precision, optional [1: second; 2: millisecond], default is 1.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimestampAccuracy;

    /**
     * @var integer Deliver in JSON format.JsonType is 0: Consistent with the original log, no escape. Example:
Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`Deliver to CKafka: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`JsonType is 1: Escaped. Example:Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`Delivered to CKafka: `{"a":"aa","b":"{\"b1\":\"b1b1\", \"c1\":\"c1c1\"}"}`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JsonType;

    /**
     * @param boolean $EnableTag Whether to deliver TAG information.
When EnableTag is true, it indicates the delivery of TAG metadata.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $MetaFields List of metadata to ship. Supported metadata types: \_\_SOURCE\_\_, \_\_FILENAME\_\_, \_\_TIMESTAMP\_\_, \_\_HOSTNAME\_\_, and \_\_PKGID\_\_.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $TagJsonNotTiled When EnableTag is true, the TagJsonNotTiled field must be filled.TagJsonNotTiled is used to indicate whether tag information is JSON flattened.When TagJsonNotTiled is true, it is not flattened. Example:TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
Untiled: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`When TagJsonNotTiled is false, the data is tiled. Example:TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`Tiled: `{"__TAG__.fieldA":200,"__TAG__.fieldB":"text"}`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TimestampAccuracy Delivery timestamp precision, optional [1: second; 2: millisecond], default is 1.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $JsonType Deliver in JSON format.JsonType is 0: Consistent with the original log, no escape. Example:
Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`Deliver to CKafka: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`JsonType is 1: Escaped. Example:Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`Delivered to CKafka: `{"a":"aa","b":"{\"b1\":\"b1b1\", \"c1\":\"c1c1\"}"}`
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

        if (array_key_exists("JsonType",$param) and $param["JsonType"] !== null) {
            $this->JsonType = $param["JsonType"];
        }
    }
}
