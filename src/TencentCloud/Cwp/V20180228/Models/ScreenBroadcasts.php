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
 * Visualized security report on the large screen
 *
 * @method string getTitle() Obtain Security report article title
 * @method void setTitle(string $Title) Set Security report article title
 * @method integer getLevel() Obtain Severity level of security report article: 0: none; 1: critical; 2: high-risk; 3: medium-risk; 4: low-risk
 * @method void setLevel(integer $Level) Set Severity level of security report article: 0: none; 1: critical; 2: high-risk; 3: medium-risk; 4: low-risk
 * @method string getTime() Obtain Release time
 * @method void setTime(string $Time) Set Release time
 * @method integer getId() Obtain Article ID
 * @method void setId(integer $Id) Set Article ID
 */
class ScreenBroadcasts extends AbstractModel
{
    /**
     * @var string Security report article title
     */
    public $Title;

    /**
     * @var integer Severity level of security report article: 0: none; 1: critical; 2: high-risk; 3: medium-risk; 4: low-risk
     */
    public $Level;

    /**
     * @var string Release time
     */
    public $Time;

    /**
     * @var integer Article ID
     */
    public $Id;

    /**
     * @param string $Title Security report article title
     * @param integer $Level Severity level of security report article: 0: none; 1: critical; 2: high-risk; 3: medium-risk; 4: low-risk
     * @param string $Time Release time
     * @param integer $Id Article ID
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

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
