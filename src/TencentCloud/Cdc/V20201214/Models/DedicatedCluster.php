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
 * CDC list
 *
 * @method string getDedicatedClusterId() Obtain CDC id, e.g., cluster-xxxxx.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set CDC id, e.g., cluster-xxxxx.
 * @method string getZone() Obtain Name of AZ to which the CDC belongs
 * @method void setZone(string $Zone) Set Name of AZ to which the CDC belongs
 * @method string getDescription() Obtain CDC description 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setDescription(string $Description) Set CDC description 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getName() Obtain CDC name
 * @method void setName(string $Name) Set CDC name
 * @method string getLifecycleStatus() Obtain Life cycle of the CDC, e.g., PENDING.
 * @method void setLifecycleStatus(string $LifecycleStatus) Set Life cycle of the CDC, e.g., PENDING.
 * @method string getCreateTime() Obtain Creation time of the CDC
 * @method void setCreateTime(string $CreateTime) Set Creation time of the CDC
 * @method string getSiteId() Obtain Site id to which the CDC belongs
 * @method void setSiteId(string $SiteId) Set Site id to which the CDC belongs
 */
class DedicatedCluster extends AbstractModel
{
    /**
     * @var string CDC id, e.g., cluster-xxxxx.
     */
    public $DedicatedClusterId;

    /**
     * @var string Name of AZ to which the CDC belongs
     */
    public $Zone;

    /**
     * @var string CDC description 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $Description;

    /**
     * @var string CDC name
     */
    public $Name;

    /**
     * @var string Life cycle of the CDC, e.g., PENDING.
     */
    public $LifecycleStatus;

    /**
     * @var string Creation time of the CDC
     */
    public $CreateTime;

    /**
     * @var string Site id to which the CDC belongs
     */
    public $SiteId;

    /**
     * @param string $DedicatedClusterId CDC id, e.g., cluster-xxxxx.
     * @param string $Zone Name of AZ to which the CDC belongs
     * @param string $Description CDC description 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $Name CDC name
     * @param string $LifecycleStatus Life cycle of the CDC, e.g., PENDING.
     * @param string $CreateTime Creation time of the CDC
     * @param string $SiteId Site id to which the CDC belongs
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LifecycleStatus",$param) and $param["LifecycleStatus"] !== null) {
            $this->LifecycleStatus = $param["LifecycleStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }
    }
}
