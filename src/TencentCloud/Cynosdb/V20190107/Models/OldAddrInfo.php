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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database address
 *
 * @method string getVip() Obtain IP
 * @method void setVip(string $Vip) Set IP
 * @method integer getVport() Obtain Port
 * @method void setVport(integer $Vport) Set Port
 * @method string getReturnTime() Obtain Expect recycle time.
 * @method void setReturnTime(string $ReturnTime) Set Expect recycle time.
 */
class OldAddrInfo extends AbstractModel
{
    /**
     * @var string IP
     */
    public $Vip;

    /**
     * @var integer Port
     */
    public $Vport;

    /**
     * @var string Expect recycle time.
     */
    public $ReturnTime;

    /**
     * @param string $Vip IP
     * @param integer $Vport Port
     * @param string $ReturnTime Expect recycle time.
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("ReturnTime",$param) and $param["ReturnTime"] !== null) {
            $this->ReturnTime = $param["ReturnTime"];
        }
    }
}
