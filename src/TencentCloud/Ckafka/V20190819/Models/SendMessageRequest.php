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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendMessage request structure.
 *
 * @method string getDataHubId() Obtain Datahub access ID.
 * @method void setDataHubId(string $DataHubId) Set Datahub access ID.
 * @method array getMessage() Obtain Message content that is sent.
 * @method void setMessage(array $Message) Set Message content that is sent.
 */
class SendMessageRequest extends AbstractModel
{
    /**
     * @var string Datahub access ID.
     */
    public $DataHubId;

    /**
     * @var array Message content that is sent.
     */
    public $Message;

    /**
     * @param string $DataHubId Datahub access ID.
     * @param array $Message Message content that is sent.
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
