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
 * Kafka consumption content
 *
 * @method integer getFormat() Obtain <p>Consumption data format. 0: Raw content; 1: JSON.</p>
 * @method void setFormat(integer $Format) Set <p>Consumption data format. 0: Raw content; 1: JSON.</p>
 * @method boolean getEnableTag() Obtain <p>Whether to deliver TAG information<br>When Format is 0, this field does not need to be assigned a value</p>
 * @method void setEnableTag(boolean $EnableTag) Set <p>Whether to deliver TAG information<br>When Format is 0, this field does not need to be assigned a value</p>
 * @method array getMetaFields() Obtain <p>Metadata information list. Valid values: __SOURCE__, __FILENAME__<br>, __TIMESTAMP__, __HOSTNAME__, __PKGID__<br>When Format is 0, this field does not need to be assigned a value</p>
 * @method void setMetaFields(array $MetaFields) Set <p>Metadata information list. Valid values: __SOURCE__, __FILENAME__<br>, __TIMESTAMP__, __HOSTNAME__, __PKGID__<br>When Format is 0, this field does not need to be assigned a value</p>
 * @method integer getTagTransaction() Obtain <p>Tag data processing method. 1: Not flattened (default); 2: Flattened.</p><p>Not flattened example:<br>TAG information: <code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>Not flattened: <code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code></p><p>Flattened example:<br>TAG information: <code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>Flattened: <code>{&quot;__TAG__.fieldA&quot;:200,&quot;__TAG__.fieldB&quot;:&quot;text&quot;}</code></p>
 * @method void setTagTransaction(integer $TagTransaction) Set <p>Tag data processing method. 1: Not flattened (default); 2: Flattened.</p><p>Not flattened example:<br>TAG information: <code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>Not flattened: <code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code></p><p>Flattened example:<br>TAG information: <code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>Flattened: <code>{&quot;__TAG__.fieldA&quot;:200,&quot;__TAG__.fieldB&quot;:&quot;text&quot;}</code></p>
 * @method integer getJsonType() Obtain <p>Consumption data Json format:<br>1: Not escaped (default format)<br>2: Escaped</p><p>Delivery Json format.<br>When JsonType is 1: Consistent with the original log, not escaped. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Delivered to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></p><p>When JsonType is 2: Escaped. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Delivered to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></p>
 * @method void setJsonType(integer $JsonType) Set <p>Consumption data Json format:<br>1: Not escaped (default format)<br>2: Escaped</p><p>Delivery Json format.<br>When JsonType is 1: Consistent with the original log, not escaped. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Delivered to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></p><p>When JsonType is 2: Escaped. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Delivered to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></p>
 * @method boolean getAutoConvertNumber() Obtain <p>Switch for automatic conversion of numeric types</p><p>Valid values:</p><ul><li>true: Numeric strings (such as &quot;123&quot;) in the first-level values of the JSON structure are automatically converted to numeric types (int/float).</li><li>false: Numeric strings (such as &quot;123&quot;) in the first-level values of the JSON structure remain strings.</li></ul><p>Default value: false</p>
 * @method void setAutoConvertNumber(boolean $AutoConvertNumber) Set <p>Switch for automatic conversion of numeric types</p><p>Valid values:</p><ul><li>true: Numeric strings (such as &quot;123&quot;) in the first-level values of the JSON structure are automatically converted to numeric types (int/float).</li><li>false: Numeric strings (such as &quot;123&quot;) in the first-level values of the JSON structure remain strings.</li></ul><p>Default value: false</p>
 */
class KafkaConsumerContent extends AbstractModel
{
    /**
     * @var integer <p>Consumption data format. 0: Raw content; 1: JSON.</p>
     */
    public $Format;

    /**
     * @var boolean <p>Whether to deliver TAG information<br>When Format is 0, this field does not need to be assigned a value</p>
     */
    public $EnableTag;

    /**
     * @var array <p>Metadata information list. Valid values: __SOURCE__, __FILENAME__<br>, __TIMESTAMP__, __HOSTNAME__, __PKGID__<br>When Format is 0, this field does not need to be assigned a value</p>
     */
    public $MetaFields;

    /**
     * @var integer <p>Tag data processing method. 1: Not flattened (default); 2: Flattened.</p><p>Not flattened example:<br>TAG information: <code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>Not flattened: <code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code></p><p>Flattened example:<br>TAG information: <code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>Flattened: <code>{&quot;__TAG__.fieldA&quot;:200,&quot;__TAG__.fieldB&quot;:&quot;text&quot;}</code></p>
     */
    public $TagTransaction;

    /**
     * @var integer <p>Consumption data Json format:<br>1: Not escaped (default format)<br>2: Escaped</p><p>Delivery Json format.<br>When JsonType is 1: Consistent with the original log, not escaped. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Delivered to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></p><p>When JsonType is 2: Escaped. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Delivered to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></p>
     */
    public $JsonType;

    /**
     * @var boolean <p>Switch for automatic conversion of numeric types</p><p>Valid values:</p><ul><li>true: Numeric strings (such as &quot;123&quot;) in the first-level values of the JSON structure are automatically converted to numeric types (int/float).</li><li>false: Numeric strings (such as &quot;123&quot;) in the first-level values of the JSON structure remain strings.</li></ul><p>Default value: false</p>
     */
    public $AutoConvertNumber;

    /**
     * @param integer $Format <p>Consumption data format. 0: Raw content; 1: JSON.</p>
     * @param boolean $EnableTag <p>Whether to deliver TAG information<br>When Format is 0, this field does not need to be assigned a value</p>
     * @param array $MetaFields <p>Metadata information list. Valid values: __SOURCE__, __FILENAME__<br>, __TIMESTAMP__, __HOSTNAME__, __PKGID__<br>When Format is 0, this field does not need to be assigned a value</p>
     * @param integer $TagTransaction <p>Tag data processing method. 1: Not flattened (default); 2: Flattened.</p><p>Not flattened example:<br>TAG information: <code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>Not flattened: <code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code></p><p>Flattened example:<br>TAG information: <code>{&quot;__TAG__&quot;:{&quot;fieldA&quot;:200,&quot;fieldB&quot;:&quot;text&quot;}}</code><br>Flattened: <code>{&quot;__TAG__.fieldA&quot;:200,&quot;__TAG__.fieldB&quot;:&quot;text&quot;}</code></p>
     * @param integer $JsonType <p>Consumption data Json format:<br>1: Not escaped (default format)<br>2: Escaped</p><p>Delivery Json format.<br>When JsonType is 1: Consistent with the original log, not escaped. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Delivered to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code></p><p>When JsonType is 2: Escaped. Example:<br>Original log: <code>{&quot;a&quot;:&quot;aa&quot;, &quot;b&quot;:{&quot;b1&quot;:&quot;b1b1&quot;, &quot;c1&quot;:&quot;c1c1&quot;}}</code><br>Delivered to Ckafka: <code>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;{\&quot;b1\&quot;:\&quot;b1b1\&quot;, \&quot;c1\&quot;:\&quot;c1c1\&quot;}&quot;}</code></p>
     * @param boolean $AutoConvertNumber <p>Switch for automatic conversion of numeric types</p><p>Valid values:</p><ul><li>true: Numeric strings (such as &quot;123&quot;) in the first-level values of the JSON structure are automatically converted to numeric types (int/float).</li><li>false: Numeric strings (such as &quot;123&quot;) in the first-level values of the JSON structure remain strings.</li></ul><p>Default value: false</p>
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

        if (array_key_exists("AutoConvertNumber",$param) and $param["AutoConvertNumber"] !== null) {
            $this->AutoConvertNumber = $param["AutoConvertNumber"];
        }
    }
}
