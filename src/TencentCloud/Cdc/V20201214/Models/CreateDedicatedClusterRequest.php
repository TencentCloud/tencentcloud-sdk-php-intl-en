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
 * CreateDedicatedCluster request structure.
 *
 * @method string getSiteId() Obtain SiteId to which the CDC belongs
 * @method void setSiteId(string $SiteId) Set SiteId to which the CDC belongs
 * @method string getName() Obtain CDC name
 * @method void setName(string $Name) Set CDC name
 * @method string getZone() Obtain AZ to which the CDC belongs
 * @method void setZone(string $Zone) Set AZ to which the CDC belongs
 * @method string getDescription() Obtain CDC description
 * @method void setDescription(string $Description) Set CDC description
 */
class CreateDedicatedClusterRequest extends AbstractModel
{
    /**
     * @var string SiteId to which the CDC belongs
     */
    public $SiteId;

    /**
     * @var string CDC name
     */
    public $Name;

    /**
     * @var string AZ to which the CDC belongs
     */
    public $Zone;

    /**
     * @var string CDC description
     */
    public $Description;

    /**
     * @param string $SiteId SiteId to which the CDC belongs
     * @param string $Name CDC name
     * @param string $Zone AZ to which the CDC belongs
     * @param string $Description CDC description
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
        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
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
    }
}
