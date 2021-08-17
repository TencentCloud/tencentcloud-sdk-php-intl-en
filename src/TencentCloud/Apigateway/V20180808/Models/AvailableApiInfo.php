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
 * Information of the APIs that can use this plugin
 *
 * @method string getApiId() Obtain API ID
 * @method void setApiId(string $ApiId) Set API ID
 * @method string getApiName() Obtain API name
 * @method void setApiName(string $ApiName) Set API name
 * @method string getApiType() Obtain API type
 * @method void setApiType(string $ApiType) Set API type
 * @method string getPath() Obtain API path
 * @method void setPath(string $Path) Set API path
 * @method string getMethod() Obtain API method
 * @method void setMethod(string $Method) Set API method
 * @method boolean getAttachedOtherPlugin() Obtain Whether the API is bound with another plugin
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAttachedOtherPlugin(boolean $AttachedOtherPlugin) Set Whether the API is bound with another plugin
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsAttached() Obtain Whether the API is bound with the current plugin
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsAttached(boolean $IsAttached) Set Whether the API is bound with the current plugin
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AvailableApiInfo extends AbstractModel
{
    /**
     * @var string API ID
     */
    public $ApiId;

    /**
     * @var string API name
     */
    public $ApiName;

    /**
     * @var string API type
     */
    public $ApiType;

    /**
     * @var string API path
     */
    public $Path;

    /**
     * @var string API method
     */
    public $Method;

    /**
     * @var boolean Whether the API is bound with another plugin
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AttachedOtherPlugin;

    /**
     * @var boolean Whether the API is bound with the current plugin
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsAttached;

    /**
     * @param string $ApiId API ID
     * @param string $ApiName API name
     * @param string $ApiType API type
     * @param string $Path API path
     * @param string $Method API method
     * @param boolean $AttachedOtherPlugin Whether the API is bound with another plugin
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsAttached Whether the API is bound with the current plugin
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

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("AttachedOtherPlugin",$param) and $param["AttachedOtherPlugin"] !== null) {
            $this->AttachedOtherPlugin = $param["AttachedOtherPlugin"];
        }

        if (array_key_exists("IsAttached",$param) and $param["IsAttached"] !== null) {
            $this->IsAttached = $param["IsAttached"];
        }
    }
}
