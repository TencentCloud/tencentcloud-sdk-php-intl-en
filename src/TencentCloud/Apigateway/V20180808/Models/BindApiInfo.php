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
 * Information of the API bound with the upstream
 *
 * @method string getApiId() Obtain Unique API ID.
 * @method void setApiId(string $ApiId) Set Unique API ID.
 * @method string getServiceId() Obtain Unique ID of the service
 * @method void setServiceId(string $ServiceId) Set Unique ID of the service
 * @method string getApiName() Obtain API name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setApiName(string $ApiName) Set API name
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getServiceName() Obtain Service name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setServiceName(string $ServiceName) Set Service name
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getBindTime() Obtain Bound At
 * @method void setBindTime(string $BindTime) Set Bound At
 */
class BindApiInfo extends AbstractModel
{
    /**
     * @var string Unique API ID.
     */
    public $ApiId;

    /**
     * @var string Unique ID of the service
     */
    public $ServiceId;

    /**
     * @var string API name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ApiName;

    /**
     * @var string Service name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ServiceName;

    /**
     * @var string Bound At
     */
    public $BindTime;

    /**
     * @param string $ApiId Unique API ID.
     * @param string $ServiceId Unique ID of the service
     * @param string $ApiName API name
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $ServiceName Service name
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $BindTime Bound At
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

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("BindTime",$param) and $param["BindTime"] !== null) {
            $this->BindTime = $param["BindTime"];
        }
    }
}
