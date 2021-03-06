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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource list
 *
 * @method string getResourceType() Obtain Resource type
 * @method void setResourceType(string $ResourceType) Set Resource type
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getCreateTime() Obtain Resource creation time
 * @method void setCreateTime(string $CreateTime) Set Resource creation time
 * @method string getResourceRegion() Obtain Resource region
 * @method void setResourceRegion(string $ResourceRegion) Set Resource region
 * @method string getResourceAlias() Obtain Resource alias
 * @method void setResourceAlias(string $ResourceAlias) Set Resource alias
 * @method boolean getIsDeleted() Obtain Whether the resource is deleted
 * @method void setIsDeleted(boolean $IsDeleted) Set Whether the resource is deleted
 */
class Resources extends AbstractModel
{
    /**
     * @var string Resource type
     */
    public $ResourceType;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Resource creation time
     */
    public $CreateTime;

    /**
     * @var string Resource region
     */
    public $ResourceRegion;

    /**
     * @var string Resource alias
     */
    public $ResourceAlias;

    /**
     * @var boolean Whether the resource is deleted
     */
    public $IsDeleted;

    /**
     * @param string $ResourceType Resource type
     * @param string $ResourceId Resource ID
     * @param string $CreateTime Resource creation time
     * @param string $ResourceRegion Resource region
     * @param string $ResourceAlias Resource alias
     * @param boolean $IsDeleted Whether the resource is deleted
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceAlias",$param) and $param["ResourceAlias"] !== null) {
            $this->ResourceAlias = $param["ResourceAlias"];
        }

        if (array_key_exists("IsDeleted",$param) and $param["IsDeleted"] !== null) {
            $this->IsDeleted = $param["IsDeleted"];
        }
    }
}
