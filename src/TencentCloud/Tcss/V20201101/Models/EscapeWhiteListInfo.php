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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Escape allowlist
 *
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method integer getID() Obtain Allowed item ID
 * @method void setID(integer $ID) Set Allowed item ID
 * @method integer getHostCount() Obtain Number of associated servers
 * @method void setHostCount(integer $HostCount) Set Number of associated servers
 * @method integer getContainerCount() Obtain Number of associated containers
 * @method void setContainerCount(integer $ContainerCount) Set Number of associated containers
 * @method array getEventType() Obtain Allowed event type
 * @method void setEventType(array $EventType) Set Allowed event type
 * @method string getInsertTime() Obtain Creation time
 * @method void setInsertTime(string $InsertTime) Set Creation time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method integer getImageSize() Obtain Image size
 * @method void setImageSize(integer $ImageSize) Set Image size
 */
class EscapeWhiteListInfo extends AbstractModel
{
    /**
     * @var string Image ID
     */
    public $ImageID;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var integer Allowed item ID
     */
    public $ID;

    /**
     * @var integer Number of associated servers
     */
    public $HostCount;

    /**
     * @var integer Number of associated containers
     */
    public $ContainerCount;

    /**
     * @var array Allowed event type
     */
    public $EventType;

    /**
     * @var string Creation time
     */
    public $InsertTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var integer Image size
     */
    public $ImageSize;

    /**
     * @param string $ImageID Image ID
     * @param string $ImageName Image name
     * @param integer $ID Allowed item ID
     * @param integer $HostCount Number of associated servers
     * @param integer $ContainerCount Number of associated containers
     * @param array $EventType Allowed event type
     * @param string $InsertTime Creation time
     * @param string $UpdateTime Update time
     * @param integer $ImageSize Image size
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
        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }
    }
}
