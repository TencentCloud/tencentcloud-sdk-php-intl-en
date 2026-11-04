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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Widget component content information
 *
 * @method string getEncodedWidget() Obtain <p>Base64-encoded original widget data</p>
 * @method void setEncodedWidget(string $EncodedWidget) Set <p>Base64-encoded original widget data</p>
 * @method string getPayload() Obtain <p>payload from the user's last submission</p>
 * @method void setPayload(string $Payload) Set <p>payload from the user's last submission</p>
 * @method integer getPosition() Obtain <p>Location of the widget in the text</p>
 * @method void setPosition(integer $Position) Set <p>Location of the widget in the text</p>
 * @method string getState() Obtain <p>widget status JSON data</p>
 * @method void setState(string $State) Set <p>widget status JSON data</p>
 * @method string getView() Obtain <p>widget view data</p>
 * @method void setView(string $View) Set <p>widget view data</p>
 * @method string getWidgetId() Obtain <p>component_ID</p>
 * @method void setWidgetId(string $WidgetId) Set <p>component_ID</p>
 * @method string getWidgetRunId() Obtain <p>Component operation ID</p>
 * @method void setWidgetRunId(string $WidgetRunId) Set <p>Component operation ID</p>
 */
class ConversationWidget extends AbstractModel
{
    /**
     * @var string <p>Base64-encoded original widget data</p>
     */
    public $EncodedWidget;

    /**
     * @var string <p>payload from the user's last submission</p>
     */
    public $Payload;

    /**
     * @var integer <p>Location of the widget in the text</p>
     */
    public $Position;

    /**
     * @var string <p>widget status JSON data</p>
     */
    public $State;

    /**
     * @var string <p>widget view data</p>
     */
    public $View;

    /**
     * @var string <p>component_ID</p>
     */
    public $WidgetId;

    /**
     * @var string <p>Component operation ID</p>
     */
    public $WidgetRunId;

    /**
     * @param string $EncodedWidget <p>Base64-encoded original widget data</p>
     * @param string $Payload <p>payload from the user's last submission</p>
     * @param integer $Position <p>Location of the widget in the text</p>
     * @param string $State <p>widget status JSON data</p>
     * @param string $View <p>widget view data</p>
     * @param string $WidgetId <p>component_ID</p>
     * @param string $WidgetRunId <p>Component operation ID</p>
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
        if (array_key_exists("EncodedWidget",$param) and $param["EncodedWidget"] !== null) {
            $this->EncodedWidget = $param["EncodedWidget"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("WidgetId",$param) and $param["WidgetId"] !== null) {
            $this->WidgetId = $param["WidgetId"];
        }

        if (array_key_exists("WidgetRunId",$param) and $param["WidgetRunId"] !== null) {
            $this->WidgetRunId = $param["WidgetRunId"];
        }
    }
}
