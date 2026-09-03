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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource instance
 *
 * @method string getId() Obtain <p>Instance ID</p>
 * @method void setId(string $Id) Set <p>Instance ID</p>
 * @method string getService() Obtain <p>Service name</p>
 * @method void setService(string $Service) Set <p>Service name</p>
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method boolean getIsReady() Obtain <p>Ready?</p>
 * @method void setIsReady(boolean $IsReady) Set <p>Ready?</p>
 */
class ResourceInstance extends AbstractModel
{
    /**
     * @var string <p>Instance ID</p>
     */
    public $Id;

    /**
     * @var string <p>Service name</p>
     */
    public $Service;

    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var boolean <p>Ready?</p>
     */
    public $IsReady;

    /**
     * @param string $Id <p>Instance ID</p>
     * @param string $Service <p>Service name</p>
     * @param string $Region <p>Region.</p>
     * @param boolean $IsReady <p>Ready?</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("IsReady",$param) and $param["IsReady"] !== null) {
            $this->IsReady = $param["IsReady"];
        }
    }
}
