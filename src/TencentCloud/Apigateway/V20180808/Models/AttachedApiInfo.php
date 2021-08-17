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
 * Information of the API bound with the plugin
 *
 * @method string getServiceId() Obtain ID of the service to which the API belongs
 * @method void setServiceId(string $ServiceId) Set ID of the service to which the API belongs
 * @method string getServiceName() Obtain Name of the service to which the API belongs
 * @method void setServiceName(string $ServiceName) Set Name of the service to which the API belongs
 * @method string getServiceDesc() Obtain Description of the service to which the API belongs
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceDesc(string $ServiceDesc) Set Description of the service to which the API belongs
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiId() Obtain API ID
 * @method void setApiId(string $ApiId) Set API ID
 * @method string getApiName() Obtain API name
 * @method void setApiName(string $ApiName) Set API name
 * @method string getApiDesc() Obtain API description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiDesc(string $ApiDesc) Set API description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEnvironment() Obtain Environment of the API bound with the plugin
 * @method void setEnvironment(string $Environment) Set Environment of the API bound with the plugin
 * @method string getAttachedTime() Obtain Time when the plugin was bound to the API
 * @method void setAttachedTime(string $AttachedTime) Set Time when the plugin was bound to the API
 */
class AttachedApiInfo extends AbstractModel
{
    /**
     * @var string ID of the service to which the API belongs
     */
    public $ServiceId;

    /**
     * @var string Name of the service to which the API belongs
     */
    public $ServiceName;

    /**
     * @var string Description of the service to which the API belongs
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceDesc;

    /**
     * @var string API ID
     */
    public $ApiId;

    /**
     * @var string API name
     */
    public $ApiName;

    /**
     * @var string API description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiDesc;

    /**
     * @var string Environment of the API bound with the plugin
     */
    public $Environment;

    /**
     * @var string Time when the plugin was bound to the API
     */
    public $AttachedTime;

    /**
     * @param string $ServiceId ID of the service to which the API belongs
     * @param string $ServiceName Name of the service to which the API belongs
     * @param string $ServiceDesc Description of the service to which the API belongs
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiId API ID
     * @param string $ApiName API name
     * @param string $ApiDesc API description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Environment Environment of the API bound with the plugin
     * @param string $AttachedTime Time when the plugin was bound to the API
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

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiDesc",$param) and $param["ApiDesc"] !== null) {
            $this->ApiDesc = $param["ApiDesc"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("AttachedTime",$param) and $param["AttachedTime"] !== null) {
            $this->AttachedTime = $param["AttachedTime"];
        }
    }
}
