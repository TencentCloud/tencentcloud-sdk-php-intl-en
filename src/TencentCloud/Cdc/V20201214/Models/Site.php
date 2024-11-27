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
 * Customer site information
 *
 * @method string getName() Obtain Site name
 * @method void setName(string $Name) Set Site name
 * @method string getSiteId() Obtain Site id
 * @method void setSiteId(string $SiteId) Set Site id
 * @method string getDescription() Obtain Site description 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setDescription(string $Description) Set Site description 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getCreateTime() Obtain Site creation time
 * @method void setCreateTime(string $CreateTime) Set Site creation time
 */
class Site extends AbstractModel
{
    /**
     * @var string Site name
     */
    public $Name;

    /**
     * @var string Site id
     */
    public $SiteId;

    /**
     * @var string Site description 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $Description;

    /**
     * @var string Site creation time
     */
    public $CreateTime;

    /**
     * @param string $Name Site name
     * @param string $SiteId Site id
     * @param string $Description Site description 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $CreateTime Site creation time
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

        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
