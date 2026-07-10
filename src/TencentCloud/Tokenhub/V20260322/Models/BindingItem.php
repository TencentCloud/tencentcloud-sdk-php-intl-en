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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bind Resource
 *
 * @method string getResourceId() Obtain Resource ID (model ID or service ID).
 * @method void setResourceId(string $ResourceId) Set Resource ID (model ID or service ID).
 * @method string getResourceType() Obtain Resource type. Value: endpoint (service), model (model).
 * @method void setResourceType(string $ResourceType) Set Resource type. Value: endpoint (service), model (model).
 * @method string getStatus() Obtain Resource status
 * @method void setStatus(string $Status) Set Resource status
 */
class BindingItem extends AbstractModel
{
    /**
     * @var string Resource ID (model ID or service ID).
     */
    public $ResourceId;

    /**
     * @var string Resource type. Value: endpoint (service), model (model).
     */
    public $ResourceType;

    /**
     * @var string Resource status
     */
    public $Status;

    /**
     * @param string $ResourceId Resource ID (model ID or service ID).
     * @param string $ResourceType Resource type. Value: endpoint (service), model (model).
     * @param string $Status Resource status
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
