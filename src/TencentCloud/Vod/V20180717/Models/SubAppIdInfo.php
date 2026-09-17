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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getSubAppIdName() Obtain 
 * @method void setSubAppIdName(string $SubAppIdName) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getMode() Obtain 
 * @method void setMode(string $Mode) Set 
 * @method array getStorageRegions() Obtain 
 * @method void setStorageRegions(array $StorageRegions) Set 
 * @method array getTags() Obtain 
 * @method void setTags(array $Tags) Set 
 */
class SubAppIdInfo extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $SubAppIdName;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Mode;

    /**
     * @var array 
     */
    public $StorageRegions;

    /**
     * @var array 
     */
    public $Tags;

    /**
     * @param integer $SubAppId 
     * @param string $SubAppIdName 
     * @param string $Description 
     * @param string $CreateTime 
     * @param string $Status 
     * @param string $Name 
     * @param string $Mode 
     * @param array $StorageRegions 
     * @param array $Tags 
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SubAppIdName",$param) and $param["SubAppIdName"] !== null) {
            $this->SubAppIdName = $param["SubAppIdName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("StorageRegions",$param) and $param["StorageRegions"] !== null) {
            $this->StorageRegions = $param["StorageRegions"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
