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
 * Splunk task submission meta information
 *
 * @method string getFormat() Obtain data format, rawlog/json
 * @method void setFormat(string $Format) Set data format, rawlog/json
 * @method array getMetaFields() Obtain Fields to be delivered, including __SOURCE__, __FILENAME__
,\_\_TIMESTAMP\_\_,\_\_HOSTNAME\_\_,\_\_PKG\_ID\_\_
 * @method void setMetaFields(array $MetaFields) Set Fields to be delivered, including __SOURCE__, __FILENAME__
,\_\_TIMESTAMP\_\_,\_\_HOSTNAME\_\_,\_\_PKG\_ID\_\_
 * @method boolean getEnableTag() Obtain Whether to deliver the __TAG__ field
 * @method void setEnableTag(boolean $EnableTag) Set Whether to deliver the __TAG__ field
 * @method boolean getTagJsonTiled() Obtain Whether JSON is flattened. Required when delivering the __TAG__ field.
 * @method void setTagJsonTiled(boolean $TagJsonTiled) Set Whether JSON is flattened. Required when delivering the __TAG__ field.
 */
class MetadataInfo extends AbstractModel
{
    /**
     * @var string data format, rawlog/json
     */
    public $Format;

    /**
     * @var array Fields to be delivered, including __SOURCE__, __FILENAME__
,\_\_TIMESTAMP\_\_,\_\_HOSTNAME\_\_,\_\_PKG\_ID\_\_
     */
    public $MetaFields;

    /**
     * @var boolean Whether to deliver the __TAG__ field
     */
    public $EnableTag;

    /**
     * @var boolean Whether JSON is flattened. Required when delivering the __TAG__ field.
     */
    public $TagJsonTiled;

    /**
     * @param string $Format data format, rawlog/json
     * @param array $MetaFields Fields to be delivered, including __SOURCE__, __FILENAME__
,\_\_TIMESTAMP\_\_,\_\_HOSTNAME\_\_,\_\_PKG\_ID\_\_
     * @param boolean $EnableTag Whether to deliver the __TAG__ field
     * @param boolean $TagJsonTiled Whether JSON is flattened. Required when delivering the __TAG__ field.
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

        if (array_key_exists("MetaFields",$param) and $param["MetaFields"] !== null) {
            $this->MetaFields = $param["MetaFields"];
        }

        if (array_key_exists("EnableTag",$param) and $param["EnableTag"] !== null) {
            $this->EnableTag = $param["EnableTag"];
        }

        if (array_key_exists("TagJsonTiled",$param) and $param["TagJsonTiled"] !== null) {
            $this->TagJsonTiled = $param["TagJsonTiled"];
        }
    }
}
