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
 * Visualized emergency notification on the large screen
 *
 * @method string getTitle() Obtain Notification tag/title
 * @method void setTitle(string $Title) Set Notification tag/title
 * @method string getText() Obtain Notification content
 * @method void setText(string $Text) Set Notification content
 * @method integer getType() Obtain Redirection type: 0=vulnerability management
 * @method void setType(integer $Type) Set Redirection type: 0=vulnerability management
 */
class ScreenEmergentMsg extends AbstractModel
{
    /**
     * @var string Notification tag/title
     */
    public $Title;

    /**
     * @var string Notification content
     */
    public $Text;

    /**
     * @var integer Redirection type: 0=vulnerability management
     */
    public $Type;

    /**
     * @param string $Title Notification tag/title
     * @param string $Text Notification content
     * @param integer $Type Redirection type: 0=vulnerability management
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
