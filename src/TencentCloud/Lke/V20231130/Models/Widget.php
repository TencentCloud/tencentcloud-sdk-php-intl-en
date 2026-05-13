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
 * 
 *
 * @method string getWidgetId() Obtain 
 * @method void setWidgetId(string $WidgetId) Set 
 * @method string getWidgetRunId() Obtain 
 * @method void setWidgetRunId(string $WidgetRunId) Set 
 * @method string getView() Obtain 
 * @method void setView(string $View) Set 
 * @method string getState() Obtain 
 * @method void setState(string $State) Set 
 * @method integer getPosition() Obtain 
 * @method void setPosition(integer $Position) Set 
 * @method string getEncodedWidget() Obtain 
 * @method void setEncodedWidget(string $EncodedWidget) Set 
 * @method string getPayload() Obtain 
 * @method void setPayload(string $Payload) Set 
 */
class Widget extends AbstractModel
{
    /**
     * @var string 
     */
    public $WidgetId;

    /**
     * @var string 
     */
    public $WidgetRunId;

    /**
     * @var string 
     */
    public $View;

    /**
     * @var string 
     */
    public $State;

    /**
     * @var integer 
     */
    public $Position;

    /**
     * @var string 
     */
    public $EncodedWidget;

    /**
     * @var string 
     */
    public $Payload;

    /**
     * @param string $WidgetId 
     * @param string $WidgetRunId 
     * @param string $View 
     * @param string $State 
     * @param integer $Position 
     * @param string $EncodedWidget 
     * @param string $Payload 
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
