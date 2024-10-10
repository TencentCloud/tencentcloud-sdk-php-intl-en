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
 * ModifyAPIDoc request structure.
 *
 * @method string getApiDocName() Obtain API document name
 * @method void setApiDocName(string $ApiDocName) Set API document name
 * @method string getServiceId() Obtain Service name
 * @method void setServiceId(string $ServiceId) Set Service name
 * @method string getEnvironment() Obtain Environment name
 * @method void setEnvironment(string $Environment) Set Environment name
 * @method array getApiIds() Obtain List of APIs for which to generate documents
 * @method void setApiIds(array $ApiIds) Set List of APIs for which to generate documents
 * @method string getApiDocId() Obtain API document ID
 * @method void setApiDocId(string $ApiDocId) Set API document ID
 */
class ModifyAPIDocRequest extends AbstractModel
{
    /**
     * @var string API document name
     */
    public $ApiDocName;

    /**
     * @var string Service name
     */
    public $ServiceId;

    /**
     * @var string Environment name
     */
    public $Environment;

    /**
     * @var array List of APIs for which to generate documents
     */
    public $ApiIds;

    /**
     * @var string API document ID
     */
    public $ApiDocId;

    /**
     * @param string $ApiDocName API document name
     * @param string $ServiceId Service name
     * @param string $Environment Environment name
     * @param array $ApiIds List of APIs for which to generate documents
     * @param string $ApiDocId API document ID
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
        if (array_key_exists("ApiDocName",$param) and $param["ApiDocName"] !== null) {
            $this->ApiDocName = $param["ApiDocName"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }

        if (array_key_exists("ApiDocId",$param) and $param["ApiDocId"] !== null) {
            $this->ApiDocId = $param["ApiDocId"];
        }
    }
}
