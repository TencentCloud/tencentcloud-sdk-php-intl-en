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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Return of API creation
 *
 * @method string getApiId() Obtain API ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiId(string $ApiId) Set API ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain path
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set path
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMethod() Obtain method
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMethod(string $Method) Set method
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 */
class CreateApiRsp extends AbstractModel
{
    /**
     * @var string API ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiId;

    /**
     * @var string path
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var string method
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Method;

    /**
     * @var string Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @param string $ApiId API ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Path path
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Method method
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
