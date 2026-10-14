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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Widget action submission structure for the dialogue side
 *
 * @method string getWidgetId() Obtain Widget configuration ID
 * @method void setWidgetId(string $WidgetId) Set Widget configuration ID
 * @method string getWidgetRunId() Obtain Widget instance ID
 * @method void setWidgetRunId(string $WidgetRunId) Set Widget instance ID
 * @method string getActionType() Obtain Widget action
 * @method void setActionType(string $ActionType) Set Widget action
 * @method string getPayload() Obtain Data submitted by the Widget action
 * @method void setPayload(string $Payload) Set Data submitted by the Widget action
 */
class WidgetAction extends AbstractModel
{
    /**
     * @var string Widget configuration ID
     */
    public $WidgetId;

    /**
     * @var string Widget instance ID
     */
    public $WidgetRunId;

    /**
     * @var string Widget action
     */
    public $ActionType;

    /**
     * @var string Data submitted by the Widget action
     */
    public $Payload;

    /**
     * @param string $WidgetId Widget configuration ID
     * @param string $WidgetRunId Widget instance ID
     * @param string $ActionType Widget action
     * @param string $Payload Data submitted by the Widget action
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
        if (array_key_exists("WidgetId",$param) and $param["WidgetId"] !== null) {
            $this->WidgetId = $param["WidgetId"];
        }

        if (array_key_exists("WidgetRunId",$param) and $param["WidgetRunId"] !== null) {
            $this->WidgetRunId = $param["WidgetRunId"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }
    }
}
