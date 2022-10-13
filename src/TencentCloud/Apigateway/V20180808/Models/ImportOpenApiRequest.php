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
 * ImportOpenApi request structure.
 *
 * @method string getServiceId() Obtain The unique ID of the service associated with the API
 * @method void setServiceId(string $ServiceId) Set The unique ID of the service associated with the API
 * @method string getContent() Obtain Content of the openAPI
 * @method void setContent(string $Content) Set Content of the openAPI
 * @method string getEncodeType() Obtain Format of the content. Values: `YAML` (default), `JSON`
 * @method void setEncodeType(string $EncodeType) Set Format of the content. Values: `YAML` (default), `JSON`
 * @method string getContentVersion() Obtain Version of the content. It can only be `openAPI` for now.
 * @method void setContentVersion(string $ContentVersion) Set Version of the content. It can only be `openAPI` for now.
 */
class ImportOpenApiRequest extends AbstractModel
{
    /**
     * @var string The unique ID of the service associated with the API
     */
    public $ServiceId;

    /**
     * @var string Content of the openAPI
     */
    public $Content;

    /**
     * @var string Format of the content. Values: `YAML` (default), `JSON`
     */
    public $EncodeType;

    /**
     * @var string Version of the content. It can only be `openAPI` for now.
     */
    public $ContentVersion;

    /**
     * @param string $ServiceId The unique ID of the service associated with the API
     * @param string $Content Content of the openAPI
     * @param string $EncodeType Format of the content. Values: `YAML` (default), `JSON`
     * @param string $ContentVersion Version of the content. It can only be `openAPI` for now.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("EncodeType",$param) and $param["EncodeType"] !== null) {
            $this->EncodeType = $param["EncodeType"];
        }

        if (array_key_exists("ContentVersion",$param) and $param["ContentVersion"] !== null) {
            $this->ContentVersion = $param["ContentVersion"];
        }
    }
}
