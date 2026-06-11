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
 * CreateLogset request structure.
 *
 * @method string getLogsetName() Obtain Log set name.

-Supports a maximum of 255 characters. The `|` character is not supported.
 * @method void setLogsetName(string $LogsetName) Set Log set name.

-Supports a maximum of 255 characters. The `|` character is not supported.
 * @method array getTags() Obtain Tag description list. Up to 10 tag key-value pairs are supported and must be unique.
 * @method void setTags(array $Tags) Set Tag description list. Up to 10 tag key-value pairs are supported and must be unique.
 * @method string getLogsetId() Obtain Logset ID, format: custom part-User APPID. Automatically generate ID if left empty.

-The custom part only supports lowercase letters, digits, and -, cannot start or end with -, and has a length of 3 to 40 characters.
-The end requires the use of - to concatenate the User APPID, which can be queried on the https://console.cloud.tencent.com/developer page.
-If you specify this field, ensure uniqueness across all regions.
 * @method void setLogsetId(string $LogsetId) Set Logset ID, format: custom part-User APPID. Automatically generate ID if left empty.

-The custom part only supports lowercase letters, digits, and -, cannot start or end with -, and has a length of 3 to 40 characters.
-The end requires the use of - to concatenate the User APPID, which can be queried on the https://console.cloud.tencent.com/developer page.
-If you specify this field, ensure uniqueness across all regions.
 */
class CreateLogsetRequest extends AbstractModel
{
    /**
     * @var string Log set name.

-Supports a maximum of 255 characters. The `|` character is not supported.
     */
    public $LogsetName;

    /**
     * @var array Tag description list. Up to 10 tag key-value pairs are supported and must be unique.
     */
    public $Tags;

    /**
     * @var string Logset ID, format: custom part-User APPID. Automatically generate ID if left empty.

-The custom part only supports lowercase letters, digits, and -, cannot start or end with -, and has a length of 3 to 40 characters.
-The end requires the use of - to concatenate the User APPID, which can be queried on the https://console.cloud.tencent.com/developer page.
-If you specify this field, ensure uniqueness across all regions.
     */
    public $LogsetId;

    /**
     * @param string $LogsetName Log set name.

-Supports a maximum of 255 characters. The `|` character is not supported.
     * @param array $Tags Tag description list. Up to 10 tag key-value pairs are supported and must be unique.
     * @param string $LogsetId Logset ID, format: custom part-User APPID. Automatically generate ID if left empty.

-The custom part only supports lowercase letters, digits, and -, cannot start or end with -, and has a length of 3 to 40 characters.
-The end requires the use of - to concatenate the User APPID, which can be queried on the https://console.cloud.tencent.com/developer page.
-If you specify this field, ensure uniqueness across all regions.
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
        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }
    }
}
