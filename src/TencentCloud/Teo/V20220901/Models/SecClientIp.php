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
 * Client IP information
 *
 * @method string getClientIp() Obtain IP of the client.
 * @method void setClientIp(string $ClientIp) Set IP of the client.
 * @method integer getRequestMaxQps() Obtain Maximum QPS.
 * @method void setRequestMaxQps(integer $RequestMaxQps) Set Maximum QPS.
 * @method integer getRequestNum() Obtain Number of requests.
 * @method void setRequestNum(integer $RequestNum) Set Number of requests.
 */
class SecClientIp extends AbstractModel
{
    /**
     * @var string IP of the client.
     */
    public $ClientIp;

    /**
     * @var integer Maximum QPS.
     */
    public $RequestMaxQps;

    /**
     * @var integer Number of requests.
     */
    public $RequestNum;

    /**
     * @param string $ClientIp IP of the client.
     * @param integer $RequestMaxQps Maximum QPS.
     * @param integer $RequestNum Number of requests.
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

        if (array_key_exists("RequestMaxQps",$param) and $param["RequestMaxQps"] !== null) {
            $this->RequestMaxQps = $param["RequestMaxQps"];
        }

        if (array_key_exists("RequestNum",$param) and $param["RequestNum"] !== null) {
            $this->RequestNum = $param["RequestNum"];
        }
    }
}
