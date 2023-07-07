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
 * JSON type description
 *
 * @method boolean getEnableTag() Obtain Enablement flag
 * @method void setEnableTag(boolean $EnableTag) Set Enablement flag
 * @method array getMetaFields() Obtain List of metadata. Supported metadata types: __SOURCE__, __FILENAME__, __TIMESTAMP__, __HOSTNAME__.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetaFields(array $MetaFields) Set List of metadata. Supported metadata types: __SOURCE__, __FILENAME__, __TIMESTAMP__, __HOSTNAME__.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getJsonType() Obtain JSON format for shipping. `0`: String format; `1`: Structured format.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJsonType(integer $JsonType) Set JSON format for shipping. `0`: String format; `1`: Structured format.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class JsonInfo extends AbstractModel
{
    /**
     * @var boolean Enablement flag
     */
    public $EnableTag;

    /**
     * @var array List of metadata. Supported metadata types: __SOURCE__, __FILENAME__, __TIMESTAMP__, __HOSTNAME__.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetaFields;

    /**
     * @var integer JSON format for shipping. `0`: String format; `1`: Structured format.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JsonType;

    /**
     * @param boolean $EnableTag Enablement flag
     * @param array $MetaFields List of metadata. Supported metadata types: __SOURCE__, __FILENAME__, __TIMESTAMP__, __HOSTNAME__.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $JsonType JSON format for shipping. `0`: String format; `1`: Structured format.
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

        if (array_key_exists("JsonType",$param) and $param["JsonType"] !== null) {
            $this->JsonType = $param["JsonType"];
        }
    }
}
