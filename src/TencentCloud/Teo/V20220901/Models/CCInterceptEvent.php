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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CC block event
 *
 * @method string getClientIp() Obtain The client IP.
 * @method void setClientIp(string $ClientIp) Set The client IP.
 * @method integer getInterceptNum() Obtain The requests per minute that are blocked.
 * @method void setInterceptNum(integer $InterceptNum) Set The requests per minute that are blocked.
 * @method integer getInterceptTime() Obtain Block time in seconds.
 * @method void setInterceptTime(integer $InterceptTime) Set Block time in seconds.
 */
class CCInterceptEvent extends AbstractModel
{
    /**
     * @var string The client IP.
     */
    public $ClientIp;

    /**
     * @var integer The requests per minute that are blocked.
     */
    public $InterceptNum;

    /**
     * @var integer Block time in seconds.
     */
    public $InterceptTime;

    /**
     * @param string $ClientIp The client IP.
     * @param integer $InterceptNum The requests per minute that are blocked.
     * @param integer $InterceptTime Block time in seconds.
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("InterceptNum",$param) and $param["InterceptNum"] !== null) {
            $this->InterceptNum = $param["InterceptNum"];
        }

        if (array_key_exists("InterceptTime",$param) and $param["InterceptTime"] !== null) {
            $this->InterceptTime = $param["InterceptTime"];
        }
    }
}
