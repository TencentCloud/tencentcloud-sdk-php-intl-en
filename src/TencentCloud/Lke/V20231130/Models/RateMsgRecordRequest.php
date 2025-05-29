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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RateMsgRecord request structure.
 *
 * @method string getBotAppKey() Obtain Application appkey.
 * @method void setBotAppKey(string $BotAppKey) Set Application appkey.
 * @method string getRecordId() Obtain Message ID.
 * @method void setRecordId(string $RecordId) Set Message ID.
 * @method integer getScore() Obtain 1: like; 2: dislike.
 * @method void setScore(integer $Score) Set 1: like; 2: dislike.
 * @method array getReasons() Obtain Reason.
 * @method void setReasons(array $Reasons) Set Reason.
 */
class RateMsgRecordRequest extends AbstractModel
{
    /**
     * @var string Application appkey.
     */
    public $BotAppKey;

    /**
     * @var string Message ID.
     */
    public $RecordId;

    /**
     * @var integer 1: like; 2: dislike.
     */
    public $Score;

    /**
     * @var array Reason.
     */
    public $Reasons;

    /**
     * @param string $BotAppKey Application appkey.
     * @param string $RecordId Message ID.
     * @param integer $Score 1: like; 2: dislike.
     * @param array $Reasons Reason.
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
        if (array_key_exists("BotAppKey",$param) and $param["BotAppKey"] !== null) {
            $this->BotAppKey = $param["BotAppKey"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = $param["Reasons"];
        }
    }
}
