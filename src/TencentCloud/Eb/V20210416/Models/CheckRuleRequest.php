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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckRule request structure.
 *
 * @method string getEvent() Obtain 
 * @method void setEvent(string $Event) Set 
 * @method string getEventPattern() Obtain 
 * @method void setEventPattern(string $EventPattern) Set 
 */
class CheckRuleRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Event;

    /**
     * @var string 
     */
    public $EventPattern;

    /**
     * @param string $Event 
     * @param string $EventPattern 
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
        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("EventPattern",$param) and $param["EventPattern"] !== null) {
            $this->EventPattern = $param["EventPattern"];
        }
    }
}
