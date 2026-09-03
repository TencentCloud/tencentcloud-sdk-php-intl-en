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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Exposed port information.
 *
 * @method boolean getEnable() Obtain 
 * @method void setEnable(boolean $Enable) Set 
 * @method string getVpcId() Obtain 
 * @method void setVpcId(string $VpcId) Set 
 * @method string getClbId() Obtain 
 * @method void setClbId(string $ClbId) Set 
 * @method string getClbHost() Obtain 
 * @method void setClbHost(string $ClbHost) Set 
 */
class ExposePortConfig extends AbstractModel
{
    /**
     * @var boolean 
     */
    public $Enable;

    /**
     * @var string 
     */
    public $VpcId;

    /**
     * @var string 
     */
    public $ClbId;

    /**
     * @var string 
     */
    public $ClbHost;

    /**
     * @param boolean $Enable 
     * @param string $VpcId 
     * @param string $ClbId 
     * @param string $ClbHost 
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ClbId",$param) and $param["ClbId"] !== null) {
            $this->ClbId = $param["ClbId"];
        }

        if (array_key_exists("ClbHost",$param) and $param["ClbHost"] !== null) {
            $this->ClbHost = $param["ClbHost"];
        }
    }
}
