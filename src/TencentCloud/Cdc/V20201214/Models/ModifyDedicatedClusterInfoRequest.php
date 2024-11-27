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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDedicatedClusterInfo request structure.
 *
 * @method string getDedicatedClusterId() Obtain CDC ID
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set CDC ID
 * @method string getName() Obtain New cluster name
 * @method void setName(string $Name) Set New cluster name
 * @method string getZone() Obtain New cluster AZ
 * @method void setZone(string $Zone) Set New cluster AZ
 * @method string getDescription() Obtain New cluster description
 * @method void setDescription(string $Description) Set New cluster description
 * @method string getSiteId() Obtain Site where the cluster resides
 * @method void setSiteId(string $SiteId) Set Site where the cluster resides
 */
class ModifyDedicatedClusterInfoRequest extends AbstractModel
{
    /**
     * @var string CDC ID
     */
    public $DedicatedClusterId;

    /**
     * @var string New cluster name
     */
    public $Name;

    /**
     * @var string New cluster AZ
     */
    public $Zone;

    /**
     * @var string New cluster description
     */
    public $Description;

    /**
     * @var string Site where the cluster resides
     */
    public $SiteId;

    /**
     * @param string $DedicatedClusterId CDC ID
     * @param string $Name New cluster name
     * @param string $Zone New cluster AZ
     * @param string $Description New cluster description
     * @param string $SiteId Site where the cluster resides
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
        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }
    }
}
