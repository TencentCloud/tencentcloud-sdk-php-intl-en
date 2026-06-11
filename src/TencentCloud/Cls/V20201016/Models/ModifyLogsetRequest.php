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
 * ModifyLogset request structure.
 *
 * @method string getLogsetId() Obtain Log Set Id. It can be obtained through the [logset list](https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1).
 * @method void setLogsetId(string $LogsetId) Set Log Set Id. It can be obtained through the [logset list](https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1).
 * @method string getLogsetName() Obtain Log set name. Supports a maximum of 255 characters. Unsupported character: `|`.
 * @method void setLogsetName(string $LogsetName) Set Log set name. Supports a maximum of 255 characters. Unsupported character: `|`.
 * @method array getTags() Obtain Tag key-value pair bound to logset. Up to 10 tag key-value pairs are supported, and a resource can be bound to only one tag key at any time.
 * @method void setTags(array $Tags) Set Tag key-value pair bound to logset. Up to 10 tag key-value pairs are supported, and a resource can be bound to only one tag key at any time.
 */
class ModifyLogsetRequest extends AbstractModel
{
    /**
     * @var string Log Set Id. It can be obtained through the [logset list](https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1).
     */
    public $LogsetId;

    /**
     * @var string Log set name. Supports a maximum of 255 characters. Unsupported character: `|`.
     */
    public $LogsetName;

    /**
     * @var array Tag key-value pair bound to logset. Up to 10 tag key-value pairs are supported, and a resource can be bound to only one tag key at any time.
     */
    public $Tags;

    /**
     * @param string $LogsetId Log Set Id. It can be obtained through the [logset list](https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1).
     * @param string $LogsetName Log set name. Supports a maximum of 255 characters. Unsupported character: `|`.
     * @param array $Tags Tag key-value pair bound to logset. Up to 10 tag key-value pairs are supported, and a resource can be bound to only one tag key at any time.
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
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
    }
}
