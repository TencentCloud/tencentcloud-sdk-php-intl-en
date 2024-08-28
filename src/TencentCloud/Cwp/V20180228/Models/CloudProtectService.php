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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getType() Obtain Type: new purchase in this case
 * @method void setType(string $Type) Set Type: new purchase in this case
 * @method string getConfig() Obtain Configuration: information of purchased configuration
 * @method void setConfig(string $Config) Set Configuration: information of purchased configuration
 * @method string getServiceName() Obtain Service name
 * @method void setServiceName(string $ServiceName) Set Service name
 * @method string getBeginTime() Obtain Time of purchase
 * @method void setBeginTime(string $BeginTime) Set Time of purchase
 */
class CloudProtectService extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Type: new purchase in this case
     */
    public $Type;

    /**
     * @var string Configuration: information of purchased configuration
     */
    public $Config;

    /**
     * @var string Service name
     */
    public $ServiceName;

    /**
     * @var string Time of purchase
     */
    public $BeginTime;

    /**
     * @param string $ResourceId Resource ID
     * @param string $Type Type: new purchase in this case
     * @param string $Config Configuration: information of purchased configuration
     * @param string $ServiceName Service name
     * @param string $BeginTime Time of purchase
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }
    }
}
