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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of allowed endpoint services
 *
 * @method integer getOwner() Obtain APP ID
 * @method void setOwner(integer $Owner) Set APP ID
 * @method string getUserUin() Obtain User UIN
 * @method void setUserUin(string $UserUin) Set User UIN
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getEndPointServiceId() Obtain Endpoint service ID
 * @method void setEndPointServiceId(string $EndPointServiceId) Set Endpoint service ID
 */
class VpcEndPointServiceUser extends AbstractModel
{
    /**
     * @var integer APP ID
     */
    public $Owner;

    /**
     * @var string User UIN
     */
    public $UserUin;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Endpoint service ID
     */
    public $EndPointServiceId;

    /**
     * @param integer $Owner APP ID
     * @param string $UserUin User UIN
     * @param string $Description Description
     * @param string $CreateTime Creation time
     * @param string $EndPointServiceId Endpoint service ID
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
        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }
    }
}
