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
 * The RTP configuration of the output to create.
 *
 * @method array getDestinations() Obtain The relay destination addresses. One or two addresses are allowed.
 * @method void setDestinations(array $Destinations) Set The relay destination addresses. One or two addresses are allowed.
 * @method string getFEC() Obtain This parameter must be set to `none`.
 * @method void setFEC(string $FEC) Set This parameter must be set to `none`.
 * @method integer getIdleTimeout() Obtain The timeout period (ms).
 * @method void setIdleTimeout(integer $IdleTimeout) Set The timeout period (ms).
 */
class CreateOutputInfoRTPSettings extends AbstractModel
{
    /**
     * @var array The relay destination addresses. One or two addresses are allowed.
     */
    public $Destinations;

    /**
     * @var string This parameter must be set to `none`.
     */
    public $FEC;

    /**
     * @var integer The timeout period (ms).
     */
    public $IdleTimeout;

    /**
     * @param array $Destinations The relay destination addresses. One or two addresses are allowed.
     * @param string $FEC This parameter must be set to `none`.
     * @param integer $IdleTimeout The timeout period (ms).
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
            $this->Destinations = [];
            foreach ($param["Destinations"] as $key => $value){
                $obj = new CreateOutputRTPSettingsDestinations();
                $obj->deserialize($value);
                array_push($this->Destinations, $obj);
            }
        }

        if (array_key_exists("FEC",$param) and $param["FEC"] !== null) {
            $this->FEC = $param["FEC"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }
    }
}
