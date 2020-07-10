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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Playback error code information
 *
 * @method string getHttpStatus() Obtain Playback HTTP status code.
 * @method void setHttpStatus(string $HttpStatus) Set Playback HTTP status code.
 * @method integer getNum() Obtain Quantity.
 * @method void setNum(integer $Num) Set Quantity.
 */
class HttpStatusInfo extends AbstractModel
{
    /**
     * @var string Playback HTTP status code.
     */
    public $HttpStatus;

    /**
     * @var integer Quantity.
     */
    public $Num;

    /**
     * @param string $HttpStatus Playback HTTP status code.
     * @param integer $Num Quantity.
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
        if (array_key_exists("HttpStatus",$param) and $param["HttpStatus"] !== null) {
            $this->HttpStatus = $param["HttpStatus"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
