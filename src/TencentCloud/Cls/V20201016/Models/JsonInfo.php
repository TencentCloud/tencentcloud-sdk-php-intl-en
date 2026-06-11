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
 * JSON type description
 *
 * @method boolean getEnableTag() Obtain Enablement flag
 * @method void setEnableTag(boolean $EnableTag) Set Enablement flag
 * @method array getMetaFields() Obtain Metadata information list, available values are __SOURCE__, __FILENAME__, __TIMESTAMP__, __HOSTNAME__.

-SOURCE IP for log collection, for example: 10.0.1.2
-__FILENAME__: Log collection file name, for example: /data/log/nginx/access.log
-__TIMESTAMP__: Log timestamp (millisecond-level Unix timestamp). When retrieving logs by time range, the time is automatically used to retrieve logs. It is displayed on the console as "log time", for example: 1640005601188.
-__HOSTNAME__: Log source machine name. Need to use Loglistener 2.7.4 and above versions to capture this field, for example: localhost.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetaFields(array $MetaFields) Set Metadata information list, available values are __SOURCE__, __FILENAME__, __TIMESTAMP__, __HOSTNAME__.

-SOURCE IP for log collection, for example: 10.0.1.2
-__FILENAME__: Log collection file name, for example: /data/log/nginx/access.log
-__TIMESTAMP__: Log timestamp (millisecond-level Unix timestamp). When retrieving logs by time range, the time is automatically used to retrieve logs. It is displayed on the console as "log time", for example: 1640005601188.
-__HOSTNAME__: Log source machine name. Need to use Loglistener 2.7.4 and above versions to capture this field, for example: localhost.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getJsonType() Obtain JSON format for shipping. 0: shipped as a string; 1: shipped in a structured way.
 * @method void setJsonType(integer $JsonType) Set JSON format for shipping. 0: shipped as a string; 1: shipped in a structured way.
 */
class JsonInfo extends AbstractModel
{
    /**
     * @var boolean Enablement flag
     */
    public $EnableTag;

    /**
     * @var array Metadata information list, available values are __SOURCE__, __FILENAME__, __TIMESTAMP__, __HOSTNAME__.

-SOURCE IP for log collection, for example: 10.0.1.2
-__FILENAME__: Log collection file name, for example: /data/log/nginx/access.log
-__TIMESTAMP__: Log timestamp (millisecond-level Unix timestamp). When retrieving logs by time range, the time is automatically used to retrieve logs. It is displayed on the console as "log time", for example: 1640005601188.
-__HOSTNAME__: Log source machine name. Need to use Loglistener 2.7.4 and above versions to capture this field, for example: localhost.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetaFields;

    /**
     * @var integer JSON format for shipping. 0: shipped as a string; 1: shipped in a structured way.
     */
    public $JsonType;

    /**
     * @param boolean $EnableTag Enablement flag
     * @param array $MetaFields Metadata information list, available values are __SOURCE__, __FILENAME__, __TIMESTAMP__, __HOSTNAME__.

-SOURCE IP for log collection, for example: 10.0.1.2
-__FILENAME__: Log collection file name, for example: /data/log/nginx/access.log
-__TIMESTAMP__: Log timestamp (millisecond-level Unix timestamp). When retrieving logs by time range, the time is automatically used to retrieve logs. It is displayed on the console as "log time", for example: 1640005601188.
-__HOSTNAME__: Log source machine name. Need to use Loglistener 2.7.4 and above versions to capture this field, for example: localhost.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $JsonType JSON format for shipping. 0: shipped as a string; 1: shipped in a structured way.
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
