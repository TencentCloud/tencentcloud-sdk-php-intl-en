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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The list of historical messages.
 *
 * @method integer getTimestamp() Obtain The message timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimestamp(integer $Timestamp) Set The message timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFromAccount() Obtain The sender.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFromAccount(string $FromAccount) Set The sender.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSeq() Obtain The message sequence, which is unique across a class. The earlier a message is sent, the lower the sequence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSeq(integer $Seq) Set The message sequence, which is unique across a class. The earlier a message is sent, the lower the sequence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMessageBody() Obtain The message content.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessageBody(array $MessageBody) Set The message content.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MessageList extends AbstractModel
{
    /**
     * @var integer The message timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Timestamp;

    /**
     * @var string The sender.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FromAccount;

    /**
     * @var integer The message sequence, which is unique across a class. The earlier a message is sent, the lower the sequence.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Seq;

    /**
     * @var array The message content.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MessageBody;

    /**
     * @param integer $Timestamp The message timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FromAccount The sender.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Seq The message sequence, which is unique across a class. The earlier a message is sent, the lower the sequence.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $MessageBody The message content.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("FromAccount",$param) and $param["FromAccount"] !== null) {
            $this->FromAccount = $param["FromAccount"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("MessageBody",$param) and $param["MessageBody"] !== null) {
            $this->MessageBody = [];
            foreach ($param["MessageBody"] as $key => $value){
                $obj = new MessageItem();
                $obj->deserialize($value);
                array_push($this->MessageBody, $obj);
            }
        }
    }
}
