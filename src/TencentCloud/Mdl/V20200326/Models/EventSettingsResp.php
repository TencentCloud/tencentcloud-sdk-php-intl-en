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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information of an event in the plan
 *
 * @method string getEventType() Obtain Only `INPUT_SWITCH` is supported currently.
 * @method void setEventType(string $EventType) Set Only `INPUT_SWITCH` is supported currently.
 * @method string getInputAttachment() Obtain ID of the input attached, which is not empty if `EventType` is `INPUT_SWITCH`
 * @method void setInputAttachment(string $InputAttachment) Set ID of the input attached, which is not empty if `EventType` is `INPUT_SWITCH`
 */
class EventSettingsResp extends AbstractModel
{
    /**
     * @var string Only `INPUT_SWITCH` is supported currently.
     */
    public $EventType;

    /**
     * @var string ID of the input attached, which is not empty if `EventType` is `INPUT_SWITCH`
     */
    public $InputAttachment;

    /**
     * @param string $EventType Only `INPUT_SWITCH` is supported currently.
     * @param string $InputAttachment ID of the input attached, which is not empty if `EventType` is `INPUT_SWITCH`
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("InputAttachment",$param) and $param["InputAttachment"] !== null) {
            $this->InputAttachment = $param["InputAttachment"];
        }
    }
}
