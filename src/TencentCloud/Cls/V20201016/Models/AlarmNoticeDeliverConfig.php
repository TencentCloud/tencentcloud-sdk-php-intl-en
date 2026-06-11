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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log shipping configuration information of a notification channel.
 *
 * @method DeliverConfig getDeliverConfig() Obtain Log shipping configuration information of a notification channel.
 * @method void setDeliverConfig(DeliverConfig $DeliverConfig) Set Log shipping configuration information of a notification channel.
 * @method string getErrMsg() Obtain Shipping failure reason.
 * @method void setErrMsg(string $ErrMsg) Set Shipping failure reason.
 */
class AlarmNoticeDeliverConfig extends AbstractModel
{
    /**
     * @var DeliverConfig Log shipping configuration information of a notification channel.
     */
    public $DeliverConfig;

    /**
     * @var string Shipping failure reason.
     */
    public $ErrMsg;

    /**
     * @param DeliverConfig $DeliverConfig Log shipping configuration information of a notification channel.
     * @param string $ErrMsg Shipping failure reason.
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
        if (array_key_exists("DeliverConfig",$param) and $param["DeliverConfig"] !== null) {
            $this->DeliverConfig = new DeliverConfig();
            $this->DeliverConfig->deserialize($param["DeliverConfig"]);
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
