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
 * CreateSubAppId request structure.
 *
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getMode() Obtain 
 * @method void setMode(string $Mode) Set 
 * @method string getStorageRegion() Obtain 
 * @method void setStorageRegion(string $StorageRegion) Set 
 * @method array getTags() Obtain 
 * @method void setTags(array $Tags) Set 
 */
class CreateSubAppIdRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $Mode;

    /**
     * @var string 
     */
    public $StorageRegion;

    /**
     * @var array 
     */
    public $Tags;

    /**
     * @param string $Name 
     * @param string $Description 
     * @param string $Type 
     * @param string $Mode 
     * @param string $StorageRegion 
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
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
