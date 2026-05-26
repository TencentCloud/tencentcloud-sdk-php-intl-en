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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getTimeBeginMs() Obtain 
 * @method void setTimeBeginMs(integer $TimeBeginMs) Set 
 * @method integer getTimeEndMs() Obtain 
 * @method void setTimeEndMs(integer $TimeEndMs) Set 
 * @method integer getTextBegin() Obtain 
 * @method void setTextBegin(integer $TextBegin) Set 
 * @method integer getTextEnd() Obtain 
 * @method void setTextEnd(integer $TextEnd) Set 
 */
class AlignmentItem extends AbstractModel
{
    /**
     * @var integer 
     */
    public $TimeBeginMs;

    /**
     * @var integer 
     */
    public $TimeEndMs;

    /**
     * @var integer 
     */
    public $TextBegin;

    /**
     * @var integer 
     */
    public $TextEnd;

    /**
     * @param integer $TimeBeginMs 
     * @param integer $TimeEndMs 
     * @param integer $TextBegin 
     * @param integer $TextEnd 
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
        if (array_key_exists("TimeBeginMs",$param) and $param["TimeBeginMs"] !== null) {
            $this->TimeBeginMs = $param["TimeBeginMs"];
        }

        if (array_key_exists("TimeEndMs",$param) and $param["TimeEndMs"] !== null) {
            $this->TimeEndMs = $param["TimeEndMs"];
        }

        if (array_key_exists("TextBegin",$param) and $param["TextBegin"] !== null) {
            $this->TextBegin = $param["TextBegin"];
        }

        if (array_key_exists("TextEnd",$param) and $param["TextEnd"] !== null) {
            $this->TextEnd = $param["TextEnd"];
        }
    }
}
