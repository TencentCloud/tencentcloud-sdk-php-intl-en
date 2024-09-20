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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Field information on the experiment resource object
 *
 * @method string getKey() Obtain instanceId
 * @method void setKey(string $Key) Set instanceId
 * @method string getHeader() Obtain Instance ID
 * @method void setHeader(string $Header) Set Instance ID
 * @method string getTransfer() Obtain Whether the field value needs to be translated. If not, this field returns null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransfer(string $Transfer) Set Whether the field value needs to be translated. If not, this field returns null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJsonParse() Obtain Value returned for container Pod resources
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJsonParse(string $JsonParse) Set Value returned for container Pod resources
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ObjectTypeConfigFields extends AbstractModel
{
    /**
     * @var string instanceId
     */
    public $Key;

    /**
     * @var string Instance ID
     */
    public $Header;

    /**
     * @var string Whether the field value needs to be translated. If not, this field returns null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Transfer;

    /**
     * @var string Value returned for container Pod resources
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JsonParse;

    /**
     * @param string $Key instanceId
     * @param string $Header Instance ID
     * @param string $Transfer Whether the field value needs to be translated. If not, this field returns null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JsonParse Value returned for container Pod resources
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = $param["Header"];
        }

        if (array_key_exists("Transfer",$param) and $param["Transfer"] !== null) {
            $this->Transfer = $param["Transfer"];
        }

        if (array_key_exists("JsonParse",$param) and $param["JsonParse"] !== null) {
            $this->JsonParse = $param["JsonParse"];
        }
    }
}
