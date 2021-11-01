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
 * Callback address
 *
 * @method string getUrl() Obtain Callback address
 * @method void setUrl(string $Url) Set Callback address
 * @method string getCallbackType() Obtain Callback type. Valid values:
<br><li> WeCom
<br><li> Http
 * @method void setCallbackType(string $CallbackType) Set Callback type. Valid values:
<br><li> WeCom
<br><li> Http
 * @method string getMethod() Obtain Callback method. Valid values:
<br><li> POST
<br><li> PUT
Default value: `POST`. This parameter is required if `CallbackType` is `Http`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMethod(string $Method) Set Callback method. Valid values:
<br><li> POST
<br><li> PUT
Default value: `POST`. This parameter is required if `CallbackType` is `Http`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getHeaders() Obtain Request header
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setHeaders(array $Headers) Set Request header
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getBody() Obtain Request content, which is required when `CallbackType` is `Http`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBody(string $Body) Set Request content, which is required when `CallbackType` is `Http`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getIndex() Obtain Number
 * @method void setIndex(integer $Index) Set Number
 */
class WebCallback extends AbstractModel
{
    /**
     * @var string Callback address
     */
    public $Url;

    /**
     * @var string Callback type. Valid values:
<br><li> WeCom
<br><li> Http
     */
    public $CallbackType;

    /**
     * @var string Callback method. Valid values:
<br><li> POST
<br><li> PUT
Default value: `POST`. This parameter is required if `CallbackType` is `Http`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Method;

    /**
     * @var array Request header
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Headers;

    /**
     * @var string Request content, which is required when `CallbackType` is `Http`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Body;

    /**
     * @var integer Number
     */
    public $Index;

    /**
     * @param string $Url Callback address
     * @param string $CallbackType Callback type. Valid values:
<br><li> WeCom
<br><li> Http
     * @param string $Method Callback method. Valid values:
<br><li> POST
<br><li> PUT
Default value: `POST`. This parameter is required if `CallbackType` is `Http`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $Headers Request header
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Body Request content, which is required when `CallbackType` is `Http`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Index Number
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("CallbackType",$param) and $param["CallbackType"] !== null) {
            $this->CallbackType = $param["CallbackType"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
