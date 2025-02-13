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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Speech-to-text information
 *
 * @method string getUser() Obtain User side.
 * @method void setUser(string $User) Set User side.
 * @method string getMessage() Obtain Message content.
 * @method void setMessage(string $Message) Set Message content.
 * @method integer getTimestamp() Obtain Timestamp.
 * @method void setTimestamp(integer $Timestamp) Set Timestamp.
 * @method integer getStart() Obtain Sentence start time, unix millisecond timestamp.
 * @method void setStart(integer $Start) Set Sentence start time, unix millisecond timestamp.
 * @method integer getEnd() Obtain Sentence end time, unix millisecond timestamp.
 * @method void setEnd(integer $End) Set Sentence end time, unix millisecond timestamp.
 */
class AsrData extends AbstractModel
{
    /**
     * @var string User side.
     */
    public $User;

    /**
     * @var string Message content.
     */
    public $Message;

    /**
     * @var integer Timestamp.
     * @deprecated
     */
    public $Timestamp;

    /**
     * @var integer Sentence start time, unix millisecond timestamp.
     */
    public $Start;

    /**
     * @var integer Sentence end time, unix millisecond timestamp.
     */
    public $End;

    /**
     * @param string $User User side.
     * @param string $Message Message content.
     * @param integer $Timestamp Timestamp.
     * @param integer $Start Sentence start time, unix millisecond timestamp.
     * @param integer $End Sentence end time, unix millisecond timestamp.
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
        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
