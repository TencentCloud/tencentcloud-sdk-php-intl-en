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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RTP configuration of the created MediaConnect flow output.
 *
 * @method CreateOutputRTPSettingsDestinations getDestinations() Obtain Push destination address. You can enter one or two addresses.
 * @method void setDestinations(CreateOutputRTPSettingsDestinations $Destinations) Set Push destination address. You can enter one or two addresses.
 * @method string getFEC() Obtain Only `none` can be entered.
 * @method void setFEC(string $FEC) Set Only `none` can be entered.
 * @method integer getIdleTimeout() Obtain Idle timeout period.
 * @method void setIdleTimeout(integer $IdleTimeout) Set Idle timeout period.
 */
class CreateOutputRTPSettings extends AbstractModel
{
    /**
     * @var CreateOutputRTPSettingsDestinations Push destination address. You can enter one or two addresses.
     */
    public $Destinations;

    /**
     * @var string Only `none` can be entered.
     */
    public $FEC;

    /**
     * @var integer Idle timeout period.
     */
    public $IdleTimeout;

    /**
     * @param CreateOutputRTPSettingsDestinations $Destinations Push destination address. You can enter one or two addresses.
     * @param string $FEC Only `none` can be entered.
     * @param integer $IdleTimeout Idle timeout period.
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
        if (array_key_exists("Destinations",$param) and $param["Destinations"] !== null) {
            $this->Destinations = new CreateOutputRTPSettingsDestinations();
            $this->Destinations->deserialize($param["Destinations"]);
        }

        if (array_key_exists("FEC",$param) and $param["FEC"] !== null) {
            $this->FEC = $param["FEC"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }
    }
}
