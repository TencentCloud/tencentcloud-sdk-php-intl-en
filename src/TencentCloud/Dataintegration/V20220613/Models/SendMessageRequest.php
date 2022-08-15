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
namespace TencentCloud\Dataintegration\V20220613\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendMessage request structure.
 *
 * @method string getDataHubId() Obtain ID of the integrated resource
 * @method void setDataHubId(string $DataHubId) Set ID of the integrated resource
 * @method array getMessage() Obtain A batch of messages
 * @method void setMessage(array $Message) Set A batch of messages
 */
class SendMessageRequest extends AbstractModel
{
    /**
     * @var string ID of the integrated resource
     */
    public $DataHubId;

    /**
     * @var array A batch of messages
     */
    public $Message;

    /**
     * @param string $DataHubId ID of the integrated resource
     * @param array $Message A batch of messages
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
        if (array_key_exists("DataHubId",$param) and $param["DataHubId"] !== null) {
            $this->DataHubId = $param["DataHubId"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = [];
            foreach ($param["Message"] as $key => $value){
                $obj = new BatchContent();
                $obj->deserialize($value);
                array_push($this->Message, $obj);
            }
        }
    }
}
