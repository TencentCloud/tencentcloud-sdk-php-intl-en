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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatCompletions request structure.
 *
 * @method string getModel() Obtain Model name.
 * @method void setModel(string $Model) Set Model name.
 * @method array getMessages() Obtain Chat contextual information.
Description:
1. Length: up to 40. Arranged in array from old to new by conversation time.
2. Message.Role: system, user, assistant. Optional.
Among them, the system role is optional. If it exists, it must be at the beginning of the list. User and assistant need to alternate, starting with a user question and ending with a user question. Content cannot be empty. An example of the order of roles: [system (optional) user assistant user assistant user...].

 * @method void setMessages(array $Messages) Set Chat contextual information.
Description:
1. Length: up to 40. Arranged in array from old to new by conversation time.
2. Message.Role: system, user, assistant. Optional.
Among them, the system role is optional. If it exists, it must be at the beginning of the list. User and assistant need to alternate, starting with a user question and ending with a user question. Content cannot be empty. An example of the order of roles: [system (optional) user assistant user assistant user...].

 * @method boolean getStream() Obtain Whether it is streaming output.
 * @method void setStream(boolean $Stream) Set Whether it is streaming output.
 * @method float getTemperature() Obtain Controls the randomness of the generated content. a relatively high value generates more diversified output.
 * @method void setTemperature(float $Temperature) Set Controls the randomness of the generated content. a relatively high value generates more diversified output.
 * @method integer getMaxTokens() Obtain Maximum number of generated tokens.
 * @method void setMaxTokens(integer $MaxTokens) Set Maximum number of generated tokens.
 * @method boolean getEnableSearch() Obtain 
 * @method void setEnableSearch(boolean $EnableSearch) Set 
 */
class ChatCompletionsRequest extends AbstractModel
{
    /**
     * @var string Model name.
     */
    public $Model;

    /**
     * @var array Chat contextual information.
Description:
1. Length: up to 40. Arranged in array from old to new by conversation time.
2. Message.Role: system, user, assistant. Optional.
Among them, the system role is optional. If it exists, it must be at the beginning of the list. User and assistant need to alternate, starting with a user question and ending with a user question. Content cannot be empty. An example of the order of roles: [system (optional) user assistant user assistant user...].

     */
    public $Messages;

    /**
     * @var boolean Whether it is streaming output.
     */
    public $Stream;

    /**
     * @var float Controls the randomness of the generated content. a relatively high value generates more diversified output.
     */
    public $Temperature;

    /**
     * @var integer Maximum number of generated tokens.
     */
    public $MaxTokens;

    /**
     * @var boolean 
     */
    public $EnableSearch;

    /**
     * @param string $Model Model name.
     * @param array $Messages Chat contextual information.
Description:
1. Length: up to 40. Arranged in array from old to new by conversation time.
2. Message.Role: system, user, assistant. Optional.
Among them, the system role is optional. If it exists, it must be at the beginning of the list. User and assistant need to alternate, starting with a user question and ending with a user question. Content cannot be empty. An example of the order of roles: [system (optional) user assistant user assistant user...].

     * @param boolean $Stream Whether it is streaming output.
     * @param float $Temperature Controls the randomness of the generated content. a relatively high value generates more diversified output.
     * @param integer $MaxTokens Maximum number of generated tokens.
     * @param boolean $EnableSearch 
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new Message();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("MaxTokens",$param) and $param["MaxTokens"] !== null) {
            $this->MaxTokens = $param["MaxTokens"];
        }

        if (array_key_exists("EnableSearch",$param) and $param["EnableSearch"] !== null) {
            $this->EnableSearch = $param["EnableSearch"];
        }
    }
}
