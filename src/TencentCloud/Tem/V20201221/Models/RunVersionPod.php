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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pod
 *
 * @method string getWebshell() Obtain Shell address
 * @method void setWebshell(string $Webshell) Set Shell address
 * @method string getPodId() Obtain Pod ID
 * @method void setPodId(string $PodId) Set Pod ID
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getPodIp() Obtain Pod IP
 * @method void setPodIp(string $PodIp) Set Pod IP
 */
class RunVersionPod extends AbstractModel
{
    /**
     * @var string Shell address
     */
    public $Webshell;

    /**
     * @var string Pod ID
     */
    public $PodId;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Pod IP
     */
    public $PodIp;

    /**
     * @param string $Webshell Shell address
     * @param string $PodId Pod ID
     * @param string $Status Status
     * @param string $CreateTime Creation time
     * @param string $PodIp Pod IP
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
        if (array_key_exists("Webshell",$param) and $param["Webshell"] !== null) {
            $this->Webshell = $param["Webshell"];
        }

        if (array_key_exists("PodId",$param) and $param["PodId"] !== null) {
            $this->PodId = $param["PodId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }
    }
}
