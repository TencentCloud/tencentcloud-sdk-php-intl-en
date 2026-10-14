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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Create the RTP configuration for the output of a media transmission stream.
 *
 * @method array getDestinations() Obtain Destination address. You can enter 1 to 2 addresses.
 * @method void setDestinations(array $Destinations) Set Destination address. You can enter 1 to 2 addresses.
 * @method string getFEC() Obtain Can only be filled in with none.
 * @method void setFEC(string $FEC) Set Can only be filled in with none.
 * @method integer getIdleTimeout() Obtain Idle timeout period, in milliseconds.
 * @method void setIdleTimeout(integer $IdleTimeout) Set Idle timeout period, in milliseconds.
 */
class CreateOutputInfoRTPSettings extends AbstractModel
{
    /**
     * @var array Destination address. You can enter 1 to 2 addresses.
     */
    public $Destinations;

    /**
     * @var string Can only be filled in with none.
     */
    public $FEC;

    /**
     * @var integer Idle timeout period, in milliseconds.
     */
    public $IdleTimeout;

    /**
     * @param array $Destinations Destination address. You can enter 1 to 2 addresses.
     * @param string $FEC Can only be filled in with none.
     * @param integer $IdleTimeout Idle timeout period, in milliseconds.
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
