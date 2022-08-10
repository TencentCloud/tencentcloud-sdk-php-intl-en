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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS protection level
 *
 * @method string getAiStatus() Obtain This field is not supported. Value: `off`.
 * @method void setAiStatus(string $AiStatus) Set This field is not supported. Value: `off`.
 * @method string getAppid() Obtain User appid
 * @method void setAppid(string $Appid) Set User appid
 * @method string getPlyLevel() Obtain Protection level. Values: `low`, `middle`, and `high`.
 * @method void setPlyLevel(string $PlyLevel) Set Protection level. Values: `low`, `middle`, and `high`.
 */
class DDoSStatusInfo extends AbstractModel
{
    /**
     * @var string This field is not supported. Value: `off`.
     */
    public $AiStatus;

    /**
     * @var string User appid
     */
    public $Appid;

    /**
     * @var string Protection level. Values: `low`, `middle`, and `high`.
     */
    public $PlyLevel;

    /**
     * @param string $AiStatus This field is not supported. Value: `off`.
     * @param string $Appid User appid
     * @param string $PlyLevel Protection level. Values: `low`, `middle`, and `high`.
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
        if (array_key_exists("AiStatus",$param) and $param["AiStatus"] !== null) {
            $this->AiStatus = $param["AiStatus"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("PlyLevel",$param) and $param["PlyLevel"] !== null) {
            $this->PlyLevel = $param["PlyLevel"];
        }
    }
}
