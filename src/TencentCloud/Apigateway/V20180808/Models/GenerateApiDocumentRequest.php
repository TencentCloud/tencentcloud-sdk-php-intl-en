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
 * GenerateApiDocument request structure.
 *
 * @method string getServiceId() Obtain Unique service ID of the document to be created.
 * @method void setServiceId(string $ServiceId) Set Unique service ID of the document to be created.
 * @method string getGenEnvironment() Obtain Environment of the service for which to create an SDK.
 * @method void setGenEnvironment(string $GenEnvironment) Set Environment of the service for which to create an SDK.
 * @method string getGenLanguage() Obtain Programming language of the SDK to be created. Currently, only Python and JavaScript are supported.
 * @method void setGenLanguage(string $GenLanguage) Set Programming language of the SDK to be created. Currently, only Python and JavaScript are supported.
 */
class GenerateApiDocumentRequest extends AbstractModel
{
    /**
     * @var string Unique service ID of the document to be created.
     */
    public $ServiceId;

    /**
     * @var string Environment of the service for which to create an SDK.
     */
    public $GenEnvironment;

    /**
     * @var string Programming language of the SDK to be created. Currently, only Python and JavaScript are supported.
     */
    public $GenLanguage;

    /**
     * @param string $ServiceId Unique service ID of the document to be created.
     * @param string $GenEnvironment Environment of the service for which to create an SDK.
     * @param string $GenLanguage Programming language of the SDK to be created. Currently, only Python and JavaScript are supported.
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

        if (array_key_exists("GenEnvironment",$param) and $param["GenEnvironment"] !== null) {
            $this->GenEnvironment = $param["GenEnvironment"];
        }

        if (array_key_exists("GenLanguage",$param) and $param["GenLanguage"] !== null) {
            $this->GenLanguage = $param["GenLanguage"];
        }
    }
}
