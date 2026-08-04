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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OperateInferenceService request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getServiceId() Obtain ID of the inference service.
 * @method void setServiceId(string $ServiceId) Set ID of the inference service.
 * @method string getOperation() Obtain Operation type, including the following: <li>Stop: stop;</li><li>Resume: start up;</li><li>Delete: delete.</li>
 * @method void setOperation(string $Operation) Set Operation type, including the following: <li>Stop: stop;</li><li>Resume: start up;</li><li>Delete: delete.</li>
 */
class OperateInferenceServiceRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string ID of the inference service.
     */
    public $ServiceId;

    /**
     * @var string Operation type, including the following: <li>Stop: stop;</li><li>Resume: start up;</li><li>Delete: delete.</li>
     */
    public $Operation;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $ServiceId ID of the inference service.
     * @param string $Operation Operation type, including the following: <li>Stop: stop;</li><li>Resume: start up;</li><li>Delete: delete.</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
