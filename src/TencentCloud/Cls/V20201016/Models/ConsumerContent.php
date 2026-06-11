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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shipping content
 *
 * @method boolean getEnableTag() Obtain <p>Whether to deliver TAG information.<br>When EnableTag is true, it means to deliver TAG metadata.</p>
 * @method void setEnableTag(boolean $EnableTag) Set <p>Whether to deliver TAG information.<br>When EnableTag is true, it means to deliver TAG metadata.</p>
 * @method array getMetaFields() Obtain <p>List of metadata to be shipped, currently only support: __SOURCE__, __FILENAME__, __TIMESTAMP__, __HOSTNAME__, and __PKGID__</p>
 * @method void setMetaFields(array $MetaFields) Set <p>List of metadata to be shipped, currently only support: __SOURCE__, __FILENAME__, __TIMESTAMP__, __HOSTNAME__, and __PKGID__</p>
 * @method boolean getTagJsonNotTiled() Obtain <p>When EnableTag is true, the TagJsonNotTiled field must be filled.<br>TagJsonNotTiled indicates whether tag information is json tiled.</p><p>When TagJsonNotTiled is true, it is not tiled. Example:<br>tag information: <code>{"__tag__":{"fieldA":200,"fieldB":"text"}}</code><br>Not Tiled: <code>{"__tag__":{"fieldA":200,"fieldB":"text"}}</code></p><p>When TagJsonNotTiled is false, tiling is applied. Example:<br>tag information: <code>{"__tag__":{"fieldA":200,"fieldB":"text"}}</code><br>Tiled: <code>{"__tag__.fieldA":200,"__tag__.fieldB":"text"}</code></p>
 * @method void setTagJsonNotTiled(boolean $TagJsonNotTiled) Set <p>When EnableTag is true, the TagJsonNotTiled field must be filled.<br>TagJsonNotTiled indicates whether tag information is json tiled.</p><p>When TagJsonNotTiled is true, it is not tiled. Example:<br>tag information: <code>{"__tag__":{"fieldA":200,"fieldB":"text"}}</code><br>Not Tiled: <code>{"__tag__":{"fieldA":200,"fieldB":"text"}}</code></p><p>When TagJsonNotTiled is false, tiling is applied. Example:<br>tag information: <code>{"__tag__":{"fieldA":200,"fieldB":"text"}}</code><br>Tiled: <code>{"__tag__.fieldA":200,"__tag__.fieldB":"text"}</code></p>
 * @method integer getTimestampAccuracy() Obtain <p>Delivery timestamp precision, options [1: second; 2: millisecond], 1 is selected by default.</p>
 * @method void setTimestampAccuracy(integer $TimestampAccuracy) Set <p>Delivery timestamp precision, options [1: second; 2: millisecond], 1 is selected by default.</p>
 * @method integer getJsonType() Obtain <p>Deliver in Json format.</p><p>Enumeration value:</p><ul><li>0: Escape. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Deliver to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></li><li>1: Consistent with original log, non-escaping. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Deliver to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></li></ul>
 * @method void setJsonType(integer $JsonType) Set <p>Deliver in Json format.</p><p>Enumeration value:</p><ul><li>0: Escape. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Deliver to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></li><li>1: Consistent with original log, non-escaping. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Deliver to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></li></ul>
 */
class ConsumerContent extends AbstractModel
{
    /**
     * @var boolean <p>Whether to deliver TAG information.<br>When EnableTag is true, it means to deliver TAG metadata.</p>
     */
    public $EnableTag;

    /**
     * @var array <p>List of metadata to be shipped, currently only support: __SOURCE__, __FILENAME__, __TIMESTAMP__, __HOSTNAME__, and __PKGID__</p>
     */
    public $MetaFields;

    /**
     * @var boolean <p>When EnableTag is true, the TagJsonNotTiled field must be filled.<br>TagJsonNotTiled indicates whether tag information is json tiled.</p><p>When TagJsonNotTiled is true, it is not tiled. Example:<br>tag information: <code>{"__tag__":{"fieldA":200,"fieldB":"text"}}</code><br>Not Tiled: <code>{"__tag__":{"fieldA":200,"fieldB":"text"}}</code></p><p>When TagJsonNotTiled is false, tiling is applied. Example:<br>tag information: <code>{"__tag__":{"fieldA":200,"fieldB":"text"}}</code><br>Tiled: <code>{"__tag__.fieldA":200,"__tag__.fieldB":"text"}</code></p>
     */
    public $TagJsonNotTiled;

    /**
     * @var integer <p>Delivery timestamp precision, options [1: second; 2: millisecond], 1 is selected by default.</p>
     */
    public $TimestampAccuracy;

    /**
     * @var integer <p>Deliver in Json format.</p><p>Enumeration value:</p><ul><li>0: Escape. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Deliver to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></li><li>1: Consistent with original log, non-escaping. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Deliver to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></li></ul>
     */
    public $JsonType;

    /**
     * @param boolean $EnableTag <p>Whether to deliver TAG information.<br>When EnableTag is true, it means to deliver TAG metadata.</p>
     * @param array $MetaFields <p>List of metadata to be shipped, currently only support: __SOURCE__, __FILENAME__, __TIMESTAMP__, __HOSTNAME__, and __PKGID__</p>
     * @param boolean $TagJsonNotTiled <p>When EnableTag is true, the TagJsonNotTiled field must be filled.<br>TagJsonNotTiled indicates whether tag information is json tiled.</p><p>When TagJsonNotTiled is true, it is not tiled. Example:<br>tag information: <code>{"__tag__":{"fieldA":200,"fieldB":"text"}}</code><br>Not Tiled: <code>{"__tag__":{"fieldA":200,"fieldB":"text"}}</code></p><p>When TagJsonNotTiled is false, tiling is applied. Example:<br>tag information: <code>{"__tag__":{"fieldA":200,"fieldB":"text"}}</code><br>Tiled: <code>{"__tag__.fieldA":200,"__tag__.fieldB":"text"}</code></p>
     * @param integer $TimestampAccuracy <p>Delivery timestamp precision, options [1: second; 2: millisecond], 1 is selected by default.</p>
     * @param integer $JsonType <p>Deliver in Json format.</p><p>Enumeration value:</p><ul><li>0: Escape. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Deliver to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></li><li>1: Consistent with original log, non-escaping. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Deliver to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></li></ul>
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
