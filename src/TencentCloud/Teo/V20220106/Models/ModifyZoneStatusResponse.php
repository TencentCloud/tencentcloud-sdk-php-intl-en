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
 * ModifyZoneStatus response structure.
 *
 * @method string getId() Obtain Site ID
 * @method void setId(string $Id) Set Site ID
 * @method string getName() Obtain Site name
 * @method void setName(string $Name) Set Site name
 * @method boolean getPaused() Obtain Site status.
- `false`: Enable the site.
- `true`: Disable the site.
 * @method void setPaused(boolean $Paused) Set Site status.
- `false`: Enable the site.
- `true`: Disable the site.
 * @method string getModifiedOn() Obtain Update time
 * @method void setModifiedOn(string $ModifiedOn) Set Update time
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ModifyZoneStatusResponse extends AbstractModel
{
    /**
     * @var string Site ID
     */
    public $Id;

    /**
     * @var string Site name
     */
    public $Name;

    /**
     * @var boolean Site status.
- `false`: Enable the site.
- `true`: Disable the site.
     */
    public $Paused;

    /**
     * @var string Update time
     */
    public $ModifiedOn;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Id Site ID
     * @param string $Name Site name
     * @param boolean $Paused Site status.
- `false`: Enable the site.
- `true`: Disable the site.
     * @param string $ModifiedOn Update time
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Paused",$param) and $param["Paused"] !== null) {
            $this->Paused = $param["Paused"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
