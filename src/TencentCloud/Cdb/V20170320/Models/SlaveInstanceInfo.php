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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slave server information
 *
 * @method integer getVport() Obtain Port number
 * @method void setVport(integer $Vport) Set Port number
 * @method string getRegion() Obtain Region information
 * @method void setRegion(string $Region) Set Region information
 * @method string getVip() Obtain Virtual IP information
 * @method void setVip(string $Vip) Set Virtual IP information
 * @method string getZone() Obtain AZ information
 * @method void setZone(string $Zone) Set AZ information
 */
class SlaveInstanceInfo extends AbstractModel
{
    /**
     * @var integer Port number
     */
    public $Vport;

    /**
     * @var string Region information
     */
    public $Region;

    /**
     * @var string Virtual IP information
     */
    public $Vip;

    /**
     * @var string AZ information
     */
    public $Zone;

    /**
     * @param integer $Vport Port number
     * @param string $Region Region information
     * @param string $Vip Virtual IP information
     * @param string $Zone AZ information
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
        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
