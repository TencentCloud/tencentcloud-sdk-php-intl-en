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
 * Kafka consumer content
 *
 * @method integer getFormat() Obtain Consumption data format. Valid values: 0 (original content) and 1 (JSON).
 * @method void setFormat(integer $Format) Set Consumption data format. Valid values: 0 (original content) and 1 (JSON).
 * @method boolean getEnableTag() Obtain Whether to ship tag information
This parameter does not need to be set when `Format` is set to `0`.
 * @method void setEnableTag(boolean $EnableTag) Set Whether to ship tag information
This parameter does not need to be set when `Format` is set to `0`.
 * @method array getMetaFields() Obtain Metadata information list. Valid values: \_\_SOURCE\_\_, \_\_FILENAME\_\_,
\_\_TIMESTAMP\_\_, \_\_HOSTNAME\_\_, and \_\_PKGID\_\_.
This parameter does not need to be set when `Format` is set to `0`.
 * @method void setMetaFields(array $MetaFields) Set Metadata information list. Valid values: \_\_SOURCE\_\_, \_\_FILENAME\_\_,
\_\_TIMESTAMP\_\_, \_\_HOSTNAME\_\_, and \_\_PKGID\_\_.
This parameter does not need to be set when `Format` is set to `0`.
 * @method integer getTagTransaction() Obtain Tag data processing mode: 1: Do not tile (default); 2: Tile.

Untiled example:
TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
Untiled: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`

Tiled example:
TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
Tiled: `{"__TAG__.fieldA":200,"__TAG__.fieldB":"text"}`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagTransaction(integer $TagTransaction) Set Tag data processing mode: 1: Do not tile (default); 2: Tile.

Untiled example:
TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
Untiled: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`

Tiled example:
TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
Tiled: `{"__TAG__.fieldA":200,"__TAG__.fieldB":"text"}`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getJsonType() Obtain JSON data format:
1: Not escaped (default format)
2: Escaped

Deliver in JSON format.JsonType is 1: Consistent with the original log, not escaped. Example:
Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
Deliver to CKafka: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`JsonType is 2: escaped. Example:Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
Deliver to CKafka: `{"a":"aa","b":"{\"b1\":\"b1b1\", \"c1\":\"c1c1\"}"}`
 * @method void setJsonType(integer $JsonType) Set JSON data format:
1: Not escaped (default format)
2: Escaped

Deliver in JSON format.JsonType is 1: Consistent with the original log, not escaped. Example:
Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
Deliver to CKafka: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`JsonType is 2: escaped. Example:Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
Deliver to CKafka: `{"a":"aa","b":"{\"b1\":\"b1b1\", \"c1\":\"c1c1\"}"}`
 */
class KafkaConsumerContent extends AbstractModel
{
    /**
     * @var integer Consumption data format. Valid values: 0 (original content) and 1 (JSON).
     */
    public $Format;

    /**
     * @var boolean Whether to ship tag information
This parameter does not need to be set when `Format` is set to `0`.
     */
    public $EnableTag;

    /**
     * @var array Metadata information list. Valid values: \_\_SOURCE\_\_, \_\_FILENAME\_\_,
\_\_TIMESTAMP\_\_, \_\_HOSTNAME\_\_, and \_\_PKGID\_\_.
This parameter does not need to be set when `Format` is set to `0`.
     */
    public $MetaFields;

    /**
     * @var integer Tag data processing mode: 1: Do not tile (default); 2: Tile.

Untiled example:
TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
Untiled: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`

Tiled example:
TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
Tiled: `{"__TAG__.fieldA":200,"__TAG__.fieldB":"text"}`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagTransaction;

    /**
     * @var integer JSON data format:
1: Not escaped (default format)
2: Escaped

Deliver in JSON format.JsonType is 1: Consistent with the original log, not escaped. Example:
Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
Deliver to CKafka: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`JsonType is 2: escaped. Example:Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
Deliver to CKafka: `{"a":"aa","b":"{\"b1\":\"b1b1\", \"c1\":\"c1c1\"}"}`
     */
    public $JsonType;

    /**
     * @param integer $Format Consumption data format. Valid values: 0 (original content) and 1 (JSON).
     * @param boolean $EnableTag Whether to ship tag information
This parameter does not need to be set when `Format` is set to `0`.
     * @param array $MetaFields Metadata information list. Valid values: \_\_SOURCE\_\_, \_\_FILENAME\_\_,
\_\_TIMESTAMP\_\_, \_\_HOSTNAME\_\_, and \_\_PKGID\_\_.
This parameter does not need to be set when `Format` is set to `0`.
     * @param integer $TagTransaction Tag data processing mode: 1: Do not tile (default); 2: Tile.

Untiled example:
TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
Untiled: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`

Tiled example:
TAG information: `{"__TAG__":{"fieldA":200,"fieldB":"text"}}`
Tiled: `{"__TAG__.fieldA":200,"__TAG__.fieldB":"text"}`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $JsonType JSON data format:
1: Not escaped (default format)
2: Escaped

Deliver in JSON format.JsonType is 1: Consistent with the original log, not escaped. Example:
Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
Deliver to CKafka: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`JsonType is 2: escaped. Example:Original log: `{"a":"aa", "b":{"b1":"b1b1", "c1":"c1c1"}}`
Deliver to CKafka: `{"a":"aa","b":"{\"b1\":\"b1b1\", \"c1\":\"c1c1\"}"}`
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("EnableTag",$param) and $param["EnableTag"] !== null) {
            $this->EnableTag = $param["EnableTag"];
        }

        if (array_key_exists("MetaFields",$param) and $param["MetaFields"] !== null) {
            $this->MetaFields = $param["MetaFields"];
        }

        if (array_key_exists("TagTransaction",$param) and $param["TagTransaction"] !== null) {
            $this->TagTransaction = $param["TagTransaction"];
        }

        if (array_key_exists("JsonType",$param) and $param["JsonType"] !== null) {
            $this->JsonType = $param["JsonType"];
        }
    }
}
