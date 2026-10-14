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
 * Widget structure of the dialogue side
 *
 * @method string getWidgetId() Obtain Widget configuration ID

 * @method void setWidgetId(string $WidgetId) Set Widget configuration ID

 * @method string getWidgetRunId() Obtain Widget instance ID
 * @method void setWidgetRunId(string $WidgetRunId) Set Widget instance ID
 * @method string getView() Obtain Widget display data
 * @method void setView(string $View) Set Widget display data
 * @method string getState() Obtain Widget status information
 * @method void setState(string $State) Set Widget status information
 * @method integer getPosition() Obtain Widget position
 * @method void setPosition(integer $Position) Set Widget position
 * @method string getEncodedWidget() Obtain Base64-encoded Widget information.
 * @method void setEncodedWidget(string $EncodedWidget) Set Base64-encoded Widget information.
 * @method string getPayload() Obtain payload of the user's last submission
 * @method void setPayload(string $Payload) Set payload of the user's last submission
 */
class Widget extends AbstractModel
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
     * @var string Widget display data
     */
    public $View;

    /**
     * @var string Widget status information
     */
    public $State;

    /**
     * @var integer Widget position
     */
    public $Position;

    /**
     * @var string Base64-encoded Widget information.
     */
    public $EncodedWidget;

    /**
     * @var string payload of the user's last submission
     */
    public $Payload;

    /**
     * @param string $WidgetId Widget configuration ID

     * @param string $WidgetRunId Widget instance ID
     * @param string $View Widget display data
     * @param string $State Widget status information
     * @param integer $Position Widget position
     * @param string $EncodedWidget Base64-encoded Widget information.
     * @param string $Payload payload of the user's last submission
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

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("EncodedWidget",$param) and $param["EncodedWidget"] !== null) {
            $this->EncodedWidget = $param["EncodedWidget"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }
    }
}
