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
 * QueryRewrite request structure.
 *
 * @method array getMessages() Obtain The multi-round historical conversation that needs to be rewritten. Each round of historical conversation should include paired inputs of user (question) and assistant (answer). Due to the character limit of the model, a maximum of 4 rounds of conversations can be provided. The last round of conversation will be rewritten.
 * @method void setMessages(array $Messages) Set The multi-round historical conversation that needs to be rewritten. Each round of historical conversation should include paired inputs of user (question) and assistant (answer). Due to the character limit of the model, a maximum of 4 rounds of conversations can be provided. The last round of conversation will be rewritten.
 * @method string getModel() Obtain Model name.
 * @method void setModel(string $Model) Set Model name.
 */
class QueryRewriteRequest extends AbstractModel
{
    /**
     * @var array The multi-round historical conversation that needs to be rewritten. Each round of historical conversation should include paired inputs of user (question) and assistant (answer). Due to the character limit of the model, a maximum of 4 rounds of conversations can be provided. The last round of conversation will be rewritten.
     */
    public $Messages;

    /**
     * @var string Model name.
     */
    public $Model;

    /**
     * @param array $Messages The multi-round historical conversation that needs to be rewritten. Each round of historical conversation should include paired inputs of user (question) and assistant (answer). Due to the character limit of the model, a maximum of 4 rounds of conversations can be provided. The last round of conversation will be rewritten.
     * @param string $Model Model name.
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
        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new Message();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
