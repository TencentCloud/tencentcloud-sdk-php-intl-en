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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGrafanaIntegration request structure.
 *
 * @method string getInstanceId() Obtain Instance name
 * @method void setInstanceId(string $InstanceId) Set Instance name
 * @method string getKind() Obtain Type
 * @method void setKind(string $Kind) Set Type
 * @method string getContent() Obtain Configuration
 * @method void setContent(string $Content) Set Configuration
 */
class CreateGrafanaIntegrationRequest extends AbstractModel
{
    /**
     * @var string Instance name
     */
    public $InstanceId;

    /**
     * @var string Type
     */
    public $Kind;

    /**
     * @var string Configuration
     */
    public $Content;

    /**
     * @param string $InstanceId Instance name
     * @param string $Kind Type
     * @param string $Content Configuration
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
